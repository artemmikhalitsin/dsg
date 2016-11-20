<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
	public $primaryKey = 'program_id';

    public function users()
    {
    	return $this->hasMany('App\User');
    }
}
