<?php

namespace App\Repositories\Post;

use App\Post;
use App\Repositories\Post\PostInterface as PostInterface;

// use the namespace if it has any, i.e.
// namespace Repositories\User;
// Same for IUserRepository interface

class PostRepository implements PostInterface {

	function __construct() 
	{

	}

	public function index($request)
	{
   		$id = $request->id;
    	$title = $request->title;
    	$content = $request->content;

		$data = Post::orderBy('id','desc');

    	if($id) $data = $data->where('id','=', $id);
    	if($title) $data = $data->where('title','like','%'.$title.'%');
    	if($content) $data = $data->where('content','like','%'.$content.'%');

    	$data = $data->select(['id', 'title', 'content']);
		$data = $data->paginate(20);
		
    	return $data;
	}
	
	public function show($id)
	{

    	$data = Post::where('id','=',$id);
    	$data = $data->get()->toArray();
    	if($data){
    		$data = $data[0];
    	} 

    	return $data;
    	
	}
	
	public function store($request)
	{

		Post::create($request->all());
		return ['result'=>0,'result_text'=>'success','result_data'=>['id'=>$id]];

	}
	
	public function update($request, $id)
	{

		$requestData = [
				"title"=>$request->title,
				"content"=>$request->content,
		];
		Post::where('id', $id)->update($requestData);
		return ['result'=>0,'result_text'=>'success'];

	}
	
	public function destroy($id)
	{		

		Post::where('id', $id)->delete();
		return ['result'=>0,'result_text'=>'success'];

	}

}