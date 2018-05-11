@extends('layout.master')

@section('content')
    <h1>Showing {{ $daftar_retribusi->title }}</h1>
    <div class="jumbotron text-center">
			<p>
				<strong>Title:</strong> {{ $daftar_retribusi->title }}<br>
				<strong>Description:</strong> {{ $daftar_retribusi->description }}
			</p>
    </div>
@endsection