<?php

use Illuminate\Database\Seeder;

class OrPrerequisitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('orPrerequisites')->delete();

        DB::table('orPrerequisites')->insert([
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'ENGR 244')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'ENGR 242')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 245')->value('course_id')
			],
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'ENGR 391')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'COMP 248')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'COEN 243')->value('course_id')
			],
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'ENGR 391')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'COMP 248')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'MECH 215')->value('course_id')
			],
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'ENGR 391')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'COMP 248')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'BCEE 231')->value('course_id')
			],
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'ENGR 472')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'ELEC 372')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'MECH 371')->value('course_id')
			],
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'COEN 317')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'COEN 311')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'COMP 228')->value('course_id')
			],
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'COEN 320')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'COEN 346')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'COMP 346')->value('course_id')
			],
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'COEN 346')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'COMP 352')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'COEN 352')->value('course_id')
			],
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'COEN 432')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'COEN 352')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'COMP 352')->value('course_id')
			],
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'COEN 490')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'ELEC 311')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 341')->value('course_id')
			],
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'AERO 371')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'ENGR 311')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 342')->value('course_id')
			],
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'AERO 480')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'AERO 371')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 372')->value('course_id')
			],
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'AERO 480')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'MECH 371')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 385')->value('course_id')
			],
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'AERO 482')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'ENGR 371')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'COMP 233')->value('course_id')
			],
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'AERO 482')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'AERO 371')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 372')->value('course_id')
			],
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'AERO 482')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'MECH 370')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 385')->value('course_id')
			],
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'ELEC 312')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'ELEC 342')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 364')->value('course_id')
			],
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'ELEC 342')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'ELEC 242')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 264')->value('course_id')
			],
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'ELEC 353')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'ELEC 242')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 264')->value('course_id')
			],
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'ELEC 367')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'ELEC 342')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 364')->value('course_id')
			],
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'ELEC 372')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'ELEC 342')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 364')->value('course_id')
			],
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'ELEC 441')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'ELEC 342')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 364')->value('course_id')
			],
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'ELEC 442')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'ELEC 342')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 364')->value('course_id')
			],
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'ELEC 458')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'ELEC 351')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 353')->value('course_id')
			],
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'ELEC 463')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'ELEC 342')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 364')->value('course_id')
			],
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'ELEC 465')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'COEN 445')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'ELEC 463')->value('course_id')
			],
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'ELEC 472')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'ELEC 463')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'COEN 445')->value('course_id')
			],
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'ELEC 481')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'ELEC 372')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'MECH 371')->value('course_id')
			],
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'MECH 411')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'AERO 371')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'MECH 370')->value('course_id')
			],
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'MECH 463')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'ELEC 372')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'MECH 371')->value('course_id')
			],
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'MECH 473')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'ELEC 372')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'MECH 371')->value('course_id')
			],
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'MECH 474')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'ELEC 372')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'MECH 371')->value('course_id')
			],
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'COMP 318')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'COMP 218')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'COMP 248')->value('course_id')
			],
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'COMP 335')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'COMP 232')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'COEN 231')->value('course_id')
			],
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'COMP 335')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'COMP 249')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'COEN 244')->value('course_id')
			],
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'COMP 346')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'COMP 228')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 228')->value('course_id')
			],
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'COMP 353')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'COMP 232')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'COEN 231')->value('course_id')
			],
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'COMP 353')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'COMP 352')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'COEN 352')->value('course_id')
			],
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'COMP 367')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'COMP 232')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'MAST 217')->value('course_id')
			],
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'COMP 367')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'COMP 248')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'MAST 234')->value('course_id')
			],
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'COMP 371')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'COMP 232')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'COEN 231')->value('course_id')
			],
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'COMP 371')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'COMP 352')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'COEN 352')->value('course_id')
			],
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'COMP 426')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'COMP 346')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'COEN 346')->value('course_id')
			],
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'COMP 442')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'COMP 228')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 228')->value('course_id')
			],
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'COMP 442')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'COMP 228')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'COEN 311')->value('course_id')
			],
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'COMP 442')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'COMP 352')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'COEN 352')->value('course_id')
			],
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'COMP 465')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'COMP 232')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'COEN 231')->value('course_id')
			],
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'COMP 465')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'COMP 352')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'COEN 352')->value('course_id')
			],
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'COMP 472')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'COMP 352')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'COEN 352')->value('course_id')
			],
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'COMP 474')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'COMP 352')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'COEN 352')->value('course_id')
			],
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'COMP 476')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'COMP 361')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 391')->value('course_id')
			],
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'COMP 477')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'COMP 361')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 391')->value('course_id')
			],
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'COMP 479')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'COMP 233')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'ENGR 371')->value('course_id')
			],
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'SOEN 341')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'COMP 352')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'COEN 352')->value('course_id')
			],
			[
				'prereq_id' => DB::table('prerequisites')->where([
					['course_id', '=', DB::table('courses')->where('course_code', 'SOEN 387')->value('course_id')],
					['prerequisite', '=', DB::table('courses')->where('course_code', 'COMP 354')->value('course_id')]
				])->value('prereq_id'), 
				'course_id' => DB::table('courses')->where('course_code', 'SOEN 341')->value('course_id')
			],
		]);
    }
}
