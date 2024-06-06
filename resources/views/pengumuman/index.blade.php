@extends('layouts.frontend.app', [
    'title' => 'List Pengumuman',
])

@section('content')

@if($pengumuman->count() > 0)
<section class="upcoming-events section-padding-100-0 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <div class="section-heading">
                    <h2 class="head animate__animated animate__fadeInDown" >Pengumuman Terbaru</h2>
                    <p style="font-size: 1.2rem;
                    color: #ffffff;
                    font-weight: 400;
                    max-width:1150px;
                    border-bottom: 3px solid #ffffff; /* Garis bawah dengan warna putih */
<<<<<<< HEAD
                    padding-bottom: 5px;" class="animate__animated animate__fadeInDown">Temukan informasi terkini dan penting di sini. Tetap update dengan pengumuman terbaru kami!</p>
                    <hr class="w-25 mx-auto">
=======
                    padding-bottom: 5px;
                    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;" class="animate__animated animate__fadeInDown">Temukan informasi terkini dan penting di sini. Tetap update dengan pengumuman terbaru kami!</p>
             
>>>>>>> 0a736fdf8103fd43e4ed0c364ae98ed5b440d1a4
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($pengumuman as $pn)
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card single-upcoming-events shadow-sm wow fadeInUp" data-wow-delay="250ms" style="transition: transform 0.3s;">
                    <!-- Events Thumb -->
                    <img class="card-img-top" style="height: 20rem; object-fit: cover;" src="{{ asset('img/bg/bg-announcement.png') }}" alt="Event image">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted"><i class="fas fa-calendar-alt"></i> {{ $pn->tgl }} | <i class="fas fa-user"></i> Oleh : {{ $pn->user->name }}</h6>
                        <h4 class="card-title">{{ $pn->judul }}</h4>
                        <p class="card-text">{{ Str::limit($pn->konten, 100) }}</p>
                        @if($pn->kategori)
                        <span class="badge badge-info">{{ $pn->kategori->nama }}</span>
                        @endif
                        <a href="{{ route('pengumuman.show', $pn->slug) }}" class="btn btn-primary btn-block mt-3">Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="row">
            <div class="col-12">
                <div class="pagination justify-content-center">
                    {{ $pengumuman->links() }}
                </div>
            </div>
        </div>
    </div>
</section>
@else
<section class="no-events section-padding-100-0 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="section-heading">
                    <h2 class="font-weight-bold">Tidak Ada Pengumuman</h2>
                    <p class="text-muted">Saat ini belum ada pengumuman yang tersedia. Silakan cek kembali nanti!</p>
                    <img src="{{ asset('img/empty.svg') }}" alt="No announcements" class="img-fluid mt-4" style="max-width: 300px;">
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>

<style>@import url("https://fonts.googleapis.com/css2?family=Allura&family=Poppins:wght@300&display=swap");
.head{
    font-family: "Allura", serif;
    font-size: 5rem;
    color: #002c4c;
}

</style>
@section('additional-styles')


@stop

@stop
