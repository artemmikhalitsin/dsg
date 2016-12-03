<?php

namespace App\Http\Controllers;

use Auth;

use App\Http\Requests;

use App\Http\Requests\AddPreferencesRequest;

use App\Preferences;


//ARTEM:Should this handle the update, or should it pass the values to the model???
class PreferencesController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function update(AddPreferencesRequest $request)
    {
		$user_id = Auth::user()->id;
		$input = $request->all();
		if (!empty($input['days_off']))
			$days = $input['days_off'];
		else {
			$days = array();
		}
		$days_off = implode("|", $days);
		$start = date("G:i", strtotime($input['starting_time']));
		$end = date("G:i", strtotime($input['finishing_time']));


	   if($start > $end)
	   {
		   $start = Preferences::where('user_id', $user_id)->value('starting_time');
		   $end = Preferences::where('user_id', $user_id)->value('finishing_time');
	   }

        $existsAlready = Preferences::where('user_id', $user_id)->exists();

        if ($existsAlready) {
            Preferences::where('user_id', $user_id)
                ->update([
                        'days_off' => $days_off,
                        'starting_time' => $start,
                        'finishing_time' => $end,
                        'course_load' => $input['course_load']
                    ]);
        }else{
            Preferences::Create(
                [
                    'days_off' => $days_off,
                    'starting_time' => $start,
                    'finishing_time' => $end,
                    'course_load' => $input['course_load'],
                    'user_id' => $user_id
                ]
            );
        }
        return redirect('/profile');
    }
}
