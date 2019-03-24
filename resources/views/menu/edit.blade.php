@extends('layouts.app')
@section('content')

	<div class="container">
        <h1>Edit Menu</h1>
    {!! Form::open(['action' => ['AddMenuController@update',$menu->id], 'method'=>'GET', 'enctype'=> 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('name','Name')}}
            {{Form::text('name',$menu->name,['class' =>'form-control','placeholder'=>'Name'])}}
        </div>
        {{-- <div class="form-group">
            {{Form::label('price','Price')}}
            {{Form::text('price',$menu->price,['class' =>'form-control','placeholder'=>'Price'])}}
        </div> --}}
        <div class="form-group">
            {{Form::label('category','Category: ')}}
            {{Form::select('category', ['breakfast' => 'Breakfast', 'lunch' => 'Lunch', 'dinner' => 'Dinner', 'drink' => 'Drink','special' => 'Special'])}}
        </div>
        <div class="form-group">
            {{Form::label('ingredient','Ingredient')}}
            {{Form::text('ingredient',$menu->ingredient,['class'=>'form-control','placeholder'=>'Ingredient 1 / Ingredient 2 ...'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    </div>

@endsection