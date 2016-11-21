<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prerequisites extends Model
{
    public $primaryKey = 'prereq_id';

    public function course()
    {
    	return $this->belongsToMany('App\Courses', 'Prerequisites', 'course_id', 'prerequisite');
    }
}
