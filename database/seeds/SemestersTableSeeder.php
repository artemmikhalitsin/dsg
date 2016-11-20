<?php

use Illuminate\Database\Seeder;

class SemestersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('semesters')->delete();

        DB::table('semesters')->insert([
            [
                'name' => 'Fall',
                'starting_date' => '09/06/2016',
                'ending_date' => '12/05/2016'
            ],
            [
                'name' => 'Winter',
                'starting_date' => '01/09/2017',
                'ending_date' => '04/13/2017'
            ],
        ]);
    }
}
