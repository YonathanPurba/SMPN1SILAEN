@extends('layouts.backend.app',[
	'title' => 'Manage Users',
	'contentTitle' => 'Manage Users',
])
@push('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
@endpush
@section('content')
<x-alert></x-alert>
<div class="row">
	<div class="col">
		<div class="card">
			<div class="card-header">
				<a href="{{ route('tenagapengajar.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>

			</div>
			<div class="card-body table-responsive">
				<table id="dataTable1" class="table table-bordered table-hover">
				<thead>
				<tr>
				  <th>No</th>
				  <th>Nama</th>
				  <th>Gambar</th>
				  <th>Jabatan</th>
				  <th>NIP</th>
                  <th>Alamat</th>
                  <th>No Telepon</th>
				  <th>Action</th>
				</tr>
				</thead>
				<tbody>
				@php 
					$no=1;
				@endphp

				@foreach($pengajar as $pengajars)
				<tr>
				  <td>{{ $no++ }}</td>
				  <td>{{ $pengajars->nama_tenagapengajar }}</td>
				  <td><img width ="270rem" src="{{ asset('folderimage/' . $pengajars->gambar_tenagapengajar) }}" alt=""></td>
				  <td>{{ $pengajars->jabatan }}</td>
				  <td>{{ $pengajars->nip }}</td>
				  <td>{{ $pengajars->alamat }}</td>
				  <td>{{ $pengajars->notelepon }}</td>
				  <td>
					<div class="row ml-2">
						<a href="/tenagapengajar/edit/edit/{{ $pengajars->id_tenagapengajar }}" class="btn btn-primary btn-sm"><i class="fas fa-edit fa-fw"></i></a>
						<a class="btn btn-danger btn-sm ml-2 "onclick="return confirm('Apakah anda yakin ingin menghapusnya?')" href="tenagapengajar.index/delete/{{$pengajars->id_tenagapengajar}}"><i class=" fas fa-trash fa-fw"></i></a>
					</div>
				  </td>
				</tr>
				@endforeach
				</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@stop
@push('js')
<!-- DataTables -->
<script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/datatables/jquery.dataTables.js"></script>
<script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script>
  $(function () {
    $("#dataTable1").DataTable();
    $('#dataTable2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
    });
  });
</script>
@endpush