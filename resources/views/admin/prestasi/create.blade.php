@extends('layouts.backend.app',[
	'title' => 'Tambah Prestasi',
	'contentTitle' => 'Tambah Prestasi',
])
@section('content')
<div class="row">
	<div class="col">
		<div class="card">
			<div class="card-header">
				<a href="{{ route('admin.prestasi.index') }}" class="btn btn-success btn-sm">Kembali</a>
			</div>
			<div class="card-body">
				<form method="POST" action="{{ route('admin.prestasi.store') }}" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label for="nama_fasilitas">Judul</label>
						<input required="" class="form-control" type="" name="judul_prestasi" id="judul_prestasi" placeholder="">
					</div>
					<div class="form-group">
						<label for="deskripsi_fasilitas">Deskripsi</label>
						<textarea required="" name="deskripsi_prestasi" id="deskripsi_prestasi" class="text-dark form-control summernote"></textarea>
					</div>
                    <div class="form-group">
						<label for="d">Tanggal</label>
						<input required="" class="form-control" type="date" name="tanggal_prestasi" id="tanggal_prestasi" placeholder="">
					</div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" name="gambar_prestasi" class="dropify form-control" data-height="190" data-allowed-file-extensions="png jpg gif jpeg svg webp jfif" required>
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