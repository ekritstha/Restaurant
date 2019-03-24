@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="/home" class="btn btn-default">Go Back</a>
    <a href="{{url('menu.create')}}" class="btn btn-default">Add a Menu</a>
    <h1>{{$menu->name}}</h1>
    <img style="width:100%" src="/public/images/gallery/{{$menu->image}}">
    <br><br>
    {{-- <div class="row">
        <div class="col-md-2">
            <label>Price:</label>
        </div>
        <div class="col-md-4">
            {!!$menu->price!!}
        </div>
    </div> --}}
    <div class="row">
        <div class="col-md-2">
            <label>Category:</label>
        </div>
        <div class="col-md-4">
            {!!$menu->category!!}
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <label>Ingredients:</label>
        </div>
        <div class="col-md-4">
            {!!$menu->ingredient!!}
        </div>
    </div>
    <hr>
    
            <a href="/menu/{{$menu->id}}/edit" class="btn btn-default">Edit</a>

            {!!Form::open(['action' => ['AddMenuController@destroy', $menu->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
    </div>
        
@endsection