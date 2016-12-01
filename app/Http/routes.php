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
Route::get('/schedule', 'UserController@schedule');
Route::get('/sequence', 'CoursesController@generateSequence');
Route::get('/profile', 'UserController@profile');
Route::get('/courseinfo/{type}/{id}', 'CoursesController@showInfo');
Route::get('/browseCourses', 'CoursesController@browseCourses');
Route::get('/schedule/addCourse', 'ScheduleController@addCourse');


// all the post requests
Route::post('/completedCourses', 'UserController@addCompletedCourse');
Route::post('/profile', 'UserController@removeCompletedCourse');
Route::post('/updatePreferences', 'PreferencesController@update');
Route::post('/schedule/getCoursesList', 'ScheduleController@getCoursesList');
Route::post('/schedule/getLecturesList', 'ScheduleController@getLecturesList');
Route::post('/schedule/getTutorialsAndLabsList', 'ScheduleController@getTutorialsAndLabsList');
Route::post('/schedule/addCourse', 'ScheduleController@store');
Route::post('/schedule/removeCourse','ScheduleController@removeCourse');
