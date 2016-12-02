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
                'user_id' => DB::table('users')->where('email', 'ajmer226@yahoo.ca')->value('id'),
                'course_id' => DB::table('courses')->where('course_code', 'PHYS 204')->value('course_id')
            ],
            [
                'user_id' => DB::table('users')->where('email', 'ajmer226@yahoo.ca')->value('id'),
                'course_id' => DB::table('courses')->where('course_code', 'CHEM 205')->value('course_id')
            ],
            [
                'user_id' => DB::table('users')->where('email', 'ajmer226@yahoo.ca')->value('id'),
                'course_id' => DB::table('courses')->where('course_code', 'MATH 203')->value('course_id')
            ],
            [
                'user_id' => DB::table('users')->where('email', 'ajmer226@yahoo.ca')->value('id'),
                'course_id' => DB::table('courses')->where('course_code', 'MATH 204')->value('course_id')
            ],
            [
                'user_id' => DB::table('users')->where('email', 'ajmer226@yahoo.ca')->value('id'),
                'course_id' => DB::table('courses')->where('course_code', 'MATH 205')->value('course_id')
            ],
            [
                'user_id' => DB::table('users')->where('email', 'ajmer226@yahoo.ca')->value('id'),
                'course_id' => DB::table('courses')->where('course_code', 'PHIL 210')->value('course_id')
            ],
            [
                'user_id' => DB::table('users')->where('email', 'ajmer226@yahoo.ca')->value('id'),
                'course_id' => DB::table('courses')->where('course_code', 'COMP 232')->value('course_id')
            ],
            [
                'user_id' => DB::table('users')->where('email', 'ajmer226@yahoo.ca')->value('id'),
                'course_id' => DB::table('courses')->where('course_code', 'COMP 248')->value('course_id')
            ],
            [
                'user_id' => DB::table('users')->where('email', 'ajmer226@yahoo.ca')->value('id'),
                'course_id' => DB::table('courses')->where('course_code', 'COMP 249')->value('course_id')
            ],
            [
                'user_id' => DB::table('users')->where('email', 'ajmer226@yahoo.ca')->value('id'),
                'course_id' => DB::table('courses')->where('course_code', 'COMP 348')->value('course_id')
            ],
            [
                'user_id' => DB::table('users')->where('email', 'ajmer226@yahoo.ca')->value('id'),
                'course_id' => DB::table('courses')->where('course_code', 'COMP 352')->value('course_id')
            ],
            [
                'user_id' => DB::table('users')->where('email', 'ajmer226@yahoo.ca')->value('id'),
                'course_id' => DB::table('courses')->where('course_code', 'ENGR 201')->value('course_id')
            ],
            [
                'user_id' => DB::table('users')->where('email', 'ajmer226@yahoo.ca')->value('id'),
                'course_id' => DB::table('courses')->where('course_code', 'ENGR 213')->value('course_id')
            ],
            [
                'user_id' => DB::table('users')->where('email', 'ajmer226@yahoo.ca')->value('id'),
                'course_id' => DB::table('courses')->where('course_code', 'ENGR 233')->value('course_id')
            ],
            [
                'user_id' => DB::table('users')->where('email', 'ajmer226@yahoo.ca')->value('id'),
                'course_id' => DB::table('courses')->where('course_code', 'ENGR 371')->value('course_id')
            ],
            [
                'user_id' => DB::table('users')->where('email', 'ajmer226@yahoo.ca')->value('id'),
                'course_id' => DB::table('courses')->where('course_code', 'ENCS 272')->value('course_id')
            ],
            [
                'user_id' => DB::table('users')->where('email', 'ajmer226@yahoo.ca')->value('id'),
                'course_id' => DB::table('courses')->where('course_code', 'SOEN 228')->value('course_id')
            ],
            [
                'user_id' => DB::table('users')->where('email', 'ajmer226@yahoo.ca')->value('id'),
                'course_id' => DB::table('courses')->where('course_code', 'SOEN 287')->value('course_id')
            ],
            [
                'user_id' => DB::table('users')->where('email', 'artem@yahoo.ca')->value('id'),
                'course_id' => DB::table('courses')->where('course_code', 'PHYS 204')->value('course_id')
            ],
            [
                'user_id' => DB::table('users')->where('email', 'artem@yahoo.ca')->value('id'),
                'course_id' => DB::table('courses')->where('course_code', 'PHYS 205')->value('course_id')
            ],
            [
                'user_id' => DB::table('users')->where('email', 'artem@yahoo.ca')->value('id'),
                'course_id' => DB::table('courses')->where('course_code', 'CHEM 205')->value('course_id')
            ],
            [
                'user_id' => DB::table('users')->where('email', 'artem@yahoo.ca')->value('id'),
                'course_id' => DB::table('courses')->where('course_code', 'MATH 203')->value('course_id')
            ],
            [
                'user_id' => DB::table('users')->where('email', 'artem@yahoo.ca')->value('id'),
                'course_id' => DB::table('courses')->where('course_code', 'MATH 204')->value('course_id')
            ],
            [
                'user_id' => DB::table('users')->where('email', 'artem@yahoo.ca')->value('id'),
                'course_id' => DB::table('courses')->where('course_code', 'MATH 205')->value('course_id')
            ],
            [
                'user_id' => DB::table('users')->where('email', 'daniel@yahoo.ca')->value('id'),
                'course_id' => DB::table('courses')->where('course_code', 'PHYS 204')->value('course_id')
            ],
            [
                'user_id' => DB::table('users')->where('email', 'daniel@yahoo.ca')->value('id'),
                'course_id' => DB::table('courses')->where('course_code', 'PHYS 205')->value('course_id')
            ],
            [
                'user_id' => DB::table('users')->where('email', 'daniel@yahoo.ca')->value('id'),
                'course_id' => DB::table('courses')->where('course_code', 'CHEM 205')->value('course_id')
            ],
            [
                'user_id' => DB::table('users')->where('email', 'daniel@yahoo.ca')->value('id'),
                'course_id' => DB::table('courses')->where('course_code', 'MATH 203')->value('course_id')
            ],
            [
                'user_id' => DB::table('users')->where('email', 'daniel@yahoo.ca')->value('id'),
                'course_id' => DB::table('courses')->where('course_code', 'MATH 204')->value('course_id')
            ],
            [
                'user_id' => DB::table('users')->where('email', 'daniel@yahoo.ca')->value('id'),
                'course_id' => DB::table('courses')->where('course_code', 'MATH 205')->value('course_id')
            ],
        ]);
    }
}
