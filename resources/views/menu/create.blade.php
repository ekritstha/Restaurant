@extends('layouts.app')
@section('content')

	<div class="container">
        <h1>Add To Menu</h1>
    {!! Form::open(['action' => 'AddMenuController@store','method'=>'POST', 'enctype'=> 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('name','Name')}}
            {{Form::text('name','',['class' =>'form-control','placeholder'=>'Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('price','Price')}}
            {{Form::text('price','',['class' =>'form-control','placeholder'=>'Price'])}}
        </div>
        <div class="form-group">
            {{Form::label('category','Category: ')}}
            {{Form::select('category'.'', ['breakfast' => 'Breakfast', 'lunch' => 'Lunch', 'dinner' => 'Dinner', 'drink' => 'Drink','special' => 'Special'])}}
        </div>
        <div class="form-group">
            {{Form::label('ingredient','Ingredient')}}
            {{Form::text('ingredient','',['class' =>'form-control','placeholder'=>'Ingredient 1 / Ingredient 2 ...'])}}
        </div>
        <div class="form-group">
            {{Form::file('image')}}
        </div>
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    </div>

@endsection