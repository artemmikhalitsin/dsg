<?php

use Illuminate\Database\Seeder;

class LabsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('labs')->delete();

        DB::table('labs')->insert([
        		[
'lecture_id' => 59,
'section' => '01L-LAB',
'day' => 'M-----',
'start_time' => '9:00AM',
'end_time' => '1:00PM',
'place' => 'SP 210 LOY'
],
	[
'lecture_id' => 59,
'section' => '02L-LAB',
'day' => 'M-----',
'start_time' => '1:30PM',
'end_time' => '5:30PM',
'place' => 'SP 210 LOY'
],
	[
'lecture_id' => 59,
'section' => '03L-LAB',
'day' => '-T----',
'start_time' => '1:30PM',
'end_time' => '5:30PM',
'place' => 'SP 210 LOY'
],
	[
'lecture_id' => 59,
'section' => '04L-LAB',
'day' => '---T--',
'start_time' => '1:30PM',
'end_time' => '5:30PM',
'place' => 'SP 210 LOY'
],
	[
'lecture_id' => 60,
'section' => '51L-LAB',
'day' => 'M-----',
'start_time' => '6:30PM',
'end_time' => '10:30PM',
'place' => 'SP 210 LOY'
],
	[
'lecture_id' => 60,
'section' => '52L-LAB',
'day' => '---T--',
'start_time' => '6:30PM',
'end_time' => '10:30PM',
'place' => 'SP 210 LOY'
],
	[
'lecture_id' => 60,
'section' => '56L-LAB',
'day' => 'TBA',
'start_time' => 'TBA',
'end_time' => 'TBA',
'place' => 'TBA'
],
	[
'lecture_id' => 61,
'section' => '01L-LAB',
'day' => 'M-----',
'start_time' => '9:00AM',
'end_time' => '1:00PM',
'place' => 'SP 116 LOY'
],
	[
'lecture_id' => 61,
'section' => '02L-LAB',
'day' => '-T----',
'start_time' => '1:30PM',
'end_time' => '5:30PM',
'place' => 'SP 116 LOY'
],
	[
'lecture_id' => 61,
'section' => '03L-LAB',
'day' => '--W---',
'start_time' => '1:30PM',
'end_time' => '5:30PM',
'place' => 'SP 116 LOY'
],
	[
'lecture_id' => 61,
'section' => '04L-LAB',
'day' => '----F-',
'start_time' => '1:30PM',
'end_time' => '5:30PM',
'place' => 'SP 116 LOY'
],
	[
'lecture_id' => 61,
'section' => '05L-LAB',
'day' => '----F-',
'start_time' => '9:00AM',
'end_time' => '1:00PM',
'place' => 'SP 116 LOY'
],
	[
'lecture_id' => 62,
'section' => '51L-LAB',
'day' => '-T----',
'start_time' => '6:30PM',
'end_time' => '10:30PM',
'place' => 'SP 116 LOY'
],
	[
'lecture_id' => 62,
'section' => '52L-LAB',
'day' => '--W---',
'start_time' => '6:30PM',
'end_time' => '10:30PM',
'place' => 'SP 116 LOY'
],
	[
'lecture_id' => 62,
'section' => '56L-LAB',
'day' => 'TBA',
'start_time' => 'TBA',
'end_time' => 'TBA',
'place' => 'TBA'
],
	[
'lecture_id' => 67,
'section' => 'XXXI-LAB',
'day' => 'M-----',
'start_time' => '11:45AM',
'end_time' => '1:35PM',
'place' => 'H 867 SGW'
],
	[
'lecture_id' => 67,
'section' => 'XXXJ-LAB',
'day' => 'M-----',
'start_time' => '11:45AM',
'end_time' => '1:35PM',
'place' => 'H 867 SGW'
],
	[
'lecture_id' => 67,
'section' => 'XXXK-LAB',
'day' => '--W---',
'start_time' => '12:05PM',
'end_time' => '1:55PM',
'place' => 'H 867 SGW'
],
	[
'lecture_id' => 67,
'section' => 'XXXL-LAB',
'day' => '--W---',
'start_time' => '12:05PM',
'end_time' => '1:55PM',
'place' => 'H 867 SGW'
],
	[
'lecture_id' => 67,
'section' => 'XXXM-LAB',
'day' => '--W---',
'start_time' => '9:45AM',
'end_time' => '11:35AM',
'place' => 'H 867 SGW'
],
	[
'lecture_id' => 67,
'section' => 'XXXN-LAB',
'day' => '--W---',
'start_time' => '9:45AM',
'end_time' => '11:35AM',
'place' => 'H 867 SGW'
],
	[
'lecture_id' => 67,
'section' => 'XXXO-LAB',
'day' => '--W---',
'start_time' => '2:45PM',
'end_time' => '4:35PM',
'place' => 'H 867 SGW'
],
	[
'lecture_id' => 70,
'section' => 'DI-X-LAB',
'day' => 'M-----',
'start_time' => '11:45AM',
'end_time' => '2:30PM',
'place' => 'H 1029-1 SGW'
],
	[
'lecture_id' => 70,
'section' => 'DJ-X-LAB',
'day' => 'M-----',
'start_time' => '11:45AM',
'end_time' => '2:30PM',
'place' => 'H 1029-1 SGW'
],
	[
'lecture_id' => 70,
'section' => 'DK-X-LAB',
'day' => '-T----',
'start_time' => '8:45AM',
'end_time' => '11:30AM',
'place' => 'H 1029-1 SGW'
],
	[
'lecture_id' => 70,
'section' => 'DL-X-LAB',
'day' => '-T----',
'start_time' => '8:45AM',
'end_time' => '11:30AM',
'place' => 'H 1029-1 SGW'
],
	[
'lecture_id' => 70,
'section' => 'DM-X-LAB',
'day' => 'M-----',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'H 1029-1 SGW'
],
	[
'lecture_id' => 70,
'section' => 'DN-X-LAB',
'day' => 'M-----',
'start_time' => '8:45AM',
'end_time' => '11:30AM',
'place' => 'H 1029-1 SGW'
],
	[
'lecture_id' => 71,
'section' => 'FI-X-LAB',
'day' => '---T--',
'start_time' => '8:45AM',
'end_time' => '11:30AM',
'place' => 'H 1029-1 SGW'
],
	[
'lecture_id' => 71,
'section' => 'FJ-X-LAB',
'day' => 'M-----',
'start_time' => '5:45PM',
'end_time' => '8:30PM',
'place' => 'H 1029-1 SGW'
],
	[
'lecture_id' => 71,
'section' => 'FK-X-LAB',
'day' => 'M-----',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'H 1029-1 SGW'
],
	[
'lecture_id' => 71,
'section' => 'FL-X-LAB',
'day' => 'M-----',
'start_time' => '5:45PM',
'end_time' => '8:30PM',
'place' => 'H 1029-1 SGW'
],
	[
'lecture_id' => 76,
'section' => 'QI-X-LAB',
'day' => 'M-----',
'start_time' => '8:45AM',
'end_time' => '11:30AM',
'place' => 'H 813 SGW'
],
	[
'lecture_id' => 76,
'section' => 'QJ-X-LAB',
'day' => 'M-----',
'start_time' => '8:45AM',
'end_time' => '11:30AM',
'place' => 'H 813 SGW'
],
	[
'lecture_id' => 76,
'section' => 'QK-X-LAB',
'day' => '--W---',
'start_time' => '8:45AM',
'end_time' => '11:30AM',
'place' => 'H 813 SGW'
],
	[
'lecture_id' => 77,
'section' => 'DI-X-LAB',
'day' => 'M-----',
'start_time' => '8:45AM',
'end_time' => '11:30AM',
'place' => 'H 913 SGW'
],
	[
'lecture_id' => 77,
'section' => 'DJ-X-LAB',
'day' => '----F-',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'H 913 SGW'
],
	[
'lecture_id' => 78,
'section' => 'U UI-LAB',
'day' => 'M-----',
'start_time' => '11:45AM',
'end_time' => '2:30PM',
'place' => 'H 913 SGW'
],
	[
'lecture_id' => 78,
'section' => 'U UJ-LAB',
'day' => 'M-----',
'start_time' => '11:45AM',
'end_time' => '2:30PM',
'place' => 'H 913 SGW'
],
	[
'lecture_id' => 78,
'section' => 'U UK-LAB',
'day' => '-T----',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'H 913 SGW'
],
	[
'lecture_id' => 78,
'section' => 'U UL-LAB',
'day' => '-T----',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'H 913 SGW'
],
	[
'lecture_id' => 82,
'section' => 'Q QI-LAB',
'day' => '-T----',
'start_time' => '7:45PM',
'end_time' => '10:30PM',
'place' => 'H 847 SGW'
],
	[
'lecture_id' => 83,
'section' => 'U UI-LAB',
'day' => '--W---',
'start_time' => '5:45PM',
'end_time' => '8:15PM',
'place' => 'H 915 SGW'
],
	[
'lecture_id' => 83,
'section' => 'U UJ-LAB',
'day' => 'M-----',
'start_time' => '5:45PM',
'end_time' => '8:15PM',
'place' => 'H 915 SGW'
],
	[
'lecture_id' => 94,
'section' => 'EI-X-LAB',
'day' => 'M-----',
'start_time' => '7:45PM',
'end_time' => '8:45PM',
'place' => 'TBA'
],
	[
'lecture_id' => 94,
'section' => 'EJ-X-LAB',
'day' => '-T----',
'start_time' => '10:15AM',
'end_time' => '11:15AM',
'place' => 'TBA'
],
	[
'lecture_id' => 94,
'section' => 'EK-X-LAB',
'day' => '---T--',
'start_time' => '8:30PM',
'end_time' => '9:30PM',
'place' => 'TBA'
],
	[
'lecture_id' => 95,
'section' => 'FI-X-LAB',
'day' => 'M-----',
'start_time' => '7:45PM',
'end_time' => '8:45PM',
'place' => 'TBA'
],
	[
'lecture_id' => 95,
'section' => 'FJ-X-LAB',
'day' => '----F-',
'start_time' => '10:15AM',
'end_time' => '11:15AM',
'place' => 'TBA'
],
	[
'lecture_id' => 95,
'section' => 'FK-X-LAB',
'day' => '----F-',
'start_time' => '8:30PM',
'end_time' => '9:30PM',
'place' => 'TBA'
],
	[
'lecture_id' => 96,
'section' => 'PI-X-LAB',
'day' => '----F-',
'start_time' => '10:40AM',
'end_time' => '11:40AM',
'place' => 'TBA'
],
	[
'lecture_id' => 96,
'section' => 'PJ-X-LAB',
'day' => 'M-----',
'start_time' => '12:10PM',
'end_time' => '1:10PM',
'place' => 'TBA'
],
	[
'lecture_id' => 96,
'section' => 'PK-X-LAB',
'day' => 'M-----',
'start_time' => '12:10PM',
'end_time' => '1:10PM',
'place' => 'TBA'
],
	[
'lecture_id' => 97,
'section' => 'QI-X-LAB',
'day' => '--W---',
'start_time' => '12:10PM',
'end_time' => '1:10PM',
'place' => 'TBA'
],
	[
'lecture_id' => 97,
'section' => 'QJ-X-LAB',
'day' => '--W---',
'start_time' => '12:10PM',
'end_time' => '1:10PM',
'place' => 'TBA'
],
	[
'lecture_id' => 97,
'section' => 'QK-X-LAB',
'day' => 'M-----',
'start_time' => '12:10PM',
'end_time' => '1:10PM',
'place' => 'TBA'
],
	[
'lecture_id' => 98,
'section' => 'RI-X-LAB',
'day' => '----F-',
'start_time' => '10:40AM',
'end_time' => '11:40AM',
'place' => 'TBA'
],
	[
'lecture_id' => 98,
'section' => 'RJ-X-LAB',
'day' => '----F-',
'start_time' => '10:40AM',
'end_time' => '11:40AM',
'place' => 'TBA'
],
	[
'lecture_id' => 98,
'section' => 'RK-X-LAB',
'day' => '--W---',
'start_time' => '12:10PM',
'end_time' => '1:10PM',
'place' => 'TBA'
],
	[
'lecture_id' => 99,
'section' => 'DI-X-LAB',
'day' => 'M-----',
'start_time' => '6:15PM',
'end_time' => '7:15PM',
'place' => 'TBA'
],
	[
'lecture_id' => 99,
'section' => 'DJ-X-LAB',
'day' => '--W---',
'start_time' => '6:15PM',
'end_time' => '7:15PM',
'place' => 'TBA'
],
	[
'lecture_id' => 99,
'section' => 'DK-X-LAB',
'day' => '--W---',
'start_time' => '7:30PM',
'end_time' => '8:30PM',
'place' => 'TBA'
],
	[
'lecture_id' => 100,
'section' => 'EI-X-LAB',
'day' => 'M-----',
'start_time' => '6:15PM',
'end_time' => '7:15PM',
'place' => 'TBA'
],
	[
'lecture_id' => 100,
'section' => 'EJ-X-LAB',
'day' => '--W---',
'start_time' => '6:15PM',
'end_time' => '7:15PM',
'place' => 'TBA'
],
	[
'lecture_id' => 100,
'section' => 'EK-X-LAB',
'day' => '--W---',
'start_time' => '7:30PM',
'end_time' => '8:30PM',
'place' => 'TBA'
],
	[
'lecture_id' => 105,
'section' => 'D DI-LAB',
'day' => '--W---',
'start_time' => '8:30PM',
'end_time' => '10:20PM',
'place' => 'TBA'
],
	[
'lecture_id' => 105,
'section' => 'D DJ-LAB',
'day' => '--W---',
'start_time' => '8:30PM',
'end_time' => '10:20PM',
'place' => 'TBA'
],
	[
'lecture_id' => 106,
'section' => 'N NI-LAB',
'day' => '--W---',
'start_time' => '5:45PM',
'end_time' => '7:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 106,
'section' => 'N NJ-LAB',
'day' => '--W---',
'start_time' => '5:45PM',
'end_time' => '7:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 106,
'section' => 'N NK-LAB',
'day' => '--W---',
'start_time' => '5:45PM',
'end_time' => '7:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 107,
'section' => 'DI-X-LAB',
'day' => '---T--',
'start_time' => '5:45PM',
'end_time' => '7:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 107,
'section' => 'DJ-X-LAB',
'day' => '---T--',
'start_time' => '7:45PM',
'end_time' => '9:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 115,
'section' => 'FI-X-LAB',
'day' => '---T--',
'start_time' => '2:45PM',
'end_time' => '3:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 115,
'section' => 'FJ-X-LAB',
'day' => '----F-',
'start_time' => '1:15PM',
'end_time' => '3:05PM',
'place' => 'TBA'
],
	[
'lecture_id' => 116,
'section' => 'EI-X-LAB',
'day' => '----F-',
'start_time' => '2:20PM',
'end_time' => '3:50PM',
'place' => 'TBA'
],
	[
'lecture_id' => 116,
'section' => 'EJ-X-LAB',
'day' => '----F-',
'start_time' => '4:00PM',
'end_time' => '5:30PM',
'place' => 'TBA'
],
	[
'lecture_id' => 116,
'section' => 'EK-X-LAB',
'day' => '----F-',
'start_time' => '2:20PM',
'end_time' => '3:50PM',
'place' => 'TBA'
],
	[
'lecture_id' => 118,
'section' => 'UUUI-LAB',
'day' => '--W---',
'start_time' => '4:15PM',
'end_time' => '6:05PM',
'place' => 'TBA'
],
	[
'lecture_id' => 118,
'section' => 'UUUJ-LAB',
'day' => 'M-----',
'start_time' => '4:15PM',
'end_time' => '6:05PM',
'place' => 'TBA'
],
	[
'lecture_id' => 119,
'section' => 'WWWI-LAB',
'day' => '-T----',
'start_time' => '3:45PM',
'end_time' => '5:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 119,
'section' => 'WWWJ-LAB',
'day' => '-T----',
'start_time' => '8:30PM',
'end_time' => '10:20PM',
'place' => 'TBA'
],
	[
'lecture_id' => 120,
'section' => 'XXXI-LAB',
'day' => '---T--',
'start_time' => '3:45PM',
'end_time' => '5:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 120,
'section' => 'XXXJ-LAB',
'day' => '---T--',
'start_time' => '8:30PM',
'end_time' => '10:20PM',
'place' => 'TBA'
],
	[
'lecture_id' => 121,
'section' => 'NNNI-LAB',
'day' => '-T----',
'start_time' => '8:30PM',
'end_time' => '10:10PM',
'place' => 'TBA'
],
	[
'lecture_id' => 121,
'section' => 'NNNJ-LAB',
'day' => '-T----',
'start_time' => '8:30PM',
'end_time' => '10:10PM',
'place' => 'TBA'
],
	[
'lecture_id' => 122,
'section' => 'FI-X-LAB',
'day' => '---T--',
'start_time' => '3:30PM',
'end_time' => '5:20PM',
'place' => 'TBA'
],
	[
'lecture_id' => 122,
'section' => 'FJ-X-LAB',
'day' => '----F-',
'start_time' => '3:30PM',
'end_time' => '5:20PM',
'place' => 'TBA'
],
	[
'lecture_id' => 123,
'section' => 'D DI-LAB',
'day' => 'M-----',
'start_time' => '1:15PM',
'end_time' => '3:05PM',
'place' => 'TBA'
],
	[
'lecture_id' => 123,
'section' => 'D DJ-LAB',
'day' => 'M-----',
'start_time' => '5:45PM',
'end_time' => '7:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 123,
'section' => 'D DK-LAB',
'day' => 'M-----',
'start_time' => '1:15PM',
'end_time' => '3:05PM',
'place' => 'TBA'
],
	[
'lecture_id' => 123,
'section' => 'D DL-LAB',
'day' => 'M-----',
'start_time' => '5:45PM',
'end_time' => '7:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 125,
'section' => 'F FI-LAB',
'day' => '-T----',
'start_time' => '4:15PM',
'end_time' => '6:15PM',
'place' => 'TBA'
],
	[
'lecture_id' => 125,
'section' => 'F FJ-LAB',
'day' => '--W---',
'start_time' => '4:15PM',
'end_time' => '6:15PM',
'place' => 'TBA'
],
	[
'lecture_id' => 125,
'section' => 'F FK-LAB',
'day' => '--W---',
'start_time' => '6:30PM',
'end_time' => '8:30PM',
'place' => 'TBA'
],
	[
'lecture_id' => 126,
'section' => 'DDDI-LAB',
'day' => '---T--',
'start_time' => '8:30PM',
'end_time' => '10:20PM',
'place' => 'TBA'
],
	[
'lecture_id' => 126,
'section' => 'DDDJ-LAB',
'day' => '---T--',
'start_time' => '8:30PM',
'end_time' => '10:20PM',
'place' => 'TBA'
],
	[
'lecture_id' => 126,
'section' => 'DDDK-LAB',
'day' => '---T--',
'start_time' => '8:30PM',
'end_time' => '10:20PM',
'place' => 'TBA'
],
	[
'lecture_id' => 127,
'section' => 'N NI-LAB',
'day' => 'M-----',
'start_time' => '2:45PM',
'end_time' => '4:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 127,
'section' => 'N NJ-LAB',
'day' => '--W---',
'start_time' => '2:45PM',
'end_time' => '4:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 128,
'section' => 'DDDI-LAB',
'day' => '--W---',
'start_time' => '8:30PM',
'end_time' => '10:30PM',
'place' => 'TBA'
],
	[
'lecture_id' => 128,
'section' => 'DDDJ-LAB',
'day' => 'M-----',
'start_time' => '8:30PM',
'end_time' => '10:30PM',
'place' => 'TBA'
],
	[
'lecture_id' => 129,
'section' => 'D DI-LAB',
'day' => '---T--',
'start_time' => '2:45PM',
'end_time' => '4:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 129,
'section' => 'D DJ-LAB',
'day' => '--W---',
'start_time' => '2:45PM',
'end_time' => '4:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 129,
'section' => 'D DK-LAB',
'day' => '-T----',
'start_time' => '2:45PM',
'end_time' => '4:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 134,
'section' => 'DI-X-LAB',
'day' => '--W---',
'start_time' => '5:45PM',
'end_time' => '8:30PM',
'place' => 'H 822 SGW'
],
	[
'lecture_id' => 134,
'section' => 'DJ-X-LAB',
'day' => '--W---',
'start_time' => '5:45PM',
'end_time' => '8:30PM',
'place' => 'H 822 SGW'
],
	[
'lecture_id' => 134,
'section' => 'DK-X-LAB',
'day' => '-T----',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'H 822 SGW'
],
	[
'lecture_id' => 134,
'section' => 'DL-X-LAB',
'day' => '-T----',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'H 822 SGW'
],
	[
'lecture_id' => 135,
'section' => 'RI-X-LAB',
'day' => 'M-----',
'start_time' => '5:45PM',
'end_time' => '8:30PM',
'place' => 'H 822 SGW'
],
	[
'lecture_id' => 135,
'section' => 'RJ-X-LAB',
'day' => 'M-----',
'start_time' => '5:45PM',
'end_time' => '8:30PM',
'place' => 'H 822 SGW'
],
	[
'lecture_id' => 135,
'section' => 'RK-X-LAB',
'day' => '---T--',
'start_time' => '3:30PM',
'end_time' => '6:15PM',
'place' => 'H 822 SGW'
],
	[
'lecture_id' => 135,
'section' => 'RL-X-LAB',
'day' => '---T--',
'start_time' => '3:30PM',
'end_time' => '6:00PM',
'place' => 'H 822 SGW'
],
	[
'lecture_id' => 136,
'section' => 'TI-X-LAB',
'day' => '-T----',
'start_time' => '11:45AM',
'end_time' => '2:30PM',
'place' => 'H 822 SGW'
],
	[
'lecture_id' => 136,
'section' => 'TJ-X-LAB',
'day' => '---T--',
'start_time' => '11:45AM',
'end_time' => '2:30PM',
'place' => 'H 822 SGW'
],
	[
'lecture_id' => 136,
'section' => 'TK-X-LAB',
'day' => '----F-',
'start_time' => '8:45AM',
'end_time' => '11:30AM',
'place' => 'H 822 SGW'
],
	[
'lecture_id' => 136,
'section' => 'TL-X-LAB',
'day' => '----F-',
'start_time' => '8:45AM',
'end_time' => '11:30AM',
'place' => 'H 822 SGW'
],
	[
'lecture_id' => 137,
'section' => 'VI-X-LAB',
'day' => 'M-----',
'start_time' => '8:45AM',
'end_time' => '11:30AM',
'place' => 'H 822 SGW'
],
	[
'lecture_id' => 137,
'section' => 'VJ-X-LAB',
'day' => 'M-----',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'H 822 SGW'
],
	[
'lecture_id' => 137,
'section' => 'VK-X-LAB',
'day' => 'M-----',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'H 822 SGW'
],
	[
'lecture_id' => 137,
'section' => 'VL-X-LAB',
'day' => 'M-----',
'start_time' => '8:45AM',
'end_time' => '11:30AM',
'place' => 'H 822 SGW'
],
	[
'lecture_id' => 138,
'section' => 'FI-X-LAB',
'day' => 'M-----',
'start_time' => '5:45PM',
'end_time' => '8:30PM',
'place' => 'H 855 SGW'
],
	[
'lecture_id' => 138,
'section' => 'FJ-X-LAB',
'day' => 'M-----',
'start_time' => '5:45PM',
'end_time' => '8:30PM',
'place' => 'H 855 SGW'
],
	[
'lecture_id' => 138,
'section' => 'FK-X-LAB',
'day' => '-T----',
'start_time' => '5:45PM',
'end_time' => '8:30PM',
'place' => 'H 855 SGW'
],
	[
'lecture_id' => 138,
'section' => 'FL-X-LAB',
'day' => '-T----',
'start_time' => '5:45PM',
'end_time' => '8:30PM',
'place' => 'H 855 SGW'
],
	[
'lecture_id' => 138,
'section' => 'FM-X-LAB',
'day' => '-T----',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'H 855 SGW'
],
	[
'lecture_id' => 138,
'section' => 'FN-X-LAB',
'day' => '-T----',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'H 855 SGW'
],
	[
'lecture_id' => 138,
'section' => 'FP-X-LAB',
'day' => '--W---',
'start_time' => '8:45AM',
'end_time' => '11:30AM',
'place' => 'H 855 SGW'
],
	[
'lecture_id' => 139,
'section' => 'FI-X-LAB',
'day' => '--W---',
'start_time' => '5:45PM',
'end_time' => '8:30PM',
'place' => 'H 855 SGW'
],
	[
'lecture_id' => 139,
'section' => 'FJ-X-LAB',
'day' => '--W---',
'start_time' => '5:45PM',
'end_time' => '8:30PM',
'place' => 'H 855 SGW'
],
	[
'lecture_id' => 139,
'section' => 'FK-X-LAB',
'day' => '--W---',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'H 855 SGW'
],
	[
'lecture_id' => 139,
'section' => 'FL-X-LAB',
'day' => '--W---',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'H 855 SGW'
],
	[
'lecture_id' => 139,
'section' => 'FM-X-LAB',
'day' => 'M-----',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'H 855 SGW'
],
	[
'lecture_id' => 139,
'section' => 'FN-X-LAB',
'day' => 'M-----',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'H 855 SGW'
],
	[
'lecture_id' => 139,
'section' => 'FO-X-LAB',
'day' => '----F-',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'H 855 SGW'
],
	[
'lecture_id' => 140,
'section' => 'UI-X-LAB',
'day' => '---T--',
'start_time' => '5:45PM',
'end_time' => '8:30PM',
'place' => 'H 815 SGW'
],
	[
'lecture_id' => 140,
'section' => 'UJ-X-LAB',
'day' => '-T----',
'start_time' => '11:45AM',
'end_time' => '2:30PM',
'place' => 'H 815 SGW'
],
	[
'lecture_id' => 140,
'section' => 'UK-X-LAB',
'day' => '---T--',
'start_time' => '10:15AM',
'end_time' => '1:00PM',
'place' => 'H 815 SGW'
],
	[
'lecture_id' => 140,
'section' => 'UL-X-LAB',
'day' => '-T----',
'start_time' => '5:45PM',
'end_time' => '8:30PM',
'place' => 'H 815 SGW'
],
	[
'lecture_id' => 142,
'section' => 'PI-X-LAB',
'day' => 'M-----',
'start_time' => '5:45PM',
'end_time' => '8:30PM',
'place' => 'H 801 SGW'
],
	[
'lecture_id' => 142,
'section' => 'PJ-X-LAB',
'day' => 'M-----',
'start_time' => '5:45PM',
'end_time' => '8:30PM',
'place' => 'H 801 SGW'
],
	[
'lecture_id' => 142,
'section' => 'PK-X-LAB',
'day' => '-T----',
'start_time' => '5:45PM',
'end_time' => '8:30PM',
'place' => 'H 801 SGW'
],
	[
'lecture_id' => 142,
'section' => 'PL-X-LAB',
'day' => '-T----',
'start_time' => '5:45PM',
'end_time' => '8:30PM',
'place' => 'H 801 SGW'
],
	[
'lecture_id' => 142,
'section' => 'PM-X-LAB',
'day' => '--W---',
'start_time' => '5:45PM',
'end_time' => '8:30PM',
'place' => 'H 801 SGW'
],
	[
'lecture_id' => 142,
'section' => 'PN-X-LAB',
'day' => '--W---',
'start_time' => '5:45PM',
'end_time' => '8:30PM',
'place' => 'H 801 SGW'
],
	[
'lecture_id' => 143,
'section' => 'RI-X-LAB',
'day' => 'M-----',
'start_time' => '11:45AM',
'end_time' => '2:30PM',
'place' => 'H 832-6 SGW'
],
	[
'lecture_id' => 143,
'section' => 'RJ-X-LAB',
'day' => '--W---',
'start_time' => '11:45AM',
'end_time' => '2:30PM',
'place' => 'H 832-6 SGW'
],
	[
'lecture_id' => 143,
'section' => 'RK-X-LAB',
'day' => '-T----',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'H 832-6 SGW'
],
	[
'lecture_id' => 143,
'section' => 'RL-X-LAB',
'day' => '----F-',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'H 832-6 SGW'
],
	[
'lecture_id' => 143,
'section' => 'RM-X-LAB',
'day' => '----F-',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'H 832-6 SGW'
],
	[
'lecture_id' => 145,
'section' => 'WWWI-LAB',
'day' => '--W---',
'start_time' => '8:45AM',
'end_time' => '11:30AM',
'place' => 'H007 SGW'
],
	[
'lecture_id' => 145,
'section' => 'WWWJ-LAB',
'day' => '--W---',
'start_time' => '8:45AM',
'end_time' => '11:30AM',
'place' => 'H007 SGW'
],
	[
'lecture_id' => 146,
'section' => 'QPQA-LAB',
'day' => '--W---',
'start_time' => '1:45PM',
'end_time' => '4:45PM',
'place' => 'TBA'
],
	[
'lecture_id' => 147,
'section' => 'QPQA-LAB',
'day' => '-T----',
'start_time' => '12:45PM',
'end_time' => '3:45PM',
'place' => 'TBA'
],
	[
'lecture_id' => 148,
'section' => 'QPQA-LAB',
'day' => 'M-----',
'start_time' => '1:45PM',
'end_time' => '4:45PM',
'place' => 'TBA'
],
	[
'lecture_id' => 148,
'section' => 'QPQB-LAB',
'day' => 'M-----',
'start_time' => '1:45PM',
'end_time' => '4:45PM',
'place' => 'TBA'
],
	[
'lecture_id' => 149,
'section' => 'W WI-LAB',
'day' => '-T----',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'H 945 SGW'
],
	[
'lecture_id' => 149,
'section' => 'W WJ-LAB',
'day' => '---T--',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'H 945 SGW'
],
	[
'lecture_id' => 149,
'section' => 'W WK-LAB',
'day' => '-T----',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'H 945 SGW'
],
	[
'lecture_id' => 149,
'section' => 'W WL-LAB',
'day' => '---T--',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'H 945 SGW'
],
	[
'lecture_id' => 149,
'section' => 'W WM-LAB',
'day' => '--W---',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'H 945 SGW'
],
	[
'lecture_id' => 150,
'section' => 'QPQA-LAB',
'day' => '---T--',
'start_time' => '1:45PM',
'end_time' => '4:45PM',
'place' => 'TBA'
],
	[
'lecture_id' => 151,
'section' => 'FI-X-LAB',
'day' => 'M-----',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'H 945 SGW'
],
	[
'lecture_id' => 151,
'section' => 'FJ-X-LAB',
'day' => 'M-----',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'H 945 SGW'
],
	[
'lecture_id' => 151,
'section' => 'FK-X-LAB',
'day' => '----F-',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'H 945 SGW'
],
	[
'lecture_id' => 151,
'section' => 'FL-X-LAB',
'day' => '----F-',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'H 945 SGW'
],
	[
'lecture_id' => 151,
'section' => 'FM-X-LAB',
'day' => 'M-----',
'start_time' => '5:45PM',
'end_time' => '8:30PM',
'place' => 'H 945 SGW'
],
	[
'lecture_id' => 152,
'section' => 'WI-X-LAB',
'day' => '----F-',
'start_time' => '11:45AM',
'end_time' => '2:30PM',
'place' => 'H 847 SGW'
],
	[
'lecture_id' => 152,
'section' => 'WJ-X-LAB',
'day' => '----F-',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'H 847 SGW'
],
	[
'lecture_id' => 153,
'section' => 'WWWI-LAB',
'day' => '---T--',
'start_time' => '11:45AM',
'end_time' => '2:30PM',
'place' => 'H 853 SGW'
],
	[
'lecture_id' => 153,
'section' => 'WWWJ-LAB',
'day' => '---T--',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'H 853 SGW'
],
	[
'lecture_id' => 154,
'section' => 'HHHI-LAB',
'day' => '-T----',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'H 853 SGW'
],
	[
'lecture_id' => 154,
'section' => 'HHHJ-LAB',
'day' => '--W---',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'H 853 SGW'
],
	[
'lecture_id' => 156,
'section' => 'WWWI-LAB',
'day' => '---T--',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'H 915 SGW'
],
	[
'lecture_id' => 157,
'section' => 'EEEI-LAB',
'day' => 'TBA',
'start_time' => 'TBA',
'end_time' => 'TBA',
'place' => 'H 805-3 SGW'
],
	[
'lecture_id' => 157,
'section' => 'EEEJ-LAB',
'day' => 'TBA',
'start_time' => 'TBA',
'end_time' => 'TBA',
'place' => 'H 805-3 SGW'
],
	[
'lecture_id' => 157,
'section' => 'EEEK-LAB',
'day' => 'TBA',
'start_time' => 'TBA',
'end_time' => 'TBA',
'place' => 'H 805-3 SGW'
],
	[
'lecture_id' => 157,
'section' => 'EEEL-LAB',
'day' => 'TBA',
'start_time' => 'TBA',
'end_time' => 'TBA',
'place' => 'H 805-3 SGW'
],
	[
'lecture_id' => 210,
'section' => 'FI-X-LAB',
'day' => 'M-----',
'start_time' => '12:00PM',
'end_time' => '4:00PM',
'place' => 'TBA'
],
	[
'lecture_id' => 210,
'section' => 'FJ-X-LAB',
'day' => 'M-----',
'start_time' => '12:00PM',
'end_time' => '4:00PM',
'place' => 'TBA'
],
	[
'lecture_id' => 210,
'section' => 'FK-X-LAB',
'day' => '----F-',
'start_time' => '9:00AM',
'end_time' => '1:00PM',
'place' => 'TBA'
],
	[
'lecture_id' => 211,
'section' => 'MI-X-LAB',
'day' => '---T--',
'start_time' => '12:00PM',
'end_time' => '4:00PM',
'place' => 'TBA'
],
	[
'lecture_id' => 211,
'section' => 'MJ-X-LAB',
'day' => '---T--',
'start_time' => '12:00PM',
'end_time' => '4:00PM',
'place' => 'TBA'
],
	[
'lecture_id' => 211,
'section' => 'MK-X-LAB',
'day' => '-T----',
'start_time' => '12:00PM',
'end_time' => '4:00PM',
'place' => 'TBA'
],
	[
'lecture_id' => 211,
'section' => 'ML-X-LAB',
'day' => '--W---',
'start_time' => '12:00PM',
'end_time' => '4:00PM',
'place' => 'TBA'
],
	[
'lecture_id' => 212,
'section' => 'TI-X-LAB',
'day' => '-T----',
'start_time' => '12:00PM',
'end_time' => '4:00PM',
'place' => 'TBA'
],
	[
'lecture_id' => 212,
'section' => 'TJ-X-LAB',
'day' => '-T----',
'start_time' => '12:00PM',
'end_time' => '4:00PM',
'place' => 'TBA'
],
	[
'lecture_id' => 212,
'section' => 'TK-X-LAB',
'day' => '-T----',
'start_time' => '12:00PM',
'end_time' => '4:00PM',
'place' => 'TBA'
],
	[
'lecture_id' => 212,
'section' => 'TL-X-LAB',
'day' => '----F-',
'start_time' => '9:00AM',
'end_time' => '1:00PM',
'place' => 'TBA'
],
	[
'lecture_id' => 213,
'section' => 'XI-X-LAB',
'day' => '--W---',
'start_time' => '12:00PM',
'end_time' => '4:00PM',
'place' => 'TBA'
],
	[
'lecture_id' => 213,
'section' => 'XJ-X-LAB',
'day' => '--W---',
'start_time' => '12:00PM',
'end_time' => '4:00PM',
'place' => 'TBA'
],
	[
'lecture_id' => 213,
'section' => 'XK-X-LAB',
'day' => '---T--',
'start_time' => '12:00PM',
'end_time' => '4:00PM',
'place' => 'TBA'
],
	[
'lecture_id' => 213,
'section' => 'XL-X-LAB',
'day' => '--W---',
'start_time' => '12:00PM',
'end_time' => '4:00PM',
'place' => 'TBA'
],
	[
'lecture_id' => 214,
'section' => 'YI-X-LAB',
'day' => 'M-----',
'start_time' => '12:00PM',
'end_time' => '4:00PM',
'place' => 'TBA'
],
	[
'lecture_id' => 214,
'section' => 'YK-X-LAB',
'day' => '----F-',
'start_time' => '9:00AM',
'end_time' => '1:00PM',
'place' => 'TBA'
],
	[
'lecture_id' => 214,
'section' => 'YL-X-LAB',
'day' => '---T--',
'start_time' => '11:45AM',
'end_time' => '3:45PM',
'place' => 'TBA'
],
	[
'lecture_id' => 215,
'section' => 'TI-X-LAB',
'day' => '-T----',
'start_time' => '5:15PM',
'end_time' => '6:05PM',
'place' => 'H 917 SGW'
],
	[
'lecture_id' => 215,
'section' => 'TJ-X-LAB',
'day' => '-T----',
'start_time' => '6:15PM',
'end_time' => '7:05PM',
'place' => 'H 917 SGW'
],
	[
'lecture_id' => 215,
'section' => 'TK-X-LAB',
'day' => '-T----',
'start_time' => '5:15PM',
'end_time' => '6:05PM',
'place' => 'H 831 SGW'
],
	[
'lecture_id' => 215,
'section' => 'TL-X-LAB',
'day' => '-T----',
'start_time' => '6:15PM',
'end_time' => '7:05PM',
'place' => 'H 831 SGW'
],
	[
'lecture_id' => 215,
'section' => 'XI-X-LAB',
'day' => '---T--',
'start_time' => '5:15PM',
'end_time' => '6:05PM',
'place' => 'H 917 SGW'
],
	[
'lecture_id' => 215,
'section' => 'XJ-X-LAB',
'day' => '---T--',
'start_time' => '6:15PM',
'end_time' => '7:05PM',
'place' => 'H 917 SGW'
],
	[
'lecture_id' => 215,
'section' => 'XK-X-LAB',
'day' => '---T--',
'start_time' => '5:15PM',
'end_time' => '6:05PM',
'place' => 'H 831 SGW'
],
	[
'lecture_id' => 215,
'section' => 'XL-X-LAB',
'day' => '---T--',
'start_time' => '6:15PM',
'end_time' => '7:05PM',
'place' => 'H 831 SGW'
],
	[
'lecture_id' => 217,
'section' => 'YI-X-LAB',
'day' => '----F-',
'start_time' => '5:45PM',
'end_time' => '6:35PM',
'place' => 'H 917 SGW'
],
	[
'lecture_id' => 217,
'section' => 'YJ-X-LAB',
'day' => '----F-',
'start_time' => '6:45PM',
'end_time' => '7:35PM',
'place' => 'H 917 SGW'
],
	[
'lecture_id' => 217,
'section' => 'YK-X-LAB',
'day' => '--W---',
'start_time' => '5:45PM',
'end_time' => '6:35PM',
'place' => 'H 917 SGW'
],
	[
'lecture_id' => 217,
'section' => 'YL-X-LAB',
'day' => '--W---',
'start_time' => '6:45PM',
'end_time' => '7:35PM',
'place' => 'H 917 SGW'
],
	[
'lecture_id' => 217,
'section' => 'YM-X-LAB',
'day' => 'M-----',
'start_time' => '5:45PM',
'end_time' => '6:35PM',
'place' => 'H 843 SGW'
],
	[
'lecture_id' => 221,
'section' => 'TI-X-LAB',
'day' => '---T--',
'start_time' => '8:45AM',
'end_time' => '12:45PM',
'place' => 'TBA'
],
	[
'lecture_id' => 221,
'section' => 'TJ-X-LAB',
'day' => '----F-',
'start_time' => '8:45AM',
'end_time' => '12:45PM',
'place' => 'TBA'
],
	[
'lecture_id' => 221,
'section' => 'TK-X-LAB',
'day' => 'M-----',
'start_time' => '1:30PM',
'end_time' => '5:30PM',
'place' => 'TBA'
],
	[
'lecture_id' => 221,
'section' => 'TL-X-LAB',
'day' => '-T----',
'start_time' => '1:30PM',
'end_time' => '5:30PM',
'place' => 'TBA'
],
	[
'lecture_id' => 221,
'section' => 'TM-X-LAB',
'day' => '---T--',
'start_time' => '1:30PM',
'end_time' => '5:30PM',
'place' => 'TBA'
],
	[
'lecture_id' => 221,
'section' => 'TN-X-LAB',
'day' => 'M-----',
'start_time' => '8:45AM',
'end_time' => '12:45PM',
'place' => 'TBA'
],
	[
'lecture_id' => 221,
'section' => 'TO-X-LAB',
'day' => '-T----',
'start_time' => '8:45AM',
'end_time' => '12:45PM',
'place' => 'TBA'
],
	[
'lecture_id' => 221,
'section' => 'TP-X-LAB',
'day' => '--W---',
'start_time' => '8:45AM',
'end_time' => '12:45PM',
'place' => 'TBA'
],
	[
'lecture_id' => 221,
'section' => 'TQ-X-LAB',
'day' => '---T--',
'start_time' => '8:45AM',
'end_time' => '12:45PM',
'place' => 'TBA'
],
	[
'lecture_id' => 221,
'section' => 'TR-X-LAB',
'day' => '----F-',
'start_time' => '8:45AM',
'end_time' => '12:45PM',
'place' => 'TBA'
],
	[
'lecture_id' => 221,
'section' => 'TS-X-LAB',
'day' => 'M-----',
'start_time' => '1:30PM',
'end_time' => '5:30PM',
'place' => 'TBA'
],
	[
'lecture_id' => 222,
'section' => 'XI-X-LAB',
'day' => 'M-----',
'start_time' => '8:45AM',
'end_time' => '12:45PM',
'place' => 'TBA'
],
	[
'lecture_id' => 222,
'section' => 'XJ-X-LAB',
'day' => '-T----',
'start_time' => '8:45AM',
'end_time' => '12:45PM',
'place' => 'TBA'
],
	[
'lecture_id' => 222,
'section' => 'XK-X-LAB',
'day' => '--W---',
'start_time' => '8:45AM',
'end_time' => '12:45PM',
'place' => 'TBA'
],
	[
'lecture_id' => 222,
'section' => 'XL-X-LAB',
'day' => '---T--',
'start_time' => '8:45AM',
'end_time' => '12:45PM',
'place' => 'TBA'
],
	[
'lecture_id' => 222,
'section' => 'XM-X-LAB',
'day' => '----F-',
'start_time' => '8:45AM',
'end_time' => '12:45PM',
'place' => 'TBA'
],
	[
'lecture_id' => 222,
'section' => 'XN-X-LAB',
'day' => 'M-----',
'start_time' => '1:30PM',
'end_time' => '5:30PM',
'place' => 'TBA'
],
	[
'lecture_id' => 222,
'section' => 'XP-X-LAB',
'day' => '---T--',
'start_time' => '1:30PM',
'end_time' => '5:30PM',
'place' => 'TBA'
],
	[
'lecture_id' => 222,
'section' => 'XQ-X-LAB',
'day' => 'M-----',
'start_time' => '8:45AM',
'end_time' => '12:45PM',
'place' => 'TBA'
],
	[
'lecture_id' => 223,
'section' => 'YI-X-LAB',
'day' => '-T----',
'start_time' => '1:30PM',
'end_time' => '5:30PM',
'place' => 'TBA'
],
	[
'lecture_id' => 223,
'section' => 'YJ-X-LAB',
'day' => '---T--',
'start_time' => '1:30PM',
'end_time' => '5:30PM',
'place' => 'TBA'
],
	[
'lecture_id' => 223,
'section' => 'YK-X-LAB',
'day' => 'M-----',
'start_time' => '8:45AM',
'end_time' => '12:45PM',
'place' => 'TBA'
],
	[
'lecture_id' => 223,
'section' => 'YL-X-LAB',
'day' => '-T----',
'start_time' => '8:45AM',
'end_time' => '12:45PM',
'place' => 'TBA'
],
	[
'lecture_id' => 223,
'section' => 'YM-X-LAB',
'day' => '--W---',
'start_time' => '8:45AM',
'end_time' => '12:45PM',
'place' => 'TBA'
],
	[
'lecture_id' => 223,
'section' => 'YN-X-LAB',
'day' => '---T--',
'start_time' => '8:45AM',
'end_time' => '12:45PM',
'place' => 'TBA'
],
	[
'lecture_id' => 223,
'section' => 'YO-X-LAB',
'day' => '----F-',
'start_time' => '8:45AM',
'end_time' => '12:45PM',
'place' => 'TBA'
],
	[
'lecture_id' => 223,
'section' => 'YP-X-LAB',
'day' => 'M-----',
'start_time' => '1:30PM',
'end_time' => '5:30PM',
'place' => 'TBA'
],
	[
'lecture_id' => 223,
'section' => 'YQ-X-LAB',
'day' => '-T----',
'start_time' => '1:30PM',
'end_time' => '5:30PM',
'place' => 'TBA'
],
	[
'lecture_id' => 223,
'section' => 'YR-X-LAB',
'day' => '---T--',
'start_time' => '1:30PM',
'end_time' => '5:30PM',
'place' => 'TBA'
],
	[
'lecture_id' => 223,
'section' => 'YS-X-LAB',
'day' => '-----S',
'start_time' => '9:00AM',
'end_time' => '1:00PM',
'place' => 'TBA'
],
	[
'lecture_id' => 225,
'section' => 'XI-X-LAB',
'day' => '-T----',
'start_time' => '8:45AM',
'end_time' => '10:35AM',
'place' => 'H 1040 SGW'
],
	[
'lecture_id' => 225,
'section' => 'XJ-X-LAB',
'day' => '-T----',
'start_time' => '8:45AM',
'end_time' => '10:35AM',
'place' => 'H 1040 SGW'
],
	[
'lecture_id' => 225,
'section' => 'XK-X-LAB',
'day' => '---T--',
'start_time' => '8:45AM',
'end_time' => '10:35AM',
'place' => 'H 1040 SGW'
],
	[
'lecture_id' => 225,
'section' => 'XL-X-LAB',
'day' => '---T--',
'start_time' => '8:45AM',
'end_time' => '10:35AM',
'place' => 'H 1040 SGW'
],
	[
'lecture_id' => 225,
'section' => 'XM-X-LAB',
'day' => '--W---',
'start_time' => '4:15PM',
'end_time' => '6:05PM',
'place' => 'H 1040 SGW'
],
	[
'lecture_id' => 225,
'section' => 'XN-X-LAB',
'day' => '--W---',
'start_time' => '4:15PM',
'end_time' => '6:05PM',
'place' => 'H 1040 SGW'
],
	[
'lecture_id' => 228,
'section' => 'TI-X-LAB',
'day' => 'M-----',
'start_time' => '8:45AM',
'end_time' => '10:35AM',
'place' => 'H 1045 SGW'
],
	[
'lecture_id' => 228,
'section' => 'TJ-X-LAB',
'day' => 'M-----',
'start_time' => '8:45AM',
'end_time' => '10:35AM',
'place' => 'H 1045 SGW'
],
	[
'lecture_id' => 228,
'section' => 'TK-X-LAB',
'day' => 'M-----',
'start_time' => '2:45PM',
'end_time' => '4:35PM',
'place' => 'H 1045 SGW'
],
	[
'lecture_id' => 228,
'section' => 'TL-X-LAB',
'day' => '-T----',
'start_time' => '2:45PM',
'end_time' => '4:35PM',
'place' => 'H 1045 SGW'
],
	[
'lecture_id' => 228,
'section' => 'TM-X-LAB',
'day' => 'M-----',
'start_time' => '2:45PM',
'end_time' => '4:35PM',
'place' => 'H 1045 SGW'
],
	[
'lecture_id' => 228,
'section' => 'TN-X-LAB',
'day' => '-T----',
'start_time' => '9:45AM',
'end_time' => '11:35AM',
'place' => 'H 1045 SGW'
],
	[
'lecture_id' => 228,
'section' => 'TO-X-LAB',
'day' => '-T----',
'start_time' => '9:45AM',
'end_time' => '11:35AM',
'place' => 'H 1045 SGW'
],
	[
'lecture_id' => 228,
'section' => 'TP-X-LAB',
'day' => '--W---',
'start_time' => '11:45AM',
'end_time' => '1:35PM',
'place' => 'H 1045 SGW'
],
	[
'lecture_id' => 228,
'section' => 'TQ-X-LAB',
'day' => '--W---',
'start_time' => '2:45PM',
'end_time' => '4:35PM',
'place' => 'H 1045 SGW'
],
	[
'lecture_id' => 228,
'section' => 'TR-X-LAB',
'day' => '--W---',
'start_time' => '2:45PM',
'end_time' => '4:35PM',
'place' => 'H 1045 SGW'
],
	[
'lecture_id' => 229,
'section' => 'XI-X-LAB',
'day' => '---T--',
'start_time' => '2:45PM',
'end_time' => '4:35PM',
'place' => 'H 1045 SGW'
],
	[
'lecture_id' => 229,
'section' => 'XJ-X-LAB',
'day' => '---T--',
'start_time' => '2:45PM',
'end_time' => '4:35PM',
'place' => 'H 1045 SGW'
],
	[
'lecture_id' => 229,
'section' => 'XK-X-LAB',
'day' => '---T--',
'start_time' => '9:45AM',
'end_time' => '11:35AM',
'place' => 'H 1045 SGW'
],
	[
'lecture_id' => 229,
'section' => 'XL-X-LAB',
'day' => '----F-',
'start_time' => '11:45AM',
'end_time' => '1:35PM',
'place' => 'H 1045 SGW'
],
	[
'lecture_id' => 229,
'section' => 'XM-X-LAB',
'day' => '---T--',
'start_time' => '9:45AM',
'end_time' => '11:35AM',
'place' => 'H 1045 SGW'
],
	[
'lecture_id' => 229,
'section' => 'XN-X-LAB',
'day' => '----F-',
'start_time' => '11:45AM',
'end_time' => '1:35PM',
'place' => 'H 1045 SGW'
],
	[
'lecture_id' => 229,
'section' => 'XO-X-LAB',
'day' => '-T----',
'start_time' => '2:45PM',
'end_time' => '4:35PM',
'place' => 'H 1045 SGW'
],
	[
'lecture_id' => 229,
'section' => 'XP-X-LAB',
'day' => '--W---',
'start_time' => '11:45AM',
'end_time' => '1:35PM',
'place' => 'H 1045 SGW'
],
	[
'lecture_id' => 230,
'section' => 'FI-X-LAB',
'day' => 'M-----',
'start_time' => '8:45AM',
'end_time' => '10:35AM',
'place' => 'H 1049 SGW'
],
	[
'lecture_id' => 230,
'section' => 'FJ-X-LAB',
'day' => '--W---',
'start_time' => '8:45AM',
'end_time' => '10:35AM',
'place' => 'H 1049 SGW'
],
	[
'lecture_id' => 230,
'section' => 'FK-X-LAB',
'day' => 'M-----',
'start_time' => '8:45AM',
'end_time' => '10:35AM',
'place' => 'H 1049 SGW'
],
	[
'lecture_id' => 230,
'section' => 'FL-X-LAB',
'day' => '--W---',
'start_time' => '8:45AM',
'end_time' => '10:35AM',
'place' => 'H 1049 SGW'
],
	[
'lecture_id' => 230,
'section' => 'FM-X-LAB',
'day' => '----F-',
'start_time' => '8:45AM',
'end_time' => '10:35AM',
'place' => 'H 1049 SGW'
],
	[
'lecture_id' => 230,
'section' => 'FN-X-LAB',
'day' => '----F-',
'start_time' => '8:45AM',
'end_time' => '10:35AM',
'place' => 'H 1049 SGW'
],
	[
'lecture_id' => 230,
'section' => 'FO-X-LAB',
'day' => '-T----',
'start_time' => '9:45AM',
'end_time' => '11:35AM',
'place' => 'H 1049 SGW'
],
	[
'lecture_id' => 230,
'section' => 'FP-X-LAB',
'day' => '-T----',
'start_time' => '9:45AM',
'end_time' => '11:35AM',
'place' => 'H 1049 SGW'
],
	[
'lecture_id' => 230,
'section' => 'FQ-X-LAB',
'day' => '---T--',
'start_time' => '9:45AM',
'end_time' => '11:35AM',
'place' => 'H 1049 SGW'
],
	[
'lecture_id' => 230,
'section' => 'FR-X-LAB',
'day' => '---T--',
'start_time' => '9:45AM',
'end_time' => '11:35AM',
'place' => 'H 1049 SGW'
],
	[
'lecture_id' => 230,
'section' => 'FS-X-LAB',
'day' => 'M-----',
'start_time' => '10:45AM',
'end_time' => '12:35PM',
'place' => 'H 1049 SGW'
],
	[
'lecture_id' => 230,
'section' => 'FT-X-LAB',
'day' => 'M-----',
'start_time' => '10:45AM',
'end_time' => '12:35PM',
'place' => 'H 1049 SGW'
],
	[
'lecture_id' => 230,
'section' => 'FU-X-LAB',
'day' => '-T----',
'start_time' => '2:45PM',
'end_time' => '4:35PM',
'place' => 'H 1049 SGW'
],
	[
'lecture_id' => 230,
'section' => 'FV-X-LAB',
'day' => '-T----',
'start_time' => '2:45PM',
'end_time' => '4:35PM',
'place' => 'H 1049 SGW'
],
	[
'lecture_id' => 230,
'section' => 'FW-X-LAB',
'day' => '---T--',
'start_time' => '2:45PM',
'end_time' => '4:35PM',
'place' => 'H 1049 SGW'
],
	[
'lecture_id' => 230,
'section' => 'FX-X-LAB',
'day' => '---T--',
'start_time' => '2:45PM',
'end_time' => '4:35PM',
'place' => 'H 1049 SGW'
],
	[
'lecture_id' => 230,
'section' => 'FY-X-LAB',
'day' => 'M-----',
'start_time' => '2:45PM',
'end_time' => '4:35PM',
'place' => 'H 1049 SGW'
],
	[
'lecture_id' => 230,
'section' => 'FZ-X-LAB',
'day' => 'TBA',
'start_time' => 'TBA',
'end_time' => 'TBA',
'place' => 'TBA'
],
	[
'lecture_id' => 231,
'section' => 'TI-X-LAB',
'day' => '---T--',
'start_time' => '2:30PM',
'end_time' => '4:20PM',
'place' => 'H 1053 SGW'
],
	[
'lecture_id' => 231,
'section' => 'TJ-X-LAB',
'day' => '---T--',
'start_time' => '2:30PM',
'end_time' => '4:20PM',
'place' => 'H 1053 SGW'
],
	[
'lecture_id' => 231,
'section' => 'TK-X-LAB',
'day' => '-T----',
'start_time' => '2:30PM',
'end_time' => '4:20PM',
'place' => 'H 1053 SGW'
],
	[
'lecture_id' => 231,
'section' => 'TL-X-LAB',
'day' => '-T----',
'start_time' => '2:30PM',
'end_time' => '4:20PM',
'place' => 'H 1053 SGW'
],
	[
'lecture_id' => 232,
'section' => 'XI-X-LAB',
'day' => 'M-----',
'start_time' => '11:45AM',
'end_time' => '1:35PM',
'place' => 'H 1051 SGW'
],
	[
'lecture_id' => 232,
'section' => 'XJ-X-LAB',
'day' => '----F-',
'start_time' => '2:45PM',
'end_time' => '4:35PM',
'place' => 'H 1051 SGW'
],
	[
'lecture_id' => 232,
'section' => 'XK-X-LAB',
'day' => 'M-----',
'start_time' => '11:45AM',
'end_time' => '1:35PM',
'place' => 'H 1051 SGW'
],
	[
'lecture_id' => 232,
'section' => 'XL-X-LAB',
'day' => '----F-',
'start_time' => '2:45PM',
'end_time' => '4:35PM',
'place' => 'H 1051 SGW'
],
	[
'lecture_id' => 233,
'section' => 'FI-X-LAB',
'day' => '--W---',
'start_time' => '11:45AM',
'end_time' => '2:30PM',
'place' => 'H 1051 SGW'
],
	[
'lecture_id' => 233,
'section' => 'FJ-X-LAB',
'day' => '--W---',
'start_time' => '11:45AM',
'end_time' => '2:30PM',
'place' => 'H 1051 SGW'
],
	[
'lecture_id' => 233,
'section' => 'FK-X-LAB',
'day' => '-T----',
'start_time' => '8:45AM',
'end_time' => '11:30AM',
'place' => 'H 1051 SGW'
],
	[
'lecture_id' => 233,
'section' => 'FL-X-LAB',
'day' => '-T----',
'start_time' => '8:45AM',
'end_time' => '11:30AM',
'place' => 'H 1051 SGW'
],
	[
'lecture_id' => 234,
'section' => 'XI-X-LAB',
'day' => 'M-----',
'start_time' => '9:45AM',
'end_time' => '11:35AM',
'place' => 'TBA'
],
	[
'lecture_id' => 234,
'section' => 'XJ-X-LAB',
'day' => 'M-----',
'start_time' => '9:45AM',
'end_time' => '11:35AM',
'place' => 'TBA'
],
	[
'lecture_id' => 234,
'section' => 'XK-X-LAB',
'day' => 'M-----',
'start_time' => '11:45AM',
'end_time' => '1:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 234,
'section' => 'XL-X-LAB',
'day' => 'M-----',
'start_time' => '11:45AM',
'end_time' => '1:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 234,
'section' => 'XN-X-LAB',
'day' => '-T----',
'start_time' => '9:45AM',
'end_time' => '11:35AM',
'place' => 'TBA'
],
	[
'lecture_id' => 234,
'section' => 'XO-X-LAB',
'day' => '---T--',
'start_time' => '2:45PM',
'end_time' => '4:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 234,
'section' => 'XP-X-LAB',
'day' => '---T--',
'start_time' => '2:45PM',
'end_time' => '4:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 234,
'section' => 'XQ-X-LAB',
'day' => '---T--',
'start_time' => '8:45AM',
'end_time' => '10:35AM',
'place' => 'TBA'
],
	[
'lecture_id' => 236,
'section' => 'TI-X-LAB',
'day' => 'M-----',
'start_time' => '2:45PM',
'end_time' => '4:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 236,
'section' => 'TJ-X-LAB',
'day' => 'M-----',
'start_time' => '8:45AM',
'end_time' => '10:35AM',
'place' => 'TBA'
],
	[
'lecture_id' => 236,
'section' => 'TK-X-LAB',
'day' => '--W---',
'start_time' => '2:45PM',
'end_time' => '4:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 237,
'section' => 'NNNI-LAB',
'day' => 'M-----',
'start_time' => '8:45AM',
'end_time' => '10:35AM',
'place' => 'H 815 SGW'
],
	[
'lecture_id' => 237,
'section' => 'NNNJ-LAB',
'day' => 'M-----',
'start_time' => '8:45AM',
'end_time' => '10:35AM',
'place' => 'H 815 SGW'
],
	[
'lecture_id' => 237,
'section' => 'NNNK-LAB',
'day' => '-T----',
'start_time' => '8:45AM',
'end_time' => '10:35AM',
'place' => 'H 815 SGW'
],
	[
'lecture_id' => 237,
'section' => 'NNNL-LAB',
'day' => '--W---',
'start_time' => '8:45AM',
'end_time' => '10:35AM',
'place' => 'H 815 SGW'
],
	[
'lecture_id' => 237,
'section' => 'NNNM-LAB',
'day' => '--W---',
'start_time' => '8:45AM',
'end_time' => '10:35AM',
'place' => 'TBA'
],
	[
'lecture_id' => 240,
'section' => 'TK-X-LAB',
'day' => '----F-',
'start_time' => '8:45AM',
'end_time' => '10:35AM',
'place' => 'H 1058 SGW'
],
	[
'lecture_id' => 240,
'section' => 'TM-X-LAB',
'day' => '--W---',
'start_time' => '11:15AM',
'end_time' => '1:05PM',
'place' => 'H 1058 SGW'
],
	[
'lecture_id' => 241,
'section' => 'Y YI-LAB',
'day' => '-T----',
'start_time' => '8:45AM',
'end_time' => '10:35AM',
'place' => 'TBA'
],
	[
'lecture_id' => 241,
'section' => 'Y YJ-LAB',
'day' => '-T----',
'start_time' => '8:45AM',
'end_time' => '10:35AM',
'place' => 'TBA'
],
	[
'lecture_id' => 241,
'section' => 'Y YK-LAB',
'day' => '-T----',
'start_time' => '11:45AM',
'end_time' => '1:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 241,
'section' => 'Y YL-LAB',
'day' => '-T----',
'start_time' => '11:45AM',
'end_time' => '1:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 242,
'section' => 'T TI-LAB',
'day' => '--W---',
'start_time' => '10:15AM',
'end_time' => '12:05PM',
'place' => 'TBA'
],
	[
'lecture_id' => 242,
'section' => 'T TJ-LAB',
'day' => '----F-',
'start_time' => '10:15AM',
'end_time' => '12:05PM',
'place' => 'TBA'
],
	[
'lecture_id' => 242,
'section' => 'T TK-LAB',
'day' => 'M-----',
'start_time' => '10:15AM',
'end_time' => '12:05PM',
'place' => 'TBA'
],
	[
'lecture_id' => 242,
'section' => 'T TL-LAB',
'day' => '---T--',
'start_time' => '10:15AM',
'end_time' => '12:05PM',
'place' => 'TBA'
],
	[
'lecture_id' => 242,
'section' => 'T TM-LAB',
'day' => 'M-----',
'start_time' => '10:15AM',
'end_time' => '12:05PM',
'place' => 'TBA'
],
	[
'lecture_id' => 242,
'section' => 'T TN-LAB',
'day' => '--W---',
'start_time' => '10:15AM',
'end_time' => '12:05PM',
'place' => 'TBA'
],
	[
'lecture_id' => 243,
'section' => 'XXXI-LAB',
'day' => '--W---',
'start_time' => '11:15AM',
'end_time' => '1:05PM',
'place' => 'TBA'
],
	[
'lecture_id' => 243,
'section' => 'XXXJ-LAB',
'day' => '--W---',
'start_time' => '11:15AM',
'end_time' => '1:05PM',
'place' => 'TBA'
],
	[
'lecture_id' => 243,
'section' => 'XXXL-LAB',
'day' => '---T--',
'start_time' => '12:00PM',
'end_time' => '1:50PM',
'place' => 'TBA'
],
	[
'lecture_id' => 244,
'section' => 'M MI-LAB',
'day' => '----F-',
'start_time' => '2:15PM',
'end_time' => '4:05PM',
'place' => 'H 1057 SGW'
],
	[
'lecture_id' => 244,
'section' => 'M MJ-LAB',
'day' => '----F-',
'start_time' => '2:15PM',
'end_time' => '4:05PM',
'place' => 'H 1057 SGW'
],
	[
'lecture_id' => 252,
'section' => 'MI-X-LAB',
'day' => '--W---',
'start_time' => '9:10PM',
'end_time' => '11:00PM',
'place' => 'TBA'
],
	[
'lecture_id' => 252,
'section' => 'MJ-X-LAB',
'day' => '---T--',
'start_time' => '2:45PM',
'end_time' => '4:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 253,
'section' => 'HI-X-LAB',
'day' => '-T----',
'start_time' => '3:45PM',
'end_time' => '5:30PM',
'place' => 'TBA'
],
	[
'lecture_id' => 314,
'section' => '06L-LAB',
'day' => 'M-----',
'start_time' => '1:30PM',
'end_time' => '5:30PM',
'place' => 'SP 116 LOY'
],
	[
'lecture_id' => 314,
'section' => '07L-LAB',
'day' => '--W---',
'start_time' => '1:30PM',
'end_time' => '5:30PM',
'place' => 'SP 112 LOY'
],
	[
'lecture_id' => 314,
'section' => '08L-LAB',
'day' => '---T--',
'start_time' => '1:30PM',
'end_time' => '5:30PM',
'place' => 'SP 116 LOY'
],
	[
'lecture_id' => 314,
'section' => '09L-LAB',
'day' => '----F-',
'start_time' => '9:00AM',
'end_time' => '1:00PM',
'place' => 'SP 116 LOY'
],
	[
'lecture_id' => 314,
'section' => '10L-LAB',
'day' => 'M-----',
'start_time' => '9:00AM',
'end_time' => '1:00PM',
'place' => 'SP 112 LOY'
],
	[
'lecture_id' => 314,
'section' => '52L-LAB',
'day' => '-T----',
'start_time' => '6:30PM',
'end_time' => '10:30PM',
'place' => 'SP 116 LOY'
],
	[
'lecture_id' => 315,
'section' => '56L-LAB',
'day' => 'TBA',
'start_time' => 'TBA',
'end_time' => 'TBA',
'place' => 'TBA'
],
	[
'lecture_id' => 318,
'section' => 'TI-X-LAB',
'day' => '--W---',
'start_time' => '5:45PM',
'end_time' => '7:35PM',
'place' => 'H 1051 SGW'
],
	[
'lecture_id' => 318,
'section' => 'TJ-X-LAB',
'day' => '--W---',
'start_time' => '5:45PM',
'end_time' => '7:35PM',
'place' => 'H 1051 SGW'
],
	[
'lecture_id' => 318,
'section' => 'TK-X-LAB',
'day' => '---T--',
'start_time' => '5:45PM',
'end_time' => '7:35PM',
'place' => 'H 1051 SGW'
],
	[
'lecture_id' => 318,
'section' => 'TL-X-LAB',
'day' => '---T--',
'start_time' => '5:45PM',
'end_time' => '7:35PM',
'place' => 'H 1051 SGW'
],
	[
'lecture_id' => 320,
'section' => 'XXXI-LAB',
'day' => 'TBA',
'start_time' => 'TBA',
'end_time' => 'TBA',
'place' => 'TBA'
],
	[
'lecture_id' => 320,
'section' => 'XXXJ-LAB',
'day' => 'TBA',
'start_time' => 'TBA',
'end_time' => 'TBA',
'place' => 'TBA'
],
	[
'lecture_id' => 320,
'section' => 'XXXK-LAB',
'day' => 'TBA',
'start_time' => 'TBA',
'end_time' => 'TBA',
'place' => 'TBA'
],
	[
'lecture_id' => 320,
'section' => 'XXXL-LAB',
'day' => 'TBA',
'start_time' => 'TBA',
'end_time' => 'TBA',
'place' => 'TBA'
],
	[
'lecture_id' => 324,
'section' => 'UI-X-LAB',
'day' => 'M-----',
'start_time' => '11:45AM',
'end_time' => '2:30PM',
'place' => 'H 1029-1 SGW'
],
	[
'lecture_id' => 324,
'section' => 'UJ-X-LAB',
'day' => 'M-----',
'start_time' => '11:45AM',
'end_time' => '2:30PM',
'place' => 'H 1029-1 SGW'
],
	[
'lecture_id' => 324,
'section' => 'UK-X-LAB',
'day' => '-T----',
'start_time' => '8:30AM',
'end_time' => '11:30AM',
'place' => 'H 1029-1 SGW'
],
	[
'lecture_id' => 324,
'section' => 'UL-X-LAB',
'day' => '-T----',
'start_time' => '8:30AM',
'end_time' => '11:30AM',
'place' => 'H 1029-1 SGW'
],
	[
'lecture_id' => 324,
'section' => 'UM-X-LAB',
'day' => 'M-----',
'start_time' => '8:30AM',
'end_time' => '11:30AM',
'place' => 'H 1029-1 SGW'
],
	[
'lecture_id' => 324,
'section' => 'UN-X-LAB',
'day' => '--W---',
'start_time' => '8:30AM',
'end_time' => '11:30AM',
'place' => 'H 1029-1 SGW'
],
	[
'lecture_id' => 329,
'section' => 'WI-X-LAB',
'day' => 'M-----',
'start_time' => '8:45AM',
'end_time' => '11:30AM',
'place' => 'H 813 SGW'
],
	[
'lecture_id' => 329,
'section' => 'WJ-X-LAB',
'day' => 'M-----',
'start_time' => '8:45AM',
'end_time' => '11:30AM',
'place' => 'H 813 SGW'
],
	[
'lecture_id' => 329,
'section' => 'WK-X-LAB',
'day' => '----F-',
'start_time' => '10:15AM',
'end_time' => '1:00PM',
'place' => 'H 813 SGW'
],
	[
'lecture_id' => 329,
'section' => 'WL-X-LAB',
'day' => '----F-',
'start_time' => '10:15AM',
'end_time' => '1:00PM',
'place' => 'H 813 SGW'
],
	[
'lecture_id' => 329,
'section' => 'WM-X-LAB',
'day' => '---T--',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'H 813 SGW'
],
	[
'lecture_id' => 329,
'section' => 'WN-X-LAB',
'day' => '----F-',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'H 813 SGW'
],
	[
'lecture_id' => 329,
'section' => 'WO-X-LAB',
'day' => 'M-----',
'start_time' => '11:45AM',
'end_time' => '2:30PM',
'place' => 'H 813 SGW'
],
	[
'lecture_id' => 330,
'section' => 'WI-X-LAB',
'day' => 'M-----',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'H 913 SGW'
],
	[
'lecture_id' => 330,
'section' => 'WJ-X-LAB',
'day' => 'M-----',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'H 913 SGW'
],
	[
'lecture_id' => 330,
'section' => 'WK-X-LAB',
'day' => '----F-',
'start_time' => '1:15PM',
'end_time' => '4:00PM',
'place' => 'H 913 SGW'
],
	[
'lecture_id' => 330,
'section' => 'WL-X-LAB',
'day' => '----F-',
'start_time' => '1:15PM',
'end_time' => '4:00PM',
'place' => 'H 913 SGW'
],
	[
'lecture_id' => 331,
'section' => 'UI-X-LAB',
'day' => '---T--',
'start_time' => '11:45AM',
'end_time' => '2:30PM',
'place' => 'TBA'
],
	[
'lecture_id' => 331,
'section' => 'UJ-X-LAB',
'day' => '---T--',
'start_time' => '11:45AM',
'end_time' => '2:30PM',
'place' => 'TBA'
],
	[
'lecture_id' => 332,
'section' => 'YI-X-LAB',
'day' => '--W---',
'start_time' => '5:45PM',
'end_time' => '8:15PM',
'place' => 'TBA'
],
	[
'lecture_id' => 332,
'section' => 'YJ-X-LAB',
'day' => '-T----',
'start_time' => '5:45PM',
'end_time' => '8:15PM',
'place' => 'TBA'
],
	[
'lecture_id' => 334,
'section' => 'U UI-LAB',
'day' => 'M-----',
'start_time' => '4:15PM',
'end_time' => '7:00PM',
'place' => 'TBA'
],
	[
'lecture_id' => 334,
'section' => 'U UJ-LAB',
'day' => '--W---',
'start_time' => '4:15PM',
'end_time' => '7:00PM',
'place' => 'TBA'
],
	[
'lecture_id' => 345,
'section' => 'UI-X-LAB',
'day' => '----F-',
'start_time' => '1:35PM',
'end_time' => '2:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 345,
'section' => 'UJ-X-LAB',
'day' => '--W---',
'start_time' => '1:35PM',
'end_time' => '2:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 345,
'section' => 'UK-X-LAB',
'day' => '--W---',
'start_time' => '1:35PM',
'end_time' => '2:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 346,
'section' => 'WI-X-LAB',
'day' => 'M-----',
'start_time' => '12:00PM',
'end_time' => '1:00PM',
'place' => 'TBA'
],
	[
'lecture_id' => 346,
'section' => 'WJ-X-LAB',
'day' => '----F-',
'start_time' => '4:35PM',
'end_time' => '5:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 346,
'section' => 'WK-X-LAB',
'day' => '----F-',
'start_time' => '4:35PM',
'end_time' => '5:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 347,
'section' => 'PI-X-LAB',
'day' => '---T--',
'start_time' => '4:30PM',
'end_time' => '5:30PM',
'place' => 'TBA'
],
	[
'lecture_id' => 347,
'section' => 'PJ-X-LAB',
'day' => '----F-',
'start_time' => '7:35PM',
'end_time' => '8:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 347,
'section' => 'PK-X-LAB',
'day' => '---T--',
'start_time' => '8:35PM',
'end_time' => '9:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 347,
'section' => 'QI-X-LAB',
'day' => 'M-----',
'start_time' => '5:45PM',
'end_time' => '6:45PM',
'place' => 'TBA'
],
	[
'lecture_id' => 347,
'section' => 'QJ-X-LAB',
'day' => '---T--',
'start_time' => '4:30PM',
'end_time' => '5:30PM',
'place' => 'TBA'
],
	[
'lecture_id' => 347,
'section' => 'QK-X-LAB',
'day' => '---T--',
'start_time' => '4:30PM',
'end_time' => '5:30PM',
'place' => 'TBA'
],
	[
'lecture_id' => 349,
'section' => 'SI-X-LAB',
'day' => 'M-----',
'start_time' => '12:10PM',
'end_time' => '1:10PM',
'place' => 'TBA'
],
	[
'lecture_id' => 349,
'section' => 'SJ-X-LAB',
'day' => '--W---',
'start_time' => '12:10PM',
'end_time' => '1:10PM',
'place' => 'TBA'
],
	[
'lecture_id' => 349,
'section' => 'SK-X-LAB',
'day' => '--W---',
'start_time' => '12:10PM',
'end_time' => '1:10PM',
'place' => 'TBA'
],
	[
'lecture_id' => 349,
'section' => 'SL-X-LAB',
'day' => 'M-----',
'start_time' => '12:10PM',
'end_time' => '1:10PM',
'place' => 'TBA'
],
	[
'lecture_id' => 350,
'section' => 'UI-X-LAB',
'day' => 'M-----',
'start_time' => '12:10PM',
'end_time' => '1:10PM',
'place' => 'TBA'
],
	[
'lecture_id' => 350,
'section' => 'UJ-X-LAB',
'day' => '--W---',
'start_time' => '1:35PM',
'end_time' => '2:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 350,
'section' => 'UK-X-LAB',
'day' => '--W---',
'start_time' => '1:35PM',
'end_time' => '2:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 352,
'section' => 'S SI-LAB',
'day' => '----F-',
'start_time' => '4:15PM',
'end_time' => '6:05PM',
'place' => 'TBA'
],
	[
'lecture_id' => 352,
'section' => 'S SJ-LAB',
'day' => '----F-',
'start_time' => '4:15PM',
'end_time' => '6:05PM',
'place' => 'TBA'
],
	[
'lecture_id' => 353,
'section' => 'NI-X-LAB',
'day' => '--W---',
'start_time' => '9:30PM',
'end_time' => '11:20PM',
'place' => 'TBA'
],
	[
'lecture_id' => 353,
'section' => 'NJ-X-LAB',
'day' => 'M-----',
'start_time' => '2:15PM',
'end_time' => '4:05PM',
'place' => 'TBA'
],
	[
'lecture_id' => 353,
'section' => 'WI-X-LAB',
'day' => '-T----',
'start_time' => '9:30PM',
'end_time' => '11:20PM',
'place' => 'TBA'
],
	[
'lecture_id' => 353,
'section' => 'WJ-X-LAB',
'day' => '----F-',
'start_time' => '2:15PM',
'end_time' => '4:05PM',
'place' => 'TBA'
],
	[
'lecture_id' => 357,
'section' => 'XI-X-LAB',
'day' => '--W---',
'start_time' => '5:15PM',
'end_time' => '7:05PM',
'place' => 'TBA'
],
	[
'lecture_id' => 357,
'section' => 'XJ-X-LAB',
'day' => 'M-----',
'start_time' => '5:15PM',
'end_time' => '7:05PM',
'place' => 'TBA'
],
	[
'lecture_id' => 358,
'section' => 'PI-X-LAB',
'day' => '---T--',
'start_time' => '9:30PM',
'end_time' => '11:00PM',
'place' => 'TBA'
],
	[
'lecture_id' => 358,
'section' => 'PJ-X-LAB',
'day' => '---T--',
'start_time' => '9:30PM',
'end_time' => '11:00PM',
'place' => 'TBA'
],
	[
'lecture_id' => 361,
'section' => 'WWWI-LAB',
'day' => '--W---',
'start_time' => '4:15PM',
'end_time' => '6:05PM',
'place' => 'TBA'
],
	[
'lecture_id' => 361,
'section' => 'WWWJ-LAB',
'day' => '---T--',
'start_time' => '8:30PM',
'end_time' => '10:20PM',
'place' => 'TBA'
],
	[
'lecture_id' => 361,
'section' => 'WWWK-LAB',
'day' => '---T--',
'start_time' => '3:45PM',
'end_time' => '5:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 362,
'section' => 'NNNI-LAB',
'day' => 'M-----',
'start_time' => '8:30PM',
'end_time' => '10:20PM',
'place' => 'TBA'
],
	[
'lecture_id' => 362,
'section' => 'NNNJ-LAB',
'day' => 'M-----',
'start_time' => '3:45PM',
'end_time' => '5:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 362,
'section' => 'NNNK-LAB',
'day' => 'M-----',
'start_time' => '8:30PM',
'end_time' => '10:20PM',
'place' => 'TBA'
],
	[
'lecture_id' => 363,
'section' => 'W WI-LAB',
'day' => 'M-----',
'start_time' => '11:10AM',
'end_time' => '1:00PM',
'place' => 'H 849 SGW'
],
	[
'lecture_id' => 363,
'section' => 'W WJ-LAB',
'day' => '--W---',
'start_time' => '11:10AM',
'end_time' => '1:00PM',
'place' => 'H 849 SGW'
],
	[
'lecture_id' => 363,
'section' => 'W WK-LAB',
'day' => 'M-----',
'start_time' => '11:10AM',
'end_time' => '1:00PM',
'place' => 'H 815 SGW'
],
	[
'lecture_id' => 363,
'section' => 'W WL-LAB',
'day' => '--W---',
'start_time' => '11:10AM',
'end_time' => '1:00PM',
'place' => 'H 843 SGW'
],
	[
'lecture_id' => 364,
'section' => 'NNNI-LAB',
'day' => '---T--',
'start_time' => '8:25PM',
'end_time' => '10:25PM',
'place' => 'TBA'
],
	[
'lecture_id' => 364,
'section' => 'NNNJ-LAB',
'day' => 'M-----',
'start_time' => '5:45PM',
'end_time' => '7:45PM',
'place' => 'TBA'
],
	[
'lecture_id' => 364,
'section' => 'NNNK-LAB',
'day' => '---T--',
'start_time' => '8:25PM',
'end_time' => '10:25PM',
'place' => 'TBA'
],
	[
'lecture_id' => 365,
'section' => 'UUUI-LAB',
'day' => '-T----',
'start_time' => '3:00PM',
'end_time' => '5:00PM',
'place' => 'TBA'
],
	[
'lecture_id' => 365,
'section' => 'UUUJ-LAB',
'day' => '-T----',
'start_time' => '6:00PM',
'end_time' => '8:00PM',
'place' => 'TBA'
],
	[
'lecture_id' => 366,
'section' => 'N NI-LAB',
'day' => '-T----',
'start_time' => '6:10PM',
'end_time' => '8:00PM',
'place' => 'TBA'
],
	[
'lecture_id' => 366,
'section' => 'N NJ-LAB',
'day' => '--W---',
'start_time' => '6:10PM',
'end_time' => '8:00PM',
'place' => 'TBA'
],
	[
'lecture_id' => 366,
'section' => 'N NK-LAB',
'day' => '---T--',
'start_time' => '6:10PM',
'end_time' => '8:00PM',
'place' => 'TBA'
],
	[
'lecture_id' => 370,
'section' => 'GI-X-LAB',
'day' => '-T----',
'start_time' => '8:30PM',
'end_time' => '10:30PM',
'place' => 'TBA'
],
	[
'lecture_id' => 372,
'section' => 'WI-X-LAB',
'day' => '--W---',
'start_time' => '8:45AM',
'end_time' => '11:30AM',
'place' => 'H 822 SGW'
],
	[
'lecture_id' => 372,
'section' => 'WJ-X-LAB',
'day' => '----F-',
'start_time' => '8:45AM',
'end_time' => '11:30AM',
'place' => 'H 822 SGW'
],
	[
'lecture_id' => 372,
'section' => 'WK-X-LAB',
'day' => '--W---',
'start_time' => '11:45AM',
'end_time' => '2:30PM',
'place' => 'H 822 SGW'
],
	[
'lecture_id' => 373,
'section' => 'JI-X-LAB',
'day' => 'M-----',
'start_time' => '8:45AM',
'end_time' => '11:30AM',
'place' => 'H 822 SGW'
],
	[
'lecture_id' => 373,
'section' => 'JJ-X-LAB',
'day' => 'M-----',
'start_time' => '8:45AM',
'end_time' => '11:30AM',
'place' => 'H 822 SGW'
],
	[
'lecture_id' => 373,
'section' => 'JK-X-LAB',
'day' => '---T--',
'start_time' => '5:45PM',
'end_time' => '8:30PM',
'place' => 'H 822 SGW'
],
	[
'lecture_id' => 373,
'section' => 'JL-X-LAB',
'day' => 'M-----',
'start_time' => '5:45PM',
'end_time' => '8:30PM',
'place' => 'H 822 SGW'
],
	[
'lecture_id' => 373,
'section' => 'JM-X-LAB',
'day' => 'M-----',
'start_time' => '5:45PM',
'end_time' => '8:30PM',
'place' => 'H 822 SGW'
],
	[
'lecture_id' => 373,
'section' => 'JN-X-LAB',
'day' => '---T--',
'start_time' => '5:45PM',
'end_time' => '8:30PM',
'place' => 'H 822 SGW'
],
	[
'lecture_id' => 374,
'section' => 'HI-X-LAB',
'day' => 'M-----',
'start_time' => '5:45PM',
'end_time' => '8:30PM',
'place' => 'H 855 SGW'
],
	[
'lecture_id' => 374,
'section' => 'HJ-X-LAB',
'day' => 'M-----',
'start_time' => '5:45PM',
'end_time' => '8:30PM',
'place' => 'H 855 SGW'
],
	[
'lecture_id' => 374,
'section' => 'HK-X-LAB',
'day' => '-T----',
'start_time' => '5:45PM',
'end_time' => '8:30PM',
'place' => 'H 855 SGW'
],
	[
'lecture_id' => 374,
'section' => 'HL-X-LAB',
'day' => '-T----',
'start_time' => '5:45PM',
'end_time' => '8:30PM',
'place' => 'H 855 SGW'
],
	[
'lecture_id' => 375,
'section' => 'EI-X-LAB',
'day' => 'M-----',
'start_time' => '5:45PM',
'end_time' => '8:30PM',
'place' => 'H 823 SGW'
],
	[
'lecture_id' => 375,
'section' => 'EJ-X-LAB',
'day' => 'M-----',
'start_time' => '5:45PM',
'end_time' => '8:30PM',
'place' => 'H 823 SGW'
],
	[
'lecture_id' => 375,
'section' => 'EK-X-LAB',
'day' => '--W---',
'start_time' => '5:45PM',
'end_time' => '8:30PM',
'place' => 'H 823 SGW'
],
	[
'lecture_id' => 375,
'section' => 'EL-X-LAB',
'day' => '--W---',
'start_time' => '5:45PM',
'end_time' => '8:30PM',
'place' => 'H 823 SGW'
],
	[
'lecture_id' => 375,
'section' => 'EM-X-LAB',
'day' => '-T----',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'H 823 SGW'
],
	[
'lecture_id' => 375,
'section' => 'EN-X-LAB',
'day' => '-T----',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'H 823 SGW'
],
	[
'lecture_id' => 376,
'section' => 'HI-X-LAB',
'day' => '---T--',
'start_time' => '5:45PM',
'end_time' => '8:30PM',
'place' => 'H 823 SGW'
],
	[
'lecture_id' => 376,
'section' => 'HJ-X-LAB',
'day' => '---T--',
'start_time' => '5:45PM',
'end_time' => '8:30PM',
'place' => 'H 823 SGW'
],
	[
'lecture_id' => 376,
'section' => 'HK-X-LAB',
'day' => '---T--',
'start_time' => '1:15PM',
'end_time' => '4:00PM',
'place' => 'H 823 SGW'
],
	[
'lecture_id' => 376,
'section' => 'HL-X-LAB',
'day' => '---T--',
'start_time' => '1:15PM',
'end_time' => '4:00PM',
'place' => 'H 823 SGW'
],
	[
'lecture_id' => 377,
'section' => 'WI-X-LAB',
'day' => '-T----',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'H 945 SGW'
],
	[
'lecture_id' => 377,
'section' => 'WJ-X-LAB',
'day' => '--W---',
'start_time' => '10:15AM',
'end_time' => '1:00PM',
'place' => 'H 945 SGW'
],
	[
'lecture_id' => 377,
'section' => 'WK-X-LAB',
'day' => '---T--',
'start_time' => '11:45AM',
'end_time' => '2:30PM',
'place' => 'H 945 SGW'
],
	[
'lecture_id' => 377,
'section' => 'WL-X-LAB',
'day' => '--W---',
'start_time' => '10:15AM',
'end_time' => '1:00PM',
'place' => 'H 945 SGW'
],
	[
'lecture_id' => 377,
'section' => 'WM-X-LAB',
'day' => '--W---',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'H 945 SGW'
],
	[
'lecture_id' => 377,
'section' => 'WN-X-LAB',
'day' => '--W---',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'H 945 SGW'
],
	[
'lecture_id' => 377,
'section' => 'WO-X-LAB',
'day' => '-T----',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'H 945 SGW'
],
	[
'lecture_id' => 377,
'section' => 'WP-X-LAB',
'day' => '---T--',
'start_time' => '11:45AM',
'end_time' => '2:30PM',
'place' => 'H 945 SGW'
],
	[
'lecture_id' => 380,
'section' => 'UI-X-LAB',
'day' => '--W---',
'start_time' => '8:45AM',
'end_time' => '11:30AM',
'place' => 'H 832-6 SGW'
],
	[
'lecture_id' => 380,
'section' => 'UJ-X-LAB',
'day' => 'M-----',
'start_time' => '8:45AM',
'end_time' => '11:30AM',
'place' => 'H 832-6 SGW'
],
	[
'lecture_id' => 380,
'section' => 'UK-X-LAB',
'day' => '----F-',
'start_time' => '1:15PM',
'end_time' => '4:00PM',
'place' => 'TBA'
],
	[
'lecture_id' => 380,
'section' => 'UL-X-LAB',
'day' => '--W---',
'start_time' => '8:45AM',
'end_time' => '11:30AM',
'place' => 'H 832-6 SGW'
],
	[
'lecture_id' => 382,
'section' => 'WI-X-LAB',
'day' => '---T--',
'start_time' => '8:45AM',
'end_time' => '11:30AM',
'place' => 'TBA'
],
	[
'lecture_id' => 382,
'section' => 'WJ-X-LAB',
'day' => '--W---',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'TBA'
],
	[
'lecture_id' => 382,
'section' => 'WK-X-LAB',
'day' => '--W---',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'TBA'
],
	[
'lecture_id' => 383,
'section' => 'QPQA-LAB',
'day' => '--W---',
'start_time' => '1:45PM',
'end_time' => '4:45PM',
'place' => 'TBA'
],
	[
'lecture_id' => 384,
'section' => 'QPQA-LAB',
'day' => '-T----',
'start_time' => '12:45PM',
'end_time' => '3:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 385,
'section' => 'QPQA-LAB',
'day' => '---T--',
'start_time' => '1:45PM',
'end_time' => '4:45PM',
'place' => 'TBA'
],
	[
'lecture_id' => 387,
'section' => 'QPQA-LAB',
'day' => '-T----',
'start_time' => '12:45PM',
'end_time' => '3:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 388,
'section' => 'WWWI-LAB',
'day' => '----F-',
'start_time' => '11:45AM',
'end_time' => '2:30PM',
'place' => 'TBA'
],
	[
'lecture_id' => 393,
'section' => 'U UI-LAB',
'day' => '--W---',
'start_time' => '10:15AM',
'end_time' => '1:00PM',
'place' => 'TBA'
],
	[
'lecture_id' => 393,
'section' => 'U UJ-LAB',
'day' => '--W---',
'start_time' => '10:15AM',
'end_time' => '1:00PM',
'place' => 'TBA'
],
	[
'lecture_id' => 394,
'section' => 'DI-X-LAB',
'day' => '--W---',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'TBA'
],
	[
'lecture_id' => 395,
'section' => 'UUUI-LAB',
'day' => '-T----',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'H 832-2 SGW'
],
	[
'lecture_id' => 395,
'section' => 'UUUJ-LAB',
'day' => '-T----',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'H 832-2 SGW'
],
	[
'lecture_id' => 395,
'section' => 'UUUK-LAB',
'day' => '---T--',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'TBA'
],
	[
'lecture_id' => 427,
'section' => 'HI-X-LAB',
'day' => '-T----',
'start_time' => '5:45PM',
'end_time' => '8:30PM',
'place' => 'H 963 SGW'
],
	[
'lecture_id' => 427,
'section' => 'HJ-X-LAB',
'day' => '-T----',
'start_time' => '5:45PM',
'end_time' => '8:30PM',
'place' => 'H 963 SGW'
],
	[
'lecture_id' => 427,
'section' => 'HK-X-LAB',
'day' => '----F-',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'H 963 SGW'
],
	[
'lecture_id' => 427,
'section' => 'HM-X-LAB',
'day' => '----F-',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'H 963 SGW'
],
	[
'lecture_id' => 427,
'section' => 'HN-X-LAB',
'day' => '---T--',
'start_time' => '5:45PM',
'end_time' => '8:30PM',
'place' => 'H 963 SGW'
],
	[
'lecture_id' => 427,
'section' => 'HO-X-LAB',
'day' => '---T--',
'start_time' => '5:45PM',
'end_time' => '8:30PM',
'place' => 'H 963 SGW'
],
	[
'lecture_id' => 428,
'section' => 'MI-X-LAB',
'day' => '--W---',
'start_time' => '8:45AM',
'end_time' => '11:30AM',
'place' => 'H 963 SGW'
],
	[
'lecture_id' => 428,
'section' => 'MJ-X-LAB',
'day' => '--W---',
'start_time' => '8:45AM',
'end_time' => '11:30AM',
'place' => 'H 963 SGW'
],
	[
'lecture_id' => 428,
'section' => 'MK-X-LAB',
'day' => '----F-',
'start_time' => '8:45AM',
'end_time' => '11:30AM',
'place' => 'H 963 SGW'
],
	[
'lecture_id' => 428,
'section' => 'ML-X-LAB',
'day' => '----F-',
'start_time' => '8:45AM',
'end_time' => '11:30AM',
'place' => 'H 963 SGW'
],
	[
'lecture_id' => 428,
'section' => 'MM-X-LAB',
'day' => '----F-',
'start_time' => '11:45AM',
'end_time' => '2:30PM',
'place' => 'H 963 SGW'
],
	[
'lecture_id' => 428,
'section' => 'MN-X-LAB',
'day' => '----F-',
'start_time' => '11:45AM',
'end_time' => '2:30PM',
'place' => 'H 963 SGW'
],
	[
'lecture_id' => 429,
'section' => 'TI-X-LAB',
'day' => '-T----',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'H 963 SGW'
],
	[
'lecture_id' => 429,
'section' => 'TJ-X-LAB',
'day' => '-T----',
'start_time' => '8:45AM',
'end_time' => '11:30AM',
'place' => 'H 963 SGW'
],
	[
'lecture_id' => 429,
'section' => 'TK-X-LAB',
'day' => '-T----',
'start_time' => '8:45AM',
'end_time' => '11:30AM',
'place' => 'H 963 SGW'
],
	[
'lecture_id' => 429,
'section' => 'TL-X-LAB',
'day' => 'M-----',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'H 963 SGW'
],
	[
'lecture_id' => 429,
'section' => 'TM-X-LAB',
'day' => '---T--',
'start_time' => '8:45AM',
'end_time' => '11:30AM',
'place' => 'H 963 SGW'
],
	[
'lecture_id' => 429,
'section' => 'TN-X-LAB',
'day' => '-T----',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'H 963 SGW'
],
	[
'lecture_id' => 430,
'section' => 'VI-X-LAB',
'day' => '-T----',
'start_time' => '11:45AM',
'end_time' => '2:30PM',
'place' => 'H 963 SGW'
],
	[
'lecture_id' => 430,
'section' => 'VJ-X-LAB',
'day' => '-T----',
'start_time' => '11:45AM',
'end_time' => '2:30PM',
'place' => 'H 963 SGW'
],
	[
'lecture_id' => 430,
'section' => 'VK-X-LAB',
'day' => '--W---',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'H 963 SGW'
],
	[
'lecture_id' => 430,
'section' => 'VL-X-LAB',
'day' => '--W---',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'H 963 SGW'
],
	[
'lecture_id' => 430,
'section' => 'VM-X-LAB',
'day' => '---T--',
'start_time' => '11:45AM',
'end_time' => '2:30PM',
'place' => 'H 963 SGW'
],
	[
'lecture_id' => 430,
'section' => 'VN-X-LAB',
'day' => '---T--',
'start_time' => '11:45AM',
'end_time' => '2:30PM',
'place' => 'H 963 SGW'
],
	[
'lecture_id' => 431,
'section' => 'XI-X-LAB',
'day' => 'M-----',
'start_time' => '8:45AM',
'end_time' => '11:30AM',
'place' => 'H 963 SGW'
],
	[
'lecture_id' => 431,
'section' => 'XJ-X-LAB',
'day' => 'M-----',
'start_time' => '8:45AM',
'end_time' => '11:30AM',
'place' => 'H 963 SGW'
],
	[
'lecture_id' => 431,
'section' => 'XK-X-LAB',
'day' => 'M-----',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'H 963 SGW'
],
	[
'lecture_id' => 431,
'section' => 'XL-X-LAB',
'day' => '---T--',
'start_time' => '8:45AM',
'end_time' => '11:30AM',
'place' => 'H 963 SGW'
],
	[
'lecture_id' => 431,
'section' => 'XM-X-LAB',
'day' => '---T--',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'H 963 SGW'
],
	[
'lecture_id' => 431,
'section' => 'XN-X-LAB',
'day' => '---T--',
'start_time' => '2:44PM',
'end_time' => '5:29PM',
'place' => 'H 963 SGW'
],
	[
'lecture_id' => 452,
'section' => 'WI-X-LAB',
'day' => '--W---',
'start_time' => '12:00PM',
'end_time' => '4:00PM',
'place' => 'TBA'
],
	[
'lecture_id' => 452,
'section' => 'WJ-X-LAB',
'day' => '--W---',
'start_time' => '12:00PM',
'end_time' => '4:00PM',
'place' => 'TBA'
],
	[
'lecture_id' => 452,
'section' => 'WK-X-LAB',
'day' => '--W---',
'start_time' => '12:00PM',
'end_time' => '4:00PM',
'place' => 'TBA'
],
	[
'lecture_id' => 452,
'section' => 'WL-X-LAB',
'day' => '----F-',
'start_time' => '9:00AM',
'end_time' => '1:00PM',
'place' => 'TBA'
],
	[
'lecture_id' => 453,
'section' => 'WI-X-LAB',
'day' => '---T--',
'start_time' => '9:00AM',
'end_time' => '9:50AM',
'place' => 'TBA'
],
	[
'lecture_id' => 453,
'section' => 'WJ-X-LAB',
'day' => '---T--',
'start_time' => '10:05AM',
'end_time' => '10:55AM',
'place' => 'TBA'
],
	[
'lecture_id' => 453,
'section' => 'WK-X-LAB',
'day' => '--W---',
'start_time' => '11:15AM',
'end_time' => '12:05PM',
'place' => 'TBA'
],
	[
'lecture_id' => 453,
'section' => 'WL-X-LAB',
'day' => '-T----',
'start_time' => '10:05AM',
'end_time' => '10:55AM',
'place' => 'TBA'
],
	[
'lecture_id' => 453,
'section' => 'YI-X-LAB',
'day' => 'M-----',
'start_time' => '9:00AM',
'end_time' => '9:50AM',
'place' => 'TBA'
],
	[
'lecture_id' => 453,
'section' => 'YJ-X-LAB',
'day' => 'M-----',
'start_time' => '10:30AM',
'end_time' => '11:20AM',
'place' => 'TBA'
],
	[
'lecture_id' => 453,
'section' => 'YK-X-LAB',
'day' => '-T----',
'start_time' => '9:00AM',
'end_time' => '9:50AM',
'place' => 'TBA'
],
	[
'lecture_id' => 453,
'section' => 'YL-X-LAB',
'day' => '--W---',
'start_time' => '9:00AM',
'end_time' => '9:50AM',
'place' => 'TBA'
],
	[
'lecture_id' => 459,
'section' => 'TI-X-LAB',
'day' => 'M-----',
'start_time' => '9:00AM',
'end_time' => '10:50AM',
'place' => 'H 1058 SGW'
],
	[
'lecture_id' => 459,
'section' => 'TJ-X-LAB',
'day' => '-T----',
'start_time' => '9:00AM',
'end_time' => '10:50AM',
'place' => 'H 1058 SGW'
],
	[
'lecture_id' => 459,
'section' => 'TK-X-LAB',
'day' => '-T----',
'start_time' => '9:00AM',
'end_time' => '10:50AM',
'place' => 'H 1058 SGW'
],
	[
'lecture_id' => 459,
'section' => 'TL-X-LAB',
'day' => 'M-----',
'start_time' => '9:00AM',
'end_time' => '10:50AM',
'place' => 'H 1058 SGW'
],
	[
'lecture_id' => 459,
'section' => 'TM-X-LAB',
'day' => '----F-',
'start_time' => '2:45PM',
'end_time' => '4:35PM',
'place' => 'H 1058 SGW'
],
	[
'lecture_id' => 459,
'section' => 'TN-X-LAB',
'day' => '---T--',
'start_time' => '9:00AM',
'end_time' => '10:50AM',
'place' => 'H 1058 SGW'
],
	[
'lecture_id' => 459,
'section' => 'TO-X-LAB',
'day' => '---T--',
'start_time' => '9:00AM',
'end_time' => '10:50AM',
'place' => 'H 1058 SGW'
],
	[
'lecture_id' => 459,
'section' => 'TP-X-LAB',
'day' => '----F-',
'start_time' => '11:45AM',
'end_time' => '1:35PM',
'place' => 'H 1058 SGW'
],
	[
'lecture_id' => 459,
'section' => 'TQ-X-LAB',
'day' => '-T----',
'start_time' => '11:45AM',
'end_time' => '1:35PM',
'place' => 'H 1058 SGW'
],
	[
'lecture_id' => 459,
'section' => 'TR-X-LAB',
'day' => '----F-',
'start_time' => '2:45PM',
'end_time' => '4:35PM',
'place' => 'H 1058 SGW'
],
	[
'lecture_id' => 460,
'section' => 'XI-X-LAB',
'day' => '---T--',
'start_time' => '11:45AM',
'end_time' => '1:35PM',
'place' => 'H 1058 SGW'
],
	[
'lecture_id' => 460,
'section' => 'XJ-X-LAB',
'day' => '---T--',
'start_time' => '1:15PM',
'end_time' => '3:05PM',
'place' => 'H 1058 SGW'
],
	[
'lecture_id' => 460,
'section' => 'XK-X-LAB',
'day' => '--W---',
'start_time' => '11:45AM',
'end_time' => '1:35PM',
'place' => 'H 1058 SGW'
],
	[
'lecture_id' => 460,
'section' => 'XL-X-LAB',
'day' => '--W---',
'start_time' => '11:45AM',
'end_time' => '1:35PM',
'place' => 'H 1058 SGW'
],
	[
'lecture_id' => 460,
'section' => 'XM-X-LAB',
'day' => '----F-',
'start_time' => '11:45AM',
'end_time' => '1:35PM',
'place' => 'H 1058 SGW'
],
	[
'lecture_id' => 460,
'section' => 'XN-X-LAB',
'day' => 'M-----',
'start_time' => '3:15PM',
'end_time' => '5:05PM',
'place' => 'H 1058 SGW'
],
	[
'lecture_id' => 460,
'section' => 'XO-X-LAB',
'day' => 'M-----',
'start_time' => '1:15PM',
'end_time' => '3:05PM',
'place' => 'H 1058 SGW'
],
	[
'lecture_id' => 460,
'section' => 'XP-X-LAB',
'day' => 'M-----',
'start_time' => '1:15PM',
'end_time' => '3:05PM',
'place' => 'H 1058 SGW'
],
	[
'lecture_id' => 460,
'section' => 'XQ-X-LAB',
'day' => '-T----',
'start_time' => '11:45AM',
'end_time' => '1:35PM',
'place' => 'H 1058 SGW'
],
	[
'lecture_id' => 460,
'section' => 'XR-X-LAB',
'day' => 'M-----',
'start_time' => '3:15PM',
'end_time' => '5:05PM',
'place' => 'H 1058 SGW'
],
	[
'lecture_id' => 461,
'section' => 'MI-X-LAB',
'day' => '--W---',
'start_time' => '12:00PM',
'end_time' => '1:50PM',
'place' => 'H 1040 SGW'
],
	[
'lecture_id' => 461,
'section' => 'MJ-X-LAB',
'day' => '--W---',
'start_time' => '12:00PM',
'end_time' => '1:50PM',
'place' => 'H 1040 SGW'
],
	[
'lecture_id' => 461,
'section' => 'MK-X-LAB',
'day' => '----F-',
'start_time' => '11:45AM',
'end_time' => '1:35PM',
'place' => 'H 1040 SGW'
],
	[
'lecture_id' => 461,
'section' => 'MN-X-LAB',
'day' => '-T----',
'start_time' => '4:15PM',
'end_time' => '6:05PM',
'place' => 'H 1040 SGW'
],
	[
'lecture_id' => 461,
'section' => 'MO-X-LAB',
'day' => '---T--',
'start_time' => '4:15PM',
'end_time' => '6:05PM',
'place' => 'H 1040 SGW'
],
	[
'lecture_id' => 461,
'section' => 'MP-X-LAB',
'day' => '---T--',
'start_time' => '4:15PM',
'end_time' => '6:05PM',
'place' => 'H 1040 SGW'
],
	[
'lecture_id' => 462,
'section' => 'TI-X-LAB',
'day' => 'M-----',
'start_time' => '10:15AM',
'end_time' => '12:05PM',
'place' => 'H 1040 SGW'
],
	[
'lecture_id' => 462,
'section' => 'TJ-X-LAB',
'day' => 'M-----',
'start_time' => '10:15AM',
'end_time' => '12:05PM',
'place' => 'H 1040 SGW'
],
	[
'lecture_id' => 462,
'section' => 'TK-X-LAB',
'day' => 'M-----',
'start_time' => '2:45PM',
'end_time' => '4:35PM',
'place' => 'H 1040 SGW'
],
	[
'lecture_id' => 462,
'section' => 'TL-X-LAB',
'day' => 'M-----',
'start_time' => '2:45PM',
'end_time' => '4:35PM',
'place' => 'H 1040 SGW'
],
	[
'lecture_id' => 462,
'section' => 'TM-X-LAB',
'day' => '----F-',
'start_time' => '8:45AM',
'end_time' => '10:35AM',
'place' => 'H 1040 SGW'
],
	[
'lecture_id' => 462,
'section' => 'TN-X-LAB',
'day' => '--W---',
'start_time' => '4:15PM',
'end_time' => '6:05PM',
'place' => 'H 1040 SGW'
],
	[
'lecture_id' => 464,
'section' => 'TG-X-LAB',
'day' => '-T----',
'start_time' => '8:45AM',
'end_time' => '10:35AM',
'place' => 'H 1063 SGW'
],
	[
'lecture_id' => 464,
'section' => 'TH-X-LAB',
'day' => '-T----',
'start_time' => '10:45AM',
'end_time' => '12:35PM',
'place' => 'H 1063 SGW'
],
	[
'lecture_id' => 464,
'section' => 'TI-X-LAB',
'day' => 'M-----',
'start_time' => '8:45AM',
'end_time' => '10:35AM',
'place' => 'H 1063 SGW'
],
	[
'lecture_id' => 464,
'section' => 'TJ-X-LAB',
'day' => 'M-----',
'start_time' => '8:45AM',
'end_time' => '10:35AM',
'place' => 'H 1063 SGW'
],
	[
'lecture_id' => 464,
'section' => 'TK-X-LAB',
'day' => 'M-----',
'start_time' => '10:45AM',
'end_time' => '12:35PM',
'place' => 'H 1063 SGW'
],
	[
'lecture_id' => 464,
'section' => 'TL-X-LAB',
'day' => 'M-----',
'start_time' => '2:45PM',
'end_time' => '4:35PM',
'place' => 'H 1063 SGW'
],
	[
'lecture_id' => 464,
'section' => 'TM-X-LAB',
'day' => 'M-----',
'start_time' => '2:45PM',
'end_time' => '4:35PM',
'place' => 'H 1063 SGW'
],
	[
'lecture_id' => 464,
'section' => 'TN-X-LAB',
'day' => '-T----',
'start_time' => '8:45AM',
'end_time' => '10:35AM',
'place' => 'H 1063 SGW'
],
	[
'lecture_id' => 464,
'section' => 'TO-X-LAB',
'day' => '-T----',
'start_time' => '10:45AM',
'end_time' => '12:35PM',
'place' => 'H 1063 SGW'
],
	[
'lecture_id' => 464,
'section' => 'TP-X-LAB',
'day' => '---T--',
'start_time' => '10:45AM',
'end_time' => '12:35PM',
'place' => 'H 1063 SGW'
],
	[
'lecture_id' => 464,
'section' => 'TQ-X-LAB',
'day' => '----F-',
'start_time' => '2:15PM',
'end_time' => '4:05PM',
'place' => 'H 1063 SGW'
],
	[
'lecture_id' => 464,
'section' => 'TR-X-LAB',
'day' => 'M-----',
'start_time' => '10:45AM',
'end_time' => '12:35PM',
'place' => 'H 1063 SGW'
],
	[
'lecture_id' => 465,
'section' => 'XG-X-LAB',
'day' => '----F-',
'start_time' => '8:45AM',
'end_time' => '10:35AM',
'place' => 'H 1063 SGW'
],
	[
'lecture_id' => 465,
'section' => 'XH-X-LAB',
'day' => '----F-',
'start_time' => '2:15PM',
'end_time' => '4:05PM',
'place' => 'H 1063 SGW'
],
	[
'lecture_id' => 465,
'section' => 'XI-X-LAB',
'day' => '--W---',
'start_time' => '8:45AM',
'end_time' => '10:35AM',
'place' => 'H 1063 SGW'
],
	[
'lecture_id' => 465,
'section' => 'XJ-X-LAB',
'day' => '--W---',
'start_time' => '8:45AM',
'end_time' => '10:35AM',
'place' => 'H 1063 SGW'
],
	[
'lecture_id' => 465,
'section' => 'XK-X-LAB',
'day' => '--W---',
'start_time' => '2:45PM',
'end_time' => '4:35PM',
'place' => 'H 1063 SGW'
],
	[
'lecture_id' => 465,
'section' => 'XL-X-LAB',
'day' => '--W---',
'start_time' => '2:45PM',
'end_time' => '4:35PM',
'place' => 'H 1063 SGW'
],
	[
'lecture_id' => 465,
'section' => 'XM-X-LAB',
'day' => '---T--',
'start_time' => '10:45AM',
'end_time' => '12:35PM',
'place' => 'H 1063 SGW'
],
	[
'lecture_id' => 465,
'section' => 'XN-X-LAB',
'day' => '-T----',
'start_time' => '3:15PM',
'end_time' => '5:05PM',
'place' => 'H 1063 SGW'
],
	[
'lecture_id' => 465,
'section' => 'XO-X-LAB',
'day' => '---T--',
'start_time' => '8:45AM',
'end_time' => '10:35AM',
'place' => 'H 1063 SGW'
],
	[
'lecture_id' => 465,
'section' => 'XP-X-LAB',
'day' => '---T--',
'start_time' => '2:45PM',
'end_time' => '4:35PM',
'place' => 'H 1063 SGW'
],
	[
'lecture_id' => 465,
'section' => 'XQ-X-LAB',
'day' => '-T----',
'start_time' => '2:45PM',
'end_time' => '4:35PM',
'place' => 'H 1063 SGW'
],
	[
'lecture_id' => 465,
'section' => 'XR-X-LAB',
'day' => '----F-',
'start_time' => '8:45AM',
'end_time' => '10:35AM',
'place' => 'H 1063 SGW'
],
	[
'lecture_id' => 466,
'section' => 'TI-X-LAB',
'day' => 'M-----',
'start_time' => '2:45PM',
'end_time' => '4:35PM',
'place' => 'H 1049 SGW'
],
	[
'lecture_id' => 466,
'section' => 'TJ-X-LAB',
'day' => '-T----',
'start_time' => '9:45AM',
'end_time' => '11:35AM',
'place' => 'H 1049 SGW'
],
	[
'lecture_id' => 466,
'section' => 'TK-X-LAB',
'day' => '---T--',
'start_time' => '9:45AM',
'end_time' => '11:35AM',
'place' => 'H 1049 SGW'
],
	[
'lecture_id' => 466,
'section' => 'TL-X-LAB',
'day' => '---T--',
'start_time' => '2:45PM',
'end_time' => '4:35PM',
'place' => 'H 1049 SGW'
],
	[
'lecture_id' => 466,
'section' => 'TM-X-LAB',
'day' => '---T--',
'start_time' => '2:45PM',
'end_time' => '4:35PM',
'place' => 'H 1049 SGW'
],
	[
'lecture_id' => 466,
'section' => 'TN-X-LAB',
'day' => '----F-',
'start_time' => '9:45AM',
'end_time' => '11:35AM',
'place' => 'H 1049 SGW'
],
	[
'lecture_id' => 466,
'section' => 'TO-X-LAB',
'day' => '----F-',
'start_time' => '9:45AM',
'end_time' => '11:35AM',
'place' => 'H 1049 SGW'
],
	[
'lecture_id' => 466,
'section' => 'TP-X-LAB',
'day' => 'M-----',
'start_time' => '2:45PM',
'end_time' => '4:35PM',
'place' => 'H 1049 SGW'
],
	[
'lecture_id' => 466,
'section' => 'TQ-X-LAB',
'day' => '-T----',
'start_time' => '9:45AM',
'end_time' => '11:35AM',
'place' => 'H 1049 SGW'
],
	[
'lecture_id' => 466,
'section' => 'TR-X-LAB',
'day' => '-T----',
'start_time' => '2:45PM',
'end_time' => '4:35PM',
'place' => 'H 1049 SGW'
],
	[
'lecture_id' => 466,
'section' => 'TS-X-LAB',
'day' => '----F-',
'start_time' => '2:45PM',
'end_time' => '4:35PM',
'place' => 'H 1049 SGW'
],
	[
'lecture_id' => 466,
'section' => 'TZ-X-LAB',
'day' => 'TBA',
'start_time' => 'TBA',
'end_time' => 'TBA',
'place' => 'TBA'
],
	[
'lecture_id' => 467,
'section' => 'MI-X-LAB',
'day' => 'M-----',
'start_time' => '4:45PM',
'end_time' => '6:35PM',
'place' => 'H 1053 SGW'
],
	[
'lecture_id' => 467,
'section' => 'MJ-X-LAB',
'day' => 'M-----',
'start_time' => '4:45PM',
'end_time' => '6:35PM',
'place' => 'H 1053 SGW'
],
	[
'lecture_id' => 467,
'section' => 'MK-X-LAB',
'day' => 'M-----',
'start_time' => '2:45PM',
'end_time' => '4:35PM',
'place' => 'H 1053 SGW'
],
	[
'lecture_id' => 467,
'section' => 'ML-X-LAB',
'day' => 'M-----',
'start_time' => '2:45PM',
'end_time' => '4:35PM',
'place' => 'H 1053 SGW'
],
	[
'lecture_id' => 467,
'section' => 'MM-X-LAB',
'day' => '----F-',
'start_time' => '11:45AM',
'end_time' => '1:35PM',
'place' => 'H 1053 SGW'
],
	[
'lecture_id' => 467,
'section' => 'MN-X-LAB',
'day' => '----F-',
'start_time' => '11:45AM',
'end_time' => '1:35PM',
'place' => 'H 1053 SGW'
],
	[
'lecture_id' => 467,
'section' => 'MO-X-LAB',
'day' => '---T--',
'start_time' => '2:45PM',
'end_time' => '4:35PM',
'place' => 'H 1053 SGW'
],
	[
'lecture_id' => 467,
'section' => 'MP-X-LAB',
'day' => '---T--',
'start_time' => '2:45PM',
'end_time' => '4:35PM',
'place' => 'H 1053 SGW'
],
	[
'lecture_id' => 468,
'section' => 'TI-X-LAB',
'day' => 'M-----',
'start_time' => '11:45AM',
'end_time' => '1:35PM',
'place' => 'H 1051 SGW'
],
	[
'lecture_id' => 468,
'section' => 'TJ-X-LAB',
'day' => 'M-----',
'start_time' => '11:45AM',
'end_time' => '1:35PM',
'place' => 'H 1051 SGW'
],
	[
'lecture_id' => 468,
'section' => 'TK-X-LAB',
'day' => '---T--',
'start_time' => '11:45AM',
'end_time' => '1:35PM',
'place' => 'H 1051 SGW'
],
	[
'lecture_id' => 468,
'section' => 'TL-X-LAB',
'day' => '--W---',
'start_time' => '2:45PM',
'end_time' => '4:35PM',
'place' => 'H 1051 SGW'
],
	[
'lecture_id' => 468,
'section' => 'TM-X-LAB',
'day' => '--W---',
'start_time' => '2:45PM',
'end_time' => '4:35PM',
'place' => 'H 1051 SGW'
],
	[
'lecture_id' => 468,
'section' => 'TN-X-LAB',
'day' => '---T--',
'start_time' => '11:45AM',
'end_time' => '1:35PM',
'place' => 'H 1051 SGW'
],
	[
'lecture_id' => 469,
'section' => 'TI-X-LAB',
'day' => '--W---',
'start_time' => '11:45AM',
'end_time' => '2:30PM',
'place' => 'H 1051 SGW'
],
	[
'lecture_id' => 469,
'section' => 'TJ-X-LAB',
'day' => '--W---',
'start_time' => '11:45AM',
'end_time' => '2:30PM',
'place' => 'H 1051 SGW'
],
	[
'lecture_id' => 469,
'section' => 'TK-X-LAB',
'day' => '---T--',
'start_time' => '8:45AM',
'end_time' => '11:30AM',
'place' => 'H 1051 SGW'
],
	[
'lecture_id' => 469,
'section' => 'TL-X-LAB',
'day' => '---T--',
'start_time' => '8:45AM',
'end_time' => '11:30AM',
'place' => 'H 1051 SGW'
],
	[
'lecture_id' => 469,
'section' => 'TM-X-LAB',
'day' => '----F-',
'start_time' => '8:45AM',
'end_time' => '11:30AM',
'place' => 'H 1051 SGW'
],
	[
'lecture_id' => 470,
'section' => 'XI-X-LAB',
'day' => 'M-----',
'start_time' => '8:45AM',
'end_time' => '11:30AM',
'place' => 'H 1051 SGW'
],
	[
'lecture_id' => 470,
'section' => 'XJ-X-LAB',
'day' => 'M-----',
'start_time' => '8:45AM',
'end_time' => '11:30AM',
'place' => 'H 1051 SGW'
],
	[
'lecture_id' => 470,
'section' => 'XK-X-LAB',
'day' => '-T----',
'start_time' => '8:45AM',
'end_time' => '11:30AM',
'place' => 'H 1051 SGW'
],
	[
'lecture_id' => 470,
'section' => 'XL-X-LAB',
'day' => '-T----',
'start_time' => '8:45AM',
'end_time' => '11:30AM',
'place' => 'H 1051 SGW'
],
	[
'lecture_id' => 470,
'section' => 'XM-X-LAB',
'day' => '----F-',
'start_time' => '8:45AM',
'end_time' => '11:30AM',
'place' => 'H 1051 SGW'
],
	[
'lecture_id' => 471,
'section' => 'MI-X-LAB',
'day' => 'M-----',
'start_time' => '11:45AM',
'end_time' => '1:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 471,
'section' => 'MJ-X-LAB',
'day' => 'M-----',
'start_time' => '11:45AM',
'end_time' => '1:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 471,
'section' => 'MK-X-LAB',
'day' => '-T----',
'start_time' => '8:45AM',
'end_time' => '10:35AM',
'place' => 'TBA'
],
	[
'lecture_id' => 471,
'section' => 'ML-X-LAB',
'day' => '-T----',
'start_time' => '8:45AM',
'end_time' => '10:35AM',
'place' => 'TBA'
],
	[
'lecture_id' => 471,
'section' => 'MM-X-LAB',
'day' => '-T----',
'start_time' => '11:45AM',
'end_time' => '1:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 471,
'section' => 'MN-X-LAB',
'day' => '-T----',
'start_time' => '11:45AM',
'end_time' => '1:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 471,
'section' => 'MO-X-LAB',
'day' => '--W---',
'start_time' => '8:45AM',
'end_time' => '10:35AM',
'place' => 'TBA'
],
	[
'lecture_id' => 471,
'section' => 'MP-X-LAB',
'day' => '--W---',
'start_time' => '8:45AM',
'end_time' => '10:35AM',
'place' => 'TBA'
],
	[
'lecture_id' => 474,
'section' => 'XXXI-LAB',
'day' => '--W---',
'start_time' => '8:45AM',
'end_time' => '10:35AM',
'place' => 'H 0076 SGW'
],
	[
'lecture_id' => 474,
'section' => 'XXXJ-LAB',
'day' => '--W---',
'start_time' => '1:45PM',
'end_time' => '3:35PM',
'place' => 'H 0076 SGW'
],
	[
'lecture_id' => 475,
'section' => 'X XI-LAB',
'day' => '--W---',
'start_time' => '11:15AM',
'end_time' => '1:05PM',
'place' => 'TBA'
],
	[
'lecture_id' => 475,
'section' => 'X XJ-LAB',
'day' => '--W---',
'start_time' => '11:15AM',
'end_time' => '1:05PM',
'place' => 'TBA'
],
	[
'lecture_id' => 475,
'section' => 'X XK-LAB',
'day' => '----F-',
'start_time' => '11:45AM',
'end_time' => '1:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 475,
'section' => 'X XL-LAB',
'day' => '----F-',
'start_time' => '11:45AM',
'end_time' => '1:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 476,
'section' => 'X XI-LAB',
'day' => '--W---',
'start_time' => '11:45AM',
'end_time' => '1:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 476,
'section' => 'X XJ-LAB',
'day' => '--W---',
'start_time' => '11:45AM',
'end_time' => '1:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 476,
'section' => 'X XK-LAB',
'day' => '----F-',
'start_time' => '11:45AM',
'end_time' => '1:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 476,
'section' => 'X XL-LAB',
'day' => 'M-----',
'start_time' => '11:45AM',
'end_time' => '1:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 476,
'section' => 'X XM-LAB',
'day' => 'M-----',
'start_time' => '11:45AM',
'end_time' => '1:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 479,
'section' => 'XM-X-LAB',
'day' => '-T----',
'start_time' => '11:15AM',
'end_time' => '1:05PM',
'place' => 'H 1045 SGW'
],
	[
'lecture_id' => 479,
'section' => 'XN-X-LAB',
'day' => '-T----',
'start_time' => '11:15AM',
'end_time' => '1:05PM',
'place' => 'H 1045 SGW'
],
	[
'lecture_id' => 479,
'section' => 'XO-X-LAB',
'day' => '---T--',
'start_time' => '11:15AM',
'end_time' => '1:05PM',
'place' => 'H 1045 SGW'
],
	[
'lecture_id' => 479,
'section' => 'XR-X-LAB',
'day' => 'M-----',
'start_time' => '11:15AM',
'end_time' => '1:05PM',
'place' => 'H 1045 SGW'
],
	[
'lecture_id' => 482,
'section' => 'T TI-LAB',
'day' => 'M-----',
'start_time' => '10:20AM',
'end_time' => '1:05PM',
'place' => 'TBA'
],
	[
'lecture_id' => 482,
'section' => 'T TJ-LAB',
'day' => 'M-----',
'start_time' => '10:20AM',
'end_time' => '1:05PM',
'place' => 'TBA'
],
	[
'lecture_id' => 482,
'section' => 'T TK-LAB',
'day' => '--W---',
'start_time' => '2:45PM',
'end_time' => '5:30PM',
'place' => 'TBA'
],
	[
'lecture_id' => 483,
'section' => 'XXXI-LAB',
'day' => '---T--',
'start_time' => '10:45AM',
'end_time' => '12:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 483,
'section' => 'XXXJ-LAB',
'day' => '---T--',
'start_time' => '10:45AM',
'end_time' => '12:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 484,
'section' => 'XXXI-LAB',
'day' => 'M-----',
'start_time' => '11:45AM',
'end_time' => '1:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 484,
'section' => 'XXXJ-LAB',
'day' => 'M-----',
'start_time' => '11:45AM',
'end_time' => '1:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 484,
'section' => 'XXXK-LAB',
'day' => '--W---',
'start_time' => '11:45AM',
'end_time' => '1:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 484,
'section' => 'XXXL-LAB',
'day' => '--W---',
'start_time' => '11:45AM',
'end_time' => '1:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 484,
'section' => 'XXXN-LAB',
'day' => '--W---',
'start_time' => '2:45PM',
'end_time' => '4:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 484,
'section' => 'XXXO-LAB',
'day' => '--W---',
'start_time' => '2:45PM',
'end_time' => '4:35PM',
'place' => 'TBA'
],
	[
'lecture_id' => 485,
'section' => 'X XI-LAB',
'day' => 'M-----',
'start_time' => '8:45AM',
'end_time' => '11:30AM',
'place' => 'TBA'
],
	[
'lecture_id' => 485,
'section' => 'X XJ-LAB',
'day' => 'M-----',
'start_time' => '8:45AM',
'end_time' => '11:30AM',
'place' => 'TBA'
],
	[
'lecture_id' => 485,
'section' => 'X XK-LAB',
'day' => '--W---',
'start_time' => '8:45AM',
'end_time' => '11:30AM',
'place' => 'TBA'
],
	[
'lecture_id' => 485,
'section' => 'X XL-LAB',
'day' => '--W---',
'start_time' => '8:45AM',
'end_time' => '11:30AM',
'place' => 'TBA'
],
	[
'lecture_id' => 485,
'section' => 'X XM-LAB',
'day' => '----F-',
'start_time' => '8:45AM',
'end_time' => '11:30AM',
'place' => 'TBA'
],
	[
'lecture_id' => 486,
'section' => 'DI-X-LAB',
'day' => '-T----',
'start_time' => '10:00AM',
'end_time' => '12:00PM',
'place' => 'TBA'
],
	[
'lecture_id' => 486,
'section' => 'DJ-X-LAB',
'day' => 'M-----',
'start_time' => '10:00AM',
'end_time' => '12:00PM',
'place' => 'TBA'
],
	[
'lecture_id' => 486,
'section' => 'DK-X-LAB',
'day' => '--W---',
'start_time' => '10:00AM',
'end_time' => '12:00PM',
'place' => 'TBA'
],
	[
'lecture_id' => 486,
'section' => 'DL-X-LAB',
'day' => 'M-----',
'start_time' => '10:00AM',
'end_time' => '12:00PM',
'place' => 'TBA'
],
	[
'lecture_id' => 486,
'section' => 'DM-X-LAB',
'day' => '--W---',
'start_time' => '6:00PM',
'end_time' => '8:00PM',
'place' => 'TBA'
],
	[
'lecture_id' => 487,
'section' => 'HI-X-LAB',
'day' => '-T----',
'start_time' => '10:00AM',
'end_time' => '12:00PM',
'place' => 'TBA'
],
	[
'lecture_id' => 487,
'section' => 'HJ-X-LAB',
'day' => '--W---',
'start_time' => '10:00AM',
'end_time' => '12:00PM',
'place' => 'TBA'
],
	[
'lecture_id' => 487,
'section' => 'HK-X-LAB',
'day' => '--W---',
'start_time' => '6:00PM',
'end_time' => '8:00PM',
'place' => 'TBA'
],
	[
'lecture_id' => 487,
'section' => 'HL-X-LAB',
'day' => 'M-----',
'start_time' => '4:15PM',
'end_time' => '6:15PM',
'place' => 'TBA'
],
	[
'lecture_id' => 487,
'section' => 'HM-X-LAB',
'day' => 'M-----',
'start_time' => '4:15PM',
'end_time' => '6:15PM',
'place' => 'TBA'
],
	[
'lecture_id' => 499,
'section' => 'SI-X-LAB',
'day' => '---T--',
'start_time' => '3:45PM',
'end_time' => '6:25PM',
'place' => 'TBA'
],
	[
'lecture_id' => 499,
'section' => 'SK-X-LAB',
'day' => '-T----',
'start_time' => '3:45PM',
'end_time' => '6:25PM',
'place' => 'TBA'
],
	[
'lecture_id' => 500,
'section' => 'NI-X-LAB',
'day' => '--W---',
'start_time' => '8:30PM',
'end_time' => '10:20PM',
'place' => 'TBA'
],
	[
'lecture_id' => 500,
'section' => 'NJ-X-LAB',
'day' => '--W---',
'start_time' => '8:30PM',
'end_time' => '10:20PM',
'place' => 'TBA'
],
	[
'lecture_id' => 501,
'section' => 'UI-X-LAB',
'day' => '--W---',
'start_time' => '3:45PM',
'end_time' => '5:35PM',
'place' => 'TBA'
],

        ]);
    }
}
