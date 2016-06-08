<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePageSettingsTable extends Migration {

	public function up()
	{
		Schema::create('page_settings', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('page_id')->unsigned();
			$table->string('name');
			$table->string('value');
		});
	}

	public function down()
	{
		Schema::drop('page_settings');
	}
}