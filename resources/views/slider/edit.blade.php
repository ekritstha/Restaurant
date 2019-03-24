@extends('layouts.app')
@section('content')

    <div class="container">
        <h1>Edit Event</h1>
    {!! Form::open(['action' => ['AdminController@supdate',$slide->id],'method'=>'GET', 'enctype'=> 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title','Title')}}
            {{Form::text('title',$slide->title,['class' =>'form-control','placeholder'=>'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('description','Description')}}
            {{Form::text('description',$slide->description, ['class' =>'form-control' ,'placeholder' => 'Description ' ])}}
        </div>
        <div class="form-group">
            {{Form::label('order','Order')}}
            {{Form::text('order',$slide->order,['class' =>'form-control','placeholder'=>'Order'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    </div>

@endsection