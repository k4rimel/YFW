<?php

class MainPageController extends BaseController {

	/*
	|
	|
	|	Route::get('/whatevr', 'MainPageController@method');
	|
	*/

	public function displayLatestContent()
	{
		// $allPosts = Post::paginate(15);
		// $params['posts'] = DB::table('posts')->get();
		// return View::make('content', $params);
		$params['posts'] = Post::paginate(10);
		return View::make('content', $params);
	}

}