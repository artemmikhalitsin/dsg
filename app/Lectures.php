<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lectures extends Model
{
	public $primaryKey = 'lecture_id';

    public function course()
    {
    	return $this->belongsTo('App\Courses', 'course_id', 'course_id');
    }

    public function instructor()
    {
    	return $this->belongsTo('App\Instructors', 'instructor_id', 'instructor_id');
    }

    public function semester()
    {
    	return $this->belongsTo('App\Semesters', 'semester_id', 'semester_id');
    }

    public function tutorials()
    {
    	return $this->hasMany('App\Tutorials', 'lecture_id');
    }

    public function labs()
    {
    	return $this->hasMany('App\Labs', 'lecture_id');
    }
}
