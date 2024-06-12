@extends('layouts.frontend.app',[
    'title' => 'Baca Galeri',
])
@section('content')
<div class="clever-catagory blog-details bg-img d-flex align-items-center justify-content-center p-3 height-100vh" style="background-image: url('{{ asset('folderimage/' . $galeri->thumbnail) }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="blog-details-headline text-center text-white">
        <h3>{{ $galeri->judul }}</h3>
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

<style>
@import url("https://fonts.googleapis.com/css2?family=Allura&family=Poppins:wght@300&display=swap");

.text-white {
    color: #fff; /* Text color white for better visibility */
}

.clever-catagory.blog-details {
    height: 100vh; /* Fullscreen height */
    background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent overlay */
    /* Adjust overlay color and opacity as needed */
}

.blog-details-headline {
    padding: 20px;
}

.blog-details-text {
    color: #002c4c;
    font-size: 20px;
    font-weight: bold;
    background-color: aliceblue;
    padding: 20px;
    border-radius: 10px;
}
</style>
    