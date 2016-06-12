<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {

	protected $table = 'projects';
	public $timestamps = true;

	public function Pages()
	{
		return $this->hasMany('App\Models\Page');
	}

	public function Settings()
	{
		return $this->hasMany('App\Models\ProjectSetting');
	}

}