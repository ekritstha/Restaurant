@extends('layouts.app')
@section('content')
    <div class="container">
	<h1>Edit Staff</h1>
    {!! Form::open(['action' => ['StaffController@update',$staff->id],'method'=>'GET', 'enctype'=> 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('name','Name')}}
            {{Form::text('name',$staff->name,['class' =>'form-control','placeholder'=>'Name of the Staff'])}}
        </div>
        <div class="form-group">
            {{Form::label('designation','Designation')}}
            {{Form::text('designation',$staff->designation,['class'=>'form-control','placeholder'=>'Designation of the Staff'])}}
        </div>
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
	</div>

@endsection