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

        DB::table('courseAvailability')->insert([
        	[
				'course_id' => DB::table('courses')->where('course_code', 'AERO 417')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'AERO 431')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'AERO 462')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'AERO 480')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'AERO 482')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'AERO 486')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'AERO 201')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'AERO 371')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'AERO 464')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'AERO 465')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'AERO 483')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'AERO 485')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'AERO 487')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'BIOL 261')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'BIOL 206')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'BIOL 261')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'CHEM 217')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'CHEM 221')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'CHEM 221')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'CIVI 231')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 212')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 231')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 243')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 244')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 311')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 316')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 317')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 320')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 352')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 390')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 445')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 451')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 498')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 212')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 231')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 243')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 244')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 311')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 313')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 315')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 346')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 390')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 421')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 498')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 201')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 208')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 218')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 228')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 232')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 233')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 248')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 249')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 326')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 335')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 339')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 345')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 346')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 348')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 352')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 353')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 354')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 361')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 371')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 376')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 426')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 428')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 445')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 465')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 472')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 473')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 477')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 478')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 479')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 490')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 492')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 495')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 201')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 218')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 228')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 232')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 233')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 248')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 249')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 335')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 345')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 346')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 348')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 352')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 353')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 354')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 361')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 367')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 371')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 442')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 445')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 472')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 474')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 476')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 490')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 492')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 495')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 498')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 273')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 311')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 342')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 372')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 321')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 273')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 242')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 311')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 353')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 372')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENCS 272')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENCS 282')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENCS 393')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENCS 483')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENCS 484')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENCS 498')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 201')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 202')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 208')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 213')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 233')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 242')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 251')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 290')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 301')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 308')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 311')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 361')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 371')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 391')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 392')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 411')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 201')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 202')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 213')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 233')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 242')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 243')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 244')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 245')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 251')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 290')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 301')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 361')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 371')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 391')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 392')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 411')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 221')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 221')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'PHYS 252')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'PHYS 284')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 287')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 321')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 341')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 342')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 343')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 384')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 387')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 422')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 423')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Fall')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 228')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 287')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 331')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 341')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 344')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 345')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 357')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 385')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 390')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 487')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 498')->value('course_id'),
				'semester_id' => DB::table('semesters')->where('name', 'Winter')->value('semester_id')
			],
        ]);
    }
}
