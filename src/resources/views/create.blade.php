
@extends('master')
@section('content')

<div class="container-fluid">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-lg-12">
      <h1>Add New Daftar Retribusi</h1>
        <hr>
        <div class="card">
          <div class="card-header">
            Input <strong>Sizes</strong>
          </div>
          <div class="card-body">
           <form action="{{route('daftar-retribusi.store')}}" method="post">
             {{ csrf_field() }}
             <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" id="daftarRetribusiTitle"  name="title">
            </div>
            <div class="form-group">
              <label for="description">Description</label>
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
        </div>
      </div>
    </div>
  </div>
</div>
</div>

@endsection
