@extends('master') 

@section('content')

<div class="container-fluid">
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-lg-12">
				<h1>Edit Daftar Retribusi</h1>
				<hr>
				<div class="card">
					<div class="card-header">
						Input <strong>Sizes</strong>
					</div>
					<div class="card-body">
						<form action="{{route('daftar-retribusi.update', $daftar_retribusi->id)}}" method="POST">
							<input type="hidden" name="_method" value="PUT"> {{ csrf_field() }}
							<div class="form-group">
								<label for="nama">Nama</label>
								<input type="text" value="{{$daftar_retribusi->nama}}" class="form-control" id="taskNama" name="nama">
							</div>
              <div class="form-group">
                <label for="opd_id">Unit Kerja {{ $daftar_retribusi->getOpd->name }}</label>
                <select id="opd_id" name="opd_id" class="form-control form-control">
                  <option value="">Please select</option>
                  @foreach ($opds as $opd)
                    <option value="{{$opd->id}}" {{ ($opd->id ==  $daftar_retribusi->opd_id) ? 'selected' : '' }}>{{$opd->name}}</option>    
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
