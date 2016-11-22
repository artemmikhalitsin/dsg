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
    return view('welcome');
});

// Route::get('/AddcompletedCourses', function () {
//     return view('courses/completedCourses');
// });

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/courses', 'CoursesController@index');
Route::get('/addCompletedCourses', 'CoursesController@addCompletedCourses');
Route::get('/sequence', 'CoursesController@generateSequence');
Route::get('/profile', 'UserController@profile');
Route::get('/preferences', 'UserController@preferences');

Route::post('/completedCourses', 'UserController@addCompletedCourse');
Route::post('/profile', 'UserController@removeCompletedCourse');
