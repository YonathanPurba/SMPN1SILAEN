@extends('layouts.backend.app',[
	'title' => 'Edit Ekstrakurikuler',
	'contentTitle' => 'Edit Ekstrakurikuler',
])
@section('content')
<div class="row">
	<div class="col">
		<div class="card">
			<div class="card-header">
				<a href="{{ route('admin.ekstrakurikuler.index') }}" class="btn btn-success btn-sm">Kembali</a>
			</div>
			<div class="card-body">
				<form method="POST" action="{{ route('admin.ekstrakurikuler.edit.update',$ekstrakurikuler->id_ekstrakurikuler) }}" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<div class="form-group">
						<label for="name">Nama Ekstrakurikuler</label>
						<input required="" class="form-control" type="" name="judul_ekstrakurikuler" id="name" placeholder="" value="{{ $ekstrakurikuler->judul_ekstrakurikuler }}">
					</div>
					<div class="form-group">
						<label for="deskripsi_ekstrakurikuler">Deskripsi</label>
						<textarea required="" name="deskripsi_ekstrakurikuler" id="deskripsi_ekstrakurikuler" class="text-dark form-control summernote" value="{{ $ekstrakurikuler->deskripsi_ekstrakurikuler }}"></textarea>
					</div>
					<div class="col-lg-6">
                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" name="gambar_ekstrakurikuler" class="dropify form-control" data-height="190" data-allowed-file-extensions="png jpg gif jpeg svg webp jfif" required>
                        </div>
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