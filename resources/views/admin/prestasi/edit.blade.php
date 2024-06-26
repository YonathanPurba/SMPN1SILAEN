@extends('layouts.backend.app',[
    'title' => 'Edit Prestasi',
    'contentTitle' => 'Edit Prestasi',
])

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/summernote') }}/summernote-bs4.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/dropify') }}/dist/css/dropify.min.css">
@endpush

@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('admin.prestasi.index') }}" class="btn btn-success btn-sm">Kembali</a>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.prestasi.edit.update', $prestasi->id_prestasi) }}" enctype="multipart/form-data" id="form-prestasi">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="judul_prestasi">Judul</label>
                        <input required="" class="form-control" type="text" name="judul_prestasi" id="judul_prestasi" placeholder="" value="{{ $prestasi->judul_prestasi }}">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea required="" name="deskripsi_prestasi" id="deskripsi" class="text-dark form-control summernote">{{ $prestasi->deskripsi_prestasi }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_prestasi">Tanggal</label>
                        <input required="" class="form-control" type="date" name="tanggal_prestasi" id="tanggal_prestasi" placeholder="" value="{{ $prestasi->tanggal_prestasi }}">
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Gambar</label>
                                <input type="file" name="gambar_prestasi" class="dropify form-control" data-height="190" data-allowed-file-extensions="png jpg gif jpeg svg webp jfif" data-default-file="{{ asset('path/to/gambar/' . $prestasi->gambar_prestasi) }}">
                            </div>
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

@push('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript" src="{{ asset('plugins/summernote') }}/summernote-bs4.min.js"></script>
<script type="text/javascript" src="{{ asset('plugins/dropify') }}/dist/js/dropify.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#tanggal_prestasi").on("change", function() {
            var tanggalPrestasi = $(this).val();
            var tanggalSekarang = "{{ date('Y-m-d') }}";

            if (tanggalPrestasi > tanggalSekarang) {
                Swal.fire({
                    title: 'Perhatian!',
                    text: 'Tanggal tidak boleh setelah tanggal sekarang.',
                    icon: 'warning',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $(this).val("");
                    }
                });
            }
        });

        $("#judul_prestasi").on("change", function() {
            var judulPrestasi = $(this).val();
            var idPrestasi = "{{ $prestasi->id_prestasi }}";

            $.ajax({
                url: '{{ route("admin.prestasi.checkTitle") }}',
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    judul_prestasi: judulPrestasi,
                    id_prestasi: idPrestasi
                },
                success: function(response) {
                    if (response.exists) {
                        Swal.fire({
                            title: 'Perhatian!',
                            text: 'Judul Prestasi tidak boleh sama.',
                            icon: 'warning',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                $("#judul_prestasi").val("");
                            }
                        });
                    }
                }
            });
        });

        $("form#form-prestasi").submit(function(e) {
            var tanggalPrestasi = $("#tanggal_prestasi").val();
            var tanggalSekarang = "{{ date('Y-m-d') }}";

            if (tanggalPrestasi > tanggalSekarang) {
                e.preventDefault();
            }
        });

        $(".summernote").summernote({
            height:500,
            callbacks: {
            // callback for pasting text only (no formatting)
                onPaste: function (e) {
                  var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
                  e.preventDefault();
                  bufferText = bufferText.replace(/\r?\n/g, '<br>');
                  document.execCommand('insertHtml', false, bufferText);
                }
            }
        })

        $(".summernote").on("summernote.enter", function(we, e) {
            $(this).summernote("pasteHTML", "<br><br>");
            e.preventDefault();
        });

        $('.dropify').dropify({
            messages: {
                default: 'Drag atau Drop untuk memilih gambar',
                replace: 'Ganti',
                remove:  'Hapus',
                error:   'error'
            }
        });

        $('.title').keyup(function(){
            var title = $(this).val().toLowerCase().replace(/[&\/\\#^, +()$~%.'":*?<>{}]/g,'-');
            $('.slug').val(title);
        });
    });
</script>
@endpush
