@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-left">
        <div class="col-md-12">
           <div class="row">
          <div class="col-md-3">
            </br>
             <a href="/addGallery"><button class="btn btn-primary">+ Add in Gallery</button></a> 
          </div>
        </div>
      </br>
        <div class="row"> 
          <table class="table table-bordered display" id="myTable">
    <thead>
      <tr>
        <th>S.N</th>
        <th>Image</th>
        <th>Category</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
    @if(count($gallery) > 0)
      @foreach($gallery->all() as $gallery)

      <tr>
        <td>{{ $gallery->id}}</td>
        <td><img src="images/gallery/{{ $gallery->image}}" height="80px" width="80px" /></td>
        <td>{{ $gallery->name}}</td>
        
        <td>
          <ul>

            {!!Form::open(['action' => ['galleryController@destroy', $gallery->id], 'method' => 'GET', 'class' => 'pull-right'])!!}
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