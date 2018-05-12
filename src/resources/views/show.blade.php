@extends('master')
@section('content')
<div class="jumbotron text-center">
  <h1>{{ $daftar_retribusi->title }}</h1>
</div>

<div class="card">
  <div class="card-body">
    <h5 class="card-title"><h2>{{ $daftar_retribusi->title }}</h2></h5>
    <h6 class="card-subtitle mb-2 text-muted">Created : {{ $daftar_retribusi->created_at }}</h6>
    <hr />
    <p class="card-text">{{ $daftar_retribusi->description }}.</p>
    <a href="#" class="card-link">Add</a>
	<a href="{{ route('daftar-retribusi.edit',$daftar_retribusi->id) }}">
	  <button type="button" class="btn btn-warning">Edit</button>
	</a>&nbsp;
  </div>
</div>

@endsection
