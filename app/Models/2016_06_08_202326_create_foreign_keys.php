<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('pages', function(Blueprint $table) {
			$table->foreign('project_id')->references('id')->on('projects')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('pages', function(Blueprint $table) {
			$table->foreign('parent')->references('id')->on('pages')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('pages', function(Blueprint $table) {
			$table->foreign('author')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('page_settings', function(Blueprint $table) {
			$table->foreign('page_id')->references('id')->on('pages')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('project_settings', function(Blueprint $table) {
			$table->foreign('project_id')->references('id')->on('projects')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('pages', function(Blueprint $table) {
			$table->dropForeign('pages_project_id_foreign');
		});
		Schema::table('pages', function(Blueprint $table) {
			$table->dropForeign('pages_parent_foreign');
		});
		Schema::table('pages', function(Blueprint $table) {
			$table->dropForeign('pages_author_foreign');
		});
		Schema::table('page_settings', function(Blueprint $table) {
			$table->dropForeign('page_settings_page_id_foreign');
		});
		Schema::table('project_settings', function(Blueprint $table) {
			$table->dropForeign('project_settings_project_id_foreign');
		});
	}
}