@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-left">
        <div class="col-md-12">
           <div class="row">
          <div class="col-md-3">
            </br>
             <a href="/addMenu"><button class="btn btn-primary">+ Add Menu</button></a> 
          </div>
        </div>
      </br>
        <div class="row"> 
          <table class="table table-bordered display" id="myTable">
    <thead>
      <tr>
        <th>S.N</th>
        <th>Name</th>
        <th>Ingredients</th>
        <th>Category</th>
        <th>Image</th>
        <th>Edit/Delete</th>
      </tr>
    </thead>
    <tbody>
    @if(count($menu) > 0)
      @foreach($menu->all() as $menu)

      <tr>
        <td>{{ $menu->id}}</td>
        <td>{{ $menu->name}}</td>
        {{-- <td>{{ $menu->price}}</td> --}}
        <td>{{ $menu->ingredient}}</td>
        <td>{{ $menu->category}}</td>
        <td><img src="images/gallery/{{ $menu->image}}" height="80px" width="80px" /></td>
        <td>
          <ul>
                <a href="/editMenu/{{$menu->id}}" class="btn btn-default">Edit</a>
                {!!Form::open(['action' => ['AddMenuController@destroy', $menu->id], 'method' => 'GET', 'class' => 'pull-right'])!!}
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
       </div>
    </div>
        </div>
    </div>
</div>
@endsection