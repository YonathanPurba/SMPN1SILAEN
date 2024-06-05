@extends('layouts.frontend.app',[
	'title' => 'Detail Pengumuman',
])
@section('content')
<div class="clever-catagory blog-details bg-img d-flex align-items-center justify-content-center p-3 height-400" style="background-image: url('/img/bg/bg.png');">
    <div class="blog-details-headline">
        <h3 class="head">{{ $pengumuman->judul }}</h3>
    </div>
</div>
<!-- ##### Catagory Area End ##### -->

<!-- ##### Blog Details Content ##### -->
<div class="blog-details-content section-padding-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <!-- Blog Details Text -->
                <div class="blog-details-text">
                    {!! $pengumuman->deskripsi !!}
                </div>
            </div>
        </div>
    </div>
</div>
@stop
<style>
.head {
    font-size: 3rem !important; /* Sesuaikan ukuran font yang Anda inginkan di sini */
    margin-bottom: 0.5rem;
    font-weight: bold;
    color: #002c4c;
}

.blog-details-text   {
    color: #002c4c;
    font-size: 20px;  
    font-weight: bold;  
    background-color: aliceblue
}
</style>