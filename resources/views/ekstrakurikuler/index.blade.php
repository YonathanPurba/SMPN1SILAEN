@extends('layouts.frontend.app',[
    'title' => 'Ekstrakurikuler',
])
@section('content')

<style>
    body {

        color: #333;
        font-family: 'Poppins', sans-serif;
    }

    .hero-section {
        background: url('/path/to/your/hero-image.jpg') no-repeat center center/cover;
        height: 80vh;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #fff;
        text-align: center;
        position: relative;
    }

    .hero-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 1;
    }

    .hero-content {
        position: relative;
        z-index: 2;
    }

    .hero-content h1 {
        font-size: 4rem;
        margin-bottom: 20px;
    }

    .hero-content p {
        font-size: 1.5rem;
        margin-bottom: 30px;
    }

    .hero-content .btn {
        font-size: 1.2rem;
        padding: 15px 30px;
    }

    .section-heading {
        text-align: center;
        margin-bottom: 50px;
        padding: 50px 0;
        color: #ffffff;
    }

    .section-heading h3 {
        font-size: 2.5rem;
        margin-bottom: 20px;
        font-family: 'Allura', cursive;
    }

    .section-heading p {
        font-size: 1.2rem;
        font-weight: 300;
    }

    .cards-container {
        display: grid;
        gap: 30px;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));

    }

    .card {
        background-color: #fff;
        border-radius: 20px;
        box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: transform 0.3s;
        position: relative;
    }

    .card::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.2);
        z-index: 1;
        opacity: 0;
        transition: opacity 0.3s;
    }

    .card:hover::before {
        opacity: 1;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0px 15px 40px rgba(0, 0, 0, 0.2);
    }

    .card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
    }

    .card-content {
        padding: 30px;
        position: relative;
        z-index: 2;
    }

    .card-title {
        font-size: 1.5rem;
        font-weight: bold;
        margin-bottom: 20px;
        color: #002c4c;
    }

    .card-description {
        color: #333;
        line-height: 1.6;
        margin-bottom: 20px;
    }

    .card-description p {
        margin-bottom: 10px;
    }

    .card-details {
        background-color: rgba(255, 255, 255, 0.8);
        padding: 15px;
        border-radius: 10px;
        margin-top: 20px;
    }

    .card-details h5 {
        font-size: 1.2rem;
        color: #002c4c;
        margin-bottom: 10px;
    }

    .card-details ul {
        list-style-type: none;
        padding: 0;
    }

    .card-details ul li {
        margin-bottom: 5px;
    }

    .btn {
        background-color: #FF6600;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        font-weight: bold;
        font-size: 14px;
        text-transform: uppercase;
        transition: background-color 0.3s;
        cursor: pointer;
    }

    .btn:hover {
        background-color: #002c4c;
        color: #fff
    }

    .testimonials {
        margin-top: -90px;
        padding: 50px 0;
        text-align: center;

    }

    .testimonials h3 {
        font-size: 2rem;
        margin-bottom: 40px;
        color: #002c4c;
    }

    .testimonial-item {
        max-width: 800px;
        margin: 0 auto 30px;
    }

    .testimonial-item p {
        font-size: 1.2rem;
        font-style: italic;
        color: #ffffff;
    }

    .testimonial-item h5 {
        margin-top: 20px;
        font-size: 1.1rem;
        color: #002c4c;
    }

    .cta-section {
        background-color: #002c4c;
        color: #fff;
        padding: 50px 0;
        text-align: center;
    }

    .cta-section h3 {
        font-size: 2.5rem;
        margin-bottom: 20px;
    }

    .cta-section p {
        font-size: 1.2rem;
        margin-bottom: 30px;
    }

    .cta-section .btn {
        font-size: 1.2rem;
        padding: 15px 30px;
    }

    @import url("https://fonts.googleapis.com/css2?family=Allura&family=Poppins:wght@300&display=swap");
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

<section id="ekstrakurikuler" class="upcoming-events section-padding-100-0 mb-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3 style="margin-top: -100px;font-size:4rem" class="animate__animated animate__fadeInDown">Ekstrakurikuler</h3>
                    <p style="color: #ffffff;font-weight:bold" class="animate__animated animate__fadeInDown">Jelajahi keberagaman ekstrakurikuler SMP Negeri 1 Silaen melalui situs web kami yang menyajikan informasi dan kegiatan yang inspiratif untuk pengembangan siswa secara kreatif dan sosial.</p>
                </div>
            </div>
        </div>
        <div class="cards-container">
            @foreach ($ekstrakurikuler as $ekstrakurikulers)
                <div class="card animate__animated animate__fadeInUp">
                    <img src="{{ asset('folderimage/' . $ekstrakurikulers->gambar_ekstrakurikuler) }}" alt="{{ $ekstrakurikulers->judul_ekstrakurikuler }}">
                    <div class="card-content">
                        <h4 class="card-title">{{ $ekstrakurikulers->judul_ekstrakurikuler }}</h4>
                        <div class="card-description">
                            <p>{{ $ekstrakurikulers->deskripsi }}</p>
                            <ul>
                                <li><i class="fas fa-check-circle"></i> Aktifitas yang menarik</li>
                                <li><i class="fas fa-check-circle"></i> Pengembangan keterampilan</li>
                                <li><i class="fas fa-check-circle"></i> Kesempatan berpartisipasi dalam event</li>
                            </ul>
                        </div>
                        <a href="{{ route('ekstrakurikuler.show', $ekstrakurikulers->slug) }}" class="btn">Selengkapnya</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const container = document.querySelector('.cards-container');
        const cards = container.querySelectorAll('.card');
        if (cards.length <= 4) {
            container.style.gridTemplateColumns = `repeat(${cards.length}, 1fr)`;
        }
    });
</script>

@stop
