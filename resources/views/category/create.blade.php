
@extends('template')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-8">
			<h1 class="mt-4">Category Title</h1>
			@if($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
					<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
			@endif
			<form method="post" action="{{route('category.store')}}" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<label>Name:</label>
					<input type="text" name="name" class="form-control">
				</div>
				<div class="form-group">
					<input type="submit" name="btn btn-primary" value="save">
				</div>
		</div>
	</div>
</div>
</form>
@endsection