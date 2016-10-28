<?php

use Illuminate\Database\Seeder;

class ProgramTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('programs')->delete();

        DB::table('programs')->insert([
            [
                'program_name' => 'Software Engineering',
                'program_code' => 'SOEN'
            ],
            [
                'program_name' => 'Computer Engineering',
                'program_code' => 'COEN'
            ],
            [
                'program_name' => 'Electrical Engineering',
                'program_code' => 'ELEC'
            ],
            [
                'program_name' => 'Mechanical Engineering',
                'program_code' => 'MECH'
            ],
            [
                'program_name' => 'Industrial Engineering',
                'program_code' => 'INDU'
            ],
            [
                'program_name' => 'Civil Engineering',
                'program_code' => 'CIVI'
            ],
            [
                'program_name' => 'Building Engineering',
                'program_code' => 'BLDG'
            ],
            [
                'program_name' => 'Aerospace Engineering',
                'program_code' => 'AERO'
            ],
        ]);
    }
}
