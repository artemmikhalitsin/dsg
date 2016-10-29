<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $fillable = [
    	'course_name', 'course_code', 'description', 'credits', 'instructor_id'
    ];
}
