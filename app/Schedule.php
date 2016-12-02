<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\AddCourseRequest;
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

     public static function removeAllCourse($user_id, $course_id)
     {
         Schedule::where('user_id', $user_id)->delete();
     }

     /**
     * add course to the schedule after validation
     * @param  AddCourseRequest $request [validates the request]
     * @return redirects the user to schedule view
     */
    public static function store(AddCourseRequest $request)
    {
         if(!Courses::checkConflict(Lectures::find($request->input('lecture_id'))))
         {
              return false;
         }
        // retrieving the data from the request
        $tutorial_id = $request->input('tutorial_id');
        $lab_id = $request->input('lab_id');
        $tutorialExists = $request->input('tutorialExists');
        $labExists = $request->input('labExists');
        $course_id = $request->input('course_id');
        $semester_id = $request->input('semester_id');

        // statement used to verify if the tutorial or lab fields have been left empty
        if (($tutorial_id != NULL && $tutorial_id == "") || ($lab_id != NULL and $lab_id == "")) {
            return false;
        }
        // statement assigning null value to tutorial and lab when a class doesn't have them
        else{
            if ($tutorial_id == "") {
                $tutorial_id = null;
            }
            else
            {
                 if(!Courses::checkConflict(Tutorials::find($tutorial_id)))
                 {
                      return false;
                 }
            }
            if ($lab_id == "") {
                $lab_id = null;
            }
            else {
                 if(!Courses::checkConflict(Labs::find($lab_id)))
                 {
                      return false;
                 }
            }
        }

        // boolean used to find out if any of the orprerequisites classes has been done by the user
        $orprereqSatisfied = false;

        // checking if the course to be added has prerequisites or no
        $coursePrerequisitesExist = Schedule::prerequisitesExists($course_id);

        // this statement will execute if the course has prerequisites
        if ($coursePrerequisitesExist) {
            // gets all the prerequisites of a course
            $coursePrerequisites = Schedule::getPrerequisites($course_id);

            // gets all the orprerequisites of a course
            $orprerequisites = Schedule::getOrprerequisites($course_id);

            // gets the semester name
            $semester_name = Schedule::getSemesterName($semester_id);

            // this statement executed when adding a course to Winter semester
            if ($semester_name == "Winter") {
                $semesters = Semesters::where('name', 'Fall')->get();

                // loop through the prerequisites to check if they are met or not
                foreach ($coursePrerequisites as $key => $prerequisite) {
                    $existsInCompletedCourses = Schedule::checkInCompletedCourses($prerequisite->prerequisite);
                    $existsInSchedule = Schedule::checkInSchedule($prerequisite->prerequisite, $semesters[0]->semester_id);

                    if (!$existsInCompletedCourses && !$existsInSchedule) {
                        $existsInCurrentSemester = Schedule::checkInSchedule($prerequisite->prerequisite, $semester_id);
                        if ($prerequisite->iscorequisite && $existsInCurrentSemester) {
                            // do nothing
                        }else{
                            return false;
                        }
                    }
                }

                // if the course does not have orprerequisites then we add the course to schedule
                if (count($orprerequisites) == 0) {
                    Schedule::addCourseToSchedule($request, $tutorial_id, $lab_id);
                    return true;
                }else{
                    // need to loop through the orprerequisites to check if one of them is already done by the user
                    foreach ($orprerequisites as $key => $pre) {
                        $orprereqExistsInCompletedCourses = Schedule::checkInCompletedCourses($pre->orprereq);

                        // check if the orprereq is added to the previous semester
                        $orprereqExistsInSchedule = Schedule::checkInSchedule($pre->orprereq, $semesters[0]->semester_id);
                        $prereqExistsInCompletedCourses = Schedule::checkInCompletedCourses($pre->prerequisite);

                        // check if the prereq is added to the previous semester
                        $prereqExistsInSchedule = Schedule::checkInSchedule($pre->prerequisite, $semesters[0]->semester_id);

                        if ($orprereqExistsInCompletedCourses || $orprereqExistsInSchedule || $prereqExistsInCompletedCourses || $prereqExistsInSchedule) {
                            $orprereqSatisfied = true;
                        }
                    }

                    // add the course to schedule if the orprerequisites are met
                    if ($orprereqSatisfied) {
                        Schedule::addCourseToSchedule($request, $tutorial_id, $lab_id);
                        return true;
                    }else{
                        return false;
                    }
                }
            }else{
                // repeating the same things for Fall semester, but with some changes (inefficient)
                foreach ($coursePrerequisites as $key => $prerequisite) {
                    $existsInCompletedCourses = Schedule::checkInCompletedCourses($prerequisite->prerequisite);

                    if (!$existsInCompletedCourses) {
                        $existsInCurrentSemester = Schedule::checkInSchedule($prerequisite->prerequisite, $semester_id);
                        if ($prerequisite->iscorequisite && $existsInCurrentSemester) {
                            // do nothing
                        }else{
                            return false;
                        }
                    }
                }
                if (count($orprerequisites) == 0) {
                    Schedule::addCourseToSchedule($request, $tutorial_id, $lab_id);
                    return true;
                }else{
                    foreach ($orprerequisites as $key => $pre) {
                        $orprereqExistsInCompletedCourses = Schedule::checkInCompletedCourses($pre->orprereq);
                        $prereqExistsInCompletedCourses = Schedule::checkInCompletedCourses($pre->prerequisite);

                        if ($orprereqExistsInCompletedCourses || $prereqExistsInCompletedCourses) {
                            $orprereqSatisfied = true;
                        }
                    }
                    if ($orprereqSatisfied) {
                        Schedule::addCourseToSchedule($request, $tutorial_id, $lab_id);
                        return true;
                    }else{
                        return false;
                    }
                }
            }
        }
        else
        {
            Schedule::addCourseToSchedule($request, $tutorial_id, $lab_id);
            return true;
        }
   }
}
