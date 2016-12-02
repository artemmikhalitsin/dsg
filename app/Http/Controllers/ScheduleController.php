<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\AddCourseRequest;
use App\Http\Controllers\Controller;
use App\Semesters;
use App\Courses;
use App\Lectures;
use App\Schedule;
use Auth;
use DB;

class ScheduleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * returns the add course view
     */
    public function addCourse()
    {
        $semesters = Semesters::all();
        return view('courses.addCourse', compact('semesters'));
    }

    /**
     * removes a course from the schedule
     * @param  Request $request [gets the course id through request]
     * @return success if the course is removed
     */
    public function removeCourse(Request $request)
    {
         $user_id = Auth::user()->id;
         $course_id = $request->input('course_id');
         $response = Schedule::removeCourse($user_id, $course_id);
         return response()->json(['success'=>$response]);
    }

    /**
     * gets the courses in a specific semester
     * @param  Request $request [gets the semester id through request]
     * @return the courses in a specific semester
     */
    public function getCoursesList(Request $request)
    {
        $semester_id = $request->input('semester_id');
        $coursesList = Schedule::getCourses($semester_id);
        return response()->json($coursesList);
    }

    /**
     * gets all the lectures for a course
     * @param  Request $request [gets the course id through request]
     * @return the lectures associated with the course
     */
    public function getLecturesList(Request $request)
    {
    	$course_id = $request->input('course_id');
    	$semester_id = $request->input('semester_id');
    	$course = Courses::find($course_id);
    	$lecturesList = $course->lectures()->where('semester_id', $semester_id)->get();
    	return response()->json($lecturesList);
    }

    /**
     * gets the list of tutorials and labs for a lecture
     * @param  Request $request [gets the lecture id through request]
     * @return the tutorials and labs associated with the lecture
     */
    public function getTutorialsAndLabsList(Request $request)
    {
        $lecture_id = $request->input('lecture_id');
        $lecture = Lectures::find($lecture_id);
        $tutorialsList = $lecture->tutorials;
        $labsList = $lecture->labs;
        return response()->json(['tutorials' => $tutorialsList, 'labs' => $labsList]);
    }

    /**
     * add course to the schedule after validation
     * @param  AddCourseRequest $request [validates the request]
     * @return redirects the user to schedule view
     */
    public function store(AddCourseRequest $request)
    {
        // retrieving the data from the request
        $tutorial_id = $request->input('tutorial_id');
        $lab_id = $request->input('lab_id');
        $tutorialExists = $request->input('tutorialExists');
        $labExists = $request->input('labExists');
        $course_id = $request->input('course_id');
        $semester_id = $request->input('semester_id');

        // statement used to verify if the tutorial or lab fields have been left empty
        if (($tutorialExists == 1 && $tutorial_id == "") || ($labExists == 1 and $lab_id == "")) {
            return redirect('/schedule/addCourse');
        }
        // statement assigning null value to tutorial and lab when a class doesn't have them
        else{
            if ($tutorial_id == "") {
                $tutorial_id = null;
            }
            if ($lab_id == "") {
                $lab_id = null;
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
                            return "You are missing the following prerequisite " . $prerequisite->prerequisite;
                        }
                    }
                }

                // if the course does not have orprerequisites then we add the course to schedule 
                if (count($orprerequisites) == 0) {
                    Schedule::addCourseToSchedule($request, $tutorial_id, $lab_id);
                    return redirect('/schedule');                
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
                        return redirect('/schedule');                    
                    }else{
                        return "orprerequisites are not met";
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
                            return "You are missing the following prerequisite " . $prerequisite->prerequisite;
                        }
                    }
                }
                if (count($orprerequisites) == 0) {
                    Schedule::addCourseToSchedule($request, $tutorial_id, $lab_id);
                    return redirect('/schedule');                
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
                        return redirect('/schedule');
                    }else{
                        return "orprerequisites are not met";
                    }
                }
            }
        }
        else
        {
            Schedule::addCourseToSchedule($request, $tutorial_id, $lab_id);
            return redirect('/schedule');
        }
   }
}
