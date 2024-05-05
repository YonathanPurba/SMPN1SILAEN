@extends('layouts.backend.app',[
	'title' => 'Edit Tenaga Pengajar',
	'contentTitle' => 'Edit Tenaga Pengajar',
])
@section('content')
<div class="row">
	<div class="col">
		<div class="card">
			<div class="card-header">
				<a href="{{ route('admin.tenagapengajar.index') }}" class="btn btn-success btn-sm">Kembali</a>
			</div>
			<div class="card-body">
				<form method="POST" action="{{ route('admin.tenagapengajar.edit',$user->id) }}">
					@csrf
					@method('PATCH')
					<div class="form-group">
						<label for="name">Nama Pengajar</label>
						<input required="" class="form-control" type="" name="nama_tenagapengajar" id="name" placeholder="">
					</div>
					<div class="form-group">
						<label for="jabatan">Jabatan</label>
						<input required="" class="form-control" type="" name="jabatan" id="email" placeholder="">
					</div>
					<div class="form-group">
						<label for="nip">NIP</label>
						<input required="" class="form-control" type="" name="nip" id="nip" placeholder="">
					</div>
                    <div class="form-group">
						<label for="alamat">Alamat</label>
						<input required="" class="form-control" type="" name="alamat" id="alamat" placeholder="">
					</div>
                    <div class="form-group">
						<label for="notelepon">No Telepon</label>
						<input required="" class="form-control" type="" name="notelepon" id="notelepon" placeholder="">
					</div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" name="gambar_tenagapengajar" class="dropify form-control" data-height="190" data-allowed-file-extensions="png jpg gif jpeg svg webp jfif" required>
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