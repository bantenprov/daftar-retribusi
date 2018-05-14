
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
            <strong>Daftar Retribusi</strong>
          </div>
          <div class="card-body">
           <form action="{{route('daftar-retribusi.store')}}" method="post">
             {{ csrf_field() }}
             <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="daftarRetribusiNama"  name="nama">
            </div>            
            <div class="form-group">
              <label for="opd_id">Unit Kerja</label>
              <select id="opd_id" name="opd_id" class="form-control form-control">
                <option value="">Please select</option>
                @foreach ($opds as $opd)
                  <option value="{{$opd->id}}">{{$opd->name}}</option>    
                @endforeach                                   
              </select>
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
