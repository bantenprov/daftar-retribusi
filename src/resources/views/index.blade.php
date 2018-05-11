@extends('layout.master')
 
@section('content')
   @if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
  @endif
  <table class="table" border="1">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Created At</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($daftar_retribusies as $daftar_retribusi)
      <tr>
        <th scope="row">{{$daftar_retribusi->id}}</th>
        <td>
          <a href="{{route('daftar-retribusi.show',$daftar_retribusi->id)}}">{{$daftar_retribusi->title}}</a>
        </td>
        <td>{{$daftar_retribusi->description}}</td>
        <td>{{$daftar_retribusi->created_at->toFormattedDateString()}}</td>
        <td>
          <div class="btn-group" role="group" aria-label="Basic example">
            <a href="{{ route('daftar-retribusi.edit',$daftar_retribusi->id) }}">
              <button type="button" class="btn btn-warning">Edit</button>
            </a>&nbsp;
            <form action="{{route('daftar-retribusi.destroy',$daftar_retribusi->id)}}" method="POST">
              <input type="hidden" name="_method" value="DELETE">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="submit" class="btn btn-danger" value="Delete" />
            </form>
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection