<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
	public $primaryKey = 'program_id';

	// lists all the users in a specific program
    public function users()
    {
    	return $this->hasMany('App\User');
    }

    // lists all the course in a specific program
    public function courses()
    {
        return $this->belongsToMany('App\Courses', 'courseProgram', 'program_id', 'course_id')->withPivot('course_type');
    }
}
