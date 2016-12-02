<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Courses;
use App\Semesters;
use Auth;
use DB;

class Schedule extends Model
{
    protected $fillable = [
        'user_id', 'lecture_id', 'tutorial_id', 'lab_id', 'course_id', 'semester_id'
    ];

    public $primaryKey = 'schedule_id';

    protected $table = 'schedule';

    public $timestamps = false;

    public static function removeCourse($user_id, $course_id)
    {
         $course = Schedule::where('user_id', $user_id)->where('course_id', $course_id);
         if($course->exists())
         {
         $course->delete();
         return true;
          }
          return false;
    }

    public static function getCourses($semester_id)
    {
        return Courses::join('lectures', 'courses.course_id', '=', 'lectures.course_id')
            ->join('courseProgram', 'courses.course_id', '=', 'courseProgram.course_id')
            ->join('programs', 'courseProgram.program_id', '=', 'programs.program_id')
            ->join('users', 'programs.program_id', '=', 'users.program_id')
            ->leftJoin('completedCourses', function ($join) {
                $join->on('courses.course_id', '=', 'completedCourses.course_id')
                     ->on('users.id', '=', 'completedCourses.user_id');
            })->leftJoin('schedule', function ($join) {
                $join->on('courses.course_id', '=', 'schedule.course_id')
                     ->on('users.id', '=', 'schedule.user_id');
            })->select('courses.*', 'courseProgram.course_type')
            ->whereNull('completedCourses.course_id')
            ->whereNull('schedule.user_id')
            ->where([
                ['programs.program_id', Auth::user()->program_id],
                ['users.id', Auth::user()->id],
                ['lectures.semester_id', $semester_id]
            ])->distinct()->get();
    }

    public static function addCourseToSchedule($request, $tutorial_id, $lab_id)
    {
        Schedule::create(
            [
                'user_id' => Auth::user()->id,
                'lecture_id' => $request->input('lecture_id'),
                'tutorial_id' => $tutorial_id,
                'lab_id' => $lab_id,
                'course_id' => $request->input('course_id'),
                'semester_id' => $request->input('semester_id')
            ]);
    }

    public static function getSemesterName($semester_id)
   {
        return Semesters::find($semester_id)->name;
   }

   public static function prerequisitesExists($course_id)
   {
        return Courses::find($course_id)->prerequisites()->exists();
   }

   public static function getPrerequisites($course_id)
   {
        return Courses::join('prerequisites', 'courses.course_id', '=', 'prerequisites.course_id')
                    ->leftjoin('orprerequisites', 'prerequisites.prereq_id', '=', 'orprerequisites.prereq_id')
                    ->whereNull('orprerequisites.orprereq_id')
                    ->where('courses.course_id', $course_id)
                    ->select('prerequisites.*')
                    ->get();
   }

   public static function getOrprerequisites($course_id)
   {
        return Courses::join('prerequisites', 'courses.course_id', '=', 'prerequisites.course_id')
                    ->leftjoin('orprerequisites', 'prerequisites.prereq_id', '=', 'orprerequisites.prereq_id')
                    ->whereNotNull('orprerequisites.orprereq_id')
                    ->where('courses.course_id', $course_id)
                    ->select('courses.course_id', 'prerequisites.prerequisite', 'orprerequisites.course_id as orprereq')
                    ->get();
   }

   public static function checkInCompletedCourses($prerequisite)
   {
        return DB::table('completedCourses')->where([
                    ['user_id', '=', Auth::user()->id],
                    ['course_id', '=', $prerequisite]
                ])->exists();
   }

   public static function checkInSchedule($prerequisite, $semester_id)
   {
        return Schedule::where([
                    ['user_id', '=', Auth::user()->id],
                    ['course_id', '=', $prerequisite],
                    ['semester_id', '=', $semester_id]
                ])->exists();
   }
}
