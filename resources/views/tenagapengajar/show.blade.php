@extends('layouts.frontend.app',[
    'title' => 'Baca Artikel',
])
@section('content')
<style>
@import url("https://fonts.googleapis.com/css2?family=Allura&family=Poppins:wght@300&display=swap");

h2 {
    font-size: 5rem;
    margin-bottom: 0.5rem;
    font-weight: bold;
    font-family: "Allura", serif;
    color: #ffffff;
}
h4 {
    font-size: 3rem;
    margin-bottom: 0.5rem;
    font-weight: bold;
    font-family: "Allura", serif; 
}
.blog-details-header {
    position: relative;
    width: 100%;
    height: auto;
    overflow: hidden;
}
.blog-details-header img {
    width: 100%;
    height: auto;
    object-fit: cover;
}
</style>

<!-- Blog Details Header -->
<div class="blog-details-header d-flex align-items-center justify-content-center p-5">
    <img src="{{ asset('folderimage/' . $pengajar->gambar_tenagapengajar) }}" alt="{{ $pengajar->nama_tenagapengajar }}">
    <div class="blog-details-headline text-center position-absolute w-100">
        <h2 class="text-capitalize mb-3">{{ $pengajar->nama_tenagapengajar }}</h2>
    </div>
</div>

<!-- Blog Details Content -->
<div class="blog-details-content section-padding-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <!-- Blog Details Text -->
                <div class="blog-details-text bg-white p-4 shadow-sm rounded">
                    <div class="info mb-4">
                        <h4 class="text-primary">Informasi Tenaga Pengajar</h4>
                    </div>
                    <div class="info">
                        <h5>Nama:</h5>
                        <p>{{ $pengajar->nama_tenagapengajar }}</p>
                    </div>
                    <div class="info">
                        <h5>Jabatan:</h5>
                        <p>{{ $pengajar->jabatan }}</p>
                    </div>
                    <div class="info">
                        <h5>Status:</h5>
                        <p>{{ $pengajar->status }}</p>
                    </div>
                    <div class="info">
                        <h5>NIP:</h5>
                        <p>{{ $pengajar->nip }}</p>
                    </div>
                    <div class="info">
                        <h5>Alamat:</h5>
                        <p>{{ $pengajar->alamat }}</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@stop
