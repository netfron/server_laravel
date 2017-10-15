<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\NewsList;
use App\Http\Requests\NewsForm;
use App\Repositories\News\NewsInterface;

/**
 * @resource News APIs - ver. v1
 *
 * News API
 */

class NewsController extends Controller
{
	
	public function __construct(NewsInterface $News)
	{
		$this->News = $News;
	}
	public function index(NewsList $request)
	{
		
		$result = $this->News->index($request);
    	return response()->json($result, 200);
    	
	}
	
	public function show($id)
	{

		$result = $this->News->show($id);
    	return response()->json($result, 200);
    	
	}
	
	public function store(NewsForm $request)
	{
		
		$result = $this->News->store($request);
    	return response()->json($result, 200);
    	
	}
	
	public function update(NewsForm $request, $id)
	{

		$result = $this->News->update($request, $id);
    	return response()->json($result, 200);
    	
	}
	
	public function destroy($id)
	{
		
		$result = $this->News->destroy($id);
    	return response()->json($result, 200);
    	
	}

}
