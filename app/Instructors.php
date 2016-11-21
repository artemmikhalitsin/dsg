<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instructors extends Model
{
	public $primaryKey = 'instructor_id';

	// lists all the lectures taught by a specific instructor
    public function lectures()
    {
    	return $this->hasMany('App\Lectures', 'instructor_id');
    }
}
