@extends('layouts.frontend.app', [
    'title' => 'Ekstrakurikuler',
])

@section('content')
    <div class="clever-catagory blog-details bg-img d-flex align-items-center justify-content-center p-3 height-400" style="background-image: url('{{ asset('folderimage/' . $ekstrakurikuler->gambar_ekstrakurikuler) }}');">
        <div class="blog-details-headline">
            <h3>{{ $ekstrakurikuler->judul_ekstrakurikuler }}</h3>
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
                        {!! $ekstrakurikuler->deskripsi_ekstrakurikuler !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

<style>
@import url("https://fonts.googleapis.com/css2?family=Allura&family=Poppins:wght@300&display=swap");

.text-white {
    font-size: 4rem !important; /* Adjust the font size as needed */
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
}

</style>
