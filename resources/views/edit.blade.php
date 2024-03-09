<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Test</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">

					@if(Session::has('success'))		
						<div class="alert alert-success" type="alert">
							{{Session::get('success')}}
						</div>
					@endif
					<h1>Update Test
						<a href="{{url('index')}}" class="btn btn-primary float-end">Back</a>
					</h1>
				</div>
				<div class="card-body">
<!-- 					<div>
						<a href="create">Add Test</a>
					</div>
 -->					<form action="{{url('update')}}" method="POST">

					<input type="hidden" name="id" value="{{$data->id}}">

 						@csrf
						<div class="mb-3">
							<label>Name</label>
							<input type="text" name="name" class="form-control" placeholder="Enter Name" value="{{$data->name}}">
							@error('name')
							<div class="alert alert-danger" type="alert">
								{{$message}}
							</div>
							@enderror

						</div>
						<div class="mb-3">
							<label>Last Name</label>
							<input type="text" name="lastname" class="form-control" placeholder="Enter Last Name" value="{{$data->lastname}}">
							@error('lastname')
								<div class="alert alert-danger" type="alert">
									{{$message}}
									
								</div>
									
							@enderror
						</div>
						<div class="mb-3">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>

					</form>
				</div>
				
			</div>
		</div>
		
	</div>
</div>


	
</form>

</body>
</html> 	