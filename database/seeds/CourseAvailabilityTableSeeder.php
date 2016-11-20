<?php

use Illuminate\Database\Seeder;

class CourseAvailabilityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courseAvailability')->delete();
        $courses = DB::table('courses')->get();
        $fall = DB::table('semesters')->where('name', 'Fall')->value('semester_id');
        $winter = DB::table('semesters')->where('name','Winter')->value('semester_id');
        $courseAvailability = [];
        foreach($courses as $course)
        {
             $fallExists = DB::table('lectures')->where('course_id', $course->course_id)->where('semester_id', $fall)->exists();
             $winterExists = DB::table('lectures')->where('course_id', $course->course_id)->where('semester_id', $winter)->exists();
            array_push($courseAvailability,
                  [
                  'course_id' => $course->course_id,
                  'fall' => $fallExists,
                  'winter' => $winterExists
             ]);
        }
        DB::table('courseAvailability')->insert($courseAvailability);
   }
}
