@extends('layouts.frontend.app', [
    'title' => 'List Pengumuman',
])

@section('content')

@if($pengumuman->count() > 0)
<section class="up">
    <h1>Pengumuman</h1>
    <p>Berikut adalah pengumuman Terbaru dari SMPN 1 Silaen</p>
</section>
<section class="upcoming-events section-padding-100-0 mb-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div class="section-heading mb-3 mb-md-0">
                        <h2 class="head animate__animated animate__fadeInDown">Pengumuman Terbaru</h2>
                    </div>
                    <div class="w-100 w-md-auto">
                        <input type="text" class="form-control" placeholder="Cari Pengumuman..." id="search-announcements">
                    </div>
                </div>
            </div>
        </div>

        <div class="list-group" id="announcement-list">
            @foreach($pengumuman as $pn)
            <div class="list-group-item mb-4 shadow-sm wow fadeInUp" data-wow-delay="250ms">
                <div class="d-flex align-items-center flex-wrap">
                    <img class="img-thumbnail mr-3 mb-3 mb-md-0" style="height: 100px; width: 100px; object-fit: cover;" src="{{ $pn->image_url ?? asset('img/bg/bg-announcement.png') }}" alt="Event image">
                    <div class="flex-grow-1">
                        <h6 class="mb-2 text-muted"><i class="fas fa-calendar-alt"></i> {{ $pn->tgl }} | <i class="fas fa-user"></i> Oleh : {{ $pn->user->name }}</h6>
                        <h4 class="mb-2">{{ $pn->judul }}</h4>
                        <p class="mb-2">{{ Str::limit($pn->konten, 100) }}</p>
                        @if($pn->kategori)
                        <span class="badge badge-info">{{ $pn->kategori->nama }}</span>
                        @endif
                        <a href="{{ route('pengumuman.show', $pn->slug) }}" class="btn btn-primary mt-2">Selengkapnya</a>
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
     @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap');
    @import url("https://fonts.googleapis.com/css2?family=playfair display&family=Poppins:wght@300&display=swap");
    .head {
        font-family: "playfair display", serif;
        font-size: 2rem;
        color: #002c4c;
    }

    .up{
        text-align: center;
        margin-top: 50px;
    }
    .up h1{
        font-family: playfair display;
        font-size: 4rem;
    }

    .up p{
        color: #ffffff;
        font-size: 18px;
        font-weight: bold;
    }

    .list-group-item {
        border: none;
        padding: 1.5rem;
        border-radius: 0.5rem;
        transition: transform 0.3s, box-shadow 0.3s;
    }
    
    .list-group-item:hover {
        transform: translateY(-10px);
        box-shadow: 0px 15px 40px rgba(0, 0, 0, 0.2);
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
        font-size: 14px;
    }

    .btn-primary:hover {
        background-color: #3167C4;
        border-color: #3167C4;
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

    @media (max-width: 768px) {
        .head {
            font-size: 2.5rem;
        }
        .up h1 {
            font-size: 4rem;
        }
        .list-group-item {
            padding: 1rem;
        }
    }

    @media (max-width: 576px) {
        .up h1 {
            font-size: 3rem;
        }
        .head {
            font-size: 2rem;
        }
        .form-control {
            width: 100%;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('search-announcements');
        const announcements = document.getElementById('announcement-list').children;

        searchInput.addEventListener('input', function() {
            const filter = searchInput.value.toLowerCase();
            Array.from(announcements).forEach(function(announcement) {
                const title = announcement.querySelector('h4').textContent.toLowerCase();
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
