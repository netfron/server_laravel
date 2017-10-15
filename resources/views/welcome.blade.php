@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                Welcome to Dlog Website
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">News</div>
                <div class="panel-body">
                    <news></news>
                </div>                
            </div>               
                   
        </div>
    </div>
</div>
@endsection
