@extends('layouts.backend.app',[
    'title' => 'Tambah Ekstrakurikuler',
    'contentTitle' => 'Tambah Ekstrakurikuler',
])
@section('content')
@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/summernote') }}/summernote-bs4.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/dropify') }}/dist/css/dropify.min.css">
@endpush
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('admin.ekstrakurikuler.index') }}" class="btn btn-success btn-sm">Kembali</a>
            </div>
            <div class="card-body">
                <form id="ekstrakurikulerForm" method="POST" action="{{ route('admin.ekstrakurikuler.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="judul_ekstrakurikuler">Nama Ekstrakurikuler</label>
                        <input required="" class="form-control" type="text" name="judul_ekstrakurikuler" id="judul_ekstrakurikuler" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea required="" name="deskripsi_ekstrakurikuler" id="deskripsi" class="text-dark form-control summernote"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Gambar</label>
                                <input type="file" name="gambar_ekstrakurikuler" class="dropify form-control" data-height="190" data-allowed-file-extensions="png jpg gif jpeg svg webp jfif" >
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="button" id="submitButton" class="btn btn-primary btn-sm">SIMPAN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
@push('js')
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/summernote') }}/summernote-bs4.min.js"></script>
<script src="{{ asset('plugins/dropify') }}/dist/js/dropify.min.js"></script>
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

</script>
@endpush
