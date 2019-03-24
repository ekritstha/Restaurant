@extends('layouts.app')
@section('content')
<div class="container">
	<div class="col-md-12">
        <div class="row">
          	<div class="col-md-3">
            </br>
            	<a href="/addTest"><button class="btn btn-primary">+ Add Testimonial</button></a> 
          	</div>
        </div>
    </br>
   	<table class="table table-bordered display" id="myTable">
    	<thead>
      		<tr>
        		<th>S.N</th>
        		<th>Title</th>
        		<th>Description</th>
        		<th>Name of Customer</th>
       		 	<th>Source</th>
        		<th>Edit/Delete</th>
      		</tr>
    	</thead>
    	<tbody>
    		@if(count($test) > 0)
     			@foreach($test->all() as $test)
	     			<tr>
	        			<td>{{ $test->id}}</td>
	        			<td>{{ $test->title}}</td>
	       				<td>{{ $test->description}}</td>
	        			<td>{{ $test->cname}}</td>
	        			<td>{{ $test->source}}</td>
	        			<td>
	          				<ul>
	            				<a href="/editTest/{{$test->id}}" class="btn btn-default">Edit</a>
								{!!Form::open(['action' => ['AdminController@destroy', $test->id], 'method' => 'GET', 'class' => 'pull-right'])!!}
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