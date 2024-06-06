@extends('layouts.frontend.app',[
    'title' => 'Ekstrakurikuler',
])
@section('content')
    <div class="clever-catagory blog-details bg-img d-flex align-items-center justify-content-center p-3 height-400 position-relative" style="background-image: url('{{ asset('folderimage/' . $ekstrakulikuler->gambar_ekstrakulikuler) }}');">
        <div class="overlay position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0, 0, 0, 0.5);"></div>
        <div class="blog-details-headline text-center position-relative z-index-1">
            <h3 class="text-white">{{ $ekstrakulikuler->judul_ekstrakulikuler }}</h3>
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
                        {!! $ekstrakulikuler->deskripsi_ekstrakulikuler !!}
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
    background-color: aliceblue
}

.blog-details-text:hover{
    color: #ffffff;
    transition: 0.5s;
    background-color:#002c4c;
}
</style>
