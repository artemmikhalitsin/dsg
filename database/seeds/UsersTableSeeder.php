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
                'email' => 'ajmer226@yahoo.ca',
                'password' => bcrypt("123456"),
                'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id')
            ],
            [
                'name' => 'Artem',
                'email' => 'artem@yahoo.ca',
                'password' => bcrypt("123456"),
                'program_id' => DB::table('programs')->where('program_code', 'SOEN')->value('program_id')
            ],
            [
                'name' => 'Daniel',
                'email' => 'daniel@yahoo.ca',
                'password' => bcrypt("123456"),
                'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id')
            ],
            [
                'name' => 'Wai',
                'email' => 'wai@hotmail.com',
                'password' => bcrypt("123456"),
                'program_id' => DB::table('programs')->where('program_code', 'COEN')->value('program_id')
            ],
        ]);
    }
}
