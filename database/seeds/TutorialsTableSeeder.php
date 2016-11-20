<?php

use Illuminate\Database\Seeder;

class TutorialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tutorials')->delete();

        DB::table('tutorials')->insert([
        	[
				'lecture_id' => 15,
				'section' => 'A A-TUT',
				'day' => '--W---',
				'start_time' => '10:15AM',
				'end_time' => '11:15AM',
				'place' => 'MB 3.285 SGW'
			],
			[
				'lecture_id' => 15,
				'section' => 'A B-TUT',
				'day' => '--W---',
				'start_time' => '10:15AM',
				'end_time' => '11:15AM',
				'place' => 'MB 2.285 SGW'
			],
			[
				'lecture_id' => 15,
				'section' => 'A C-TUT',
				'day' => '--W---',
				'start_time' => '10:15AM',
				'end_time' => '11:15AM',
				'place' => 'MB 1.301 SGW'
			],
			[
				'lecture_id' => 15,
				'section' => 'A D-TUT',
				'day' => '--W---',
				'start_time' => '10:15AM',
				'end_time' => '11:15AM',
				'place' => 'MB S1.105 SGW'
			],
			[
				'lecture_id' => 15,
				'section' => 'A E-TUT',
				'day' => '--W---',
				'start_time' => '11:45AM',
				'end_time' => '12:45PM',
				'place' => 'MB 3.265 SGW'
			],
			[
				'lecture_id' => 15,
				'section' => 'A F-TUT',
				'day' => '--W---',
				'start_time' => '11:45AM',
				'end_time' => '12:45PM',
				'place' => 'MB 3.285 SGW'
			],
			[
				'lecture_id' => 15,
				'section' => 'A G-TUT',
				'day' => '--W---',
				'start_time' => '11:45AM',
				'end_time' => '12:45PM',
				'place' => 'MB 2.285 SGW'
			],
			[
				'lecture_id' => 15,
				'section' => 'A H-TUT',
				'day' => '--W---',
				'start_time' => '11:45AM',
				'end_time' => '12:45PM',
				'place' => 'MB 1.301 SGW'
			],
			[
				'lecture_id' => 40,
				'section' => 'AA-TUT',
				'day' => 'M-----',
				'start_time' => '10:15AM',
				'end_time' => '11:15AM',
				'place' => 'MB 3.285 SGW'
			],
			[
				'lecture_id' => 40,
				'section' => 'AB-TUT',
				'day' => 'M-----',
				'start_time' => '10:15AM',
				'end_time' => '11:15AM',
				'place' => 'MB 2.285 SGW'
			],
			[
				'lecture_id' => 40,
				'section' => 'AC-TUT',
				'day' => 'M-----',
				'start_time' => '10:15AM',
				'end_time' => '11:15AM',
				'place' => 'MB 1.301 SGW'
			],
			[
				'lecture_id' => 40,
				'section' => 'AD-TUT',
				'day' => 'M-----',
				'start_time' => '10:15AM',
				'end_time' => '11:15AM',
				'place' => 'MB 2.255 SGW'
			],
			[
				'lecture_id' => 40,
				'section' => 'AE-TUT',
				'day' => 'M-----',
				'start_time' => '10:15AM',
				'end_time' => '11:15AM',
				'place' => 'MB 2.265 SGW'
			],
			[
				'lecture_id' => 40,
				'section' => 'AF-TUT',
				'day' => 'M-----',
				'start_time' => '10:15AM',
				'end_time' => '11:15AM',
				'place' => 'MB S2.105 SGW'
			],
			[
				'lecture_id' => 40,
				'section' => 'AG-TUT',
				'day' => 'M-----',
				'start_time' => '11:45AM',
				'end_time' => '12:45PM',
				'place' => 'MB 3.265 SGW'
			],
			[
				'lecture_id' => 40,
				'section' => 'AH-TUT',
				'day' => 'M-----',
				'start_time' => '11:45AM',
				'end_time' => '12:45PM',
				'place' => 'MB 3.285 SGW'
			],
			[
				'lecture_id' => 40,
				'section' => 'AI-TUT',
				'day' => 'M-----',
				'start_time' => '11:45AM',
				'end_time' => '12:45PM',
				'place' => 'MB 2.285 SGW'
			],
			[
				'lecture_id' => 40,
				'section' => 'AJ-TUT',
				'day' => 'M-----',
				'start_time' => '11:45AM',
				'end_time' => '12:45PM',
				'place' => 'MB 1.301 SGW'
			],
			[
				'lecture_id' => 40,
				'section' => 'AK-TUT',
				'day' => 'M-----',
				'start_time' => '11:45AM',
				'end_time' => '12:45PM',
				'place' => 'MB 2.255 SGW'
			],
			[
				'lecture_id' => 40,
				'section' => 'AL-TUT',
				'day' => 'M-----',
				'start_time' => '11:45AM',
				'end_time' => '12:45PM',
				'place' => 'MB 2.265 SGW'
			],
			[
				'lecture_id' => 58,
				'section' => '0101-TUT',
				'day' => '-T----',
				'start_time' => '1:30PM',
				'end_time' => '3:30PM',
				'place' => 'CC 305 LOY'
			],
			[
				'lecture_id' => 58,
				'section' => '0102-TUT',
				'day' => '-T----',
				'start_time' => '3:30PM',
				'end_time' => '5:30PM',
				'place' => 'CC 305 LOY'
			],
			[
				'lecture_id' => 58,
				'section' => '0103-TUT',
				'day' => '-T----',
				'start_time' => '1:30PM',
				'end_time' => '3:30PM',
				'place' => 'CC 314 LOY'
			],
			[
				'lecture_id' => 58,
				'section' => '0104-TUT',
				'day' => '-T----',
				'start_time' => '3:30PM',
				'end_time' => '5:30PM',
				'place' => 'CC 314 LOY'
			],
			[
				'lecture_id' => 58,
				'section' => '0105-TUT',
				'day' => '--W---',
				'start_time' => '1:30PM',
				'end_time' => '3:30PM',
				'place' => 'CC 305 LOY'
			],
			[
				'lecture_id' => 58,
				'section' => '0106-TUT',
				'day' => '--W---',
				'start_time' => '3:30PM',
				'end_time' => '5:30PM',
				'place' => 'CC 305 LOY'
			],
			[
				'lecture_id' => 58,
				'section' => '0107-TUT',
				'day' => '---T--',
				'start_time' => '1:30PM',
				'end_time' => '3:30PM',
				'place' => 'CC 305 LOY'
			],
			[
				'lecture_id' => 58,
				'section' => '0108-TUT',
				'day' => '---T--',
				'start_time' => '3:30PM',
				'end_time' => '5:30PM',
				'place' => 'CC 305 LOY'
			],
			[
				'lecture_id' => 63,
				'section' => 'LLLA-TUT',
				'day' => 'M-----',
				'start_time' => '8:30PM',
				'end_time' => '9:30PM',
				'place' => 'H 629 SGW'
			],
			[
				'lecture_id' => 63,
				'section' => 'LLLB-TUT',
				'day' => '-T----',
				'start_time' => '6:30PM',
				'end_time' => '7:30PM',
				'place' => 'H 629 SGW'
			],
			[
				'lecture_id' => 63,
				'section' => 'LLLC-TUT',
				'day' => '--W---',
				'start_time' => '7:30PM',
				'end_time' => '8:30PM',
				'place' => 'FG B080 SGW'
			],
			[
				'lecture_id' => 63,
				'section' => 'LLLD-TUT',
				'day' => '--W---',
				'start_time' => '5:45PM',
				'end_time' => '6:45PM',
				'place' => 'H 629 SGW'
			],
			[
				'lecture_id' => 66,
				'section' => 'MMMA-TUT',
				'day' => '-T----',
				'start_time' => '8:30PM',
				'end_time' => '9:20PM',
				'place' => 'H 433 SGW'
			],
			[
				'lecture_id' => 70,
				'section' => 'DDA-TUT',
				'day' => '---T--',
				'start_time' => '8:30AM',
				'end_time' => '10:10AM',
				'place' => 'H 603 SGW'
			],
			[
				'lecture_id' => 70,
				'section' => 'DDB-TUT',
				'day' => '---T--',
				'start_time' => '8:30AM',
				'end_time' => '10:10AM',
				'place' => 'H 513 SGW'
			],
			[
				'lecture_id' => 70,
				'section' => 'DDC-TUT',
				'day' => '---T--',
				'start_time' => '8:30AM',
				'end_time' => '10:10AM',
				'place' => 'H 609 SGW'
			],
			[
				'lecture_id' => 71,
				'section' => 'F FA-TUT',
				'day' => '-T----',
				'start_time' => '8:45AM',
				'end_time' => '10:25AM',
				'place' => 'H 400 SGW'
			],
			[
				'lecture_id' => 71,
				'section' => 'F FB-TUT',
				'day' => 'M-----',
				'start_time' => '10:15AM',
				'end_time' => '11:55AM',
				'place' => 'H 631 SGW'
			],
			[
				'lecture_id' => 72,
				'section' => 'D DA-TUT',
				'day' => 'M-----',
				'start_time' => '4:15PM',
				'end_time' => '5:05PM',
				'place' => 'H 523 SGW'
			],
			[
				'lecture_id' => 72,
				'section' => 'D DB-TUT',
				'day' => '----F-',
				'start_time' => '4:15PM',
				'end_time' => '5:05PM',
				'place' => 'H 523 SGW'
			],
			[
				'lecture_id' => 73,
				'section' => 'D DA-TUT',
				'day' => '--W---',
				'start_time' => '11:45AM',
				'end_time' => '1:35PM',
				'place' => 'H 967 SGW'
			],
			[
				'lecture_id' => 73,
				'section' => 'D DB-TUT',
				'day' => '----F-',
				'start_time' => '11:45AM',
				'end_time' => '1:35PM',
				'place' => 'H 811 SGW'
			],
			[
				'lecture_id' => 73,
				'section' => 'D DC-TUT',
				'day' => '----F-',
				'start_time' => '11:45AM',
				'end_time' => '1:35PM',
				'place' => 'H 815 SGW'
			],
			[
				'lecture_id' => 73,
				'section' => 'D DD-TUT',
				'day' => '--W---',
				'start_time' => '11:45AM',
				'end_time' => '1:35PM',
				'place' => 'H 917 SGW'
			],
			[
				'lecture_id' => 74,
				'section' => 'U UA-TUT',
				'day' => '----F-',
				'start_time' => '11:45AM',
				'end_time' => '1:35PM',
				'place' => 'H 817 SGW'
			],
			[
				'lecture_id' => 74,
				'section' => 'U UB-TUT',
				'day' => '-T----',
				'start_time' => '11:45AM',
				'end_time' => '1:35PM',
				'place' => 'H 819 SGW'
			],
			[
				'lecture_id' => 74,
				'section' => 'U UC-TUT',
				'day' => '----F-',
				'start_time' => '11:45AM',
				'end_time' => '1:35PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 75,
				'section' => 'U UA-TUT',
				'day' => '--W---',
				'start_time' => '2:15PM',
				'end_time' => '3:55PM',
				'place' => 'H 967 SGW'
			],
			[
				'lecture_id' => 76,
				'section' => 'Q QA-TUT',
				'day' => '----F-',
				'start_time' => '10:15AM',
				'end_time' => '11:05AM',
				'place' => 'H 423 SGW'
			],
			[
				'lecture_id' => 77,
				'section' => 'D DA-TUT',
				'day' => '---T--',
				'start_time' => '10:15AM',
				'end_time' => '11:05AM',
				'place' => 'MB S2.105 SGW'
			],
			[
				'lecture_id' => 77,
				'section' => 'D DB-TUT',
				'day' => '----F-',
				'start_time' => '11:45AM',
				'end_time' => '12:35PM',
				'place' => 'H 634 SGW'
			],
			[
				'lecture_id' => 79,
				'section' => 'S SA-TUT',
				'day' => '--W---',
				'start_time' => '2:45PM',
				'end_time' => '3:35PM',
				'place' => 'H 540 SGW'
			],
			[
				'lecture_id' => 80,
				'section' => 'H HA-TUT',
				'day' => 'M-----',
				'start_time' => '11:45AM',
				'end_time' => '12:35PM',
				'place' => 'FG B070 SGW'
			],
			[
				'lecture_id' => 81,
				'section' => 'H HA-TUT',
				'day' => 'M-----',
				'start_time' => '5:45PM',
				'end_time' => '7:35PM',
				'place' => 'FG B070 SGW'
			],
			[
				'lecture_id' => 85,
				'section' => 'DDDA-TUT',
				'day' => '-T----',
				'start_time' => '8:30PM',
				'end_time' => '9:20PM',
				'place' => 'MB S2.105 SGW'
			],
			[
				'lecture_id' => 87,
				'section' => 'ECEA-TUT',
				'day' => '-T----',
				'start_time' => '5:45PM',
				'end_time' => '7:25PM',
				'place' => 'FG B030 SGW'
			],
			[
				'lecture_id' => 87,
				'section' => 'ECEB-TUT',
				'day' => '---T--',
				'start_time' => '10:15AM',
				'end_time' => '11:55AM',
				'place' => 'H 557 SGW'
			],
			[
				'lecture_id' => 88,
				'section' => 'U UA-TUT',
				'day' => 'M-----',
				'start_time' => '2:45PM',
				'end_time' => '4:25PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 88,
				'section' => 'U UB-TUT',
				'day' => '--W---',
				'start_time' => '2:45PM',
				'end_time' => '4:25PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 88,
				'section' => 'U UC-TUT',
				'day' => 'M-----',
				'start_time' => '2:45PM',
				'end_time' => '4:25PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 89,
				'section' => 'DDDA-TUT',
				'day' => '--W---',
				'start_time' => '8:30PM',
				'end_time' => '10:10PM',
				'place' => 'MB S1.105 SGW'
			],
			[
				'lecture_id' => 89,
				'section' => 'DDDB-TUT',
				'day' => '--W---',
				'start_time' => '8:30PM',
				'end_time' => '10:10PM',
				'place' => 'MB S1.255 SGW'
			],
			[
				'lecture_id' => 89,
				'section' => 'DDDC-TUT',
				'day' => '--W---',
				'start_time' => '8:30PM',
				'end_time' => '10:10PM',
				'place' => 'MB S2.105 SGW'
			],
			[
				'lecture_id' => 90,
				'section' => 'PPPA-TUT',
				'day' => '---T--',
				'start_time' => '8:30PM',
				'end_time' => '10:10PM',
				'place' => 'MB 2.265 SGW'
			],
			[
				'lecture_id' => 90,
				'section' => 'PPPB-TUT',
				'day' => '---T--',
				'start_time' => '8:30PM',
				'end_time' => '10:10PM',
				'place' => 'MB S1.105 SGW'
			],
			[
				'lecture_id' => 90,
				'section' => 'PPPC-TUT',
				'day' => '---T--',
				'start_time' => '8:30PM',
				'end_time' => '10:10PM',
				'place' => 'MB S2.105 SGW'
			],
			[
				'lecture_id' => 91,
				'section' => 'Q QA-TUT',
				'day' => '-T----',
				'start_time' => '4:15PM',
				'end_time' => '5:55PM',
				'place' => 'MB 2.285 SGW'
			],
			[
				'lecture_id' => 91,
				'section' => 'Q QB-TUT',
				'day' => '---T--',
				'start_time' => '2:45PM',
				'end_time' => '4:25PM',
				'place' => 'MB S1.105 SGW'
			],
			[
				'lecture_id' => 91,
				'section' => 'Q QC-TUT',
				'day' => '---T--',
				'start_time' => '2:45PM',
				'end_time' => '4:25PM',
				'place' => 'MB S1.255 SGW'
			],
			[
				'lecture_id' => 92,
				'section' => 'R RA-TUT',
				'day' => '-T----',
				'start_time' => '4:15PM',
				'end_time' => '5:55PM',
				'place' => 'MB 1.301 SGW'
			],
			[
				'lecture_id' => 92,
				'section' => 'R RB-TUT',
				'day' => '-T----',
				'start_time' => '4:15PM',
				'end_time' => '5:55PM',
				'place' => 'MB 2.255 SGW'
			],
			[
				'lecture_id' => 92,
				'section' => 'R RC-TUT',
				'day' => '-T----',
				'start_time' => '4:15PM',
				'end_time' => '5:55PM',
				'place' => 'MB 2.265 SGW'
			],
			[
				'lecture_id' => 93,
				'section' => 'Q QA-TUT',
				'day' => '-T----',
				'start_time' => '10:15AM',
				'end_time' => '11:55AM',
				'place' => 'H 523 SGW'
			],
			[
				'lecture_id' => 93,
				'section' => 'Q QB-TUT',
				'day' => '---T--',
				'start_time' => '10:15AM',
				'end_time' => '11:55AM',
				'place' => 'H 523 SGW'
			],
			[
				'lecture_id' => 94,
				'section' => 'EEEA-TUT',
				'day' => '-T----',
				'start_time' => '11:45AM',
				'end_time' => '1:25PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 94,
				'section' => 'EEEB-TUT',
				'day' => '---T--',
				'start_time' => '11:45AM',
				'end_time' => '1:25PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 95,
				'section' => 'FFFA-TUT',
				'day' => 'M-----',
				'start_time' => '5:45PM',
				'end_time' => '7:25PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 95,
				'section' => 'FFFB-TUT',
				'day' => '----F-',
				'start_time' => '11:45AM',
				'end_time' => '1:25PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 96,
				'section' => 'P PA-TUT',
				'day' => '----F-',
				'start_time' => '8:45AM',
				'end_time' => '10:25AM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 96,
				'section' => 'P PB-TUT',
				'day' => 'M-----',
				'start_time' => '10:15AM',
				'end_time' => '11:55AM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 97,
				'section' => 'Q QA-TUT',
				'day' => 'M-----',
				'start_time' => '10:15AM',
				'end_time' => '11:55AM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 97,
				'section' => 'Q QB-TUT',
				'day' => '--W---',
				'start_time' => '10:15AM',
				'end_time' => '11:55AM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 97,
				'section' => 'Q QC-TUT',
				'day' => '--W---',
				'start_time' => '10:15AM',
				'end_time' => '11:55AM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 98,
				'section' => 'R RA-TUT',
				'day' => 'M-----',
				'start_time' => '10:15AM',
				'end_time' => '11:55AM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 98,
				'section' => 'R RB-TUT',
				'day' => '--W---',
				'start_time' => '10:15AM',
				'end_time' => '11:55AM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 98,
				'section' => 'R RC-TUT',
				'day' => '----F-',
				'start_time' => '8:45AM',
				'end_time' => '10:25AM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 99,
				'section' => 'D DA-TUT',
				'day' => 'M-----',
				'start_time' => '12:45PM',
				'end_time' => '2:35PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 99,
				'section' => 'D DB-TUT',
				'day' => '--W---',
				'start_time' => '4:15PM',
				'end_time' => '5:55PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 99,
				'section' => 'D DC-TUT',
				'day' => 'M-----',
				'start_time' => '4:15PM',
				'end_time' => '5:55PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 100,
				'section' => 'E EA-TUT',
				'day' => 'M-----',
				'start_time' => '12:45PM',
				'end_time' => '2:35PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 100,
				'section' => 'E EB-TUT',
				'day' => '--W---',
				'start_time' => '4:15PM',
				'end_time' => '5:55PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 100,
				'section' => 'E EC-TUT',
				'day' => 'M-----',
				'start_time' => '4:15PM',
				'end_time' => '5:55PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 101,
				'section' => 'DDDA-TUT',
				'day' => 'M-----',
				'start_time' => '8:30PM',
				'end_time' => '9:20PM',
				'place' => 'MB S2.105 SGW'
			],
			[
				'lecture_id' => 101,
				'section' => 'DDDB-TUT',
				'day' => 'M-----',
				'start_time' => '9:30PM',
				'end_time' => '10:20PM',
				'place' => 'MB S2.105 SGW'
			],
			[
				'lecture_id' => 102,
				'section' => 'E EA-TUT',
				'day' => '---T--',
				'start_time' => '11:45AM',
				'end_time' => '12:35PM',
				'place' => 'H 521 SGW'
			],
			[
				'lecture_id' => 102,
				'section' => 'E EB-TUT',
				'day' => '-T----',
				'start_time' => '11:45AM',
				'end_time' => '12:35PM',
				'place' => 'H 535 SGW'
			],
			[
				'lecture_id' => 103,
				'section' => 'G GA-TUT',
				'day' => '-T----',
				'start_time' => '2:45PM',
				'end_time' => '3:35PM',
				'place' => 'H 544 SGW'
			],
			[
				'lecture_id' => 103,
				'section' => 'G GB-TUT',
				'day' => '-T----',
				'start_time' => '2:45PM',
				'end_time' => '3:35PM',
				'place' => 'H 540 SGW'
			],
			[
				'lecture_id' => 104,
				'section' => 'F FA-TUT',
				'day' => 'M-----',
				'start_time' => '11:45AM',
				'end_time' => '1:35PM',
				'place' => 'H 431 SGW'
			],
			[
				'lecture_id' => 104,
				'section' => 'F FB-TUT',
				'day' => 'M-----',
				'start_time' => '11:45AM',
				'end_time' => '1:35PM',
				'place' => 'H 605 SGW'
			],
			[
				'lecture_id' => 107,
				'section' => 'DDDA-TUT',
				'day' => '-T----',
				'start_time' => '8:30PM',
				'end_time' => '9:20PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 107,
				'section' => 'DDDB-TUT',
				'day' => '-T----',
				'start_time' => '8:30PM',
				'end_time' => '9:20PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 108,
				'section' => 'DDDA-TUT',
				'day' => '-T----',
				'start_time' => '2:45PM',
				'end_time' => '3:35PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 108,
				'section' => 'DDDB-TUT',
				'day' => '---T--',
				'start_time' => '2:45PM',
				'end_time' => '3:35PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 108,
				'section' => 'DDDC-TUT',
				'day' => '-T----',
				'start_time' => '2:45PM',
				'end_time' => '3:35PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 109,
				'section' => 'U UA-TUT',
				'day' => 'M-----',
				'start_time' => '10:15AM',
				'end_time' => '11:05AM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 109,
				'section' => 'U UB-TUT',
				'day' => 'M-----',
				'start_time' => '10:15AM',
				'end_time' => '11:05AM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 109,
				'section' => 'U UC-TUT',
				'day' => '--W---',
				'start_time' => '10:15AM',
				'end_time' => '11:05AM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 110,
				'section' => 'W WA-TUT',
				'day' => 'M-----',
				'start_time' => '10:15AM',
				'end_time' => '11:05AM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 110,
				'section' => 'W WB-TUT',
				'day' => '--W---',
				'start_time' => '10:15AM',
				'end_time' => '11:05AM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 110,
				'section' => 'W WC-TUT',
				'day' => '--W---',
				'start_time' => '10:15AM',
				'end_time' => '11:05AM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 111,
				'section' => 'D DA-TUT',
				'day' => '----F-',
				'start_time' => '2:45PM',
				'end_time' => '3:35PM',
				'place' => 'H 615 SGW'
			],
			[
				'lecture_id' => 111,
				'section' => 'D DB-TUT',
				'day' => 'M-----',
				'start_time' => '11:45AM',
				'end_time' => '12:35PM',
				'place' => 'H 615 SGW'
			],
			[
				'lecture_id' => 112,
				'section' => 'F FA-TUT',
				'day' => '----F-',
				'start_time' => '2:45PM',
				'end_time' => '3:35PM',
				'place' => 'H 544 SGW'
			],
			[
				'lecture_id' => 112,
				'section' => 'F FB-TUT',
				'day' => 'M-----',
				'start_time' => '11:45AM',
				'end_time' => '12:35PM',
				'place' => 'H 603-1 SGW'
			],
			[
				'lecture_id' => 113,
				'section' => 'G GA-TUT',
				'day' => '----F-',
				'start_time' => '2:45PM',
				'end_time' => '3:35PM',
				'place' => 'H 627 SGW'
			],
			[
				'lecture_id' => 113,
				'section' => 'G GB-TUT',
				'day' => 'M-----',
				'start_time' => '11:45AM',
				'end_time' => '12:35PM',
				'place' => 'H 537 SGW'
			],
			[
				'lecture_id' => 114,
				'section' => 'H HA-TUT',
				'day' => '--W---',
				'start_time' => '2:45PM',
				'end_time' => '3:35PM',
				'place' => 'MB S2.105 SGW'
			],
			[
				'lecture_id' => 114,
				'section' => 'H HB-TUT',
				'day' => '----F-',
				'start_time' => '2:45PM',
				'end_time' => '3:35PM',
				'place' => 'MB S1.255 SGW'
			],
			[
				'lecture_id' => 115,
				'section' => 'F FA-TUT',
				'day' => '---T--',
				'start_time' => '12:15PM',
				'end_time' => '1:05PM',
				'place' => 'H 615 SGW'
			],
			[
				'lecture_id' => 115,
				'section' => 'F FB-TUT',
				'day' => '---T--',
				'start_time' => '12:15PM',
				'end_time' => '1:05PM',
				'place' => 'H 400-2 SGW'
			],
			[
				'lecture_id' => 116,
				'section' => 'E EA-TUT',
				'day' => '----F-',
				'start_time' => '1:15PM',
				'end_time' => '2:05PM',
				'place' => 'MB 2.265 SGW'
			],
			[
				'lecture_id' => 116,
				'section' => 'E EF-TUT',
				'day' => '----F-',
				'start_time' => '1:15PM',
				'end_time' => '2:05PM',
				'place' => 'MB S1.105 SGW'
			],
			[
				'lecture_id' => 117,
				'section' => 'DDDA-TUT',
				'day' => '----F-',
				'start_time' => '8:30PM',
				'end_time' => '9:20PM',
				'place' => 'H 431 SGW'
			],
			[
				'lecture_id' => 122,
				'section' => 'FFFA-TUT',
				'day' => '---T--',
				'start_time' => '8:30PM',
				'end_time' => '9:20PM',
				'place' => 'H 633-1 SGW'
			],
			[
				'lecture_id' => 122,
				'section' => 'FFFB-TUT',
				'day' => '---T--',
				'start_time' => '8:30PM',
				'end_time' => '9:20PM',
				'place' => 'H 632 SGW'
			],
			[
				'lecture_id' => 124,
				'section' => 'N NA-TUT',
				'day' => '---T--',
				'start_time' => '1:15PM',
				'end_time' => '2:05PM',
				'place' => 'FG B080 SGW'
			],
			[
				'lecture_id' => 133,
				'section' => 'D DA-TUT',
				'day' => '----F-',
				'start_time' => '3:15PM',
				'end_time' => '4:05PM',
				'place' => 'H 564 SGW'
			],
			[
				'lecture_id' => 133,
				'section' => 'D DB-TUT',
				'day' => '-T----',
				'start_time' => '2:45PM',
				'end_time' => '3:35PM',
				'place' => 'H 564 SGW'
			],
			[
				'lecture_id' => 134,
				'section' => 'D DA-TUT',
				'day' => '---T--',
				'start_time' => '2:30PM',
				'end_time' => '4:10PM',
				'place' => 'H 603-1 SGW'
			],
			[
				'lecture_id' => 134,
				'section' => 'D DB-TUT',
				'day' => 'M-----',
				'start_time' => '2:30PM',
				'end_time' => '4:10PM',
				'place' => 'H 564 SGW'
			],
			[
				'lecture_id' => 135,
				'section' => 'R RA-TUT',
				'day' => '-T----',
				'start_time' => '2:30PM',
				'end_time' => '4:10PM',
				'place' => 'H 603-1 SGW'
			],
			[
				'lecture_id' => 135,
				'section' => 'R RB-TUT',
				'day' => 'M-----',
				'start_time' => '2:30PM',
				'end_time' => '4:10PM',
				'place' => 'H 537 SGW'
			],
			[
				'lecture_id' => 136,
				'section' => 'T TA-TUT',
				'day' => '----F-',
				'start_time' => '1:15PM',
				'end_time' => '2:55PM',
				'place' => 'H 540 SGW'
			],
			[
				'lecture_id' => 136,
				'section' => 'T TB-TUT',
				'day' => '----F-',
				'start_time' => '1:15PM',
				'end_time' => '2:55PM',
				'place' => 'H 537 SGW'
			],
			[
				'lecture_id' => 137,
				'section' => 'V VA-TUT',
				'day' => '--W---',
				'start_time' => '2:45PM',
				'end_time' => '4:25PM',
				'place' => 'H 537 SGW'
			],
			[
				'lecture_id' => 137,
				'section' => 'V VB-TUT',
				'day' => '--W---',
				'start_time' => '2:45PM',
				'end_time' => '4:25PM',
				'place' => 'H 564 SGW'
			],
			[
				'lecture_id' => 138,
				'section' => 'F FA-TUT',
				'day' => 'M-----',
				'start_time' => '2:30PM',
				'end_time' => '4:10PM',
				'place' => 'H 603-1 SGW'
			],
			[
				'lecture_id' => 138,
				'section' => 'F FB-TUT',
				'day' => '----F-',
				'start_time' => '2:35PM',
				'end_time' => '4:15PM',
				'place' => 'H 603-1 SGW'
			],
			[
				'lecture_id' => 139,
				'section' => 'F FA-TUT',
				'day' => '---T--',
				'start_time' => '9:10AM',
				'end_time' => '10:00AM',
				'place' => 'MB S2.115 SGW'
			],
			[
				'lecture_id' => 139,
				'section' => 'F FB-TUT',
				'day' => '---T--',
				'start_time' => '9:10AM',
				'end_time' => '10:00AM',
				'place' => 'H 544 SGW'
			],
			[
				'lecture_id' => 139,
				'section' => 'F FC-TUT',
				'day' => '-T----',
				'start_time' => '9:10AM',
				'end_time' => '10:00AM',
				'place' => 'H 607 SGW'
			],
			[
				'lecture_id' => 140,
				'section' => 'U UA-TUT',
				'day' => '----F-',
				'start_time' => '1:15PM',
				'end_time' => '2:05PM',
				'place' => 'H 400 SGW'
			],
			[
				'lecture_id' => 140,
				'section' => 'U UB-TUT',
				'day' => '----F-',
				'start_time' => '1:15PM',
				'end_time' => '2:05PM',
				'place' => 'H 513 SGW'
			],
			[
				'lecture_id' => 141,
				'section' => 'H HA-TUT',
				'day' => 'M-----',
				'start_time' => '8:45AM',
				'end_time' => '9:35AM',
				'place' => 'H 537 SGW'
			],
			[
				'lecture_id' => 141,
				'section' => 'H HB-TUT',
				'day' => 'M-----',
				'start_time' => '8:45AM',
				'end_time' => '9:35AM',
				'place' => 'H 564 SGW'
			],
			[
				'lecture_id' => 143,
				'section' => 'R RA-TUT',
				'day' => '-T----',
				'start_time' => '11:45AM',
				'end_time' => '12:35PM',
				'place' => 'H 629 SGW'
			],
			[
				'lecture_id' => 143,
				'section' => 'R RB-TUT',
				'day' => 'M-----',
				'start_time' => '8:45AM',
				'end_time' => '9:35AM',
				'place' => 'FG B040 SGW'
			],
			[
				'lecture_id' => 144,
				'section' => 'H HA-TUT',
				'day' => 'M-----',
				'start_time' => '5:45PM',
				'end_time' => '7:35PM',
				'place' => 'FG B070 SGW'
			],
			[
				'lecture_id' => 159,
				'section' => 'N NA-TUT',
				'day' => '----F-',
				'start_time' => '11:45AM',
				'end_time' => '12:35PM',
				'place' => 'H 615 SGW'
			],
			[
				'lecture_id' => 159,
				'section' => 'N NB-TUT',
				'day' => '----F-',
				'start_time' => '11:45AM',
				'end_time' => '12:35PM',
				'place' => 'H 633-1 SGW'
			],
			[
				'lecture_id' => 159,
				'section' => 'N NC-TUT',
				'day' => '----F-',
				'start_time' => '11:45AM',
				'end_time' => '12:35PM',
				'place' => 'H 632 SGW'
			],
			[
				'lecture_id' => 160,
				'section' => 'A AL-TUT',
				'day' => 'M-----',
				'start_time' => '8:20AM',
				'end_time' => '10:00AM',
				'place' => 'MB S2.105 SGW'
			],
			[
				'lecture_id' => 160,
				'section' => 'A AM-TUT',
				'day' => 'M-----',
				'start_time' => '5:45PM',
				'end_time' => '7:25PM',
				'place' => 'MB 2.265 SGW'
			],
			[
				'lecture_id' => 160,
				'section' => 'A AN-TUT',
				'day' => 'M-----',
				'start_time' => '5:45PM',
				'end_time' => '7:25PM',
				'place' => 'MB S1.105 SGW'
			],
			[
				'lecture_id' => 160,
				'section' => 'A AO-TUT',
				'day' => 'M-----',
				'start_time' => '5:45PM',
				'end_time' => '7:25PM',
				'place' => 'MB S1.255 SGW'
			],
			[
				'lecture_id' => 161,
				'section' => 'B BA-TUT',
				'day' => '--W---',
				'start_time' => '4:15PM',
				'end_time' => '5:55PM',
				'place' => 'MB 3.285 SGW'
			],
			[
				'lecture_id' => 161,
				'section' => 'B BB-TUT',
				'day' => '--W---',
				'start_time' => '5:45PM',
				'end_time' => '7:25PM',
				'place' => 'MB 2.285 SGW'
			],
			[
				'lecture_id' => 161,
				'section' => 'B BC-TUT',
				'day' => '--W---',
				'start_time' => '4:15PM',
				'end_time' => '5:55PM',
				'place' => 'MB 1.301 SGW'
			],
			[
				'lecture_id' => 161,
				'section' => 'B BD-TUT',
				'day' => '--W---',
				'start_time' => '5:45PM',
				'end_time' => '7:25PM',
				'place' => 'MB 2.255 SGW'
			],
			[
				'lecture_id' => 162,
				'section' => 'BBBN-TUT',
				'day' => '-T----',
				'start_time' => '8:30PM',
				'end_time' => '10:10PM',
				'place' => 'MB S1.255 SGW'
			],
			[
				'lecture_id' => 162,
				'section' => 'BBBO-TUT',
				'day' => '----F-',
				'start_time' => '6:00PM',
				'end_time' => '7:40PM',
				'place' => 'MB S2.105 SGW'
			],
			[
				'lecture_id' => 162,
				'section' => 'BBBP-TUT',
				'day' => '----F-',
				'start_time' => '4:15PM',
				'end_time' => '5:55PM',
				'place' => 'MB S2.285 SGW'
			],
			[
				'lecture_id' => 162,
				'section' => 'BBBQ-TUT',
				'day' => '---T--',
				'start_time' => '5:45PM',
				'end_time' => '7:25PM',
				'place' => 'MB 1.301 SGW'
			],
			[
				'lecture_id' => 167,
				'section' => 'ECEA-TUT',
				'day' => '--W---',
				'start_time' => '8:45AM',
				'end_time' => '9:35AM',
				'place' => 'H 401 SGW'
			],
			[
				'lecture_id' => 167,
				'section' => 'ECEB-TUT',
				'day' => '--W---',
				'start_time' => '8:45AM',
				'end_time' => '9:35AM',
				'place' => 'H 401 SGW'
			],
			[
				'lecture_id' => 167,
				'section' => 'ECEC-TUT',
				'day' => '---T--',
				'start_time' => '4:15PM',
				'end_time' => '5:05PM',
				'place' => 'FG B055 SGW'
			],
			[
				'lecture_id' => 167,
				'section' => 'ECED-TUT',
				'day' => '---T--',
				'start_time' => '4:15PM',
				'end_time' => '5:05PM',
				'place' => 'FG B055 SGW'
			],
			[
				'lecture_id' => 167,
				'section' => 'ECEE-TUT',
				'day' => '---T--',
				'start_time' => '5:45PM',
				'end_time' => '6:35PM',
				'place' => 'H 403 SGW'
			],
			[
				'lecture_id' => 167,
				'section' => 'ECEF-TUT',
				'day' => '---T--',
				'start_time' => '5:45PM',
				'end_time' => '6:35PM',
				'place' => 'H 403 SGW'
			],
			[
				'lecture_id' => 167,
				'section' => 'ECEG-TUT',
				'day' => '-T----',
				'start_time' => '4:15PM',
				'end_time' => '5:05PM',
				'place' => 'H 423 SGW'
			],
			[
				'lecture_id' => 167,
				'section' => 'ECEH-TUT',
				'day' => 'M-----',
				'start_time' => '8:45AM',
				'end_time' => '9:35AM',
				'place' => 'H 423 SGW'
			],
			[
				'lecture_id' => 167,
				'section' => 'ECEI-TUT',
				'day' => '---T--',
				'start_time' => '6:45PM',
				'end_time' => '7:35PM',
				'place' => 'H 403 SGW'
			],
			[
				'lecture_id' => 167,
				'section' => 'ECEJ-TUT',
				'day' => '---T--',
				'start_time' => '6:45PM',
				'end_time' => '7:35PM',
				'place' => 'H 403 SGW'
			],
			[
				'lecture_id' => 171,
				'section' => 'P PA-TUT',
				'day' => '----F-',
				'start_time' => '1:15PM',
				'end_time' => '2:55PM',
				'place' => 'MB S1.115 SGW'
			],
			[
				'lecture_id' => 171,
				'section' => 'P PB-TUT',
				'day' => '----F-',
				'start_time' => '1:15PM',
				'end_time' => '2:55PM',
				'place' => 'MB S1.235 SGW'
			],
			[
				'lecture_id' => 172,
				'section' => 'R RA-TUT',
				'day' => 'M-----',
				'start_time' => '8:20AM',
				'end_time' => '10:00AM',
				'place' => 'MB S2.115 SGW'
			],
			[
				'lecture_id' => 172,
				'section' => 'R RB-TUT',
				'day' => 'M-----',
				'start_time' => '8:20AM',
				'end_time' => '10:00AM',
				'place' => 'H 521 SGW'
			],
			[
				'lecture_id' => 173,
				'section' => 'T TA-TUT',
				'day' => 'M-----',
				'start_time' => '1:15PM',
				'end_time' => '2:55PM',
				'place' => 'FG B030 SGW'
			],
			[
				'lecture_id' => 173,
				'section' => 'T TB-TUT',
				'day' => 'M-----',
				'start_time' => '1:15PM',
				'end_time' => '2:55PM',
				'place' => 'H 433 SGW'
			],
			[
				'lecture_id' => 174,
				'section' => 'U UA-TUT',
				'day' => '----F-',
				'start_time' => '2:15PM',
				'end_time' => '3:55PM',
				'place' => 'MB S2.401 SGW'
			],
			[
				'lecture_id' => 174,
				'section' => 'U UB-TUT',
				'day' => 'M-----',
				'start_time' => '2:15PM',
				'end_time' => '3:55PM',
				'place' => 'H 605 SGW'
			],
			[
				'lecture_id' => 175,
				'section' => 'V VA-TUT',
				'day' => '---T--',
				'start_time' => '1:45PM',
				'end_time' => '3:25PM',
				'place' => 'H 521 SGW'
			],
			[
				'lecture_id' => 175,
				'section' => 'V VB-TUT',
				'day' => 'M-----',
				'start_time' => '8:20AM',
				'end_time' => '10:00AM',
				'place' => 'FG B070 SGW'
			],
			[
				'lecture_id' => 176,
				'section' => 'X XA-TUT',
				'day' => 'M-----',
				'start_time' => '1:15PM',
				'end_time' => '2:55PM',
				'place' => 'MB 3.430 SGW'
			],
			[
				'lecture_id' => 176,
				'section' => 'X XB-TUT',
				'day' => 'M-----',
				'start_time' => '1:15PM',
				'end_time' => '2:55PM',
				'place' => 'MB 2.430 SGW'
			],
			[
				'lecture_id' => 177,
				'section' => 'XXXE-TUT',
				'day' => '----F-',
				'start_time' => '3:45PM',
				'end_time' => '5:25PM',
				'place' => 'MB S1.401 SGW'
			],
			[
				'lecture_id' => 177,
				'section' => 'XXXF-TUT',
				'day' => '----F-',
				'start_time' => '3:45PM',
				'end_time' => '5:25PM',
				'place' => 'MB S2.115 SGW'
			],
			[
				'lecture_id' => 178,
				'section' => 'P PA-TUT',
				'day' => 'M-----',
				'start_time' => '10:45AM',
				'end_time' => '12:25PM',
				'place' => 'MB 2.430 SGW'
			],
			[
				'lecture_id' => 178,
				'section' => 'P PB-TUT',
				'day' => 'M-----',
				'start_time' => '10:45AM',
				'end_time' => '12:25PM',
				'place' => 'MB 5.265 SGW'
			],
			[
				'lecture_id' => 179,
				'section' => 'Q QA-TUT',
				'day' => 'M-----',
				'start_time' => '10:45AM',
				'end_time' => '12:25PM',
				'place' => 'MB 5.275 SGW'
			],
			[
				'lecture_id' => 179,
				'section' => 'Q QB-TUT',
				'day' => 'M-----',
				'start_time' => '10:45AM',
				'end_time' => '12:25PM',
				'place' => 'H 521 SGW'
			],
			[
				'lecture_id' => 180,
				'section' => 'T TA-TUT',
				'day' => '----F-',
				'start_time' => '1:15PM',
				'end_time' => '2:55PM',
				'place' => 'FG B055 SGW'
			],
			[
				'lecture_id' => 180,
				'section' => 'T TB-TUT',
				'day' => '----F-',
				'start_time' => '1:15PM',
				'end_time' => '2:55PM',
				'place' => 'FG B080 SGW'
			],
			[
				'lecture_id' => 181,
				'section' => 'V VA-TUT',
				'day' => 'M-----',
				'start_time' => '8:25AM',
				'end_time' => '10:05AM',
				'place' => 'FG B055 SGW'
			],
			[
				'lecture_id' => 181,
				'section' => 'V VB-TUT',
				'day' => 'M-----',
				'start_time' => '8:25AM',
				'end_time' => '10:05AM',
				'place' => 'FG B080 SGW'
			],
			[
				'lecture_id' => 182,
				'section' => 'X XA-TUT',
				'day' => '---T--',
				'start_time' => '5:45PM',
				'end_time' => '7:25PM',
				'place' => 'FG B080 SGW'
			],
			[
				'lecture_id' => 182,
				'section' => 'X XB-TUT',
				'day' => '--W---',
				'start_time' => '5:45PM',
				'end_time' => '7:25PM',
				'place' => 'FG B080 SGW'
			],
			[
				'lecture_id' => 183,
				'section' => 'XXXE-TUT',
				'day' => 'M-----',
				'start_time' => '8:30PM',
				'end_time' => '10:10PM',
				'place' => 'H 403 SGW'
			],
			[
				'lecture_id' => 183,
				'section' => 'XXXF-TUT',
				'day' => 'M-----',
				'start_time' => '8:30PM',
				'end_time' => '10:10PM',
				'place' => 'H 423 SGW'
			],
			[
				'lecture_id' => 184,
				'section' => 'YYYA-TUT',
				'day' => '-T----',
				'start_time' => '8:30PM',
				'end_time' => '10:10PM',
				'place' => 'H 403 SGW'
			],
			[
				'lecture_id' => 184,
				'section' => 'YYYB-TUT',
				'day' => '-T----',
				'start_time' => '8:30PM',
				'end_time' => '10:10PM',
				'place' => 'H 423 SGW'
			],
			[
				'lecture_id' => 185,
				'section' => 'F FA-TUT',
				'day' => '--W---',
				'start_time' => '8:20AM',
				'end_time' => '10:10AM',
				'place' => 'MB S1.435 SGW'
			],
			[
				'lecture_id' => 185,
				'section' => 'F FB-TUT',
				'day' => '----F-',
				'start_time' => '8:20AM',
				'end_time' => '10:10AM',
				'place' => 'MB S1.435 SGW'
			],
			[
				'lecture_id' => 186,
				'section' => 'M MA-TUT',
				'day' => '----F-',
				'start_time' => '4:15PM',
				'end_time' => '5:55PM',
				'place' => 'MB S2.401 SGW'
			],
			[
				'lecture_id' => 186,
				'section' => 'M MB-TUT',
				'day' => '----F-',
				'start_time' => '4:15PM',
				'end_time' => '5:55PM',
				'place' => 'H 521 SGW'
			],
			[
				'lecture_id' => 187,
				'section' => 'T TA-TUT',
				'day' => '----F-',
				'start_time' => '11:45AM',
				'end_time' => '1:25PM',
				'place' => 'H 557 SGW'
			],
			[
				'lecture_id' => 187,
				'section' => 'T TB-TUT',
				'day' => '----F-',
				'start_time' => '4:15PM',
				'end_time' => '5:55PM',
				'place' => 'FG B070 SGW'
			],
			[
				'lecture_id' => 188,
				'section' => 'XA-TUT',
				'day' => '----F-',
				'start_time' => '11:45AM',
				'end_time' => '1:25PM',
				'place' => 'MB S2.401 SGW'
			],
			[
				'lecture_id' => 188,
				'section' => 'XB-TUT',
				'day' => '----F-',
				'start_time' => '11:45AM',
				'end_time' => '1:25PM',
				'place' => 'FG B070 SGW'
			],
			[
				'lecture_id' => 189,
				'section' => 'F FA-TUT',
				'day' => '---T--',
				'start_time' => '5:45PM',
				'end_time' => '7:35PM',
				'place' => 'MB 2.265 SGW'
			],
			[
				'lecture_id' => 189,
				'section' => 'F FB-TUT',
				'day' => '-T----',
				'start_time' => '2:15PM',
				'end_time' => '4:05PM',
				'place' => 'MB S1.105 SGW'
			],
			[
				'lecture_id' => 190,
				'section' => 'FFFA-TUT',
				'day' => 'M-----',
				'start_time' => '5:45PM',
				'end_time' => '6:35PM',
				'place' => 'EV 3.309 SGW'
			],
			[
				'lecture_id' => 190,
				'section' => 'FFFB-TUT',
				'day' => 'M-----',
				'start_time' => '6:45PM',
				'end_time' => '7:35PM',
				'place' => 'EV 3.309 SGW'
			],
			[
				'lecture_id' => 190,
				'section' => 'FFFC-TUT',
				'day' => 'M-----',
				'start_time' => '5:45PM',
				'end_time' => '6:35PM',
				'place' => 'EV 1.162 SGW'
			],
			[
				'lecture_id' => 190,
				'section' => 'FFFD-TUT',
				'day' => '--W---',
				'start_time' => '6:45PM',
				'end_time' => '7:35PM',
				'place' => 'EV 3.309 SGW'
			],
			[
				'lecture_id' => 191,
				'section' => 'G GA-TUT',
				'day' => '-T----',
				'start_time' => '5:45PM',
				'end_time' => '6:35PM',
				'place' => 'EV 1.162 SGW'
			],
			[
				'lecture_id' => 191,
				'section' => 'G GB-TUT',
				'day' => '-T----',
				'start_time' => '6:45PM',
				'end_time' => '7:35PM',
				'place' => 'EV 1.162 SGW'
			],
			[
				'lecture_id' => 191,
				'section' => 'G GC-TUT',
				'day' => '-T----',
				'start_time' => '5:45PM',
				'end_time' => '6:35PM',
				'place' => 'EV 3.309 SGW'
			],
			[
				'lecture_id' => 191,
				'section' => 'G GD-TUT',
				'day' => '---T--',
				'start_time' => '6:45PM',
				'end_time' => '7:35PM',
				'place' => 'EV 3.309 SGW'
			],
			[
				'lecture_id' => 192,
				'section' => 'H HA-TUT',
				'day' => '---T--',
				'start_time' => '5:45PM',
				'end_time' => '6:35PM',
				'place' => 'EV 3.309 SGW'
			],
			[
				'lecture_id' => 192,
				'section' => 'H HB-TUT',
				'day' => '---T--',
				'start_time' => '7:45PM',
				'end_time' => '8:35PM',
				'place' => 'EV 3.309 SGW'
			],
			[
				'lecture_id' => 192,
				'section' => 'H HC-TUT',
				'day' => '-T----',
				'start_time' => '7:45PM',
				'end_time' => '8:35PM',
				'place' => 'EV 1.162 SGW'
			],
			[
				'lecture_id' => 193,
				'section' => 'IIIA-TUT',
				'day' => '--W---',
				'start_time' => '5:45PM',
				'end_time' => '6:35PM',
				'place' => 'EV 3.309 SGW'
			],
			[
				'lecture_id' => 193,
				'section' => 'IIIB-TUT',
				'day' => '--W---',
				'start_time' => '6:45PM',
				'end_time' => '7:35PM',
				'place' => 'EV 1.162 SGW'
			],
			[
				'lecture_id' => 195,
				'section' => 'T TA-TUT',
				'day' => '-T----',
				'start_time' => '8:30AM',
				'end_time' => '10:10AM',
				'place' => 'H 521 SGW'
			],
			[
				'lecture_id' => 195,
				'section' => 'T TB-TUT',
				'day' => '---T--',
				'start_time' => '8:30AM',
				'end_time' => '10:10AM',
				'place' => 'H 521 SGW'
			],
			[
				'lecture_id' => 196,
				'section' => 'X XA-TUT',
				'day' => '-T----',
				'start_time' => '8:30AM',
				'end_time' => '10:10AM',
				'place' => 'FG B070 SGW'
			],
			[
				'lecture_id' => 196,
				'section' => 'X XB-TUT',
				'day' => '---T--',
				'start_time' => '8:30AM',
				'end_time' => '10:10AM',
				'place' => 'FG B070 SGW'
			],
			[
				'lecture_id' => 197,
				'section' => 'Y YA-TUT',
				'day' => '--W---',
				'start_time' => '8:45AM',
				'end_time' => '10:25AM',
				'place' => 'MB 5.275 SGW'
			],
			[
				'lecture_id' => 197,
				'section' => 'Y YB-TUT',
				'day' => '--W---',
				'start_time' => '8:45AM',
				'end_time' => '10:25AM',
				'place' => 'H 521 SGW'
			],
			[
				'lecture_id' => 198,
				'section' => 'ECEA-TUT',
				'day' => 'M-----',
				'start_time' => '10:15AM',
				'end_time' => '11:05AM',
				'place' => 'H 537 SGW'
			],
			[
				'lecture_id' => 198,
				'section' => 'ECEB-TUT',
				'day' => '--W---',
				'start_time' => '10:15AM',
				'end_time' => '11:05AM',
				'place' => 'H 603-1 SGW'
			],
			[
				'lecture_id' => 198,
				'section' => 'ECEC-TUT',
				'day' => '----F-',
				'start_time' => '1:15PM',
				'end_time' => '2:05PM',
				'place' => 'H 621 SGW'
			],
			[
				'lecture_id' => 198,
				'section' => 'ECED-TUT',
				'day' => '--W---',
				'start_time' => '1:15PM',
				'end_time' => '2:05PM',
				'place' => 'H 537 SGW'
			],
			[
				'lecture_id' => 198,
				'section' => 'ECEF-TUT',
				'day' => '----F-',
				'start_time' => '1:15PM',
				'end_time' => '2:05PM',
				'place' => 'H 544 SGW'
			],
			[
				'lecture_id' => 198,
				'section' => 'ECEG-TUT',
				'day' => '--W---',
				'start_time' => '1:15PM',
				'end_time' => '2:05PM',
				'place' => 'H 564 SGW'
			],
			[
				'lecture_id' => 199,
				'section' => 'FFFA-TUT',
				'day' => '-T----',
				'start_time' => '5:45PM',
				'end_time' => '6:35PM',
				'place' => 'H 544 SGW'
			],
			[
				'lecture_id' => 199,
				'section' => 'FFFB-TUT',
				'day' => '--W---',
				'start_time' => '5:45PM',
				'end_time' => '6:35PM',
				'place' => 'H 540 SGW'
			],
			[
				'lecture_id' => 199,
				'section' => 'FFFC-TUT',
				'day' => '-T----',
				'start_time' => '7:15PM',
				'end_time' => '8:05PM',
				'place' => 'H 544 SGW'
			],
			[
				'lecture_id' => 200,
				'section' => 'R RA-TUT',
				'day' => 'M-----',
				'start_time' => '11:45AM',
				'end_time' => '12:35PM',
				'place' => 'H 564 SGW'
			],
			[
				'lecture_id' => 200,
				'section' => 'R RB-TUT',
				'day' => 'M-----',
				'start_time' => '10:15AM',
				'end_time' => '11:05AM',
				'place' => 'H 564 SGW'
			],
			[
				'lecture_id' => 200,
				'section' => 'R RC-TUT',
				'day' => 'M-----',
				'start_time' => '10:15AM',
				'end_time' => '11:05AM',
				'place' => 'H 603-1 SGW'
			],
			[
				'lecture_id' => 201,
				'section' => 'S SA-TUT',
				'day' => '-T----',
				'start_time' => '1:15PM',
				'end_time' => '2:05PM',
				'place' => 'H 564 SGW'
			],
			[
				'lecture_id' => 201,
				'section' => 'S SB-TUT',
				'day' => '---T--',
				'start_time' => '1:15PM',
				'end_time' => '2:05PM',
				'place' => 'H 537 SGW'
			],
			[
				'lecture_id' => 202,
				'section' => 'F FA-TUT',
				'day' => '----F-',
				'start_time' => '2:15PM',
				'end_time' => '3:05PM',
				'place' => 'H 831 SGW'
			],
			[
				'lecture_id' => 202,
				'section' => 'F FB-TUT',
				'day' => '----F-',
				'start_time' => '4:15PM',
				'end_time' => '5:05PM',
				'place' => 'H 905 SGW'
			],
			[
				'lecture_id' => 202,
				'section' => 'F FC-TUT',
				'day' => '----F-',
				'start_time' => '5:45PM',
				'end_time' => '6:35PM',
				'place' => 'H 905 SGW'
			],
			[
				'lecture_id' => 203,
				'section' => 'M MA-TUT',
				'day' => '----F-',
				'start_time' => '3:15PM',
				'end_time' => '4:05PM',
				'place' => 'H 905 SGW'
			],
			[
				'lecture_id' => 203,
				'section' => 'M MB-TUT',
				'day' => '----F-',
				'start_time' => '3:15PM',
				'end_time' => '4:05PM',
				'place' => 'H 831 SGW'
			],
			[
				'lecture_id' => 203,
				'section' => 'M MC-TUT',
				'day' => 'M-----',
				'start_time' => '3:15PM',
				'end_time' => '4:05PM',
				'place' => 'H 831 SGW'
			],
			[
				'lecture_id' => 204,
				'section' => 'S SA-TUT',
				'day' => '----F-',
				'start_time' => '2:15PM',
				'end_time' => '3:05PM',
				'place' => 'H 917 SGW'
			],
			[
				'lecture_id' => 204,
				'section' => 'S SB-TUT',
				'day' => '----F-',
				'start_time' => '4:15PM',
				'end_time' => '5:05PM',
				'place' => 'H 917 SGW'
			],
			[
				'lecture_id' => 204,
				'section' => 'S SC-TUT',
				'day' => '----F-',
				'start_time' => '5:45PM',
				'end_time' => '6:35PM',
				'place' => 'H 817 SGW'
			],
			[
				'lecture_id' => 210,
				'section' => 'F FA-TUT',
				'day' => '-T----',
				'start_time' => '8:45AM',
				'end_time' => '10:35AM',
				'place' => 'H 967 SGW'
			],
			[
				'lecture_id' => 210,
				'section' => 'F FB-TUT',
				'day' => '-T----',
				'start_time' => '8:45AM',
				'end_time' => '10:35AM',
				'place' => 'H 905 SGW'
			],
			[
				'lecture_id' => 211,
				'section' => 'MA-TUT',
				'day' => 'M-----',
				'start_time' => '1:15PM',
				'end_time' => '3:05PM',
				'place' => 'H 967 SGW'
			],
			[
				'lecture_id' => 211,
				'section' => 'MB-TUT',
				'day' => 'M-----',
				'start_time' => '1:15PM',
				'end_time' => '3:05PM',
				'place' => 'H 905 SGW'
			],
			[
				'lecture_id' => 212,
				'section' => 'T TA-TUT',
				'day' => 'M-----',
				'start_time' => '3:15PM',
				'end_time' => '5:05PM',
				'place' => 'H 967 SGW'
			],
			[
				'lecture_id' => 212,
				'section' => 'T TB-TUT',
				'day' => 'M-----',
				'start_time' => '3:15PM',
				'end_time' => '5:05PM',
				'place' => 'H 905 SGW'
			],
			[
				'lecture_id' => 213,
				'section' => 'X XA-TUT',
				'day' => 'M-----',
				'start_time' => '5:45PM',
				'end_time' => '7:35PM',
				'place' => 'H 967 SGW'
			],
			[
				'lecture_id' => 213,
				'section' => 'X XB-TUT',
				'day' => 'M-----',
				'start_time' => '5:45PM',
				'end_time' => '7:35PM',
				'place' => 'H 905 SGW'
			],
			[
				'lecture_id' => 214,
				'section' => 'Y YA-TUT',
				'day' => 'M-----',
				'start_time' => '7:45PM',
				'end_time' => '9:35PM',
				'place' => 'H 967 SGW'
			],
			[
				'lecture_id' => 214,
				'section' => 'Y YB-TUT',
				'day' => 'M-----',
				'start_time' => '7:45PM',
				'end_time' => '9:35PM',
				'place' => 'H 905 SGW'
			],
			[
				'lecture_id' => 215,
				'section' => 'T TA-TUT',
				'day' => '---T--',
				'start_time' => '4:15PM',
				'end_time' => '5:05PM',
				'place' => 'H 929 SGW'
			],
			[
				'lecture_id' => 215,
				'section' => 'T TB-TUT',
				'day' => '---T--',
				'start_time' => '4:15PM',
				'end_time' => '5:05PM',
				'place' => 'H 967 SGW'
			],
			[
				'lecture_id' => 216,
				'section' => 'XXXA-TUT',
				'day' => '-T----',
				'start_time' => '4:15PM',
				'end_time' => '5:05PM',
				'place' => 'H 929 SGW'
			],
			[
				'lecture_id' => 216,
				'section' => 'XXXB-TUT',
				'day' => '-T----',
				'start_time' => '4:15PM',
				'end_time' => '5:05PM',
				'place' => 'H 967 SGW'
			],
			[
				'lecture_id' => 217,
				'section' => 'Y YA-TUT',
				'day' => '----F-',
				'start_time' => '4:30PM',
				'end_time' => '5:20PM',
				'place' => 'H 929 SGW'
			],
			[
				'lecture_id' => 217,
				'section' => 'Y YB-TUT',
				'day' => '--W---',
				'start_time' => '4:30PM',
				'end_time' => '5:20PM',
				'place' => 'H 929 SGW'
			],
			[
				'lecture_id' => 217,
				'section' => 'Y YC-TUT',
				'day' => 'M-----',
				'start_time' => '4:30PM',
				'end_time' => '5:20PM',
				'place' => 'H 823 SGW'
			],
			[
				'lecture_id' => 218,
				'section' => 'M MA-TUT',
				'day' => 'M-----',
				'start_time' => '3:15PM',
				'end_time' => '4:05PM',
				'place' => 'H 433 SGW'
			],
			[
				'lecture_id' => 218,
				'section' => 'M MB-TUT',
				'day' => 'M-----',
				'start_time' => '3:15PM',
				'end_time' => '4:05PM',
				'place' => 'FG B030 SGW'
			],
			[
				'lecture_id' => 218,
				'section' => 'M MC-TUT',
				'day' => '----F-',
				'start_time' => '3:15PM',
				'end_time' => '4:05PM',
				'place' => 'H 433 SGW'
			],
			[
				'lecture_id' => 219,
				'section' => 'T TA-TUT',
				'day' => '----F-',
				'start_time' => '3:15PM',
				'end_time' => '4:05PM',
				'place' => 'H 557 SGW'
			],
			[
				'lecture_id' => 219,
				'section' => 'T TB-TUT',
				'day' => '----F-',
				'start_time' => '3:15PM',
				'end_time' => '4:05PM',
				'place' => 'FG B050 SGW'
			],
			[
				'lecture_id' => 220,
				'section' => 'X XA-TUT',
				'day' => '----F-',
				'start_time' => '3:15PM',
				'end_time' => '4:05PM',
				'place' => 'H 431 SGW'
			],
			[
				'lecture_id' => 220,
				'section' => 'X XB-TUT',
				'day' => '----F-',
				'start_time' => '3:15PM',
				'end_time' => '4:05PM',
				'place' => 'H 605 SGW'
			],
			[
				'lecture_id' => 221,
				'section' => 'T TA-TUT',
				'day' => '--W---',
				'start_time' => '2:45PM',
				'end_time' => '4:25PM',
				'place' => 'H 429 SGW'
			],
			[
				'lecture_id' => 221,
				'section' => 'T TB-TUT',
				'day' => '----F-',
				'start_time' => '2:45PM',
				'end_time' => '4:25PM',
				'place' => 'MB 6.425 SGW'
			],
			[
				'lecture_id' => 222,
				'section' => 'X XA-TUT',
				'day' => '--W---',
				'start_time' => '2:45PM',
				'end_time' => '4:25PM',
				'place' => 'H 427 SGW'
			],
			[
				'lecture_id' => 222,
				'section' => 'X XB-TUT',
				'day' => '----F-',
				'start_time' => '2:45PM',
				'end_time' => '4:25PM',
				'place' => 'H 427 SGW'
			],
			[
				'lecture_id' => 223,
				'section' => 'Y YA-TUT',
				'day' => '--W---',
				'start_time' => '1:15PM',
				'end_time' => '2:55PM',
				'place' => 'H 401 SGW'
			],
			[
				'lecture_id' => 223,
				'section' => 'Y YB-TUT',
				'day' => '----F-',
				'start_time' => '1:15PM',
				'end_time' => '2:55PM',
				'place' => 'H 564 SGW'
			],
			[
				'lecture_id' => 224,
				'section' => 'X XA-TUT',
				'day' => '--W---',
				'start_time' => '3:55PM',
				'end_time' => '5:35PM',
				'place' => 'H 905 SGW'
			],
			[
				'lecture_id' => 224,
				'section' => 'X XB-TUT',
				'day' => 'M-----',
				'start_time' => '3:55PM',
				'end_time' => '5:35PM',
				'place' => 'H 843 SGW'
			],
			[
				'lecture_id' => 225,
				'section' => 'X XA-TUT',
				'day' => '----F-',
				'start_time' => '2:15PM',
				'end_time' => '3:05PM',
				'place' => 'H 401 SGW'
			],
			[
				'lecture_id' => 225,
				'section' => 'X XB-TUT',
				'day' => '----F-',
				'start_time' => '2:15PM',
				'end_time' => '3:05PM',
				'place' => 'H 403 SGW'
			],
			[
				'lecture_id' => 226,
				'section' => 'MMMA-TUT',
				'day' => 'M-----',
				'start_time' => '8:30PM',
				'end_time' => '10:10PM',
				'place' => 'H 509 SGW'
			],
			[
				'lecture_id' => 227,
				'section' => 'X XA-TUT',
				'day' => 'M-----',
				'start_time' => '8:30PM',
				'end_time' => '10:10PM',
				'place' => 'H 523 SGW'
			],
			[
				'lecture_id' => 227,
				'section' => 'X XB-TUT',
				'day' => 'M-----',
				'start_time' => '8:30PM',
				'end_time' => '10:10PM',
				'place' => 'H 613 SGW'
			],
			[
				'lecture_id' => 228,
				'section' => 'T TA-TUT',
				'day' => '--W---',
				'start_time' => '8:45AM',
				'end_time' => '9:35AM',
				'place' => 'H 605 SGW'
			],
			[
				'lecture_id' => 228,
				'section' => 'T TB-TUT',
				'day' => '--W---',
				'start_time' => '8:45AM',
				'end_time' => '9:35AM',
				'place' => 'H 431 SGW'
			],
			[
				'lecture_id' => 229,
				'section' => 'X XA-TUT',
				'day' => '--W---',
				'start_time' => '8:45AM',
				'end_time' => '9:35AM',
				'place' => 'FG B055 SGW'
			],
			[
				'lecture_id' => 229,
				'section' => 'X XB-TUT',
				'day' => '--W---',
				'start_time' => '8:45AM',
				'end_time' => '9:35AM',
				'place' => 'FG B080 SGW'
			],
			[
				'lecture_id' => 230,
				'section' => 'F FA-TUT',
				'day' => 'M-----',
				'start_time' => '10:15AM',
				'end_time' => '11:05AM',
				'place' => 'H 565 SGW'
			],
			[
				'lecture_id' => 230,
				'section' => 'F FB-TUT',
				'day' => '----F-',
				'start_time' => '1:15PM',
				'end_time' => '2:05PM',
				'place' => 'H 619 SGW'
			],
			[
				'lecture_id' => 230,
				'section' => 'F FC-TUT',
				'day' => '----F-',
				'start_time' => '1:15PM',
				'end_time' => '2:05PM',
				'place' => 'H 423 SGW'
			],
			[
				'lecture_id' => 231,
				'section' => 'T TA-TUT',
				'day' => '-T----',
				'start_time' => '1:15PM',
				'end_time' => '2:05PM',
				'place' => 'H 431 SGW'
			],
			[
				'lecture_id' => 232,
				'section' => 'X XA-TUT',
				'day' => '--W---',
				'start_time' => '1:15PM',
				'end_time' => '2:05PM',
				'place' => 'H 431 SGW'
			],
			[
				'lecture_id' => 233,
				'section' => 'F FA-TUT',
				'day' => 'M-----',
				'start_time' => '8:45AM',
				'end_time' => '9:35AM',
				'place' => 'H 513 SGW'
			],
			[
				'lecture_id' => 233,
				'section' => 'F FB-TUT',
				'day' => '----F-',
				'start_time' => '8:45AM',
				'end_time' => '9:35AM',
				'place' => 'H 513 SGW'
			],
			[
				'lecture_id' => 234,
				'section' => 'XXXA-TUT',
				'day' => '--W---',
				'start_time' => '8:30PM',
				'end_time' => '10:20PM',
				'place' => 'H 403 SGW'
			],
			[
				'lecture_id' => 234,
				'section' => 'XXXB-TUT',
				'day' => '--W---',
				'start_time' => '8:30PM',
				'end_time' => '10:20PM',
				'place' => 'H 423 SGW'
			],
			[
				'lecture_id' => 235,
				'section' => 'X XA-TUT',
				'day' => '---T--',
				'start_time' => '2:45PM',
				'end_time' => '4:35PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 235,
				'section' => 'X XB-TUT',
				'day' => '-T----',
				'start_time' => '2:45PM',
				'end_time' => '4:35PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 235,
				'section' => 'X XC-TUT',
				'day' => 'M-----',
				'start_time' => '2:45PM',
				'end_time' => '4:35PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 235,
				'section' => 'X XD-TUT',
				'day' => '-T----',
				'start_time' => '4:45PM',
				'end_time' => '6:35PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 235,
				'section' => 'X XE-TUT',
				'day' => '---T--',
				'start_time' => '4:45PM',
				'end_time' => '6:35PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 236,
				'section' => 'T TA-TUT',
				'day' => '----F-',
				'start_time' => '2:15PM',
				'end_time' => '3:05PM',
				'place' => 'H 523 SGW'
			],
			[
				'lecture_id' => 238,
				'section' => 'M MA-TUT',
				'day' => '----F-',
				'start_time' => '10:15AM',
				'end_time' => '11:05AM',
				'place' => 'H 905 SGW'
			],
			[
				'lecture_id' => 240,
				'section' => 'T TA-TUT',
				'day' => '--W---',
				'start_time' => '4:15PM',
				'end_time' => '5:15PM',
				'place' => 'MB 2.255 SGW'
			],
			[
				'lecture_id' => 245,
				'section' => 'Q QA-TUT',
				'day' => '-T----',
				'start_time' => '11:45AM',
				'end_time' => '1:25PM',
				'place' => 'H 967 SGW'
			],
			[
				'lecture_id' => 245,
				'section' => 'Q QB-TUT',
				'day' => '---T--',
				'start_time' => '6:15PM',
				'end_time' => '7:55PM',
				'place' => 'H 905 SGW'
			],
			[
				'lecture_id' => 246,
				'section' => 'GGGA-TUT',
				'day' => 'M-----',
				'start_time' => '8:30PM',
				'end_time' => '9:20PM',
				'place' => 'H 431 SGW'
			],
			[
				'lecture_id' => 246,
				'section' => 'GGGB-TUT',
				'day' => 'M-----',
				'start_time' => '8:30PM',
				'end_time' => '9:20PM',
				'place' => 'H 420 SGW'
			],
			[
				'lecture_id' => 247,
				'section' => 'H HA-TUT',
				'day' => '----F-',
				'start_time' => '11:45AM',
				'end_time' => '12:35PM',
				'place' => 'MB S1.255 SGW'
			],
			[
				'lecture_id' => 247,
				'section' => 'H HB-TUT',
				'day' => '----F-',
				'start_time' => '12:45PM',
				'end_time' => '1:35PM',
				'place' => 'MB S1.255 SGW'
			],
			[
				'lecture_id' => 248,
				'section' => 'H HA-TUT',
				'day' => '----F-',
				'start_time' => '3:45PM',
				'end_time' => '4:35PM',
				'place' => 'H 565 SGW'
			],
			[
				'lecture_id' => 248,
				'section' => 'H HB-TUT',
				'day' => '--W---',
				'start_time' => '2:45PM',
				'end_time' => '3:35PM',
				'place' => 'H 620 SGW'
			],
			[
				'lecture_id' => 249,
				'section' => 'H HA-TUT',
				'day' => '----F-',
				'start_time' => '2:45PM',
				'end_time' => '3:35PM',
				'place' => 'H 539 SGW'
			],
			[
				'lecture_id' => 249,
				'section' => 'H HB-TUT',
				'day' => '----F-',
				'start_time' => '2:45PM',
				'end_time' => '3:35PM',
				'place' => 'H 521 SGW'
			],
			[
				'lecture_id' => 250,
				'section' => 'F FA-TUT',
				'day' => '----F-',
				'start_time' => '9:15AM',
				'end_time' => '10:05AM',
				'place' => 'H 1011 SGW'
			],
			[
				'lecture_id' => 250,
				'section' => 'F FB-TUT',
				'day' => '----F-',
				'start_time' => '9:15AM',
				'end_time' => '10:05AM',
				'place' => 'H 565 SGW'
			],
			[
				'lecture_id' => 251,
				'section' => 'F FA-TUT',
				'day' => '----F-',
				'start_time' => '11:45AM',
				'end_time' => '12:35PM',
				'place' => 'H 553 SGW'
			],
			[
				'lecture_id' => 251,
				'section' => 'F FB-TUT',
				'day' => '----F-',
				'start_time' => '11:45AM',
				'end_time' => '12:35PM',
				'place' => 'H 609 SGW'
			],
			[
				'lecture_id' => 252,
				'section' => 'MMME-TUT',
				'day' => '--W---',
				'start_time' => '8:20PM',
				'end_time' => '9:05PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 253,
				'section' => 'H HA-TUT',
				'day' => '-T----',
				'start_time' => '2:45PM',
				'end_time' => '3:35PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 312,
				'section' => '0201-TUT',
				'day' => '-T----',
				'start_time' => '1:30PM',
				'end_time' => '3:30PM',
				'place' => 'CC 305 LOY'
			],
			[
				'lecture_id' => 312,
				'section' => '0202-TUT',
				'day' => '-T----',
				'start_time' => '3:30PM',
				'end_time' => '5:30PM',
				'place' => 'CC 305 LOY'
			],
			[
				'lecture_id' => 312,
				'section' => '0203-TUT',
				'day' => '-T----',
				'start_time' => '1:30PM',
				'end_time' => '3:30PM',
				'place' => 'CC 405 LOY'
			],
			[
				'lecture_id' => 312,
				'section' => '0204-TUT',
				'day' => '-T----',
				'start_time' => '3:30PM',
				'end_time' => '5:30PM',
				'place' => 'CC 405 LOY'
			],
			[
				'lecture_id' => 312,
				'section' => '0205-TUT',
				'day' => '--W---',
				'start_time' => '1:30PM',
				'end_time' => '3:30PM',
				'place' => 'CC 301 LOY'
			],
			[
				'lecture_id' => 312,
				'section' => '0206-TUT',
				'day' => '--W---',
				'start_time' => '3:30PM',
				'end_time' => '5:30PM',
				'place' => 'CC 301 LOY'
			],
			[
				'lecture_id' => 312,
				'section' => '0207-TUT',
				'day' => '---T--',
				'start_time' => '1:30PM',
				'end_time' => '3:30PM',
				'place' => 'CC 305 LOY'
			],
			[
				'lecture_id' => 312,
				'section' => '0208-TUT',
				'day' => '---T--',
				'start_time' => '3:30PM',
				'end_time' => '5:30PM',
				'place' => 'CC 305 LOY'
			],
			[
				'lecture_id' => 313,
				'section' => '0301-TUT',
				'day' => '--W---',
				'start_time' => '10:15AM',
				'end_time' => '12:15PM',
				'place' => 'CC 204 LOY'
			],
			[
				'lecture_id' => 313,
				'section' => '0302-TUT',
				'day' => '--W---',
				'start_time' => '12:15PM',
				'end_time' => '2:15PM',
				'place' => 'CC 204 LOY'
			],
			[
				'lecture_id' => 313,
				'section' => '0303-TUT',
				'day' => '----F-',
				'start_time' => '10:15AM',
				'end_time' => '12:15PM',
				'place' => 'CC 204 LOY'
			],
			[
				'lecture_id' => 313,
				'section' => '0304-TUT',
				'day' => '----F-',
				'start_time' => '12:15PM',
				'end_time' => '2:15PM',
				'place' => 'CC 405 LOY'
			],
			[
				'lecture_id' => 318,
				'section' => 'TA-TUT',
				'day' => 'M-----',
				'start_time' => '11:45AM',
				'end_time' => '12:35PM',
				'place' => 'H 431 SGW'
			],
			[
				'lecture_id' => 319,
				'section' => 'WWWA-TUT',
				'day' => '-T----',
				'start_time' => '8:30PM',
				'end_time' => '9:20PM',
				'place' => 'MB S1.255 SGW'
			],
			[
				'lecture_id' => 319,
				'section' => 'WWWB-TUT',
				'day' => '-T----',
				'start_time' => '8:30PM',
				'end_time' => '9:20PM',
				'place' => 'MB S2.105 SGW'
			],
			[
				'lecture_id' => 324,
				'section' => 'U UA-TUT',
				'day' => '---T--',
				'start_time' => '8:30AM',
				'end_time' => '10:10AM',
				'place' => 'H 562 SGW'
			],
			[
				'lecture_id' => 324,
				'section' => 'U UB-TUT',
				'day' => '---T--',
				'start_time' => '8:30AM',
				'end_time' => '10:10AM',
				'place' => 'H 400 SGW'
			],
			[
				'lecture_id' => 324,
				'section' => 'U UC-TUT',
				'day' => '---T--',
				'start_time' => '8:30AM',
				'end_time' => '10:10AM',
				'place' => 'H 513 SGW'
			],
			[
				'lecture_id' => 325,
				'section' => 'Y YA-TUT',
				'day' => '----F-',
				'start_time' => '1:15PM',
				'end_time' => '2:05PM',
				'place' => 'MB 2.255 SGW'
			],
			[
				'lecture_id' => 325,
				'section' => 'Y YB-TUT',
				'day' => '----F-',
				'start_time' => '1:45PM',
				'end_time' => '2:35PM',
				'place' => 'MB S1.255 SGW'
			],
			[
				'lecture_id' => 325,
				'section' => 'Y YC-TUT',
				'day' => '----F-',
				'start_time' => '10:15AM',
				'end_time' => '11:05AM',
				'place' => 'MB S1.255 SGW'
			],
			[
				'lecture_id' => 326,
				'section' => 'J JA-TUT',
				'day' => '----F-',
				'start_time' => '10:15AM',
				'end_time' => '11:55AM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 326,
				'section' => 'J JB-TUT',
				'day' => '--W---',
				'start_time' => '10:15AM',
				'end_time' => '11:55AM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 326,
				'section' => 'J JC-TUT',
				'day' => '----F-',
				'start_time' => '10:15AM',
				'end_time' => '11:55AM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 327,
				'section' => 'D DA-TUT',
				'day' => '---T--',
				'start_time' => '4:15PM',
				'end_time' => '5:55PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 327,
				'section' => 'D DB-TUT',
				'day' => '---T--',
				'start_time' => '4:15PM',
				'end_time' => '5:55PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 328,
				'section' => 'W WA-TUT',
				'day' => '-T----',
				'start_time' => '4:15PM',
				'end_time' => '5:55PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 328,
				'section' => 'W WB-TUT',
				'day' => '-T----',
				'start_time' => '4:15PM',
				'end_time' => '5:55PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 329,
				'section' => 'W WA-TUT',
				'day' => '--W---',
				'start_time' => '1:45PM',
				'end_time' => '2:35PM',
				'place' => 'H 501 SGW'
			],
			[
				'lecture_id' => 329,
				'section' => 'W WB-TUT',
				'day' => '----F-',
				'start_time' => '1:45PM',
				'end_time' => '2:35PM',
				'place' => 'H 539 SGW'
			],
			[
				'lecture_id' => 330,
				'section' => 'WA-TUT',
				'day' => 'M-----',
				'start_time' => '10:15AM',
				'end_time' => '11:00AM',
				'place' => 'MB S1.105 SGW'
			],
			[
				'lecture_id' => 330,
				'section' => 'WB-TUT',
				'day' => 'M-----',
				'start_time' => '10:15AM',
				'end_time' => '11:00AM',
				'place' => 'MB S1.255 SGW'
			],
			[
				'lecture_id' => 331,
				'section' => 'U UA-TUT',
				'day' => '-T----',
				'start_time' => '5:40PM',
				'end_time' => '6:30PM',
				'place' => 'H 529 SGW'
			],
			[
				'lecture_id' => 332,
				'section' => 'Y YA-TUT',
				'day' => 'M-----',
				'start_time' => '12:15PM',
				'end_time' => '1:05PM',
				'place' => 'FG B080 SGW'
			],
			[
				'lecture_id' => 333,
				'section' => 'W WA-TUT',
				'day' => 'M-----',
				'start_time' => '5:45PM',
				'end_time' => '7:35PM',
				'place' => 'H 439 SGW'
			],
			[
				'lecture_id' => 337,
				'section' => 'QQQA-TUT',
				'day' => '-T----',
				'start_time' => '8:30PM',
				'end_time' => '9:20PM',
				'place' => 'MB 3.265 SGW'
			],
			[
				'lecture_id' => 338,
				'section' => 'ECEA-TUT',
				'day' => '-T----',
				'start_time' => '5:45PM',
				'end_time' => '7:25PM',
				'place' => 'FG B030 SGW'
			],
			[
				'lecture_id' => 338,
				'section' => 'ECEB-TUT',
				'day' => '---T--',
				'start_time' => '10:15AM',
				'end_time' => '11:55AM',
				'place' => 'MB 5.275 SGW'
			],
			[
				'lecture_id' => 339,
				'section' => 'DDDA-TUT',
				'day' => '--W---',
				'start_time' => '8:30PM',
				'end_time' => '10:10PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 339,
				'section' => 'DDDB-TUT',
				'day' => '--W---',
				'start_time' => '8:30PM',
				'end_time' => '10:10PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 339,
				'section' => 'DDDC-TUT',
				'day' => 'M-----',
				'start_time' => '8:30PM',
				'end_time' => '10:10PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 340,
				'section' => 'PPPA-TUT',
				'day' => 'M-----',
				'start_time' => '8:30PM',
				'end_time' => '10:10PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 340,
				'section' => 'PPPB-TUT',
				'day' => 'M-----',
				'start_time' => '8:30PM',
				'end_time' => '10:10PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 340,
				'section' => 'PPPC-TUT',
				'day' => 'M-----',
				'start_time' => '8:30PM',
				'end_time' => '10:10PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 341,
				'section' => 'NNNA-TUT',
				'day' => '---T--',
				'start_time' => '8:30PM',
				'end_time' => '10:10PM',
				'place' => 'H 523 SGW'
			],
			[
				'lecture_id' => 341,
				'section' => 'NNNB-TUT',
				'day' => '-T----',
				'start_time' => '8:30PM',
				'end_time' => '10:10PM',
				'place' => 'H 429 SGW'
			],
			[
				'lecture_id' => 342,
				'section' => 'S SA-TUT',
				'day' => '-T----',
				'start_time' => '2:45PM',
				'end_time' => '4:25PM',
				'place' => 'H 429 SGW'
			],
			[
				'lecture_id' => 342,
				'section' => 'S SB-TUT',
				'day' => '-T----',
				'start_time' => '2:45PM',
				'end_time' => '4:25PM',
				'place' => 'H 523 SGW'
			],
			[
				'lecture_id' => 343,
				'section' => 'DDDA-TUT',
				'day' => '---T--',
				'start_time' => '11:45AM',
				'end_time' => '1:35PM',
				'place' => 'H 429 SGW'
			],
			[
				'lecture_id' => 343,
				'section' => 'DDDB-TUT',
				'day' => '-T----',
				'start_time' => '11:45AM',
				'end_time' => '1:35PM',
				'place' => 'H 429 SGW'
			],
			[
				'lecture_id' => 344,
				'section' => 'N NA-TUT',
				'day' => '--W---',
				'start_time' => '2:45PM',
				'end_time' => '4:35PM',
				'place' => 'H 609 SGW'
			],
			[
				'lecture_id' => 344,
				'section' => 'N NB-TUT',
				'day' => '--W---',
				'start_time' => '2:45PM',
				'end_time' => '4:35PM',
				'place' => 'H 607 SGW'
			],
			[
				'lecture_id' => 345,
				'section' => 'U UA-TUT',
				'day' => '----F-',
				'start_time' => '11:45AM',
				'end_time' => '1:25PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 345,
				'section' => 'U UB-TUT',
				'day' => '--W---',
				'start_time' => '11:45AM',
				'end_time' => '1:25PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 346,
				'section' => 'W WA-TUT',
				'day' => 'M-----',
				'start_time' => '10:15AM',
				'end_time' => '11:50AM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 346,
				'section' => 'W WB-TUT',
				'day' => '--W---',
				'start_time' => '2:45PM',
				'end_time' => '4:25PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 347,
				'section' => 'PPPA-TUT',
				'day' => '---T--',
				'start_time' => '8:30PM',
				'end_time' => '10:10PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 347,
				'section' => 'PPPB-TUT',
				'day' => '----F-',
				'start_time' => '5:45PM',
				'end_time' => '7:25PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 348,
				'section' => 'QQQA-TUT',
				'day' => '---T--',
				'start_time' => '8:30PM',
				'end_time' => '10:10PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 348,
				'section' => 'QQQB-TUT',
				'day' => '----F-',
				'start_time' => '5:45PM',
				'end_time' => '7:25PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 349,
				'section' => 'S SA-TUT',
				'day' => '--W---',
				'start_time' => '10:15AM',
				'end_time' => '11:55AM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 349,
				'section' => 'S SB-TUT',
				'day' => 'M-----',
				'start_time' => '10:15AM',
				'end_time' => '11:55AM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 349,
				'section' => 'S SC-TUT',
				'day' => 'M-----',
				'start_time' => '10:15AM',
				'end_time' => '11:55AM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 350,
				'section' => 'U UA-TUT',
				'day' => 'M-----',
				'start_time' => '10:15AM',
				'end_time' => '11:55AM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 350,
				'section' => 'U UB-TUT',
				'day' => '--W---',
				'start_time' => '11:45AM',
				'end_time' => '1:25PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 351,
				'section' => 'N NA-TUT',
				'day' => '-T----',
				'start_time' => '1:15PM',
				'end_time' => '2:05PM',
				'place' => 'H 564 SGW'
			],
			[
				'lecture_id' => 351,
				'section' => 'N NB-TUT',
				'day' => '---T--',
				'start_time' => '1:15PM',
				'end_time' => '2:05PM',
				'place' => 'H 564 SGW'
			],
			[
				'lecture_id' => 353,
				'section' => 'NNNA-TUT',
				'day' => '--W---',
				'start_time' => '8:30PM',
				'end_time' => '9:20PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 353,
				'section' => 'NNNB-TUT',
				'day' => 'M-----',
				'start_time' => '1:15PM',
				'end_time' => '2:05PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 354,
				'section' => 'WWWA-TUT',
				'day' => '-T----',
				'start_time' => '8:30PM',
				'end_time' => '9:20PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 354,
				'section' => 'WWWB-TUT',
				'day' => '----F-',
				'start_time' => '1:15PM',
				'end_time' => '2:05PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 355,
				'section' => 'E EI-TUT',
				'day' => 'M-----',
				'start_time' => '4:15PM',
				'end_time' => '5:05PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 355,
				'section' => 'E EJ-TUT',
				'day' => '--W---',
				'start_time' => '4:15PM',
				'end_time' => '5:05PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 356,
				'section' => 'X XA-TUT',
				'day' => 'M-----',
				'start_time' => '4:15PM',
				'end_time' => '5:05PM',
				'place' => 'H 429 SGW'
			],
			[
				'lecture_id' => 356,
				'section' => 'X XB-TUT',
				'day' => '--W---',
				'start_time' => '4:15PM',
				'end_time' => '5:05PM',
				'place' => 'H 619 SGW'
			],
			[
				'lecture_id' => 357,
				'section' => 'X XA-TUT',
				'day' => '--W---',
				'start_time' => '4:15PM',
				'end_time' => '5:05PM',
				'place' => 'H 429 SGW'
			],
			[
				'lecture_id' => 357,
				'section' => 'X XB-TUT',
				'day' => '--W---',
				'start_time' => '4:15PM',
				'end_time' => '5:05PM',
				'place' => 'H 523 SGW'
			],
			[
				'lecture_id' => 358,
				'section' => 'PPPA-TUT',
				'day' => '---T--',
				'start_time' => '8:30PM',
				'end_time' => '9:20PM',
				'place' => 'H 400 SGW'
			],
			[
				'lecture_id' => 358,
				'section' => 'PPPB-TUT',
				'day' => '---T--',
				'start_time' => '8:30PM',
				'end_time' => '9:20PM',
				'place' => 'H 400-2 SGW'
			],
			[
				'lecture_id' => 359,
				'section' => 'NNNA-TUT',
				'day' => 'M-----',
				'start_time' => '8:30PM',
				'end_time' => '9:20PM',
				'place' => 'H 431 SGW'
			],
			[
				'lecture_id' => 371,
				'section' => 'W WA-TUT',
				'day' => '-T----',
				'start_time' => '1:15PM',
				'end_time' => '2:55PM',
				'place' => 'H 633 SGW'
			],
			[
				'lecture_id' => 371,
				'section' => 'W WB-TUT',
				'day' => '----F-',
				'start_time' => '10:15AM',
				'end_time' => '11:55AM',
				'place' => 'H 937 SGW'
			],
			[
				'lecture_id' => 371,
				'section' => 'W WC-TUT',
				'day' => '----F-',
				'start_time' => '10:15AM',
				'end_time' => '11:55AM',
				'place' => 'MB 2.430 SGW'
			],
			[
				'lecture_id' => 371,
				'section' => 'W WD-TUT',
				'day' => '---T--',
				'start_time' => '1:15PM',
				'end_time' => '2:55PM',
				'place' => 'H 513 SGW'
			],
			[
				'lecture_id' => 372,
				'section' => 'W WA-TUT',
				'day' => '--W---',
				'start_time' => '12:45PM',
				'end_time' => '2:25PM',
				'place' => 'MB S1.105 SGW'
			],
			[
				'lecture_id' => 372,
				'section' => 'W WB-TUT',
				'day' => 'M-----',
				'start_time' => '12:45PM',
				'end_time' => '2:25PM',
				'place' => 'MB S1.105 SGW'
			],
			[
				'lecture_id' => 373,
				'section' => 'JJJA-TUT',
				'day' => '--W---',
				'start_time' => '9:45AM',
				'end_time' => '11:25AM',
				'place' => 'MB S1.235 SGW'
			],
			[
				'lecture_id' => 373,
				'section' => 'JJJB-TUT',
				'day' => 'M-----',
				'start_time' => '11:45AM',
				'end_time' => '1:25PM',
				'place' => 'H 605 SGW'
			],
			[
				'lecture_id' => 374,
				'section' => 'H HA-TUT',
				'day' => 'M-----',
				'start_time' => '4:10PM',
				'end_time' => '5:40PM',
				'place' => 'H 562 SGW'
			],
			[
				'lecture_id' => 374,
				'section' => 'H HB-TUT',
				'day' => '----F-',
				'start_time' => '2:45PM',
				'end_time' => '4:15PM',
				'place' => 'H 564 SGW'
			],
			[
				'lecture_id' => 375,
				'section' => 'ECEA-TUT',
				'day' => '-T----',
				'start_time' => '1:15PM',
				'end_time' => '2:05PM',
				'place' => 'H 605 SGW'
			],
			[
				'lecture_id' => 375,
				'section' => 'ECEB-TUT',
				'day' => '-T----',
				'start_time' => '1:15PM',
				'end_time' => '2:05PM',
				'place' => 'H 629 SGW'
			],
			[
				'lecture_id' => 376,
				'section' => 'H HA-TUT',
				'day' => '-T----',
				'start_time' => '1:15PM',
				'end_time' => '2:05PM',
				'place' => 'FG B030 SGW'
			],
			[
				'lecture_id' => 377,
				'section' => 'W WA-TUT',
				'day' => '---T--',
				'start_time' => '10:15AM',
				'end_time' => '11:05AM',
				'place' => 'H 631 SGW'
			],
			[
				'lecture_id' => 377,
				'section' => 'W WB-TUT',
				'day' => 'M-----',
				'start_time' => '10:15AM',
				'end_time' => '11:05AM',
				'place' => 'FG B080 SGW'
			],
			[
				'lecture_id' => 378,
				'section' => 'W WA-TUT',
				'day' => '----F-',
				'start_time' => '3:15PM',
				'end_time' => '4:05PM',
				'place' => 'H 562 SGW'
			],
			[
				'lecture_id' => 379,
				'section' => 'W WA-TUT',
				'day' => '-T----',
				'start_time' => '10:45AM',
				'end_time' => '11:35AM',
				'place' => 'H 523 SGW'
			],
			[
				'lecture_id' => 379,
				'section' => 'W WB-TUT',
				'day' => '---T--',
				'start_time' => '2:45PM',
				'end_time' => '3:35PM',
				'place' => 'H 429 SGW'
			],
			[
				'lecture_id' => 380,
				'section' => 'U UA-TUT',
				'day' => 'M-----',
				'start_time' => '11:45AM',
				'end_time' => '12:35PM',
				'place' => 'H 615 SGW'
			],
			[
				'lecture_id' => 380,
				'section' => 'U UB-TUT',
				'day' => 'M-----',
				'start_time' => '11:45AM',
				'end_time' => '12:35PM',
				'place' => 'H 529 SGW'
			],
			[
				'lecture_id' => 381,
				'section' => 'W WA-TUT',
				'day' => 'M-----',
				'start_time' => '5:45PM',
				'end_time' => '7:35PM',
				'place' => 'H 423 SGW'
			],
			[
				'lecture_id' => 400,
				'section' => 'IIIE-TUT',
				'day' => '--W---',
				'start_time' => '4:15PM',
				'end_time' => '5:05PM',
				'place' => 'MB S2.465 SGW'
			],
			[
				'lecture_id' => 400,
				'section' => 'IIIF-TUT',
				'day' => 'M-----',
				'start_time' => '4:15PM',
				'end_time' => '5:05PM',
				'place' => 'H 633-1 SGW'
			],
			[
				'lecture_id' => 400,
				'section' => 'IIIG-TUT',
				'day' => '-T----',
				'start_time' => '4:15PM',
				'end_time' => '5:05PM',
				'place' => 'H 633-1 SGW'
			],
			[
				'lecture_id' => 401,
				'section' => 'EEEN-TUT',
				'day' => 'M-----',
				'start_time' => '4:15PM',
				'end_time' => '5:55PM',
				'place' => 'H 427 SGW'
			],
			[
				'lecture_id' => 401,
				'section' => 'EEEO-TUT',
				'day' => '---T--',
				'start_time' => '4:15PM',
				'end_time' => '5:55PM',
				'place' => 'MB 2.255 SGW'
			],
			[
				'lecture_id' => 401,
				'section' => 'EEEP-TUT',
				'day' => '----F-',
				'start_time' => '4:15PM',
				'end_time' => '5:55PM',
				'place' => 'MB 2.265 SGW'
			],
			[
				'lecture_id' => 401,
				'section' => 'EEEQ-TUT',
				'day' => '-T----',
				'start_time' => '8:30PM',
				'end_time' => '10:10PM',
				'place' => 'H 615 SGW'
			],
			[
				'lecture_id' => 402,
				'section' => 'WWWA-TUT',
				'day' => '-T----',
				'start_time' => '8:30PM',
				'end_time' => '10:10PM',
				'place' => 'H 529 SGW'
			],
			[
				'lecture_id' => 402,
				'section' => 'WWWB-TUT',
				'day' => '----F-',
				'start_time' => '5:55PM',
				'end_time' => '7:35PM',
				'place' => 'MB 1.301 SGW'
			],
			[
				'lecture_id' => 402,
				'section' => 'WWWC-TUT',
				'day' => '---T--',
				'start_time' => '5:55PM',
				'end_time' => '7:35PM',
				'place' => 'MB S2.455 SGW'
			],
			[
				'lecture_id' => 402,
				'section' => 'WWWD-TUT',
				'day' => '-T----',
				'start_time' => '8:30PM',
				'end_time' => '10:10PM',
				'place' => 'MB 3.255 SGW'
			],
			[
				'lecture_id' => 403,
				'section' => 'Y YA-TUT',
				'day' => '----F-',
				'start_time' => '4:15PM',
				'end_time' => '5:55PM',
				'place' => 'MB S1.105 SGW'
			],
			[
				'lecture_id' => 403,
				'section' => 'Y YB-TUT',
				'day' => '-T----',
				'start_time' => '4:15PM',
				'end_time' => '5:55PM',
				'place' => 'MB 1.301 SGW'
			],
			[
				'lecture_id' => 403,
				'section' => 'Y YC-TUT',
				'day' => 'M-----',
				'start_time' => '4:15PM',
				'end_time' => '5:55PM',
				'place' => 'MB 2.265 SGW'
			],
			[
				'lecture_id' => 403,
				'section' => 'Y YD-TUT',
				'day' => '----F-',
				'start_time' => '4:15PM',
				'end_time' => '5:55PM',
				'place' => 'MB S1.255 SGW'
			],
			[
				'lecture_id' => 406,
				'section' => 'ECEA-TUT',
				'day' => '----F-',
				'start_time' => '8:45AM',
				'end_time' => '9:35AM',
				'place' => 'FG B055 SGW'
			],
			[
				'lecture_id' => 406,
				'section' => 'ECEB-TUT',
				'day' => '----F-',
				'start_time' => '8:45AM',
				'end_time' => '9:35AM',
				'place' => 'FG B055 SGW'
			],
			[
				'lecture_id' => 406,
				'section' => 'ECEC-TUT',
				'day' => '-T----',
				'start_time' => '4:15PM',
				'end_time' => '5:05PM',
				'place' => 'FG B055 SGW'
			],
			[
				'lecture_id' => 406,
				'section' => 'ECED-TUT',
				'day' => '-T----',
				'start_time' => '4:15PM',
				'end_time' => '5:05PM',
				'place' => 'FG B055 SGW'
			],
			[
				'lecture_id' => 406,
				'section' => 'ECEE-TUT',
				'day' => '--W---',
				'start_time' => '8:45AM',
				'end_time' => '9:35AM',
				'place' => 'FG B080 SGW'
			],
			[
				'lecture_id' => 406,
				'section' => 'ECEF-TUT',
				'day' => '--W---',
				'start_time' => '8:45AM',
				'end_time' => '9:35AM',
				'place' => 'FG B080 SGW'
			],
			[
				'lecture_id' => 406,
				'section' => 'ECEG-TUT',
				'day' => '---T--',
				'start_time' => '4:15PM',
				'end_time' => '5:05PM',
				'place' => 'H 603 SGW'
			],
			[
				'lecture_id' => 406,
				'section' => 'ECEH-TUT',
				'day' => '---T--',
				'start_time' => '4:15PM',
				'end_time' => '5:05PM',
				'place' => 'H 603 SGW'
			],
			[
				'lecture_id' => 409,
				'section' => 'F FA-TUT',
				'day' => 'M-----',
				'start_time' => '6:00PM',
				'end_time' => '7:40PM',
				'place' => 'H 415 SGW'
			],
			[
				'lecture_id' => 409,
				'section' => 'F FB-TUT',
				'day' => '----F-',
				'start_time' => '5:45PM',
				'end_time' => '7:25PM',
				'place' => 'MB S1.401 SGW'
			],
			[
				'lecture_id' => 410,
				'section' => 'G GA-TUT',
				'day' => 'M-----',
				'start_time' => '4:10PM',
				'end_time' => '5:50PM',
				'place' => 'H 553 SGW'
			],
			[
				'lecture_id' => 410,
				'section' => 'G GB-TUT',
				'day' => '----F-',
				'start_time' => '5:45PM',
				'end_time' => '7:25PM',
				'place' => 'MB S2.115 SGW'
			],
			[
				'lecture_id' => 411,
				'section' => 'J JA-TUT',
				'day' => '----F-',
				'start_time' => '3:45PM',
				'end_time' => '5:25PM',
				'place' => 'MB S2.115 SGW'
			],
			[
				'lecture_id' => 411,
				'section' => 'J JB-TUT',
				'day' => '----F-',
				'start_time' => '3:45PM',
				'end_time' => '5:25PM',
				'place' => 'MB S1.430 SGW'
			],
			[
				'lecture_id' => 412,
				'section' => 'W WA-TUT',
				'day' => '----F-',
				'start_time' => '4:10PM',
				'end_time' => '5:50PM',
				'place' => 'MB S2.401 SGW'
			],
			[
				'lecture_id' => 412,
				'section' => 'W WB-TUT',
				'day' => 'M-----',
				'start_time' => '6:00PM',
				'end_time' => '7:40PM',
				'place' => 'H 605 SGW'
			],
			[
				'lecture_id' => 413,
				'section' => 'J JA-TUT',
				'day' => 'M-----',
				'start_time' => '5:45PM',
				'end_time' => '7:25PM',
				'place' => 'H 564 SGW'
			],
			[
				'lecture_id' => 413,
				'section' => 'J JB-TUT',
				'day' => 'M-----',
				'start_time' => '7:40PM',
				'end_time' => '9:20PM',
				'place' => 'H 564 SGW'
			],
			[
				'lecture_id' => 413,
				'section' => 'J JC-TUT',
				'day' => 'M-----',
				'start_time' => '1:15PM',
				'end_time' => '3:05PM',
				'place' => 'H 544 SGW'
			],
			[
				'lecture_id' => 414,
				'section' => 'R RA-TUT',
				'day' => '----F-',
				'start_time' => '2:15PM',
				'end_time' => '3:55PM',
				'place' => 'H 625 SGW'
			],
			[
				'lecture_id' => 414,
				'section' => 'R RB-TUT',
				'day' => '----F-',
				'start_time' => '2:15PM',
				'end_time' => '3:55PM',
				'place' => 'H 623 SGW'
			],
			[
				'lecture_id' => 414,
				'section' => 'R RC-TUT',
				'day' => '----F-',
				'start_time' => '2:15PM',
				'end_time' => '3:55PM',
				'place' => 'H 621 SGW'
			],
			[
				'lecture_id' => 415,
				'section' => 'S SA-TUT',
				'day' => 'M-----',
				'start_time' => '8:20AM',
				'end_time' => '10:00AM',
				'place' => 'H 627 SGW'
			],
			[
				'lecture_id' => 415,
				'section' => 'S SB-TUT',
				'day' => '--W---',
				'start_time' => '1:15PM',
				'end_time' => '2:55PM',
				'place' => 'H 603-1 SGW'
			],
			[
				'lecture_id' => 415,
				'section' => 'S SC-TUT',
				'day' => 'M-----',
				'start_time' => '8:20AM',
				'end_time' => '10:00AM',
				'place' => 'H 544 SGW'
			],
			[
				'lecture_id' => 416,
				'section' => 'T TA-TUT',
				'day' => '---T--',
				'start_time' => '9:45AM',
				'end_time' => '11:25AM',
				'place' => 'H 537 SGW'
			],
			[
				'lecture_id' => 416,
				'section' => 'T TB-TUT',
				'day' => '---T--',
				'start_time' => '9:45AM',
				'end_time' => '11:25AM',
				'place' => 'H 564 SGW'
			],
			[
				'lecture_id' => 416,
				'section' => 'T TC-TUT',
				'day' => '---T--',
				'start_time' => '9:45AM',
				'end_time' => '11:25AM',
				'place' => 'H 603-1 SGW'
			],
			[
				'lecture_id' => 417,
				'section' => 'U UA-TUT',
				'day' => 'M-----',
				'start_time' => '9:45AM',
				'end_time' => '11:25AM',
				'place' => 'H 603-1 SGW'
			],
			[
				'lecture_id' => 417,
				'section' => 'U UB-TUT',
				'day' => 'M-----',
				'start_time' => '1:15PM',
				'end_time' => '2:55PM',
				'place' => 'H 540 SGW'
			],
			[
				'lecture_id' => 417,
				'section' => 'U UC-TUT',
				'day' => 'M-----',
				'start_time' => '9:45AM',
				'end_time' => '11:25AM',
				'place' => 'H 562 SGW'
			],
			[
				'lecture_id' => 418,
				'section' => 'V VA-TUT',
				'day' => 'M-----',
				'start_time' => '8:20AM',
				'end_time' => '10:00AM',
				'place' => 'H 540 SGW'
			],
			[
				'lecture_id' => 418,
				'section' => 'V VB-TUT',
				'day' => 'M-----',
				'start_time' => '8:20AM',
				'end_time' => '10:00AM',
				'place' => 'H 537 SGW'
			],
			[
				'lecture_id' => 418,
				'section' => 'V VC-TUT',
				'day' => 'M-----',
				'start_time' => '8:20AM',
				'end_time' => '10:00AM',
				'place' => 'H 564 SGW'
			],
			[
				'lecture_id' => 419,
				'section' => 'X XA-TUT',
				'day' => '----F-',
				'start_time' => '2:15PM',
				'end_time' => '3:55PM',
				'place' => 'H 627 SGW'
			],
			[
				'lecture_id' => 419,
				'section' => 'X XB-TUT',
				'day' => '----F-',
				'start_time' => '2:15PM',
				'end_time' => '3:55PM',
				'place' => 'H 544 SGW'
			],
			[
				'lecture_id' => 419,
				'section' => 'X XC-TUT',
				'day' => '----F-',
				'start_time' => '2:15PM',
				'end_time' => '3:55PM',
				'place' => 'H 540 SGW'
			],
			[
				'lecture_id' => 420,
				'section' => 'J JA-TUT',
				'day' => '----F-',
				'start_time' => '1:45PM',
				'end_time' => '3:25PM',
				'place' => 'H 423 SGW'
			],
			[
				'lecture_id' => 420,
				'section' => 'J JB-TUT',
				'day' => '----F-',
				'start_time' => '1:45PM',
				'end_time' => '3:25PM',
				'place' => 'FG B055 SGW'
			],
			[
				'lecture_id' => 421,
				'section' => 'L LA-TUT',
				'day' => '----F-',
				'start_time' => '5:45PM',
				'end_time' => '7:25PM',
				'place' => 'FG B055 SGW'
			],
			[
				'lecture_id' => 421,
				'section' => 'L LB-TUT',
				'day' => '----F-',
				'start_time' => '5:45PM',
				'end_time' => '7:25PM',
				'place' => 'FG B080 SGW'
			],
			[
				'lecture_id' => 422,
				'section' => 'WWWA-TUT',
				'day' => '---T--',
				'start_time' => '8:30PM',
				'end_time' => '10:10PM',
				'place' => 'H 403 SGW'
			],
			[
				'lecture_id' => 422,
				'section' => 'WWWB-TUT',
				'day' => '---T--',
				'start_time' => '8:30PM',
				'end_time' => '10:10PM',
				'place' => 'H 423 SGW'
			],
			[
				'lecture_id' => 423,
				'section' => 'T TA-TUT',
				'day' => '--W---',
				'start_time' => '11:45AM',
				'end_time' => '1:25PM',
				'place' => 'FG B055 SGW'
			],
			[
				'lecture_id' => 423,
				'section' => 'T TB-TUT',
				'day' => '--W---',
				'start_time' => '10:05AM',
				'end_time' => '11:45AM',
				'place' => 'H 423 SGW'
			],
			[
				'lecture_id' => 423,
				'section' => 'T TC-TUT',
				'day' => '--W---',
				'start_time' => '11:45AM',
				'end_time' => '1:25PM',
				'place' => 'FG B080 SGW'
			],
			[
				'lecture_id' => 424,
				'section' => 'TTTE-TUT',
				'day' => '---T--',
				'start_time' => '8:30PM',
				'end_time' => '10:10PM',
				'place' => 'H 401 SGW'
			],
			[
				'lecture_id' => 424,
				'section' => 'TTTF-TUT',
				'day' => '--W---',
				'start_time' => '10:05AM',
				'end_time' => '11:45AM',
				'place' => 'H 433 SGW'
			],
			[
				'lecture_id' => 424,
				'section' => 'TTTG-TUT',
				'day' => '---T--',
				'start_time' => '8:30AM',
				'end_time' => '10:10AM',
				'place' => 'FG B055 SGW'
			],
			[
				'lecture_id' => 425,
				'section' => 'V VA-TUT',
				'day' => '--W---',
				'start_time' => '2:45PM',
				'end_time' => '4:25PM',
				'place' => 'H 403 SGW'
			],
			[
				'lecture_id' => 425,
				'section' => 'V VB-TUT',
				'day' => 'M-----',
				'start_time' => '11:45AM',
				'end_time' => '1:25PM',
				'place' => 'H 403 SGW'
			],
			[
				'lecture_id' => 425,
				'section' => 'V VC-TUT',
				'day' => '--W---',
				'start_time' => '2:45PM',
				'end_time' => '4:25PM',
				'place' => 'H 1011 SGW'
			],
			[
				'lecture_id' => 426,
				'section' => 'X XA-TUT',
				'day' => 'M-----',
				'start_time' => '11:45AM',
				'end_time' => '1:25PM',
				'place' => 'H 423 SGW'
			],
			[
				'lecture_id' => 426,
				'section' => 'X XB-TUT',
				'day' => '--W---',
				'start_time' => '2:45PM',
				'end_time' => '4:25PM',
				'place' => 'FG B055 SGW'
			],
			[
				'lecture_id' => 426,
				'section' => 'X XC-TUT',
				'day' => 'M-----',
				'start_time' => '11:45AM',
				'end_time' => '1:25PM',
				'place' => 'FG B055 SGW'
			],
			[
				'lecture_id' => 427,
				'section' => 'HHHA-TUT',
				'day' => 'M-----',
				'start_time' => '5:45PM',
				'end_time' => '7:35PM',
				'place' => 'H 1011 SGW'
			],
			[
				'lecture_id' => 427,
				'section' => 'HHHB-TUT',
				'day' => 'M-----',
				'start_time' => '5:45PM',
				'end_time' => '7:35PM',
				'place' => 'H 539 SGW'
			],
			[
				'lecture_id' => 428,
				'section' => 'M MA-TUT',
				'day' => '----F-',
				'start_time' => '1:15PM',
				'end_time' => '3:05PM',
				'place' => 'MB 2.445 SGW'
			],
			[
				'lecture_id' => 428,
				'section' => 'M MB-TUT',
				'day' => 'M-----',
				'start_time' => '1:15PM',
				'end_time' => '3:05PM',
				'place' => 'H 565 SGW'
			],
			[
				'lecture_id' => 429,
				'section' => 'T TA-TUT',
				'day' => '----F-',
				'start_time' => '2:45PM',
				'end_time' => '4:35PM',
				'place' => 'H 1011 SGW'
			],
			[
				'lecture_id' => 429,
				'section' => 'T TB-TUT',
				'day' => '----F-',
				'start_time' => '4:15PM',
				'end_time' => '6:05PM',
				'place' => 'H 539 SGW'
			],
			[
				'lecture_id' => 430,
				'section' => 'V VA-TUT',
				'day' => '-T----',
				'start_time' => '2:45PM',
				'end_time' => '4:35PM',
				'place' => 'H 539 SGW'
			],
			[
				'lecture_id' => 430,
				'section' => 'V VB-TUT',
				'day' => '----F-',
				'start_time' => '3:15PM',
				'end_time' => '5:05PM',
				'place' => 'H 565 SGW'
			],
			[
				'lecture_id' => 431,
				'section' => 'X XA-TUT',
				'day' => '----F-',
				'start_time' => '4:15PM',
				'end_time' => '6:05PM',
				'place' => 'MB 2.445 SGW'
			],
			[
				'lecture_id' => 431,
				'section' => 'X XB-TUT',
				'day' => '----F-',
				'start_time' => '2:45PM',
				'end_time' => '4:30PM',
				'place' => 'MB 2.435 SGW'
			],
			[
				'lecture_id' => 432,
				'section' => 'T TA-TUT',
				'day' => '-T----',
				'start_time' => '12:00PM',
				'end_time' => '12:50PM',
				'place' => 'H 523 SGW'
			],
			[
				'lecture_id' => 432,
				'section' => 'T TB-TUT',
				'day' => '---T--',
				'start_time' => '12:00PM',
				'end_time' => '12:50PM',
				'place' => 'H 523 SGW'
			],
			[
				'lecture_id' => 433,
				'section' => 'V VA-TUT',
				'day' => '----F-',
				'start_time' => '11:45AM',
				'end_time' => '1:25PM',
				'place' => 'H 423 SGW'
			],
			[
				'lecture_id' => 433,
				'section' => 'V VB-TUT',
				'day' => '----F-',
				'start_time' => '11:45AM',
				'end_time' => '1:25PM',
				'place' => 'FG B055 SGW'
			],
			[
				'lecture_id' => 434,
				'section' => 'W WA-TUT',
				'day' => '----F-',
				'start_time' => '11:45AM',
				'end_time' => '1:25PM',
				'place' => 'H 401 SGW'
			],
			[
				'lecture_id' => 434,
				'section' => 'W WB-TUT',
				'day' => '----F-',
				'start_time' => '11:45AM',
				'end_time' => '1:25PM',
				'place' => 'H 403 SGW'
			],
			[
				'lecture_id' => 435,
				'section' => 'XXXE-TUT',
				'day' => '----F-',
				'start_time' => '3:30PM',
				'end_time' => '5:10PM',
				'place' => 'H 631 SGW'
			],
			[
				'lecture_id' => 435,
				'section' => 'XXXF-TUT',
				'day' => '----F-',
				'start_time' => '3:30PM',
				'end_time' => '5:10PM',
				'place' => 'MB S2.285 SGW'
			],
			[
				'lecture_id' => 436,
				'section' => 'U UA-TUT',
				'day' => '--W---',
				'start_time' => '11:45AM',
				'end_time' => '1:35PM',
				'place' => 'MB S1.255 SGW'
			],
			[
				'lecture_id' => 436,
				'section' => 'U UB-TUT',
				'day' => '----F-',
				'start_time' => '11:45AM',
				'end_time' => '1:35PM',
				'place' => 'FG B070 SGW'
			],
			[
				'lecture_id' => 437,
				'section' => 'R RA-TUT',
				'day' => '-T----',
				'start_time' => '5:45PM',
				'end_time' => '6:35PM',
				'place' => 'EV 1.162 SGW'
			],
			[
				'lecture_id' => 437,
				'section' => 'R RB-TUT',
				'day' => '-T----',
				'start_time' => '5:45PM',
				'end_time' => '6:35PM',
				'place' => 'EV 3.309 SGW'
			],
			[
				'lecture_id' => 437,
				'section' => 'R RC-TUT',
				'day' => '---T--',
				'start_time' => '6:45PM',
				'end_time' => '7:35PM',
				'place' => 'EV 1.162 SGW'
			],
			[
				'lecture_id' => 437,
				'section' => 'R RD-TUT',
				'day' => '---T--',
				'start_time' => '6:45PM',
				'end_time' => '7:35PM',
				'place' => 'EV 3.309 SGW'
			],
			[
				'lecture_id' => 438,
				'section' => 'SSSA-TUT',
				'day' => '---T--',
				'start_time' => '5:45PM',
				'end_time' => '6:35PM',
				'place' => 'EV 1.162 SGW'
			],
			[
				'lecture_id' => 438,
				'section' => 'SSSB-TUT',
				'day' => '---T--',
				'start_time' => '5:45PM',
				'end_time' => '6:35PM',
				'place' => 'EV 3.309 SGW'
			],
			[
				'lecture_id' => 438,
				'section' => 'SSSC-TUT',
				'day' => '-T----',
				'start_time' => '6:45PM',
				'end_time' => '7:35PM',
				'place' => 'EV 1.162 SGW'
			],
			[
				'lecture_id' => 438,
				'section' => 'SSSD-TUT',
				'day' => '-T----',
				'start_time' => '6:45PM',
				'end_time' => '7:35PM',
				'place' => 'EV 3.309 SGW'
			],
			[
				'lecture_id' => 439,
				'section' => 'ECEA-TUT',
				'day' => '----F-',
				'start_time' => '3:15PM',
				'end_time' => '4:05PM',
				'place' => 'H 401 SGW'
			],
			[
				'lecture_id' => 439,
				'section' => 'ECEB-TUT',
				'day' => '----F-',
				'start_time' => '4:15PM',
				'end_time' => '5:05PM',
				'place' => 'H 423 SGW'
			],
			[
				'lecture_id' => 439,
				'section' => 'ECEC-TUT',
				'day' => '----F-',
				'start_time' => '3:15PM',
				'end_time' => '4:05PM',
				'place' => 'H 403 SGW'
			],
			[
				'lecture_id' => 439,
				'section' => 'ECED-TUT',
				'day' => '----F-',
				'start_time' => '4:15PM',
				'end_time' => '5:05PM',
				'place' => 'FG B055 SGW'
			],
			[
				'lecture_id' => 440,
				'section' => 'T TA-TUT',
				'day' => '----F-',
				'start_time' => '10:15AM',
				'end_time' => '11:05AM',
				'place' => 'H 540 SGW'
			],
			[
				'lecture_id' => 440,
				'section' => 'T TB-TUT',
				'day' => '----F-',
				'start_time' => '10:15AM',
				'end_time' => '11:05AM',
				'place' => 'H 537 SGW'
			],
			[
				'lecture_id' => 440,
				'section' => 'T TC-TUT',
				'day' => '----F-',
				'start_time' => '10:15AM',
				'end_time' => '11:05AM',
				'place' => 'H 564 SGW'
			],
			[
				'lecture_id' => 441,
				'section' => 'UUUA-TUT',
				'day' => '----F-',
				'start_time' => '2:45PM',
				'end_time' => '3:35PM',
				'place' => 'H 537 SGW'
			],
			[
				'lecture_id' => 441,
				'section' => 'UUUB-TUT',
				'day' => 'M-----',
				'start_time' => '2:45PM',
				'end_time' => '3:35PM',
				'place' => 'H 537 SGW'
			],
			[
				'lecture_id' => 441,
				'section' => 'UUUC-TUT',
				'day' => 'M-----',
				'start_time' => '2:45PM',
				'end_time' => '3:35PM',
				'place' => 'H 564 SGW'
			],
			[
				'lecture_id' => 442,
				'section' => 'W WA-TUT',
				'day' => '--W---',
				'start_time' => '8:45AM',
				'end_time' => '9:35AM',
				'place' => 'H 562 SGW'
			],
			[
				'lecture_id' => 442,
				'section' => 'W WB-TUT',
				'day' => '----F-',
				'start_time' => '8:45AM',
				'end_time' => '9:35AM',
				'place' => 'H 564 SGW'
			],
			[
				'lecture_id' => 442,
				'section' => 'W WC-TUT',
				'day' => '----F-',
				'start_time' => '8:45AM',
				'end_time' => '9:35AM',
				'place' => 'H 562 SGW'
			],
			[
				'lecture_id' => 443,
				'section' => 'UUUA-TUT',
				'day' => '---T--',
				'start_time' => '8:30PM',
				'end_time' => '9:20PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 443,
				'section' => 'UUUB-TUT',
				'day' => '---T--',
				'start_time' => '8:30PM',
				'end_time' => '9:20PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 443,
				'section' => 'UUUC-TUT',
				'day' => '---T--',
				'start_time' => '8:30PM',
				'end_time' => '9:20PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 444,
				'section' => 'V VA-TUT',
				'day' => '----F-',
				'start_time' => '11:45AM',
				'end_time' => '12:35PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 444,
				'section' => 'V VB-TUT',
				'day' => '----F-',
				'start_time' => '1:15PM',
				'end_time' => '2:05PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 444,
				'section' => 'V VC-TUT',
				'day' => '----F-',
				'start_time' => '11:45AM',
				'end_time' => '12:35PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 444,
				'section' => 'V VD-TUT',
				'day' => '----F-',
				'start_time' => '1:15PM',
				'end_time' => '2:05PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 445,
				'section' => 'X XA-TUT',
				'day' => '----F-',
				'start_time' => '1:15PM',
				'end_time' => '2:05PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 445,
				'section' => 'X XB-TUT',
				'day' => '----F-',
				'start_time' => '3:15PM',
				'end_time' => '4:05PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 445,
				'section' => 'X XC-TUT',
				'day' => '----F-',
				'start_time' => '3:15PM',
				'end_time' => '4:05PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 445,
				'section' => 'X XD-TUT',
				'day' => '----F-',
				'start_time' => '4:30PM',
				'end_time' => '5:20PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 452,
				'section' => 'W WA-TUT',
				'day' => 'M-----',
				'start_time' => '2:15PM',
				'end_time' => '4:05PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 452,
				'section' => 'W WB-TUT',
				'day' => 'M-----',
				'start_time' => '2:15PM',
				'end_time' => '4:05PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 453,
				'section' => 'WWWA-TUT',
				'day' => '--W---',
				'start_time' => '10:15AM',
				'end_time' => '11:05AM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 453,
				'section' => 'WWWB-TUT',
				'day' => '--W---',
				'start_time' => '8:45AM',
				'end_time' => '9:35AM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 454,
				'section' => 'YYYA-TUT',
				'day' => '--W---',
				'start_time' => '11:45AM',
				'end_time' => '12:35PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 454,
				'section' => 'YYYB-TUT',
				'day' => 'M-----',
				'start_time' => '8:45AM',
				'end_time' => '9:35AM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 455,
				'section' => 'W WA-TUT',
				'day' => '----F-',
				'start_time' => '3:15PM',
				'end_time' => '4:05PM',
				'place' => 'H 501 SGW'
			],
			[
				'lecture_id' => 455,
				'section' => 'W WB-TUT',
				'day' => '----F-',
				'start_time' => '3:15PM',
				'end_time' => '4:05PM',
				'place' => 'H 539 SGW'
			],
			[
				'lecture_id' => 456,
				'section' => 'M MA-TUT',
				'day' => '-T----',
				'start_time' => '3:55PM',
				'end_time' => '5:35PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 456,
				'section' => 'M MB-TUT',
				'day' => '-T----',
				'start_time' => '5:45PM',
				'end_time' => '7:35PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 457,
				'section' => 'N NA-TUT',
				'day' => '---T--',
				'start_time' => '3:55PM',
				'end_time' => '5:35PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 457,
				'section' => 'N NB-TUT',
				'day' => '---T--',
				'start_time' => '5:45PM',
				'end_time' => '7:35PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 458,
				'section' => 'X XA-TUT',
				'day' => 'M-----',
				'start_time' => '4:15PM',
				'end_time' => '6:05PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 458,
				'section' => 'X XB-TUT',
				'day' => '-T----',
				'start_time' => '7:45PM',
				'end_time' => '9:35PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 459,
				'section' => 'T TA-TUT',
				'day' => '----F-',
				'start_time' => '4:45PM',
				'end_time' => '5:35PM',
				'place' => 'H 521 SGW'
			],
			[
				'lecture_id' => 459,
				'section' => 'T TB-TUT',
				'day' => '----F-',
				'start_time' => '4:45PM',
				'end_time' => '5:35PM',
				'place' => 'FG B070 SGW'
			],
			[
				'lecture_id' => 460,
				'section' => 'X XA-TUT',
				'day' => '----F-',
				'start_time' => '2:15PM',
				'end_time' => '3:05PM',
				'place' => 'H 521 SGW'
			],
			[
				'lecture_id' => 460,
				'section' => 'X XB-TUT',
				'day' => '----F-',
				'start_time' => '2:15PM',
				'end_time' => '3:05PM',
				'place' => 'FG B070 SGW'
			],
			[
				'lecture_id' => 461,
				'section' => 'MMMA-TUT',
				'day' => '----F-',
				'start_time' => '8:45AM',
				'end_time' => '9:35AM',
				'place' => 'FG B080 SGW'
			],
			[
				'lecture_id' => 461,
				'section' => 'MMMB-TUT',
				'day' => 'M-----',
				'start_time' => '8:45AM',
				'end_time' => '9:35AM',
				'place' => 'FG B080 SGW'
			],
			[
				'lecture_id' => 462,
				'section' => 'T TA-TUT',
				'day' => '----F-',
				'start_time' => '1:15PM',
				'end_time' => '2:05PM',
				'place' => 'FG B080 SGW'
			],
			[
				'lecture_id' => 462,
				'section' => 'T TB-TUT',
				'day' => 'M-----',
				'start_time' => '1:15PM',
				'end_time' => '2:05PM',
				'place' => 'FG B080 SGW'
			],
			[
				'lecture_id' => 463,
				'section' => 'M MA-TUT',
				'day' => '---T--',
				'start_time' => '5:45PM',
				'end_time' => '7:25PM',
				'place' => 'H 540 SGW'
			],
			[
				'lecture_id' => 463,
				'section' => 'M MB-TUT',
				'day' => '---T--',
				'start_time' => '5:45PM',
				'end_time' => '7:25PM',
				'place' => 'H 537 SGW'
			],
			[
				'lecture_id' => 464,
				'section' => 'T TA-TUT',
				'day' => '----F-',
				'start_time' => '2:45PM',
				'end_time' => '3:35PM',
				'place' => 'H 920 SGW'
			],
			[
				'lecture_id' => 464,
				'section' => 'T TB-TUT',
				'day' => 'M-----',
				'start_time' => '2:15PM',
				'end_time' => '3:05PM',
				'place' => 'H 403 SGW'
			],
			[
				'lecture_id' => 465,
				'section' => 'X XA-TUT',
				'day' => '----F-',
				'start_time' => '4:15PM',
				'end_time' => '5:05PM',
				'place' => 'FG B080 SGW'
			],
			[
				'lecture_id' => 465,
				'section' => 'X XB-TUT',
				'day' => 'M-----',
				'start_time' => '2:15PM',
				'end_time' => '3:05PM',
				'place' => 'H 423 SGW'
			],
			[
				'lecture_id' => 466,
				'section' => 'T TA-TUT',
				'day' => '----F-',
				'start_time' => '1:15PM',
				'end_time' => '2:05PM',
				'place' => 'H 523 SGW'
			],
			[
				'lecture_id' => 466,
				'section' => 'T TB-TUT',
				'day' => '----F-',
				'start_time' => '1:15PM',
				'end_time' => '2:05PM',
				'place' => 'H 613 SGW'
			],
			[
				'lecture_id' => 467,
				'section' => 'M MA-TUT',
				'day' => '-T----',
				'start_time' => '11:45AM',
				'end_time' => '12:35PM',
				'place' => 'H 431 SGW'
			],
			[
				'lecture_id' => 467,
				'section' => 'M MB-TUT',
				'day' => '---T--',
				'start_time' => '11:45AM',
				'end_time' => '12:35PM',
				'place' => 'H 431 SGW'
			],
			[
				'lecture_id' => 468,
				'section' => 'T TA-TUT',
				'day' => '----F-',
				'start_time' => '1:15PM',
				'end_time' => '2:05PM',
				'place' => 'MB 2.435 SGW'
			],
			[
				'lecture_id' => 468,
				'section' => 'T TB-TUT',
				'day' => '----F-',
				'start_time' => '1:15PM',
				'end_time' => '2:05PM',
				'place' => 'H 501 SGW'
			],
			[
				'lecture_id' => 469,
				'section' => 'T TA-TUT',
				'day' => 'M-----',
				'start_time' => '9:00AM',
				'end_time' => '9:50AM',
				'place' => 'H 429 SGW'
			],
			[
				'lecture_id' => 469,
				'section' => 'T TB-TUT',
				'day' => 'M-----',
				'start_time' => '9:00AM',
				'end_time' => '9:50AM',
				'place' => 'H 523 SGW'
			],
			[
				'lecture_id' => 470,
				'section' => 'X XA-TUT',
				'day' => '--W---',
				'start_time' => '2:45PM',
				'end_time' => '3:35PM',
				'place' => 'H 429 SGW'
			],
			[
				'lecture_id' => 470,
				'section' => 'X XB-TUT',
				'day' => '--W---',
				'start_time' => '2:45PM',
				'end_time' => '3:35PM',
				'place' => 'H 523 SGW'
			],
			[
				'lecture_id' => 471,
				'section' => 'M MA-TUT',
				'day' => 'M-----',
				'start_time' => '2:15PM',
				'end_time' => '4:05PM',
				'place' => 'FG B055 SGW'
			],
			[
				'lecture_id' => 471,
				'section' => 'M MB-TUT',
				'day' => 'M-----',
				'start_time' => '2:15PM',
				'end_time' => '4:05PM',
				'place' => 'FG B080 SGW'
			],
			[
				'lecture_id' => 472,
				'section' => 'J JA-TUT',
				'day' => '-T----',
				'start_time' => '11:45AM',
				'end_time' => '1:35PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 472,
				'section' => 'J JB-TUT',
				'day' => '---T--',
				'start_time' => '11:45AM',
				'end_time' => '1:35PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 472,
				'section' => 'J JC-TUT',
				'day' => '--W---',
				'start_time' => '8:45AM',
				'end_time' => '10:35AM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 472,
				'section' => 'J JD-TUT',
				'day' => '--W---',
				'start_time' => '11:45AM',
				'end_time' => '1:35PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 472,
				'section' => 'J JE-TUT',
				'day' => '----F-',
				'start_time' => '8:45AM',
				'end_time' => '10:35AM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 473,
				'section' => 'T TA-TUT',
				'day' => '---T--',
				'start_time' => '5:45PM',
				'end_time' => '7:35PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 473,
				'section' => 'T TB-TUT',
				'day' => '---T--',
				'start_time' => '8:45AM',
				'end_time' => '10:35AM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 473,
				'section' => 'T TC-TUT',
				'day' => '-T----',
				'start_time' => '3:15PM',
				'end_time' => '5:05PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 473,
				'section' => 'T TD-TUT',
				'day' => 'M-----',
				'start_time' => '3:15PM',
				'end_time' => '5:05PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 473,
				'section' => 'T TE-TUT',
				'day' => '----F-',
				'start_time' => '5:45PM',
				'end_time' => '7:35PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 486,
				'section' => 'DDDA-TUT',
				'day' => '-T----',
				'start_time' => '8:30PM',
				'end_time' => '10:10PM',
				'place' => 'MB S1.105 SGW'
			],
			[
				'lecture_id' => 486,
				'section' => 'DDDB-TUT',
				'day' => '-T----',
				'start_time' => '8:30PM',
				'end_time' => '10:10PM',
				'place' => 'H 523 SGW'
			],
			[
				'lecture_id' => 487,
				'section' => 'H HA-TUT',
				'day' => '--W---',
				'start_time' => '4:15PM',
				'end_time' => '5:55PM',
				'place' => 'MB 1.301 SGW'
			],
			[
				'lecture_id' => 487,
				'section' => 'H HB-TUT',
				'day' => '--W---',
				'start_time' => '4:15PM',
				'end_time' => '5:55PM',
				'place' => 'MB 2.255 SGW'
			],
			[
				'lecture_id' => 487,
				'section' => 'H HC-TUT',
				'day' => '--W---',
				'start_time' => '4:15PM',
				'end_time' => '5:55PM',
				'place' => 'MB S1.105 SGW'
			],
			[
				'lecture_id' => 488,
				'section' => 'S SA-TUT',
				'day' => '-T----',
				'start_time' => '10:15AM',
				'end_time' => '11:55AM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 488,
				'section' => 'S SB-TUT',
				'day' => '---T--',
				'start_time' => '10:15AM',
				'end_time' => '11:55AM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 489,
				'section' => 'U UA-TUT',
				'day' => '-T----',
				'start_time' => '4:15PM',
				'end_time' => '5:55PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 489,
				'section' => 'U UB-TUT',
				'day' => '---T--',
				'start_time' => '4:15PM',
				'end_time' => '5:55PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 490,
				'section' => 'WWA-TUT',
				'day' => '----F-',
				'start_time' => '3:15PM',
				'end_time' => '4:55PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 490,
				'section' => 'WWB-TUT',
				'day' => '-T----',
				'start_time' => '4:05PM',
				'end_time' => '5:45PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 491,
				'section' => 'U UA-TUT',
				'day' => '----F-',
				'start_time' => '2:15PM',
				'end_time' => '4:05PM',
				'place' => 'MB 3.255 SGW'
			],
			[
				'lecture_id' => 491,
				'section' => 'U UB-TUT',
				'day' => '----F-',
				'start_time' => '12:15PM',
				'end_time' => '2:05PM',
				'place' => 'MB 3.255 SGW'
			],
			[
				'lecture_id' => 492,
				'section' => 'W WA-TUT',
				'day' => '----F-',
				'start_time' => '2:15PM',
				'end_time' => '4:05PM',
				'place' => 'MB 3.265 SGW'
			],
			[
				'lecture_id' => 492,
				'section' => 'W WB-TUT',
				'day' => '----F-',
				'start_time' => '12:15PM',
				'end_time' => '2:05PM',
				'place' => 'MB 3.265 SGW'
			],
			[
				'lecture_id' => 493,
				'section' => 'S SA-TUT',
				'day' => '----F-',
				'start_time' => '12:15PM',
				'end_time' => '1:05PM',
				'place' => 'H 929 SGW'
			],
			[
				'lecture_id' => 493,
				'section' => 'S SB-TUT',
				'day' => '----F-',
				'start_time' => '1:15PM',
				'end_time' => '2:05PM',
				'place' => 'H 905 SGW'
			],
			[
				'lecture_id' => 494,
				'section' => 'U UA-TUT',
				'day' => '----F-',
				'start_time' => '12:15PM',
				'end_time' => '1:05PM',
				'place' => 'H 811 SGW'
			],
			[
				'lecture_id' => 494,
				'section' => 'U UB-TUT',
				'day' => '----F-',
				'start_time' => '1:15PM',
				'end_time' => '2:05PM',
				'place' => 'H 811 SGW'
			],
			[
				'lecture_id' => 494,
				'section' => 'U UC-TUT',
				'day' => '----F-',
				'start_time' => '12:15PM',
				'end_time' => '1:05PM',
				'place' => 'H 823 SGW'
			],
			[
				'lecture_id' => 494,
				'section' => 'U UD-TUT',
				'day' => '----F-',
				'start_time' => '1:15PM',
				'end_time' => '2:05PM',
				'place' => 'H 823 SGW'
			],
			[
				'lecture_id' => 495,
				'section' => 'S SA-TUT',
				'day' => '---T--',
				'start_time' => '2:45PM',
				'end_time' => '3:35PM',
				'place' => 'H 564 SGW'
			],
			[
				'lecture_id' => 495,
				'section' => 'S SB-TUT',
				'day' => '---T--',
				'start_time' => '2:45PM',
				'end_time' => '3:35PM',
				'place' => 'H 603-1 SGW'
			],
			[
				'lecture_id' => 496,
				'section' => 'S SA-TUT',
				'day' => '--W---',
				'start_time' => '4:15PM',
				'end_time' => '5:05PM',
				'place' => 'H 823 SGW'
			],
			[
				'lecture_id' => 496,
				'section' => 'S SB-TUT',
				'day' => '--W---',
				'start_time' => '5:45PM',
				'end_time' => '6:35PM',
				'place' => 'H 905 SGW'
			],
			[
				'lecture_id' => 496,
				'section' => 'S SC-TUT',
				'day' => '--W---',
				'start_time' => '4:15PM',
				'end_time' => '5:05PM',
				'place' => 'H 817 SGW'
			],
			[
				'lecture_id' => 497,
				'section' => 'S SA-TUT',
				'day' => '----F-',
				'start_time' => '11:45AM',
				'end_time' => '12:35PM',
				'place' => 'H 564 SGW'
			],
			[
				'lecture_id' => 497,
				'section' => 'S SB-TUT',
				'day' => '----F-',
				'start_time' => '11:45AM',
				'end_time' => '12:35PM',
				'place' => 'H 562 SGW'
			],
			[
				'lecture_id' => 498,
				'section' => 'S SA-TUT',
				'day' => '-T----',
				'start_time' => '10:45AM',
				'end_time' => '11:35AM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 498,
				'section' => 'S SB-TUT',
				'day' => '---T--',
				'start_time' => '10:45AM',
				'end_time' => '11:35AM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 498,
				'section' => 'S SC-TUT',
				'day' => 'M-----',
				'start_time' => '10:45AM',
				'end_time' => '11:35AM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 499,
				'section' => 'S SA-TUT',
				'day' => 'M-----',
				'start_time' => '6:15PM',
				'end_time' => '7:05PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 499,
				'section' => 'S SB-TUT',
				'day' => 'M-----',
				'start_time' => '6:15PM',
				'end_time' => '7:05PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 500,
				'section' => 'NNNA-TUT',
				'day' => '--W---',
				'start_time' => '4:15PM',
				'end_time' => '5:05PM',
				'place' => 'TBA'
			],
			[
				'lecture_id' => 500,
				'section' => 'NNNB-TUT',
				'day' => '--W---',
				'start_time' => '4:15PM',
				'end_time' => '5:05PM',
				'place' => 'TBA'
			],
        ]);
    }
}
