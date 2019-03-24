@extends('layouts.app')
@section('content')
    <div class="container">
	<h1>Add Event</h1>
    {!! Form::open(['action' => 'AdminController@sstore','method'=>'POST', 'enctype'=> 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::file('image')}}
        </div>
        <div class="form-group">
            {{Form::label('title','Title')}}
            {{Form::text('title','',['class' =>'form-control','placeholder'=>'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('description','Description')}}
            {{Form::text('description','',['class' =>'form-control','placeholder'=>'Description'])}}
        </div>
        <div class="form-group">
            {{Form::label('order','Order')}}
            {{Form::text('order','',['class' =>'form-control','placeholder'=>'Order'])}}
        </div>
        
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
	</div>

@endsection