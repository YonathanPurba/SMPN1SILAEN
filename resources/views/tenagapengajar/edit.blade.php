@extends('layouts.backend.app',[
	'title' => 'Edit Tenaga Pengajar',
	'contentTitle' => 'Edit Tenaga Pengajar',
])
@section('content')
<div class="row">
	<div class="col">
		<div class="card">
			<div class="card-header">
				<a href="{{ route('tenagapengajar.index') }}" class="btn btn-success btn-sm">Kembali</a>
			</div>
			<div class="card-body">
				<form method="POST" action="{{ route('tenagapengajar.edit.edit',$pengajar->id_tenagapengajar) }}" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<div class="form-group">
						<label for="name">Nama Pengajar</label>
						<input required="" class="form-control" type="" name="nama_tenagapengajar" id="name" placeholder="" value="{{ $pengajar->nama_tenagapengajar }}">
					</div>
					<div class="form-group">
						<label for="jabatan">Jabatan</label>
						<input required="" class="form-control" type="" name="jabatan" id="email" placeholder="" value="{{ $pengajar->jabatan }}">
					</div>
					<div class="form-group">
						<label for="nip">NIP</label>
						<input required="" class="form-control" type="" name="nip" id="nip" placeholder="" value="{{ $pengajar->nip }}">
					</div>
                    <div class="form-group">
						<label for="alamat">Alamat</label>
						<input required="" class="form-control" type="" name="alamat" id="alamat" placeholder="" value="{{ $pengajar->alamat }}">
					</div>
                    <div class="form-group">
						<label for="notelepon">No Telepon</label>
						<input required="" class="form-control" type="" name="notelepon" id="notelepon" placeholder="" value="{{ $pengajar->notelepon }}">
					</div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" name="gambar_tenagapengajar" class="dropify form-control" data-height="190" data-allowed-file-extensions="png jpg gif jpeg svg webp jfif" value="{{ $pengajar->gambar_tenagapengajar }}">
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