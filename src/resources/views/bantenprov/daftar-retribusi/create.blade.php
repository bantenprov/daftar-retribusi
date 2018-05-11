@extends('layout.master')
 
@section('content')
    <h1>Add New Daftar Retribusi</h1>
    <hr>
     <form action="{{route('daftar-retribusi.store')}}" method="post">
     {{ csrf_field() }}
      <div class="form-group">
        <label for="title">Daftar retribusi Title</label>
        <input type="text" class="form-control" id="daftarRetribusiTitle"  name="title">
      </div>
      <div class="form-group">
        <label for="description">Daftar retribusi Description</label>
        <input type="text" class="form-control" id="daftarRetribusiDescription" name="description">
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