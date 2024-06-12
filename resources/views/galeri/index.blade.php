@extends('layouts.frontend.app', [
    'title' => 'List Galeri',
])

@section('content')
<!-- ##### Blog Area Start ##### -->
<section class="blog-area section-padding-100-0 mb-50">
    <div class="container">
        <!-- Section Heading -->
        <div class="row">
            <div class="col-12 text-center">
                <div class="section-heading">
                    <h2 class="head animate__animated animate__fadeInDown">Galeri SMP N1 Silaen</h2>
                </div>
            </div>
        </div>
        <!-- End Section Heading -->

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

        <!-- Gallery Section -->
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
                        </div>
                        <div class="card-footer">
                            <h6 class="card-footer-heading">{{ $art->kategori }}</h6>
                            <p class="card-footer-text">{{ $art->deskripsi_singkat }}</p>
                        </div>
                        <div class="card-text">
                            <p class="animate__animated animate__fadeInUp">Momen Terbaik Bersama SMP N1 Silaen</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- End Gallery Section -->

        <!-- Testimonial Section -->
        <div class="row mt-5">
            <div class="col-12 text-center">
                <div class="testimonial-section">
                    <h3 class="animate__animated animate__fadeInDown">Testimoni dari Siswa dan Guru</h3>
                    <p class="animate__animated animate__fadeInDown">Dengar apa yang siswa dan guru katakan tentang pengalaman mereka di SMP N1 Silaen.</p>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4 animate__animated animate__fadeInUp">
                <div class="testimonial">
                    <p>"SMP N1 Silaen telah memberikan saya banyak pengalaman berharga dan ilmu yang bermanfaat."</p>
                    <h5>- Siswa A</h5>
                </div>
            </div>
            <div class="col-md-4 animate__animated animate__fadeInUp">
                <div class="testimonial">
                    <p>"Mengajar di SMP N1 Silaen adalah kebahagiaan tersendiri. Para siswa sangat antusias dan bersemangat."</p>
                    <h5>- Guru B</h5>
                </div>
            </div>
            <div class="col-md-4 animate__animated animate__fadeInUp">
                <div class="testimonial">
                    <p>"Saya sangat bangga bisa menjadi bagian dari SMP N1 Silaen. Sekolah ini penuh dengan kegiatan positif."</p>
                    <h5>- Siswa C</h5>
                </div>
            </div>
        </div>
        <!-- End Testimonial Section -->

        <!-- Pagination -->
        <div class="row">
            <div class="col-12 d-flex justify-content-center mt-4">
                {{ $galeri->appends(Request::all())->links() }}
            </div>
        </div>
        <!-- End Pagination -->
    </div>
</section>
@stop

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<style>
    @import url("https://fonts.googleapis.com/css2?family=Allura&family=Poppins:wght@300&display=swap");

    body {
        font-family: 'Roboto', sans-serif;
        background-color: #f4f4f9;
        color: #333;
    }

    .container {
        max-width: 1200px;
        margin: auto;
        padding: 0 15px;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
    }

    .col-lg-3,
    .col-md-4,
    .col-sm-6 {
        padding: 15px;
    }

    .section-heading h2.head {
        font-size: 4rem;
        margin-bottom: 0.5rem;
        font-weight: bold;
        font-family: "Allura", serif;
        color: #002c4c;
    }

    /* Card Styling */
    .card {
        display: flex;
        flex-direction: column;
        background-color: #fff;
        border-radius: 15px;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        position: relative;
        height: 100%;
    }

    .card-header {
        background-color: transparent;
        color: #333;
        padding: 10px;
        text-align: center;
        z-index: 2;
        position: relative;
    }

    .card-title {
        margin: 0;
        font-weight: bold;
        max-width: 200px;
        font-size: clamp(0.5rem, 2.5vw, 1rem);
    }

    .card-body {
        padding: 0;
        position: relative;
        overflow: hidden;
        flex-grow: 1;
    }

    .image-container {
        position: relative;
        width: 100%;
        padding-top: 100%; /* Ensures a 1:1 aspect ratio */
        overflow: hidden;
    }

    .card-img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.6);
        display: flex;
        justify-content: center;
        align-items: center;
        opacity: 0;
        transition: opacity 0.5s ease;
        transform: translateY(100%);
        transition: transform 0.5s ease;
    }

    .card:hover .overlay {
        opacity: 1;
        transform: translateY(0);
    }

    .card:hover .card-img {
        transform: scale(1.2);
    }

    .overlay-content {
        text-align: center;
    }

    .btn {
        display: inline-block;
        padding: 10px 20px;
        font-size: 1rem;
        color: #fff;
        background-color: #007bff;
        border-radius: 50px;
        text-decoration: none;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .btn:hover {
        background-color: #0056b3;
        transform: scale(1.05);
    }

    .card-footer {
        padding: 10px;
        text-align: center;
        background-color: #f8f9fa;
    }

    .card-footer-heading {
        font-size: 1.2rem;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .card-footer-text {
        font-size: 0.9rem;
        color: #6c757d;
        margin-bottom: 0;
    }

    .card-text {
        padding: 10px;
        text-align: center;
        background-color: #e9ecef;
        border-bottom-left-radius: 15px;
        border-bottom-right-radius: 15px;
    }

    .card-text p {
        font-size: 1rem;
        font-weight: bold;
        color: #6c757d;
        margin-bottom: 0;
    }

    /* Testimonial Section */
    .testimonial-section h3 {
        font-size: 2rem;
        margin-bottom: 20px;
        font-weight: bold;
        color: #002c4c;
    }

    .testimonial-section p {
        font-size: 1.1rem;
        color: #333;
        margin-bottom: 30px;
    }

    .testimonial {
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 15px;
        margin-bottom: 20px;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
    }

    .testimonial p {
        font-size: 1.1rem;
        color: #333;
        margin-bottom: 10px;
    }

    .testimonial h5 {
        font-size: 1.2rem;
        font-weight: bold;
        color: #002c4c;
        margin-top: 0;
    }

    /* Pagination */
    .pagination {
        display: flex;
        list-style: none;
        padding: 0;
    }

    .pagination li {
        margin: 0 5px;
    }

    .pagination a {
        color: #007bff;
        text-decoration: none;
        padding: 8px 12px;
        border: 1px solid #ddd;
        border-radius: 50px;
        transition: background-color 0.3s ease;
    }

    .pagination a:hover {
        background-color: #007bff;
        color: #fff;
    }

    .pagination {
        background-color: #007bff;
        color: #fff;
        border-color: #007bff;
    }

    /* Add transition effect for pagination */
    .pagination a {
        transition: background-color 0.3s, color 0.3s;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const cards = document.querySelectorAll('.card');

        cards.forEach(card => {
            const cardImg = card.querySelector('.card-img');
            const overlay = card.querySelector('.overlay');

            card.addEventListener('mouseover', function() {
                cardImg.style.transform = 'scale(1.2)';
                overlay.style.transform = 'translateY(0)';
                overlay.style.opacity = '1';
            });

            card.addEventListener('mouseout', function() {
                cardImg.style.transform = 'scale(1)';
                overlay.style.transform = 'translateY(100%)';
                overlay.style.opacity = '0';
            });
        });

        // Add event listener for card clicks
        cards.forEach(card => {
            card.addEventListener('click', function() {
                const link = this.querySelector('.btn');
                if (link) {
                    window.location.href = link.href;
                }
            });
        });
    });
</script>

