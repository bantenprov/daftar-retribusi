@extends('layout.master') 

@section('content')
	<h1>Edit</h1>
	<hr>
	<form action="{{route('daftar-retribusi.update', $daftar_retribusi->id)}}" method="POST">
		<input type="hidden" name="_method" value="PUT"> {{ csrf_field() }}
		<div class="form-group">
			<label for="title">Title</label>
			<input type="text" value="{{$daftar_retribusi->title}}" class="form-control" id="taskTitle" name="title">
		</div>
		<div class="form-group">
			<label for="description">Description</label>
			<input type="text" value="{{$daftar_retribusi->description}}" class="form-control" id="taskDescription" name="description">
		</div>
		@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif
		<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection