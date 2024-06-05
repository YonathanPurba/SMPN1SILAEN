@extends('layouts.frontend.app',[
	'title' => 'Baca Artikel',
])
@section('content')
    <div class="clever-catagory blog-details bg-img d-flex align-items-center justify-content-center p-3 height-400" style="background-image: url('{{ asset('folderimage/' . $prestasi->gambar_prestasi) }}');">
    <div class="blog-details-headline">
        <h3 class="text-white">{{ $prestasi->judul_prestasi }}</h3>
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
                <!-- Blog Details Text -->
                <div class="blog-details-text">
                    {!! $prestasi->deskripsi_prestasi !!}
                </div>
            </div>
        </div>
    </div>

    
</div>
@stop
<style>@import url("https://fonts.googleapis.com/css2?family=Allura&family=Poppins:wght@300&display=swap");
    .text-white {
    font-size: 4rem !important; /* Sesuaikan ukuran font yang Anda inginkan di sini */
    margin-bottom: 0.5rem;
    font-weight: bold;
    font-family: "Allura", serif;
    color: #002c4c;
}

.blog-details-text {
    color: #002c4c;
    font-size: 20px;  
    font-weight: bold;  
    background-color: aliceblue;
    margin-bottom: -300px;
}

.blog-details-text:hover{
    color: #ffffff;
    transition: 0.5s;
    background-color:#ced5da;
}
</style>