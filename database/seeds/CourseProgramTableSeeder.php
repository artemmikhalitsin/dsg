<?php

use Illuminate\Database\Seeder;

class CourseProgramTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courseProgram')->delete();

        DB::table('courseProgram')->insert([
            [
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 201')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 201')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 202')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 202')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 213')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 213')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 233')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 233')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 242')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'basic_science'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 243')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'basic_science'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 251')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'basic_science'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 290')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 301')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 301')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 361')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'basic_science'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 371')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 371')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 391')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 391')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 392')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 392')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 411')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 411')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 472')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'AERO 417')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'AERO 480')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'AERO 482')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'AERO 483')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 212')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 231')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 243')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 244')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 311')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 313')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 315')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 316')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 317')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 320')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 345')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 346')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 352')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 390')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 413')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 421')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 432')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 445')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 451')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 490')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 498')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 242')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 273')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 275')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 311')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 312')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 321')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 321')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'basic_science'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 342')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 353')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 367')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 372')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 423')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 442')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 458')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 465')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 472')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 481')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 482')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 483')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 221')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'basic_science'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 232')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 248')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 249')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 335')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 345')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 345')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 346')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 348')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 352')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 353')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 353')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 371')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 371')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 426')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 426')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 428')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 428')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 442')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 442')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 445')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 451')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 451')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 465')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 465')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 472')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 472')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 473')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 474')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 474')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 478')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 479')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 228')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 287')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 298')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 321')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 331')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 341')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 341')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 342')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 342')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 343')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 343')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 344')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 344')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 345')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 357')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 357')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 384')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 390')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 422')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 423')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 448')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 448')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 490')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 491')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'CIVI 231')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'basic_science'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'PHYS 204')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_prereq'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'PHYS 204')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_prereq'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'PHYS 205')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_prereq'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'PHYS 205')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_prereq'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'PHYS 252')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'basic_science'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'PHYS 284')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'basic_science'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'PHYS 385')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'basic_science'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'BIOL 206')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'basic_science'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'BIOL 261')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'basic_science'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'CHEM 205')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_prereq'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'CHEM 205')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_prereq'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'CHEM 217')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'basic_science'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'CHEM 221')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'basic_science'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MATH 203')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_prereq'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MATH 203')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_prereq'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MATH 204')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_prereq'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MATH 204')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_prereq'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MATH 205')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_prereq'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MATH 205')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_prereq'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENCS 282')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENCS 282')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENCS 483')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENCS 483')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ARTH 353')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ARTH 353')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ARTH 354')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ARTH 354')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMS 360')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMS 360')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGL 224')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGL 224')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGL 233')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGL 233')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'FLIT 230')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'FLIT 230')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'FLIT 240')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'FLIT 240')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'FMST 214')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'FMST 214')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'FMST 215')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'FMST 215')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'HIST 202')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'HIST 202')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'HIST 205')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'HIST 205')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'HIST 281')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'HIST 281')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'HIST 283')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'HIST 283')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'LBCL 201')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'LBCL 201')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'LBCL 202')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'LBCL 202')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'LBCL 203')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'LBCL 203')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'LBCL 204')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'LBCL 204')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'PHIL 201')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'PHIL 201')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'PHIL 210')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'PHIL 210')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'PHIL 232')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'PHIL 232')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'PHIL 233')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'PHIL 233')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'PHIL 235')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'PHIL 235')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'PHIL 275')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'PHIL 275')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'PHIL 330')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'PHIL 330')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'THEO 202')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'THEO 202')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'THEO 204')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'THEO 204')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'THEO 233')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'THEO 233')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ANTH 202')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ANTH 202')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ECON 201')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ECON 201')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ECON 203')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ECON 203')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'EDUC 230')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'EDUC 230')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENCS 483')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENCS 483')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'GEOG 203')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'GEOG 203')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'GEOG 204')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'GEOG 204')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'GEOG 210')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'GEOG 210')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'GEOG 220')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'GEOG 220')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'LING 222')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'LING 222')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'LING 300')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'LING 300')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'POLI 202')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'POLI 202')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'POLI 213')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'POLI 213')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'RELI 214')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'RELI 214')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'RELI 215')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'RELI 215')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'RELI 216')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'RELI 216')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'RELI 310')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'RELI 310')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'RELI 312')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'RELI 312')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'RELI 374')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'RELI 374')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SCPA 201')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SCPA 201')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SCPA 215')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SCPA 215')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOCI 203')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOCI 203')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'URBS 230')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'URBS 230')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'WSDB 290')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'WSDB 290')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'WSDB 291')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'WSDB 291')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ADMI 201')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ADMI 201')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ADMI 202')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ADMI 202')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MANA 201')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MANA 201')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MANA 202')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MANA 202')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MANA 300')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MANA 300')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MARK 201')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MARK 201')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'general_elective'
			],
        ]);
    }
}
