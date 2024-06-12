@extends('layouts.frontend.app',[
    'title' => 'Baca Fasilitas',
])
@section('content')
<div class="clever-catagory blog-details bg-img d-flex align-items-center justify-content-center p-3 height-100vh" style="background-image: url('{{ asset('folderimage/' . $fasilitas->gambar_fasilitas) }}'); background-size: cover; background-position: center;">
</div>
<!-- ##### Catagory Area End ##### -->

<!-- ##### Blog Details Content ##### -->
<div class="blog-details-content section-padding-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <!-- Blog Details Text -->
                <div class="blog-details-text">
                    {!! $fasilitas->deskripsi_fasilitas !!}
                </div>
            </div>
        </div>
    </div>
</div>
@stop

<style>
@import url("https://fonts.googleapis.com/css2?family=Allura&family=Poppins:wght@300&display=swap");

.clever-catagory.blog-details {
    height: 100vh; /* Fullscreen height */
    width: 100%; /* Full width */
}



.blog-details-headline {
    text-align: center;
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
