@extends('layouts.backend.app',[
	'title' => 'Tambah Galeri',
	'contentTitle' => 'Tambah Galeri'
])

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/summernote') }}/summernote-bs4.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/dropify') }}/dist/css/dropify.min.css">
@endpush

@section('content')

<div class="">    
    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.galeri.index') }}" class="btn btn-success btn-sm">Kembali</a>
        </div>
        <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.galeri.store') }}" id="form-galeri">
            @csrf
            
            <div class="form-group">
                <label for="judul">Judul Galeri</label>
                <input required="" type="text" name="judul" placeholder="" class="form-control" id="judul_galeri"> 
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
                <label for="deskripsi">Isi Deskripsi Galeri</label>
                <textarea required="" name="deskripsi" id="deskripsi" class="text-dark form-control summernote"></textarea>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">UPLOAD</button>
        </div>
        </form>
    </div>
</div>

@stop

@push('js')
<script type="text/javascript" src="{{ asset('plugins/summernote') }}/summernote-bs4.min.js"></script>
<script type="text/javascript" src="{{ asset('plugins/dropify') }}/dist/js/dropify.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
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

    $("#judul_galeri").on("change", function() {
        var judul_galeri = $(this).val();

        $.ajax({
            url: '{{ route("admin.galeri.checkTitle") }}',
            method: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                judul_galeri: judul_galeri
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
                            $("#judul_galeri").val("");
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
</script>
@endpush
