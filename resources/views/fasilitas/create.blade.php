@extends('layouts.backend.app',[
	'title' => 'Tambah Fasilitas',
	'contentTitle' => 'Tambah Fasilitas',
])
@section('content')
<div class="row">
	<div class="col">
		<div class="card">
			<div class="card-header">
				<a href="{{ route('fasilitas.index') }}" class="btn btn-success btn-sm">Kembali</a>
			</div>
			<div class="card-body">
				<form method="POST" action="{{ route('fasilitas.store') }}" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label for="name">Nama Fasilitas
						<input required="" class="form-control" type="" name="nama_fasilitas" id="nama_fasilitas" placeholder="">
					</div>
					<div class="form-group">
						<label for="jabatan">Deskripsi</label>
						<textarea required="" name="deskripsi_fasilitas" id="deskripsi_fasilitas" class="text-dark form-control summernote"></textarea>
					</div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" name="gambar_fasilitas" class="dropify form-control" data-height="190" data-allowed-file-extensions="png jpg gif jpeg svg webp jfif" required>
                        </div>
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