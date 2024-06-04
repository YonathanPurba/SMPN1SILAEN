@extends('layouts.backend.app',[
	'title' => 'Tambah Prestasi',
	'contentTitle' => 'Tambah Prestasi',
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
				<form method="POST" action="{{ route('admin.prestasi.store') }}" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label for="nama_fasilitas">Judul</label>
						<input required="" class="form-control" type="" name="judul_prestasi" id="judul_prestasi" placeholder="">
					</div>
					<div class="form-group">
						<label for="deskripsi">Deskripsi</label>
						<textarea required="" name="deskripsi_prestasi" id="deskripsi" class="text-dark form-control summernote"></textarea>
					</div>
                    <div class="form-group">
						<label for="d">Tanggal</label>
						<input required="" class="form-control" type="date" name="tanggal_prestasi" id="tanggal_prestasi" placeholder="">
					</div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Gambar</label>
                                <input type="file" name="gambar_prestasi" class="dropify form-control" data-height="190" data-allowed-file-extensions="png jpg gif jpeg svg webp jfif" required>
                            </div>
                        </div>
                    </div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-sm">SIMPAN</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@stop
@push('js')
<script type="text/javascript" src="{{ asset('plugins/summernote') }}/summernote-bs4.min.js"></script>
<script type="text/javascript" src="{{ asset('plugins/dropify') }}/dist/js/dropify.min.js"></script>
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
</script>
@endpush