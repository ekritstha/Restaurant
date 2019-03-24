@extends('layouts.app')
@section('content')
    <div class="container">
	<h1>Add Testimonial</h1>
    {!! Form::open(['action' => 'AdminController@store','method'=>'POST', 'enctype'=> 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title','Title')}}
            {{Form::text('title','',['class' =>'form-control','placeholder'=>'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('desciption','Description')}}
            {{Form::textarea('description','',['id'=>'article-ckeditor' ,'class' =>'form-control' ,'placeholder'=> 'Description'])}}
        </div>
        <div class="form-group">
            {{Form::label('cname','Name of Customer')}}
            {{Form::text('cname','',['class' =>'form-control','placeholder'=>'Name of the Customer'])}}
        </div>
        <div class="form-group">
            {{Form::label('souce','Source')}}
            {{Form::text('source','',['class' =>'form-control','placeholder'=>'Source taken from'])}}
        </div>
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
	</div>

@endsection