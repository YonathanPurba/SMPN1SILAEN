@extends('layouts.frontend.app', [
    'title' => 'Galeri SMP N1 Silaen',
])

@section('content')
<!-- Galeri Area Start -->
<section class="galeri-area">
    <div class="container">
        <!-- Judul Halaman -->
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">Galeri SMPN 1 Silaen</h1>
                <p class="page-subtitle">Jelajahi momen-momen berharga kami</p>
            </div>
        </div>
        <!-- Highlight Gallery -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="highlight-gallery">
                    <h2>Highlight Galeri</h2>
                    <div class="highlight-images">
                        @foreach($galeri->take(5) as $highlight)
                            <div class="highlight-item">
                                <img src="{{ asset('folderimage/' . $highlight->thumbnail) }}" alt="{{ $highlight->judul }}">
                                <div class="highlight-overlay">
                                    <h3>{{ $highlight->judul }}</h3>
                                    <a href="{{ route('galeri.show', $highlight->slug) }}" class="btn-view">Lihat</a>
        <!-- About Section -->
        <div  class="row mt-5">
            <div  class="col-12 text-center">
                <div class="about-section">
                    <h3 style="margin-top: -60px;margin-bottom:50px;font-family:allura;font-size:3rem;color:" class="animate__animated animate__fadeInDown">Tentang Galeri Kami</h3>
                    <p style="background-color: #ffffff" class="animate__animated animate__fadeInDown">Galeri ini berisi berbagai foto dan video kegiatan siswa, event sekolah, dan momen-momen spesial yang terjadi di SMP N1 Silaen. Setiap gambar memiliki cerita tersendiri yang menggambarkan kebahagiaan dan semangat belajar para siswa.</p>
                </div>
            </div>
        </div>
        <!-- End About Section -->
        <div class="row gallery">
            @foreach($galeri as $art)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4 animate__animated animate__fadeInUp">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">{{ $art->judul }}</h5>
                        </div>
                        <div class="card-body">
                            <div class="image-container">
                                <img src="{{ asset('folderimage/' . $art->thumbnail) }}" class="card-img" alt="{{ $art->judul }}">
                                <div class="overlay">
                                    <div class="overlay-content">
                                        <a href="{{ route('galeri.show', $art->slug) }}" class="btn">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Kategori Galeri -->
        <div class="row mt-5">
            <div class="col-12">
                <h2>Galeri kami</h2>
                <div class="category-buttons">
                
                </div>
            </div>
        </div>

        <!-- Galeri Grid -->
        <div class="row mt-4 gallery-grid">
            @foreach($galeri as $art)
                <div class="col-lg-4 col-md-6 mb-4 gallery-item" data-category="{{ strtolower($art->kategori) }}">
                    <div class="card">
                        <img src="{{ asset('folderimage/' . $art->thumbnail) }}" class="card-img-top" alt="{{ $art->judul }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $art->judul }}</h5>
                            <p class="card-text">{{ $art->deskripsi_singkat }}</p>
                            <a href="{{ route('galeri.show', $art->slug) }}" class="btn-view">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Statistik Galeri -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="gallery-stats">
                    <h2>Statistik Galeri</h2>
                    <div class="stats-container">
                        <div class="stat-item">
                            <i class="fas fa-image"></i>
                            <h3>{{ $galeri->count() }}</h3>
                            <p>Total Foto</p>
                        </div>
                        <div class="stat-item">
                            <i class="fas fa-tag"></i>
                            <h3>{{ $galeri->pluck('kategori')->unique()->count() }}</h3>
                            <p>Kategori</p>
                        </div>
                        <div class="stat-item">
                            <i class="fas fa-eye"></i>
                            <h3>{{ $galeri->sum('views') }}</h3>
                            <p>Total Views</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="row">
            <div class="col-12 d-flex justify-content-center mt-4">
                {{ $galeri->appends(Request::all())->links() }}
            </div>
        </div>
    </div>
</section>
@stop

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');

    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f0f2f5;
        color: #333;
    }

    .galeri-area {
        padding: 80px 0;
    }

    .page-title {
        font-size: 3.5rem;
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 10px;
    }

    .page-subtitle {
        font-size: 1.2rem;
        color: #7f8c8d;
    }

    .highlight-gallery {
        margin-bottom: 50px;
    }

    .highlight-gallery h2 {
        font-size: 2rem;
        font-weight: 600;
        color: #2c3e50;
        margin-bottom: 20px;
    }

    .highlight-images {
        display: flex;
        overflow-x: auto;
        gap: 20px;
        padding-bottom: 20px;
        scroll-behavior: smooth;
    }

    .highlight-item {
        position: relative;
        flex: 0 0 300px;
        height: 200px;
        overflow: hidden;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .highlight-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .highlight-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .highlight-item:hover img {
        transform: scale(1.1);
    }

    .highlight-item:hover .highlight-overlay {
        opacity: 1;
    }

    .highlight-overlay h3 {
        color: #fff;
        font-size: 1.2rem;
        margin-bottom: 10px;
    }

    .btn-view {
        padding: 8px 20px;
        background-color: #3498db;
        color: #fff;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .btn-view:hover {
        background-color: #2980b9;
    }

    .category-buttons {
        display: flex;
        justify-content: center;
        gap: 10px;
        margin-bottom: 30px;
    }

    .category-btn {
        padding: 10px 20px;
        border: none;
        background-color: #ecf0f1;
        color: #2c3e50;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .category-btn.active, .category-btn:hover {
        background-color: #3498db;
        color: #fff;
    }

    .card {
        border: none;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    .card-img-top {
        height: 200px;
        object-fit: cover;
    }

    .card-body {
        padding: 20px;
    }

    .card-title {
        font-size: 1.2rem;
        font-weight: 600;
        color: #2c3e50;
    }

    .card-text {
        color: #7f8c8d;
        margin-bottom: 15px;
    }

    .gallery-stats {
        background-color: #fff;
        border-radius: 10px;
        padding: 30px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .gallery-stats h2 {
        font-size: 2rem;
        font-weight: 600;
        color: #2c3e50;
        margin-bottom: 20px;
    }

    .stats-container {
        display: flex;
        justify-content: space-around;
    }

    .stat-item {
        text-align: center;
    }

    .stat-item i {
        font-size: 2.5rem;
        color: #3498db;
        margin-bottom: 10px;
    }

    .stat-item h3 {
        font-size: 2rem;
        font-weight: 700;
        color: #2c3e50;
    }

    .stat-item p {
        color: #7f8c8d;
    }

    .pagination {
        margin-top: 30px;
    }

    .page-link {
        color: #3498db;
        border: none;
        border-radius: 5px;
        margin: 0 5px;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .page-link:hover, .page-item.active .page-link {
        background-color: #3498db;
        color: #fff;
    }

    @media (max-width: 768px) {
        .highlight-item {
            flex: 0 0 80%;
            height: 180px;
        }

        .card-img-top {
            height: 180px;
        }
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<script>
document.addEventListener('DOMContentLoaded', function() {
    const categoryButtons = document.querySelectorAll('.category-btn');
    const galleryItems = document.querySelectorAll('.gallery-item');

    categoryButtons.forEach(button => {
        button.addEventListener('click', function() {
            const category = this.dataset.category;
            
            categoryButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');

            galleryItems.forEach(item => {
                if (category === 'all' || item.dataset.category === category) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
});
</script>
