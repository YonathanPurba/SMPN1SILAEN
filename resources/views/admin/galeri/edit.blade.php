@extends('layouts.backend.app',[
	'title' => 'Edit Galeri',
	'contentTitle' => 'Edit Galeri'
])

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/dropify/dist/css/dropify.min.css') }}">
@endpush

@section('content')

<div class="">    
    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.galeri.index') }}" class="btn btn-success btn-sm">Kembali</a>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.galeri.edit.update', $galeri->id_galeri) }}" enctype="multipart/form-data" id="form-galeri">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="judul">Judul Galeri</label>
                    <input required="" class="form-control" type="text" name="judul" id="judul_galeri" value="{{ $galeri->judul }}">
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>Thumbnail</label>
                        <input type="file" name="file" class="dropify form-control" data-height="190" data-allowed-file-extensions="png jpg gif jpeg svg webp jfif" value="{{ $galeri->thumbnail }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea required="" name="deskripsi" id="deskripsi" class="text-dark form-control summernote">{{ $galeri->deskripsi }}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm">UPDATE</button>
                </div>
            </form>
        </div>
    </div>
</div>

@stop

@push('js')
<script type="text/javascript" src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/dropify/dist/js/dropify.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // Initialize Summernote
        $(".summernote").summernote({
            height: 500,
            callbacks: {
                onPaste: function (e) {
                    var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
                    e.preventDefault();
                    bufferText = bufferText.replace(/\r?\n/g, '<br>');
                    document.execCommand('insertHtml', false, bufferText);
                }
            }
        });

        // Add extra <br> on Enter key press
        $(".summernote").on("summernote.enter", function(we, e) {
            $(this).summernote("pasteHTML", "<br><br>");
            e.preventDefault();
        });

        // Initialize Dropify
        $('.dropify').dropify({
            messages: {
                default: 'Drag atau drop untuk memilih gambar',
                replace: 'Ganti',
                remove:  'Hapus',
                error:   'Error'
            }
        });

        // Slug generation from title
        $('.title').keyup(function() {
            var title = $(this).val().toLowerCase().replace(/[&\/\\#^, +()$~%.'":*?<>{}]/g, '-');
            $('.slug').val(title);
        });

        $("#judul_galeri").on("change", function() {
            var judul_galeri = $(this).val();

            $.ajax({
                url: '{{ route("admin.galeri.checkTitle") }}',
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    judul_galeri: judul_galeri,
                    id_galeri: {{ $galeri->id_galeri }}
                },
                success: function(response) {
                    if (response.exists) {
                        Swal.fire({
                            title: 'Perhatian!',
                            text: 'Judul Galeri tidak boleh sama.',
                            icon: 'warning',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                $("#judul_galeri").val("{{ $galeri->judul }}");
                            }
                        });
                    }
                }
            });
        });

        $("form#form-galeri").submit(function(e) {
            var judul_galeri = $("#judul_galeri").val();

            if (judul_galeri == "") {
                e.preventDefault();
                Swal.fire({
                    title: 'Perhatian!',
                    text: 'Judul Galeri tidak boleh sama.',
                    icon: 'warning',
                    confirmButtonText: 'OK'
                });
            }
        });
    });
</script>
@endpush
