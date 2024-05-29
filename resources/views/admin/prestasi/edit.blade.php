@extends('layouts.backend.app',[
	'title' => 'Edit Tenaga Pengajar',
	'contentTitle' => 'Edit Tenaga Pengajar',
])
@section('content')
<div class="row">
	<div class="col">
		<div class="card">
			<div class="card-header">
				{{-- <a href="{{ route('admin.prestasi.index') }}" class="btn btn-success btn-sm">Kembali</a> --}}
			</div>
			<div class="card-body">
				<form method="POST" action="{{ route('admin.prestasi.edit.update',$prestasi->id_prestasi) }}" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<div class="form-group">
						<label for="name">Judul</label>
						<input required="" class="form-control" type="" name="judul_prestasi" id="name" placeholder="" value="{{ $prestasi->judul_prestasi }}">
					</div>
					<div class="form-group">
						<label for="jabatan">Deskripsi</label>
						<input required="" class="form-control" type="" name="deskripsi_prestasi" id="email" placeholder="" value="{{ $prestasi->jabatan }}">
					</div>
					<div class="form-group">
						<label for="nip">Tanggal</label>
						<input required="" class="form-control" type="date" name="tanggal_prestasi" id="nip" placeholder="" value="{{ $prestasi->tanggal_prestasi }}">
					</div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" name="gambar_prestasi" class="dropify form-control" data-height="190" data-allowed-file-extensions="png jpg gif jpeg svg webp jfif" value="{{ $prestasi->gambar_prestasi }}">
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