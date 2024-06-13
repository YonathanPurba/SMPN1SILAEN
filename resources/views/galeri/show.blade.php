@extends('layouts.frontend.app',[
    'title' => 'Baca Galeri',
])
@section('content')
<!-- ##### Blog Details Content ##### -->
<div class="blog-details-content section-padding-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="galeri-image" style="background-image: url('{{ asset('folderimage/' . $galeri->thumbnail) }}');">
                    <!-- You can adjust the width and height of this box as needed -->
                </div>
                <div class="galeri-info-box">
                    <div class="galeri-info">
                        <h3 class="text-center mt-4 galeri-title">{{ $galeri->judul }}</h3>
                        <div class="mt-3 galeri-description">
                            {!! $galeri->deskripsi !!}
                        </div>
                    </div>
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

.blog-details-content {
    padding: 100px 0;
}

.galeri-image {
    width: 100%; /* Adjust width as needed */
    height: 400px; /* Adjust height as needed */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    border-radius: 10px;
    margin-bottom: 20px;
    /* Box shadow for a subtle effect */
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
}

/* Style for the galeri info box */
.galeri-info-box {
    background-color: #fff; /* Putih */
    border-radius: 10px;
    padding: 20px;
}

/* Style for the title */
.galeri-title {
    color: #002c4c; /* Judul warna */
    font-size: 28px;
    font-weight: bold;
    text-align: center;
    margin-bottom: 20px;
}

/* Style for the description */
.galeri-description {
    color: #002c4c; /* Deskripsi warna */
    font-size: 18px;
    line-height: 1.8;
}
</style>
