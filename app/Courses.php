<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Auth;

use DB;

class Courses extends Model
{

    public $primaryKey = 'course_id';

    protected $fillable = [
    	'course_name', 'course_code', 'description', 'credits', 'instructor_id'
    ];

    // gets the list of users who have completed a specific course
    public function users()
    {
        return $this->belongsToMany('App\User', 'completedCourses', 'course_id', 'user_id');
    }

    // gets the list of programs in which a specific course is offered
    public function program()
    {
        return $this->belongsToMany('App\Program', 'courseProgram', 'course_id', 'program_id')->withPivot('course_type');
    }

    // gets the list of all the lectures of a specific course (including all semesters)
    public function lectures()
    {
        return $this->hasMany('App\Lectures', 'course_id');
    }

    // gets the list of all the prerequisites of a course
    public function prerequisites()
    {
        return $this->belongsToMany('App\Courses', 'Prerequisites', 'course_id', 'prerequisite')->withPivot('iscorequisite');
    }

    public static function getCoursePrerequisitesAvailibilities(){
      return Courses::join('prerequisites', 'prerequisites.course_id', '=', 'courses.course_id')
      ->join('corequisites', 'courses.course_id', '=', 'corequisites.course_id')
      ->select('courses.course_id', 'corequisites.corequisite', 'prerequisites.prerequisite')->get();
    }

    // gets the list of program courses (core) of the logged in user's program
    public static function getProgramCoursesList()
    {
    	return Courses::join('courseProgram', 'courses.course_id', '=', 'courseProgram.course_id')->select('courses.*', 'courseProgram.course_type')->where([
                ['courseProgram.program_id', Auth::user()->program_id],
                ['courseProgram.course_type', "program_course"],
            ])->get();
    }

    // gets the list of program electives of the logged in user's program
    public static function getProgramElectivesList()
    {
    	return Courses::join('courseProgram', 'courses.course_id', '=', 'courseProgram.course_id')->select('courses.*', 'courseProgram.course_type')->where([
                ['courseProgram.program_id', '2'],
                ['courseProgram.course_type', "program_elective"],
            ])->get();
    }

    // gets the list of courses to be completed for the logged in user
    public static function getOneProgramCoursesList()
    {
    	return Courses::join('courseProgram', 'courses.course_id', '=', 'courseProgram.course_id')
            ->join('programs', 'courseProgram.program_id', '=', 'programs.program_id')
            ->join('users', 'programs.program_id', '=', 'users.program_id')
            ->leftJoin('completedCourses', function ($join) {
                $join->on('courses.course_id', '=', 'completedCourses.course_id')
                     ->on('users.id', '=', 'completedCourses.user_id');
            })->select('courses.*', 'courseProgram.course_type')
            ->whereNull('completedCourses.course_id')
            ->where([
                ['programs.program_id', Auth::user()->program_id],
                ['users.id', Auth::user()->id]
            ])->get();
    }
}

?>
