@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-left">
        <div class="col-md-12">
           <div class="row">
          <div class="col-md-3">
            </br>
             <a href="/addStaff"><button class="btn btn-primary">+ Add Staff</button></a> 
          </div>
        </div>
      </br>
        <div class="row"> 
          <table class="table table-bordered display" id="myTable">
    <thead>
      <tr>
        <th>S.N</th>
        <th>Name</th>
        <th>Designation</th>
        <th>Image</th>
        <th>Edit/Delete</th>
      </tr>
    </thead>
    <tbody>
    @if(count($staff) > 0)
      @foreach($staff->all() as $staff)

      <tr>
        <td>{{ $staff->id}}</td>
        <td>{{ $staff->name}}</td>
        <td>{{ $staff->designation}}</td>
        <td><img src="images/gallery/{{ $staff->image}}" height="80px" width="80px" /></td>
        <td>
          <ul>
                <a href="/editStaff/{{$staff->id}}" class="btn btn-default">Edit</a>

            {!!Form::open(['action' => ['StaffController@destroy', $staff->id], 'method' => 'GET', 'class' => 'pull-right'])!!}
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