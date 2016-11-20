<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Auth;

class Courses extends Model
{
    protected $fillable = [
    	'course_name', 'course_code', 'description', 'credits', 'instructor_id'
    ];

    public static function getCoursePrerequisitesAvailibilities(){
      return Courses::join('prerequisites', 'prerequisites.course_id', '=', 'courses.course_id')
      //->join('courseProgram', 'courses.course_id', '=' , 'courseProgram.course_id')
      ->join('corequisites', 'courses.course_id', '=', 'corequisites.course_id')
      ->select('courses.course_id', 'corequisites.corequisite', 'prerequisites.prerequisite')->get();
    }

    public static function getProgramCoursesList()
    {
    	return Courses::join('courseProgram', 'courses.course_id', '=', 'courseProgram.course_id')->select('courses.*', 'courseProgram.course_type')->where([
                ['courseProgram.program_id', Auth::user()->program_id],
                ['courseProgram.course_type', "program_course"],
            ])->get();
    }

    public static function getProgramElectivesList()
    {
    	return Courses::join('courseProgram', 'courses.course_id', '=', 'courseProgram.course_id')->select('courses.*', 'courseProgram.course_type')->where([
                ['courseProgram.program_id', Auth::user()->program_id],
                ['courseProgram.course_type', "program_elective"],
            ])->get();
    }

    public static function getOneProgramCoursesList()
    {
    	return Courses::join('courseProgram', 'courses.course_id', '=', 'courseProgram.course_id')->select('courses.*', 'courseProgram.course_type')->where('courseProgram.program_id', Auth::user()->program_id)->get();
    }
}
