<?php

use Illuminate\Database\Seeder;

class InstructorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('instructors')->delete();

        DB::table('instructors')->insert([
            [
                'name' => 'Daniel',
                'department' => 'SOEN'
            ],
            [
                'name' => 'Artem',
                'department' => 'COMP'
            ],
            [
                'name' => 'Ajmer',
                'department' => 'COEN'
            ],
            [
                'name' => 'Ricardo',
                'department' => 'SOEN'
            ],
            [
                'name' => 'Catherine',
                'department' => 'COMP'
            ],
            [
                'name' => 'Amanda',
                'department' => 'SOEN'
            ],
            [
                'name' => 'Wai',
                'department' => 'COMP'
            ],
            [
                'name' => 'Jing',
                'department' => 'COEN'
            ],
        ]);
    }
}
