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

Route::get('/', function()
{
	return View::make('index');
});
Route::get('/sponsors', function()
{
	return View::make('sponsors');
});


Route::post('subscribe', function(){
	$validation = Validator::make(Input::all(), [
		'email' => 'required|email|unique:email_addresses',
		'first_name' => 'required',
		'last_name' => 'required',
		'school' => 'required|min:4'
	]);

	if($validation->fails())
		return Response::json(['message' => $validation->messages()->first()], 400);

	EmailAddress::create(array_merge(
		Input::only(['email', 'first_name', 'last_name', 'school']),
		['ip_address' => Request::server('REMOTE_ADDR')]));

	return Response::json(['message' => 'Success!']);
});
