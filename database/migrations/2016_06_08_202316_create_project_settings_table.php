<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectSettingsTable extends Migration {

	public function up()
	{
		Schema::create('project_settings', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('project_id')->unsigned();
			$table->string('name');
			$table->string('value');
		});
	}

	public function down()
	{
		Schema::drop('project_settings');
	}
}