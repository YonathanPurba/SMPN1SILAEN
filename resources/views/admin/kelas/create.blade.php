@extends('layouts.backend.app',[
	'title' => 'Tambah Kelas',
	'contentTitle' => 'Tambah Kelas',
])
@section('content')
<div class="row">
	<div class="col">
		<div class="card">
			<div class="card-header">
				<a href="{{ route('admin.kelas.index') }}" class="btn btn-success btn-sm">Kembali</a>
			</div>
			<div class="card-body">
				<form method="POST" action="{{ route('admin.kelas.store') }}" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label for="nama_kelas">Nama Kelas</label>
						<input required="" class="form-control" type="" name="nama_kelas" id="nama_kelas" placeholder="">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-sm">SIMPAN</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@stop