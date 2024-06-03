@extends('layouts.backend.app', [
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
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Author</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php 
                            $no = 1;
                        @endphp


    <div class="">    
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Box Artikel</h4>
        </div>
        <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.galeri.store') }}">
            @csrf
            <div class="form-group">
                <label for="judul">Judul Artikel</label>
                <input required="" type="" name="judul" placeholder="" class="form-control"> 
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Thumbnail</label>
                        <input type="file" name="thumbnail" class="dropify form-control" data-height="190" data-allowed-file-extensions="png jpg gif jpeg svg webp jfif" required>
                    </div>
                </div>
            </div>
            <div id="form-group">
                <label for="deskripsi">Isi Artikel</label>
                <textarea required="" name="deskripsi" id="deskripsi" class="text-dark form-control summernote"></textarea>
                        @foreach($galeri as $art)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $art->judul }}</td>
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
