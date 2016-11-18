<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        DB::table('users')->insert([
            [
                'name' => 'Ajay Singh',
                'email' => 'ajmergadreh@yahoo.ca',
                'password' => bcrypt("123456"),
                'program_id' => 1
            ],
            [
                'name' => 'Artem',
                'email' => 'artem@yahoo.ca',
                'password' => bcrypt("password"),
                'program_id' => 1
            ],
            [
                'name' => 'Daniel',
                'email' => 'daniel@yahoo.ca',
                'password' => bcrypt("123123"),
                'program_id' => 2
            ],
            [
                'name' => 'Wai',
                'email' => 'wai@hotmail.com',
                'password' => bcrypt("654321"),
                'program_id' => 8
            ],
        ]);
    }
}
