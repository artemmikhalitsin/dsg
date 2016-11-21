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

    public function courses()
    {
        return $this->belongsToMany('App\Courses', 'courseProgram', 'program_id', 'course_id')->withPivot('course_type');
    }
}
