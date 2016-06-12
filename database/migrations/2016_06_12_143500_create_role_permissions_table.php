<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRolePermissionsTable extends Migration {

	public function up()
	{
		Schema::create('role_permissions', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('role_id')->unsigned();
			$table->string('permission');
		});
	}

	public function down()
	{
		Schema::drop('role_permissions');
	}
}