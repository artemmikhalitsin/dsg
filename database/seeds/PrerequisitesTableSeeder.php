<?php

use Illuminate\Database\Seeder;

class PrerequisitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prerequisites')->delete();

        DB::table('prerequisites')->insert([
            [
				'course_id' => DB::table('courses')->where('course_code', 'ENCS 282')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENCS 272')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENCS 393')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENCS 282')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 208')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 108')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 213')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MATH 204')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 213')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MATH 205')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 233')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MATH 204')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 233')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MATH 205')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 242')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 213')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 242')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'PHYS 204')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 242')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MATH 204')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 243')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 213')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 243')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 242')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 244')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 213')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 244')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 242')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 244')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 233')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 245')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'PHYS 204')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 245')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 213')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 251')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MATH 203')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 290')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENCS 282')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 290')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 213')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 290')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 233')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 308')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 208')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 311')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 233')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 361')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 213')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 361')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 233')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 361')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 251')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 371')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 213')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 371')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 233')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 391')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 213')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 391')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 233')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 391')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 248')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 392')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENCS 282')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 392')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 201')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 392')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 202')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 411')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENCS 282')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 412')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENCS 282')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 472')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 372')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 212')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MATH 204')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 231')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MATH 204')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 243')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MATH 204')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 244')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COEN 243')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 311')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COEN 212')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 311')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COEN 243')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 313')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COEN 212')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 313')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COEN 231')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 315')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 311')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 316')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COEN 311')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 316')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COEN 313')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 317')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COEN 311')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 317')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'SOEN 228')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 317')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COEN 313')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 320')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COEN 346')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 345')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'SOEN 341')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 346')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COEN 311')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 346')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 352')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 352')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COEN 231')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 352')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COEN 244')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 390')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COEN 244')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 390')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COEN 311')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 390')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 290')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 390')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 301')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 413')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COEN 313')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 421')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COEN 317')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 421')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COEN 320')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 421')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'SOEN 341')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 432')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COEN 352')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 445')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COEN 346')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 451')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COEN 212')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 451')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 311')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 490')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 371')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 490')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COEN 352')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 490')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COEN 390')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COEN 490')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 311')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'AERO 201')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 213')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'AERO 201')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 233')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'AERO 371')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'PHYS 205')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'AERO 371')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 213')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'AERO 371')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 243')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'AERO 371')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 311')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'AERO 371')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 364')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'AERO 390')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'AERO 201')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'AERO 390')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'AERO 371')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'AERO 417')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 201')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'AERO 431')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 243')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'AERO 431')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 311')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'AERO 444')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'AERO 390')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'AERO 446')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'AERO 464')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'AERO 455')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 311')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'AERO 455')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 391')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'AERO 455')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MECH 361')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'AERO 462')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MECH 351')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'AERO 462')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MECH 361')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'AERO 464')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MECH 361')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'AERO 465')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'AERO 462')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'AERO 480')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'AERO 371')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'AERO 480')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MECH 371')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'AERO 481')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MECH 221')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'AERO 482')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 371')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'AERO 482')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'AERO 371')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'AERO 482')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MECH 370')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'AERO 483')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'AERO 482')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'AERO 485')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MECH 351')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'AERO 485')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MECH 361')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'AERO 486')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 243')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'AERO 486')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 244')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'AERO 487')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'AERO 486')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'AERO 490')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'AERO 390')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'AERO 490')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENCS 282')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'AERO 490')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 301')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 242')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 273')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 242')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 213')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 251')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 273')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 251')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 233')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 264')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 273')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 264')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 213')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 273')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 213')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 273')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'PHYS 205')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 275')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 213')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 275')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'PHYS 205')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 311')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 273')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 312')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 311')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 312')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 342')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 321')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'CHEM 205')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 321')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 213')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 331')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 251')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 331')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 273')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 342')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 242')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 351')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 251')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 351')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 365')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 353')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 242')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 353')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 233')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 364')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 264')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 365')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 213')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 365')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 233')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 367')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 342')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 367')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 371')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 372')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 342')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 390')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COEN 244')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 390')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 311')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 390')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 290')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 390')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 301')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 421')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 321')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 422')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 421')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 423')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 311')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 424')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 311')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 424')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 321')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 425')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 321')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 425')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 351')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 431')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 331')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 432')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 331')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 432')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 372')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 433')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 311')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 433')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 331')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 434')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 331')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 435')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 331')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 436')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 331')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 437')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 390')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 438')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 331')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 439')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 331')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 440')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 331')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 440')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 372')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 441')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 342')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 442')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 342')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 442')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 371')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 453')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 351')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 455')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 351')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 456')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 351')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 457')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 453')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 458')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 351')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 463')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 342')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 463')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 371')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 464')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 367')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 465')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COEN 445')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 466')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 351')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 466')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 367')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 472')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 463')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 481')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 372')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 482')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 391')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 483')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 372')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 490')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 371')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 490')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COEN 311')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 490')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 364')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 490')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 390')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 215')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MATH 204')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 221')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'CHEM 205')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 311')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MECH 313')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 311')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 244')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 313')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MECH 211')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 321')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MECH 221')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 343')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 213')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 343')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 233')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 343')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 243')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 344')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 244')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 344')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MECH 313')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 344')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MECH 321')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 344')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MECH 343')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 351')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 251')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 352')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 311')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 352')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 361')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 361')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 361')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 368')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'PHYS 205')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 368')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 311')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 370')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'PHYS 205')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 370')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 213')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 370')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 311')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 370')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 245')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 370')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 243')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 371')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 311')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 371')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MECH 370')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 375')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 311')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 375')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MECH 370')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 390')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MECH 311')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 390')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MECH 343')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 390')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MECH 344')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 411')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 311')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 411')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'AERO 371')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 412')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MECH 313')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 414')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MECH 311')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 414')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MECH 412')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 415')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MECH 215')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 421')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MECH 221')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 422')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 233')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 422')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 244')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 422')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MECH 221')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 423')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MECH 221')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 424')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MECH 311')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 424')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MECH 343')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 425')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MECH 311')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 426')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 233')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 426')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 244')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 426')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MECH 321')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 444')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MECH 375')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 447')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MECH 343')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 448')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MECH 447')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 452')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MECH 351')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 452')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MECH 352')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 452')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MECH 361')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 453')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MECH 352')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 454')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MECH 351')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 454')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MECH 361')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 460')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 244')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 460')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 391')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 461')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MECH 361')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 463')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 361')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 463')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 372')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 471')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 311')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 471')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MECH 368')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 472')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MECH 215')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 472')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MECH 371')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 473')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 372')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 474')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ELEC 372')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 490A')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENCS 282')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 490A')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 301')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 490A')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MECH 344')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 490A')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MECH 390')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 490B')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENCS 282')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 490B')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 301')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 490B')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MECH 344')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 490B')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MECH 390')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 490C')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENCS 282')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 490C')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 301')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 490C')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MECH 344')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'MECH 490C')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MECH 390')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 201')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MATH 201')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 208')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 108')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 218')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MATH 201')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 228')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 248')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 228')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MATH 203')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 228')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MATH 204')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 232')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MATH 203')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 232')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MATH 204')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 233')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MATH 205')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 233')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MATH 203')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 248')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MATH 204')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 249')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 248')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 249')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MATH 203')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 249')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MATH 205')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 249')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MATH 203')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 318')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 218')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 326')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 346')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 335')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 232')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 335')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 249')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 339')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 232')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 345')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 352')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 346')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 228')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 346')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 352')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 348')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 249')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 352')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 232')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 352')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 249')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 353')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 232')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 353')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 352')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 354')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 352')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 354')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENCS 282')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 361')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 232')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 361')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 249')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 367')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 232')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 367')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 248')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 371')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 232')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 371')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 352')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 376')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 371')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 426')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 346')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 428')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 346')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 442')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 228')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 442')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 335')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 442')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 352')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 444')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 346')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 445')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 346')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 451')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 353')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 465')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 232')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 465')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 339')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 465')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 352')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 472')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 352')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 473')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 352')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 474')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 352')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 476')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 361')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 476')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 376')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 477')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 361')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 477')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 371')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 478')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 352')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 479')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 233')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 479')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 352')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 490')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENCS 282')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 492')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 490')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'COMP 495')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENCS 282')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 228')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MATH 203')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 228')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'MATH 204')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 287')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 248')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 321')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 346')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 331')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 232')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 331')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 249')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 341')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 352')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 341')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENCS 282')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 342')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'SOEN 341')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 343')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'SOEN 341')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 343')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'SOEN 342')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 344')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'SOEN 343')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 345')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'SOEN 343')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 357')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'SOEN 342')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 384')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENCS 282')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 384')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'SOEN 341')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 385')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 213')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 385')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'ENGR 233')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 387')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 353')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 387')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 354')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 387')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'SOEN 287')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 390')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'SOEN 344')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 390')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'SOEN 357')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 422')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 346')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 423')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'COMP 346')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 448')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'SOEN 342')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 448')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'SOEN 343')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 448')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'SOEN 344')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 449')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'SOEN 344')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 487')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'SOEN 387')->value('course_id')
			],
			[
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 490')->value('course_id'),
				'prerequisite' => DB::table('courses')->where('course_code', 'SOEN 390')->value('course_id')
			],
		]);
    }
}