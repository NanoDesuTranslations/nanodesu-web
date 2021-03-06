<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectsTable extends Migration {

	public function up()
	{
		Schema::create('projects', function(Blueprint $table) {
			$table->increments('id');
			$table->string('slug')->unique();
			$table->string('title');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('projects');
	}
}