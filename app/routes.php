<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::group(array('prefix' => 'api/v1'), function()
{
	Route::post('jobboard/apply', 'JobBoardController@apply');
	Route::get('jobboard/applications/{jobid}', 'JobBoardController@applictions');

	Route::resource('jobboard', 'JobBoardController');
});

Route::get('/', function()
{
	return View::make('hello');
});
