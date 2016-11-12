<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(InstructorsTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(ProgramTableSeeder::class);
        //$this->call(UsersTableSeeder::class);
        //$this->call(CompletedCoursesTableSeeder::class);
        $this->call(CourseProgramTableSeeder::class);
        $this->call(PrerequisitesTableSeeder::class);
        $this->call(OrPrerequisitesTableSeeder::class);
        $this->call(CorequisitesTableSeeder::class);
    }
}
