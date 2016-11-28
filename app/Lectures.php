<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lectures extends Model
{
	public $primaryKey = 'lecture_id';

    // list the course to which a lecture belongs to
    public function course()
    {
    	return $this->belongsTo('App\Courses', 'course_id', 'course_id');
    }

    public function getCourse()
    {
	    return $this->course;
    }

    // lists the instructor info associated with a lecture
    public function instructor()
    {
    	return $this->belongsTo('App\Instructors', 'instructor_id', 'instructor_id');
    }

    // lists the semester in which a lecture is offered
    public function semester()
    {
    	return $this->belongsTo('App\Semesters', 'semester_id', 'semester_id');
    }

    // lists all the tutorials related to a lecture
    public function tutorials()
    {
    	return $this->hasMany('App\Tutorials', 'lecture_id');
    }

    // lists all the labs related to a lecture
    public function labs()
    {
    	return $this->hasMany('App\Labs', 'lecture_id');
    }
}
