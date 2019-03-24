@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="/home" class="btn btn-default">Go Back</a>
    <a href="{{url('event.create')}}" class="btn btn-default">Add an Event/a>
    <h1>{{$event->event_title}}</h1>
    <img style="width:100%" src="/public/images/gallery/{{$event->image}}">
    <br><br>
    <div class="row">
        <div class="col-md-2">
            <label>Event Details:</label>
        </div>
        <div class="col-md-4">
            {!!$event->event_details!!}
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <label>Date:</label>
        </div>
        <div class="col-md-4">
            {!!$event->date!!}
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <label>Time:</label>
        </div>
        <div class="col-md-4">
            {!!$event->time!!}
        </div>
    </div>
    <hr>
    
            <a href="/event/{{$event->id}}/edit" class="btn btn-default">Edit</a>

            {!!Form::open(['action' => ['EventController@destroy', $event->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
    </div>
        
@endsection