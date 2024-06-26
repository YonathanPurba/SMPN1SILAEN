@extends('layouts.backend.app',[
	'title' => 'Manage Prestasi',
	'contentTitle' => 'Manage Prestasi',
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
				<a href="{{ route('admin.prestasi.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>

			</div>
			<div class="card-body table-responsive">
				<table id="dataTable1" class="table table-bordered table-hover">
				<thead>
				<tr>
				  <th>No</th>
				  <th>Judul</th>
				  <th>Deskripsi</th>
				  <th>Tanggal</th>
                  <th>Gambar</th>
				  <th>Action</th>
				</tr>
				</thead>
				<tbody>
				@php 
					$no=1;
				@endphp

				@foreach($prestasi as $prestasis)
				<tr>
				  <td>{{ $no++ }}</td>
				  <td>{{ $prestasis->judul_prestasi }}</td>
                  <td>{{ $prestasis->deskripsi_prestasi }}</td>
                  <td>{{ $prestasis->tanggal_prestasi }}</td>
				  <td><img width ="270rem" src="{{ asset('folderimage/' . $prestasis->gambar_prestasi) }}" alt=""></td>
				  <td>
					<div class="row ml-2">
						<a href="{{ route('admin.prestasi.edit', ['id' => $prestasis->id_prestasi]) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit fa-fw"></i></a>
						<button class="btn btn-danger btn-sm ml-2 delete-button" data-url="{{ route('admin.prestasi.index.delete', ['id' => $prestasis->id_prestasi]) }}">
							<i class="fas fa-trash fa-fw"></i>
						</button>
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
<script src="{{ mix('js/app.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        @if(session('success'))
            Swal.fire({
                title: 'Berhasil!',
                text: '{{ session('success') }}',
                icon: 'success',
                confirmButtonText: 'OK'
            });
        @endif

        @if(session('error'))
            Swal.fire({
                title: 'Gagal!',
                text: '{{ session('error') }}',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        @endif

        // SweetAlert for delete confirmation
        document.querySelectorAll('.delete-button').forEach(button => {
            button.addEventListener('click', function (event) {
                event.preventDefault(); // Prevent default link behavior
                const url = this.dataset.url;

                Swal.fire({
                    title: 'Apakah anda yakin?',
                    text: "Anda tidak akan bisa mengembalikan ini!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'OK',
                    cancelButtonText: 'Cancel'
                }).then((result) => {
                    if (result.isConfirmed) {
                        axios.delete(url)
                            .then(response => {
                                Swal.fire({
                                    title: 'Berhasil!',
                                    text: response.data.success,
                                    icon: 'success',
                                    confirmButtonText: 'OK'
                                }).then(() => {
                                    window.location.href = "{{ route('admin.prestasi.index') }}";
                                });
                            })
                            .catch(error => {
                                Swal.fire({
                                    title: 'Gagal!',
                                    text: 'Terjadi kesalahan saat menghapus data.',
                                    icon: 'error',
                                    confirmButtonText: 'OK'
                                });
                            });
                    }
                });
            });
        });
    });
    </script>
@endpush