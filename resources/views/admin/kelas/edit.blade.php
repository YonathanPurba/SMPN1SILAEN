@extends('layouts.backend.app',[
	'title' => 'Edit Kelas',
	'contentTitle' => 'Edit Kelas',
])
@section('content')
<div class="row">
	<div class="col">
		<div class="card">
			<div class="card-header">
				<a href="{{ route('admin.kelas.index') }}" class="btn btn-success btn-sm">Kembali</a>
			</div>
			<div class="card-body">
				<form method="POST" action="{{ route('admin.kelas.edit.update',$kelas->id_kelas) }}" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<div class="form-group">
						<label for="name">Nama Kelas</label>
						<input required="" class="form-control" type="" name="nama_kelas" id="name" placeholder="" value="{{ $kelas->nama_kelas }}">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-sm">UPDATE</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@stop