<?php

use Illuminate\Database\Seeder;

class PreferencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('preferences')->delete();

        DB::table('preferences')->insert([
        	[
                'user_id' => DB::table('users')->where('email', 'ajmer226@yahoo.ca')->value('id'),
                'day_off' => 'Mo',
                'starting_time' => '8:45AM',
                'finishing_time' => '5:30PM'
            ],
            [
                'user_id' => DB::table('users')->where('email', 'artem@yahoo.ca')->value('id'),
                'day_off' => 'Fr',
                'starting_time' => '10:15AM',
                'finishing_time' => '5:30PM'
            ],
            [
                'user_id' => DB::table('users')->where('email', 'daniel@yahoo.ca')->value('id'),
                'day_off' => 'We',
                'starting_time' => '11:45AM',
                'finishing_time' => '8:30PM'
            ],
        ]);
    }
}
