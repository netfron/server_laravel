@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profile</div>
                <div class="panel-body">
                    <profile></profile>
                </div>                
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Dlog</div>
                <div class="panel-body">
                    <dlog></dlog>
                </div>                
            </div>            
        </div>
    </div>
</div>
@endsection
