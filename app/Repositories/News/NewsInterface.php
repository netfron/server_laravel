<?php
namespace App\Repositories\News;

interface NewsInterface {

	public function index($request);
	public function show($id);
	public function store($request);
	public function update($request, $id);
	public function destroy($id);

}