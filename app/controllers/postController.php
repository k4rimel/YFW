<?php
class PostController extends \BaseController {

	/**
	 * Send back all posts as JSON
	 *
	 * @return Response
	 */
	public function index()
	{
		
	    return Response::json(Post::get());
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
	    Post::create(array(
	    	// TODO : ADD IMG URL FIELD
	        'label' => Input::get('label'),
	    ));

	    return Response::json(array('success' => true));
	}

	/**
	 * Return the specified resource using JSON
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		exit('get');
		return Response::json(Post::find($id));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
	    Post::destroy($id);

	    return Response::json(array('success' => true));
	}
}

