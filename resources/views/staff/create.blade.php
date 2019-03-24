@extends('layouts.app')
@section('content')
    <div class="container">
	<h1>Add Staff</h1>
    {!! Form::open(['action' => 'StaffController@store','method'=>'POST', 'enctype'=> 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('name','Name')}}
            {{Form::text('name','',['class' =>'form-control','placeholder'=>'Name of the Staff'])}}
        </div>
        <div class="form-group">
            {{Form::label('designation','Designation')}}
            {{Form::text('designation','',['class' =>'form-control','placeholder'=>'Designation of the Staff'])}}
        </div>
        <div class="form-group">
            {{Form::file('image')}}
        </div>
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
	</div>

@endsection