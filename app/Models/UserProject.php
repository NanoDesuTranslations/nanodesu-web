<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserProject extends Model {

	protected $table = 'user_projects';
	public $timestamps = true;

	public function Role()
	{
		return $this->hasOne('User');
	}

	public function Project()
	{
		return $this->hasOne('Project');
	}

}