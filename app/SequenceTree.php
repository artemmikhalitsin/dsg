<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Auth;

class SequenceTree extends Model
{

    public static function getOutput(){
        $CourseList = [];
        $courseInfo = json_decode(Courses::getProgramCoursesInfo());

        foreach ($courseInfo as $course){
          $already = false;
          foreach ($CourseList as $c){
            if ($c->id == $course->course_id){
              $c->prerequisite[] = $course->prerequisite;
              $already = true;
            }
          }
          if (!$already)
            $CourseList[] = new Course($course->course_id, $course->course_code, $course->course_type, $course->prerequisite);
        }
        return json_encode($CourseList);
    }
}

class Course
{
  var $name;
  var $id;
  var $type;
  var $prerequisites = array();
  var $corequisites = array();
  var $height = 0;

  function __construct($id, $code, $type, $prerequisite) {
    $this->name = $code;
    $this->id = $id;
    $this->type = $type;
    $this->prerequisite[] = $prerequisite;

/*
    foreach ($DB_prelist as $DB_prereq){
            $prerequisites[] = new course($DB_prereq->course_id);
            $corequisites[] = new course($DB_coreq->coreq_id);
    }
*/
  }
}
?>
