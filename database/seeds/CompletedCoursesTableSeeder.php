<?php

use Illuminate\Database\Seeder;

class CompletedCoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('completedCourses')->delete();

        DB::table('completedCourses')->insert([
            [
                'user_id' => 1,
                'course_id' => 1
            ],
            [
                'user_id' => 1,
                'course_id' => 2
            ],
            [
                'user_id' => 1,
                'course_id' => 4
            ],
            [
                'user_id' => 1,
                'course_id' => 6
            ],
            [
                'user_id' => 2,
                'course_id' => 1
            ],
            [
                'user_id' => 2,
                'course_id' => 7
            ],
            [
                'user_id' => 2,
                'course_id' => 3
            ],
            [
                'user_id' => 2,
                'course_id' => 4
            ],
            [
                'user_id' => 2,
                'course_id' => 9
            ],
            [
                'user_id' => 2,
                'course_id' => 10
            ],
            [
                'user_id' => 3,
                'course_id' => 1
            ],
            [
                'user_id' => 3,
                'course_id' => 2
            ],
            [
                'user_id' => 3,
                'course_id' => 3
            ],
            [
                'user_id' => 3,
                'course_id' => 4
            ],
        ]);
    }
}
