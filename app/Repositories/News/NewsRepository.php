<?php

namespace App\Repositories\News;

use App\News;
use App\Repositories\News\NewsInterface as NewsInterface;
use DB;
// use the namespace if it has any, i.e.
// namespace Repositories\User;
// Same for IUserRepository interface

class NewsRepository implements NewsInterface {

	function __construct() 
	{

	}

	public function index($request)
	{
   		$id = $request->id;
    	$title = $request->title;
    	$content = $request->content;

		$limit = 10;
		$projections = ['id', 'name','message'];
		$data = DB::connection('mongodb')->collection('news')->paginate($limit, $projections);

		return $data;

	}
	
	public function show($id)
	{

    	$data = News::where('id','=',$id);
    	$data = $data->get()->toArray();
    	if($data){
    		$data = $data[0];
    	} 

    	return $data;
    	
	}
	
	public function store($request)
	{

		News::create($request->all());
		return ['result'=>0,'result_text'=>'success','result_data'=>['id'=>$id]];

	}
	
	public function update($request, $id)
	{

		$requestData = [
				"title"=>$request->title,
				"content"=>$request->content,
		];
		News::where('id', $id)->update($requestData);
		return ['result'=>0,'result_text'=>'success'];

	}
	
	public function destroy($id)
	{		

		News::where('id', $id)->delete();
		return ['result'=>0,'result_text'=>'success'];

	}

}