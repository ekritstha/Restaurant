@extends('layouts.app')
@section('content')
<div class="container">

        <div class="col-md-12">
           <div class="row">
          <div class="col-md-3">
            </br>
             <a href="/addSlide"><button class="btn btn-primary">+ Add Slider</button></a> 
          </div>
        </div>
      </br>
        <div class="row"> 
          <table class="table table-bordered display" id="myTable">
    <thead>
      <tr>
        <th>S.N</th>
        <th>Title</th>
        <th>Description</th>
        <th>Image</th>
        <th>Order</th>
        <th>Edit/Delete</th>
      </tr>
    </thead>
    <tbody>
    @if(count($slide) > 0)
      @foreach($slide->all() as $slide)

      <tr>
        <td>{{ $slide->id}}</td>
        <td>{{ $slide->title}}</td>
        <td>{{ $slide->description}}</td>
        <td><img src="images/gallery/{{ $slide->image}}" height="80px" width="80px" /></td>
        <td>{{ $slide->order}}</td>
        <td>
          <ul>
            <a href="/editSlide/{{$slide->id}}" class="btn btn-default">Edit</a>

            {!!Form::open(['action' => ['AdminController@sdestroy', $slide->id], 'method' => 'GET', 'class' => 'pull-right'])!!}
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