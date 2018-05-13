@extends('master')
@section('content')
<div class="jumbotron text-center">
  <h1>{{ $daftar_retribusi->nama }}</h1>
</div>

<div class="card">
  <div class="card-body">
    <h5 class="card-title"><h2>{{ $daftar_retribusi->nama }}</h2></h5>
    <h6 class="card-subtitle mb-2 text-muted">Created : {{ $daftar_retribusi->created_at }}</h6>
    <hr />
    {{-- <p class="card-text">{{ $daftar_retribusi->description }}.</p> --}}
    
    <a href="{{ route('daftar-retribusi.create') }}">
      <button type="button" class="btn btn-success">Add New</button>
    </a>
    <a href="{{ route('daftar-retribusi.edit',$daftar_retribusi->id) }}">
      <button type="button" class="btn btn-warning">Edit</button>
    </a>
  </div>
  <div class="card-footer">
    <span class="pull-left">Created by : {{ $daftar_retribusi->getUserCreated->name }}</span>
    <span class="pull-right">Updated by : {{ $daftar_retribusi->getUserUpdated->name }}</span>
  </div>
</div>

@endsection
