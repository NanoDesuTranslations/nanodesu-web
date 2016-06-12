<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserProjectsTable extends Migration {

	public function up()
	{
		Schema::create('user_projects', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->integer('project_id')->unsigned();
			$table->integer('role_id')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('user_projects');
	}
}