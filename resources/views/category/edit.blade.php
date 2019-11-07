@extends('template')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Edit Category</title>
</head>
<body>
	<div class="container">
		<h3 class="text-primary my-3">Edit Category</h3>
		@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
		@endif
		<form method="post" action="{{route('category.update',$categoryid->id)}}">
			@csrf
			@method('PUT')
			<div class="form-group">
				<label>Name:</label>
				<input type="text" name="name" class="form-control" value="
				{{$categoryid->name}}">
			</div>
			<div class="my-3">
				<input type="submit" name="submit" value="Update" class="btn-primary">
			</div>
		</form>
	</div>
</body>
</html>
@endsection