@extends('layouts.frontend.app', ['title' => 'Fasilitas SMPN 1 Silaen'])

@section('content')
<section class="facilities-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h1 class="section-title">Fasilitas Unggulan SMPN 1 Silaen</h1>
                <p class="section-description">Kami menyediakan fasilitas modern dan inovatif untuk mendukung pembelajaran dan pengembangan potensi siswa.</p>
            </div>
        </div>
        <div class="row">
            @foreach ($fasilitas as $fasilitases)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="facility-card">
                    <div class="card-image-wrapper">
                        <img src="{{ asset('folderimage/' . $fasilitases->gambar_fasilitas) }}" class="card-img-top" alt="{{ $fasilitases->nama_fasilitas }}">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $fasilitases->nama_fasilitas }}</h5>
                        <p class="card-text">{{ Str::limit($fasilitases->deskripsi, 100) }}</p>
                        <a href="{{ route('fasilitas.show', $fasilitases->slug) }}" class="btn btn-gradient">Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row mt-5 feature-section">
            <div class="col-12 text-center mb-4">
                <h2 class="feature-title">Keunggulan Fasilitas Kami</h2>
            </div>
            <div class="col-md-4 mb-4">
                <div class="feature-card">
                    <i class="fas fa-laptop-code fa-3x mb-3"></i>
                    <h4>Teknologi Terkini</h4>
                    <p>Laboratorium komputer dan kelas dilengkapi dengan perangkat teknologi modern untuk mendukung pembelajaran digital.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="feature-card">
                    <i class="fas fa-flask fa-3x mb-3"></i>
                    <h4>Laboratorium Sains</h4>
                    <p>Fasilitas lab sains lengkap untuk eksperimen dan penelitian dalam bidang fisika, kimia, dan biologi.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="feature-card">
                    <i class="fas fa-book-reader fa-3x mb-3"></i>
                    <h4>Perpustakaan Digital</h4>
                    <p>Akses ke ribuan buku digital dan sumber belajar online untuk memperluas wawasan siswa.</p>
                </div>
            </div>
        </div>

    
</section>

<style>
    .section-title {
        font-size: 3rem;
        font-weight: bold;
        color: #4a4a4a;
        margin-bottom: 1rem;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
    }

    .section-description {
        font-size: 1.2rem;
        color: #666;
        max-width: 800px;
        margin: 0 auto;
    }

    .facility-card {
        border: none;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s, box-shadow 0.3s;
        background: linear-gradient(145deg, #ffffff, #f0f0f0);
    }

    .facility-card:hover {
        transform: translateY(-10px) rotate(2deg);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    }

    .card-image-wrapper {
        height: 200px;
        overflow: hidden;
    }

    .card-img-top {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s;
    }

    .facility-card:hover .card-img-top {
        transform: scale(1.1);
    }

    .card-title {
        font-weight: bold;
        color: #333;
    }

    .btn-gradient {
        background:#ff6b6b;
        border: none;
        color: white;
        padding: 10px 20px;
        border-radius: 50px;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .btn-gradient:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    }

    .feature-section, .testimonial-section {
        background-color: #f8f9fa;
        padding: 50px 0;
        border-radius: 20px;
        
        
    }

    .feature-title, .testimonial-title {
        font-size: 2.5rem;
        color: #333;
        margin-bottom: 2rem;
    }

    .feature-card {
        background-color: white;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
    }

    .feature-card:hover {
        transform: translateY(-5px);
    }

    .feature-card i {
        color: #ff6b6b;
    }

    .testimonial-card {
        background-color: white;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        position: relative;
    }

    .testimonial-card:before {
        content: '\201C';
        font-size: 4rem;
        color: #ff6b6b;
        position: absolute;
        top: -10px;
        left: 10px;
    }

    .testimonial-card p {
        font-style: italic;
        color: #555;
    }

    .testimonial-card h5 {
        margin-top: 20px;
        color: #333;
        text-align: right;
    }
</style>
@endsection