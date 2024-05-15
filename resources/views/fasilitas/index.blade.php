@extends('layouts.backend.app',[
	'title' => 'Manage Fasilitas',
	'contentTitle' => 'Manage Fasilitas',
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
				<a href="{{ route('fasilitas.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>

			</div>
			<div class="card-body table-responsive">
				<table id="dataTable1" class="table table-bordered table-hover">
				<thead>
				<tr>
				  <th>No</th>
				  <th>Nama Fasilitas</th>
				  <th>Gambar</th>
				  <th>Deskripsi</th>
				  <th>Action</th>
				</tr>
				</thead>
				<tbody>
				@php 
					$no=1;
				@endphp

				@foreach($fasilitas as $fasilitases)
				<tr>
				  <td>{{ $no++ }}</td>
				  <td>{{ $fasilitases->nama_fasilitas }}</td>
				  <td><img width ="270rem" src="{{ asset('folderimage/' . $fasilitases->gambar_fasilitas) }}" alt=""></td>
				  <td>{{ $fasilitases->deskripsi_fasilitas }}</td>
				  <td>
					<div class="row ml-2">
						<a href="/fasilitas/edit/edit/{{ $fasilitases->id_fasilitas }}" class="btn btn-primary btn-sm"><i class="fas fa-edit fa-fw"></i></a>
						<a class="btn btn-danger btn-sm ml-2 "onclick="return confirm('Apakah anda yakin ingin menghapusnya?')" href="fasilitas.index/delete/{{$fasilitases->id_fasilitas}}"><i class=" fas fa-trash fa-fw"></i></a>
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