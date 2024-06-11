@extends('layouts.frontend.app', [
    'title' => 'List Pengumuman',
])

@section('content')

@if($pengumuman->count() > 0)

<section class="highlighted-announcement py-5 text-center">
    <div class="container">
        <h2 style="font-family: allura;font-size:4rem" class="display-6 animate__animated animate__fadeInUp">Pengumuman Penting</h2>
        <p class="lead animate__animated animate__fadeInUp">Pastikan Anda tidak melewatkan pengumuman paling penting minggu ini.</p>
        <!-- Highlighted Announcement Card (add logic to choose a featured announcement if needed) -->
        @if($highlightedAnnouncement = $pengumuman->first())
        <div class="card mx-auto mt-4 shadow-lg" style="max-width: 600px;">
            <img class="card-img-top" style="height: 20rem; object-fit: cover;" src="{{ $pn->image_url ?? asset('img/bg/bg-announcement.png') }}" alt="Event image">
            <div class="card-body">
                <h5 class="card-title">{{ $highlightedAnnouncement->judul }}</h5>
                <p class="card-text">{{ Str::limit($highlightedAnnouncement->konten, 150) }}</p>
                <a href="{{ route('pengumuman.show', $highlightedAnnouncement->slug) }}" class="btn btn-warning btn-block">Baca Selengkapnya</a>
            </div>
        </div>
        @endif
    </div>
</section>

<section class="upcoming-events section-padding-100-0 mb-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="section-heading">
                        <h2 class="head animate__animated animate__fadeInDown">Pengumuman Terbaru</h2>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="Cari Pengumuman..." id="search-announcements">
                    </div>
                </div>
            </div>
        </div>

        <div class="row" id="announcement-list">
            @foreach($pengumuman as $pn)
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card single-upcoming-events shadow-sm wow fadeInUp" data-wow-delay="250ms" style="transition: transform 0.3s;">
                    <!-- Events Thumb -->
                    <img class="card-img-top" style="height: 20rem; object-fit: cover;" src="{{ $pn->image_url ?? asset('img/bg/bg-announcement.png') }}" alt="Event image">
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
                    <img src="{{ asset('img/picture/no.jpg') }}" alt="No announcements" class="img-fluid mt-4" style="max-width: 300px;">
                </div>
            </div>
        </div>
    </div>
</section>
@endif

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

<style>
    @import url("https://fonts.googleapis.com/css2?family=Allura&family=Poppins:wght@300&display=swap");
    .head {
        font-family: "Allura", serif;
        font-size: 3rem;
        color: #002c4c;
    }

    .single-upcoming-events:hover {
        transform: translateY(-10px);
        box-shadow: 0px 15px 40px rgba(0, 0, 0, 0.2);
    }

    .intro-section {
        background: linear-gradient(135deg, #6b73ff, #000dff);
        padding: 100px 0;
        color: #ffffff;
        text-align: center;
    }

    .intro-section h1 {
        font-size: 4rem;
        margin-bottom: 20px;
    }

    .intro-section p {
        font-size: 1.5rem;
    }

    .highlighted-announcement {
        background-color: #f7f8fc;
        padding: 50px 0;
    }

    .highlighted-announcement h2 {
        font-size: 2.5rem;
    }

    .highlighted-announcement p {
        font-size: 1.25rem;
    }

    .section-heading {
        margin-bottom: 40px;
    }

    .form-control {
        border: 2px solid #ddd;
        padding: 10px 15px;
        font-size: 16px;
        border-radius: 5px;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        font-weight: bold;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004085;
    }

    .btn-warning {
        background-color: #ff6600;
        border-color: #ff6600;
        color: #ffffff;
    }

    .btn-warning:hover {
        background-color: #ff6600;
        border-color: #ff6600;
    }

    .pagination {
        margin-top: 20px;
    }

    .no-events {
        background-color: #f8f9fa;
        padding: 50px 0;
    }

    .no-events img {
        margin-top: 20px;
    }

    .animate__animated {
        animation-duration: 0.5s;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('search-announcements');
        const announcements = document.getElementById('announcement-list').children;

        searchInput.addEventListener('input', function() {
            const filter = searchInput.value.toLowerCase();
            Array.from(announcements).forEach(function(announcement) {
                const title = announcement.querySelector('.card-title').textContent.toLowerCase();
                if (title.includes(filter)) {
                    announcement.style.display = '';
                } else {
                    announcement.style.display = 'none';
                }
            });
        });
    });
</script>

@stop
