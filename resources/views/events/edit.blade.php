@extends('layouts.app')
@section('content')

    <div class="container">
        <h1>Edit Event</h1>
    {!! Form::open(['action' => ['EventController@update',$event->id],'method'=>'GET', 'enctype'=> 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('event_title','Title of the Event')}}
            {{Form::text('event_title',$event->event_title,['class' =>'form-control','placeholder'=>'Title of Event'])}}
        </div>
        <div class="form-group">
            {{Form::label('event-details','Event Details')}}
            {{Form::textarea('event_details',$event -> event_details ,['id'=>'article-ckeditor' ,'class' =>'form-control' ,'placeholder'=> 'Details about Event'])}}
        </div>
        <div class="form-group">
            {{Form::label('location','Location')}}
            {{Form::text('location',$event->location,['class' =>'form-control','placeholder'=>'Location'])}}
        </div>
        <div class="form-group">
            {{Form::label('date','Date')}}
            {{Form::date('date', $event -> date ,['class' =>'form-control','placeholder'=>'Date'])}}
        </div>
        <div class="form-group">
            {{Form::label('time','Time of the Event')}}
            {{Form::text('time', $event-> time,['class' =>'form-control','placeholder'=>'00:00am - 00:00am'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    </div>

@endsection