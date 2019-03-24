@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="/home" class="btn btn-default">Go Back</a>
    <a href="{{url('staff.create')}}" class="btn btn-default">Add a Staff</a>
    <h1>{{$staff->name}}</h1>
    <img style="width:100%" src="/public/images/gallery/{{$staff->image}}">
    <br><br>
    <div class="row">
        <div class="col-md-2">
            <label>Designation:</label>
        </div>
        <div class="col-md-4">
            {!!$staff->designation!!}
        </div>
    </div>
    <hr>
    
            <a href="/staff/{{$staff->id}}/edit" class="btn btn-default">Edit</a>

            {!!Form::open(['action' => ['StaffController@destroy', $staff->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
    </div>
        
@endsection