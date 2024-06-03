@extends('layouts.backend.app',[
    'title' => 'Manage Galeri',
    'contentTitle' => 'Manage Galeri',
])

@push('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('templates/backend/AdminLTE-3.0.1/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
@endpush

@section('content')
<x-alert></x-alert>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('admin.galeri.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>
            </div>
            <div class="card-body table-responsive">
                <table id="dataTable1" class="table table-bordered table-hover">
<<<<<<< HEAD
                <thead>
                <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @php 
                    $no=1;
                @endphp

                @foreach($galeri as $art)
                <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $art->judul }}</td>      
                  <td>
                    <div class="row ml-2">
                        <a href="{{ route('admin.galeri.edit', ['id' => $art->id]) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit fa-fw"></i></a>
						<a class="btn btn-danger btn-sm ml-2 delete-button" data-url="{{ route('admin.galeri.index.delete', ['id' => $art->id]) }}">
							<i class="fas fa-trash fa-fw"></i>
						</a>
                    </div>
                  </td>
                </tr>
                @endforeach
                </tbody>
=======
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Gambar</th>
                            <th>Author</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php 
                            $no = 1;
                        @endphp

                        @foreach($galeri as $art)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $art->judul }}</td>
                                <td>
                                    <img src="{{ asset('storage/' . $art->thumbnail) }}" alt="{{ $art->judul }}" style="width: 100px; height: auto;">
                                </td>
                                <td>{{ $art->user->name }}</td>
                                <td>
                                    @if(auth()->user()->id == $art->user_id)
                                        <div class="btn-group" role="group" aria-label="Actions">
                                            <a href="{{ route('admin.galeri.edit', $art->id) }}" class="btn btn-primary btn-sm">
                                                <i class="fas fa-edit fa-fw"></i>
                                            </a>
                                            <form method="POST" action="{{ route('admin.galeri.destroy', $art->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button onclick="return confirm('Yakin hapus?')" type="submit" class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash fa-fw"></i>
                                                </button>
                                            </form>
                                        </div>
                                    @else
                                        <button class="btn btn-danger btn-sm" disabled>
                                            <i class="fas fa-ban"></i> No Action Available
                                        </button>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
>>>>>>> e90192492c99d6db79dba4a73a1940757ad25450
                </table>
            </div>
        </div>
    </div>
</div>
@stop

@push('js')
<!-- DataTables -->
<script src="{{ asset('templates/backend/AdminLTE-3.0.1/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('templates/backend/AdminLTE-3.0.1/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<script>
<<<<<<< HEAD
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
                                    window.location.href = "{{ route('admin.galeri.index') }}";
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
=======
    $(function () {
        $("#dataTable1").DataTable();
    });
</script>
<script src="{{ mix('js/app.js') }}"></script>
<script>
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
</script>
@endpush
>>>>>>> e90192492c99d6db79dba4a73a1940757ad25450
