<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePagesTable extends Migration {

	public function up()
	{
		Schema::create('pages', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('project_id')->unsigned();
			$table->integer('parent')->unsigned()->nullable();
			$table->integer('author')->unsigned();
			$table->string('title');
			$table->text('content');
			$table->string('type');
			$table->enum('status', array('draft', 'published', 'hidden', 'deleted'));
			$table->integer('number')->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('pages');
	}
}