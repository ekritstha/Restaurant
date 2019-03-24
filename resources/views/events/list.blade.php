@extends('layouts.app')
@section('content')
<div class="container">

        <div class="col-md-12">
           <div class="row">
          <div class="col-md-3">
            </br>
             <a href="/addEvent"><button class="btn btn-primary">+ Add Event</button></a> 
          </div>
        </div>
      </br>
        <div class="row"> 
          <table class="table table-bordered display" id="myTable">
    <thead>
      <tr>
        <th>S.N</th>
        <th>Title</th>
        <th>Details</th>
        <th>Location</th>
        <th>Date</th>
        <th>Time</th>
        <th>Image</th>
        <th>Edit/Delete</th>
      </tr>
    </thead>
    <tbody>
    @if(count($event) > 0)
      @foreach($event->all() as $event)

      <tr>
        <td>{{ $event->id}}</td>
        <td>{{ $event->event_title}}</td>
        <td>{{ $event->event_details}}</td>
        <td>{{ $event->location}}</td>
        <td>{{ $event->date}}</td>
        <td>{{ $event->time}}</td>
        <td><img src="images/gallery/{{ $event->image}}" height="80px" width="80px" /></td>
        <td>
          <ul>
            <a href="/editEvent/{{$event->id}}" class="btn btn-default">Edit</a>

            {!!Form::open(['action' => ['EventController@destroy', $event->id], 'method' => 'GET', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
          </ul>
        </td>  
      
      </tr>
      @endforeach
    @endif 
    </tbody>
  </table>
</div>
@endsection