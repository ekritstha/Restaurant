@extends('layouts.app')
@section('content')

	<div class="container">
        <h1>Add To Gallery</h1>
    {!! Form::open(['action' => 'galleryController@store','method'=>'POST', 'enctype'=> 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('name','Name')}}
            {{Form::text('name','',['class' =>'form-control','placeholder'=>'Name of picture:'])}}
        </div>
        <div class="form-group">
            {{Form::file('image')}}
        </div>
        <div class="form-group">
            {{Form::label('category','Category: ')}}
            {{Form::select('category'.'', ['food' => 'Food', 'guest' => 'Guest', 'event' => 'Live Event', 'others' => 'Others'])}}
        </div>
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    </div>

@endsection