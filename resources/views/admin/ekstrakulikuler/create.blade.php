@extends('layouts.backend.app',[
	'title' => 'Tambah Ekstrakulikuler',
	'contentTitle' => 'Tambah Ekstrakulikuler',
])
@section('content')
<div class="row">
	<div class="col">
		<div class="card">
			<div class="card-header">
				<a href="{{ route('admin.ekstrakulikuler.index') }}" class="btn btn-success btn-sm">Kembali</a>
			</div>
			<div class="card-body">
				<form method="POST" action="{{ route('admin.ekstrakulikuler.store') }}" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label for="judul_ekstrakulikuler">Nama Ekstrakulikuler</label>
						<input required="" class="form-control" type="" name="judul_ekstrakulikuler" id="judul_ekstrakulikuler" placeholder="">
					</div>
					<div class="form-group">
						<label for="deskripsi_ekstrakulikuler">Deskripsi</label>
						<textarea required="" name="deskripsi_ekstrakulikuler" id="deskripsi_ekstrakulikuler" class="text-dark form-control summernote"></textarea>
					</div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" name="gambar_ekstrakulikuler" class="dropify form-control" data-height="190" data-allowed-file-extensions="png jpg gif jpeg svg webp jfif" required>
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