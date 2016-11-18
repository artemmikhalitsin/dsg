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
				'course_id' => DB::table('courses')->where('course_code', '﻿ENGR 201')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', '﻿ENGR 201')->value('course_id'),
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
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 343')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 344')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_course'
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
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 490')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_course'
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
				'course_id' => DB::table('courses')->where('course_code', 'COEN 490')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_course'
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
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 321')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_course'
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
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 372')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id'),
				'course_type' => 'program_course'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 345')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 353')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 371')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 426')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 428')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 442')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
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
				'course_id' => DB::table('courses')->where('course_code', 'COMP 465')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 472')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
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
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 411')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 298')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_elective'
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
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 491')->value('course_id'),
				'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id'),
				'course_type' => 'program_elective'
			],
        ]);
    }
}
