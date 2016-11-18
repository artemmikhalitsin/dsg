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
        ]);
    }
}
