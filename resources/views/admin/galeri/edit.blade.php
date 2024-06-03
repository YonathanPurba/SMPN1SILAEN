@extends('layouts.backend.app', [
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
            <h4 class="card-title">Edit Galeri</h4>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data" action="{{ route('admin.galeri.update', $galeri->id) }}">
                @csrf
                <div class="form-group">
                    <label for="judul">Judul Galeri</label>
                    <input value="{{ $galeri->judul }}" required type="text" name="judul" id="judul" class="form-control">
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Thumbnail</label>
                            <input type="file" name="file" class="dropify form-control" data-height="190" data-allowed-file-extensions="png jpg gif jpeg svg webp jfif" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="deskripsi">Isi Galeri</label>
                    <textarea required name="deskripsi" id="deskripsi" class="text-dark form-control summernote">{{ $galeri->deskripsi }}</textarea>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">UPDATE</button>
                </div>
            </form>
        </div>
    </div>
</div>

@stop

@push('js')
<script type="text/javascript" src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/dropify/dist/js/dropify.min.js') }}"></script>
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
    });
</script>
@endpush
