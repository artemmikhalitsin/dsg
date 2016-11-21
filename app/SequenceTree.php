<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Auth;

class SequenceTree extends Model
{

    public static function getOutput(){
        $CourseList = [];
        $courseInfoList = json_decode(Courses::getProgramCoursesInfo());
        $prerequisiteObjectList = [];

        foreach ($courseInfoList as $courseInfo){
          $already = false;

          foreach ($CourseList as $course){
            if ($course->id == $courseInfo->course_id){
              $course->addPrerequisiteObject($courseInfo->prerequisite, $CourseList);
              $already = true;
            }
          }
          //if duplicate add prerequisite to it, else generate new course object

          if (!$already){
            $CourseList[] = $course = new Course(
              $courseInfo->course_id, 
              $courseInfo->course_code, 
              $courseInfo->course_type
              );
            $course->addPrerequisiteObject($courseInfo->prerequisite, $CourseList);
          }
        }
        return json_encode($CourseList);
    }
}

class Course
{
  //var $name;
  var $id;
  //var $type;
  var $prerequisites = array();
  //var $corequisites = array();
  //var $height = 0;

  function __construct($id) {
    $this->id = $id;
  }

  function addPrerequisiteObject($prerequisiteId, $CourseList){
    $already = false;
    foreach ($CourseList as $course){
      if ($course->id == $prerequisiteId){
        $this->prerequisites[] = $course;
        $already = true;
      }
    }
    if (!$already){
      $CourseList[] = $course = new Course($prerequisiteId);
      $course->addPrerequisiteObject($prerequisiteId, $CourseList);
    }
  }
}


?>
