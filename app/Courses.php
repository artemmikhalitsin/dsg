<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Auth;

class Courses extends Model
{

    public $primaryKey = 'course_id';

    protected $fillable = [
    	'course_name', 'course_code', 'description', 'credits', 'instructor_id'
    ];

    public function users()
    {
        return $this->belongsToMany('App\User', 'completedCourses', 'course_id', 'user_id');
    }

    public function program()
    {
        return $this->belongsToMany('App\Program', 'courseProgram', 'course_id', 'program_id')->withPivot('course_type');
    }

    public function lectures()
    {
        return $this->hasMany('App\Lectures', 'course_id');
    }

    public function prerequisites()
    {
        return $this->belongsToMany('App\Prerequisites', 'Prerequisites', 'course_id', 'prerequisite');
    }




    public static function getCoursePrerequisitesAvailibilities(){
      return Courses::join('prerequisites', 'prerequisites.course_id', '=', 'courses.course_id')
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
