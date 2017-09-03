<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\PostList;
use App\Http\Requests\PostForm;
use App\Repositories\Post\PostInterface;

/**
 * @resource Post APIs - ver. v1
 *
 * Post API
 */

class PostController extends Controller
{
	
	public function __construct(PostInterface $Post)
	{
		$this->Post = $Post;
	}
	public function index(PostList $request)
	{
		
		$result = $this->Post->index($request);
    	return response()->json($result, 200);
    	
	}
	
	public function show($id)
	{

		$result = $this->Post->show($id);
    	return response()->json($result, 200);
    	
	}
	
	public function store(PostForm $request)
	{
		
		$result = $this->Post->store($request);
    	return response()->json($result, 200);
    	
	}
	
	public function update(PostForm $request, $id)
	{

		$result = $this->Post->update($request, $id);
    	return response()->json($result, 200);
    	
	}
	
	public function destroy($id)
	{
		
		$result = $this->Post->destroy($id);
    	return response()->json($result, 200);
    	
	}

}
