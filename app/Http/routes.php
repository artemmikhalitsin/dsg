<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	if (!Auth::guest()) {
		return redirect('/home');
	}else{
		return view('welcome');
	}
});

Route::auth();

// all the get requests
Route::get('/home', 'HomeController@index');
Route::get('/courses', 'CoursesController@index');
Route::get('/addCompletedCourses', 'CoursesController@addCompletedCourses');
Route::get('/schedule', 'CoursesController@schedule');
Route::get('/sequence', 'CoursesController@generateSequence');
Route::get('/profile', 'UserController@profile');

// all the post requests
Route::post('/completedCourses', 'UserController@addCompletedCourse');
Route::post('/profile', 'UserController@removeCompletedCourse');
Route::post('/updatePreferences', 'PreferencesController@update');