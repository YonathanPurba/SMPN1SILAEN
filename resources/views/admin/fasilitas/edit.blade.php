@extends('layouts.backend.app',[
	'title' => 'Edit Tenaga Pengajar',
	'contentTitle' => 'Edit Fasilitas',
])
@section('content')
<div class="row">
	<div class="col">
		<div class="card">
			<div class="card-header">
				<a href="{{ route('admin.fasilitas.index') }}" class="btn btn-success btn-sm">Kembali</a>
			</div>
			<div class="card-body">
				<form method="POST" action="{{ route('admin.fasilitas.edit.update',$fasilitas->id_fasilitas) }}" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<div class="form-group">
						<label for="name">Nama Fasilitas</label>
						<input required="" class="form-control" type="" name="nama_fasilitas" id="name" placeholder="" value="{{ $fasilitas->nama_fasilitas }}">
					</div>
					<div class="form-group">
                        <label for="deskripsi_fasilitas">Deskripsi</label>
                        <textarea required="" name="deskripsi_fasilitas" id="deskripsi_fasilitas" class="text-dark form-control summernote">{{ $fasilitas->deskripsi_fasilitas }}</textarea>
                    </div>
					<div class="col-lg-6">
                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" name="gambar_fasilitas" class="dropify form-control" data-height="190" data-allowed-file-extensions="png jpg gif jpeg svg webp jfif" required>
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