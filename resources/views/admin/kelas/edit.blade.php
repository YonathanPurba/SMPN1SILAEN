@extends('layouts.backend.app',[
    'title' => 'Edit Kelas',
    'contentTitle' => 'Edit Kelas',
])
@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('admin.kelas.index') }}" class="btn btn-success btn-sm">Kembali</a>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.kelas.edit.update', $kelas->id_kelas) }}" enctype="multipart/form-data" id="form-kelas">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama_kelas">Nama Kelas</label>
                        <input required="" class="form-control" type="text" name="nama_kelas" id="nama_kelas" placeholder="" value="{{ $kelas->nama_kelas }}">
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

@push('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#nama_kelas").on("change", function() {
            var namaKelas = $(this).val();

            $.ajax({
                url: '{{ route("admin.kelas.checkName") }}',
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    nama_kelas: namaKelas
                },
                success: function(response) {
                    if (response.exists) {
                        Swal.fire({
                            title: 'Perhatian!',
                            text: 'Nama Kelas tidak boleh sama.',
                            icon: 'warning',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                $("#nama_kelas").val("");
                            }
                        });
                    }
                }
            });
        });
    });
</script>
@endpush
