<?php

namespace App\Http\Controllers;

use Auth;

use App\Http\Requests;

use App\Http\Requests\AddPreferencesRequest;

use App\Preferences;

class PreferencesController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

	public function create()
    {
        return view('users/preferences');
    }

    public function store(AddPreferencesRequest $request)
    {
    	$input = $request->all();
    	$days = $input['days_off'];
    	$days_off = "";

    	foreach ($days as $key => $value) {
    		$days_off .= $value; 
    	}

    	$existsAlready = Preferences::where('user_id', Auth::user()->id)->exists();

    	if ($existsAlready) {
    		Preferences::where('user_id', Auth::user()->id)
    			->update([
    					'days_off' => $days_off,
		    			'starting_time' => $input['starting_time'],
		    			'finishing_time' => $input['finishing_time'],
		    			'course_load' => $input['course_load']
    				]);
    	}else{
    		Preferences::Create(
	    		[
	    			'days_off' => $days_off,
	    			'starting_time' => $input['starting_time'],
	    			'finishing_time' => $input['finishing_time'],
	    			'course_load' => $input['course_load'],
	    			'user_id' => Auth::user()->id
	    		]
    		);
    	}
    	

    	return redirect('/profile');
    }
}
