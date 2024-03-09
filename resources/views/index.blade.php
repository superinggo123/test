<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

	<div class="container">
		<div class="row">
			<h2>Dashboard</h2>

			@if(Session::has('success'))
				<div class="alert alert-danger" type="alert">
					{{Session::get('success')}}
				</div>
			@endif

			<div class="md-3">
		
				<div>
					<a href="create">Add Test</a>
				</div>
			<table class="table">
				<thead>
				<tr>
					<td>#</td>
					<td>Name</td>
					<td>Last Name</td>	
					<td>Action</td>
				</tr>
				</thead>
			</div>	
				@php
					$i =1;
				@endphp	
			<div class="md-3">	
				<tbody>
				@foreach($data as $test)					
					<tr>
					<td>{{$i++}}</td>
					<td>{{$test->name}}</td>
					<td>{{$test->lastname}}</td>
					<td><a href="{{url('edit/'.$test->id)}}" class="btn btn-primary">Edit</a>|<a class="btn btn-danger" href="{{url('delete/'.$test->id)}}">Delete</a></td>
				</tr>
				@endforeach
				</tbody>
			</table>
			</div>	
			</div>	
		</div>
		
	</div>

</body>
</html>