@extends('layouts.backend.app',[
	'title' => 'Tambah Jumlah Siswa',
	'contentTitle' => 'Tambah Jumlah Siswa',
])
@section('content')
<div class="row">
	<div class="col">
		<div class="card">
			<div class="card-header">
				<a href="{{ route('admin.jumlah_siswa.index') }}" class="btn btn-success btn-sm">Kembali</a>
			</div>
			<div class="card-body">
				<form method="POST" action="{{ route('admin.jumlah_siswa.store') }}" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
                        <label for="kelasSelect">Nama Kelas</label>
                        <select class="form-control" id="kelasSelect" name="id_kelas">
                          @foreach($kelas as $kelasis)
                          <option value={{ $kelasis->id_kelas }}>{{$kelasis->nama_kelas}}</option>
                          @endforeach
                        </select>
                    </div>
                    <div class="form-group">
						<label for="jumlah_siswa_laki_laki">Jumlah Siswa Laki-Laki</label>
						<input required="" class="form-control" type="" name="jumlah_siswa_laki_laki" id="jumlah_siswa_laki_laki" placeholder="">
					</div>
                    <div class="form-group">
						<label for="jumlah_siswa_perempuan">Jumlah Siswa Perempuan</label>
						<input required="" class="form-control" type="" name="jumlah_siswa_perempuan" id="jumlah_siswa_perempuan" placeholder="">
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