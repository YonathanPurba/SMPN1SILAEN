@extends('layouts.frontend.app',[
	'title' => 'Baca Galeri',
])
@section('content')
<div class="clever-catagory blog-details bg-img d-flex align-items-center justify-content-center p-3 height-400" style="background-image: url('{{ asset('folderimage/' . $galeri->thumbnail) }}');">
    <div class="blog-details-headline">
        <h3>{{ $galeri->judul }}</h3>
        <div class="meta d-flex align-items-center justify-content-center">
        </div>
    </div>
</div>
<!-- ##### Catagory Area End ##### -->

<!-- ##### Blog Details Content ##### -->
<div class="blog-details-content section-padding-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="blog-details-text">
                    {!! $galeri->deskripsi !!}
                </div>
            </div>
        </div>
    </div>

</div>
@stop