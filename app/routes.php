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
// Route::get('/test/{arg?}', function($arg = null)
// {
// 	if ($arg == null) return 'Test.';
// 	return "Test / {$arg}";
// });
Route::get('/',  'MainPageController@displayLatestContent');

Route::get('/post', function(){
	return View::make('post');
});

Route::post('/postImg', 'UploadController@HandleImgUpload');


// Route::get('/logout', function()
// {
// 	Auth::logout();
// 	return Response::make('You are now logged out. :(');
// });

Route::get('/admin', array(
	'before' => 'auth',
	function()
	{
		return Response::make('admin panel');
	}
));

Route::get('/admin', function()
{
    return View::make('admin');
});
Route::post('/admin', function()
{
	$credentials = Input::only('username', 'password');
	if (Auth::attempt($credentials)) {
		return Redirect::intended('/admin');
	}
	return Redirect::to('/');
});

// Route::get('/signup', function()
// {
// 	return View::make('create_user_form');
// });
// Route::post('/signup', function()
// {
// 	$user = new User;
// 	$user->username 	= Input::get('username');
// 	$user->password 	= Hash::make(Input::get('password'));
// 	$user->email    	= Input::get('email');
// 	$user->save();

// 	return Response::make('User created!');
// });

