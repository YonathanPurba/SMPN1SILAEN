@extends('layouts.frontend.app',[
    'title' => 'Ekstrakurikuler',
])
@section('content')

<style>@import url("https://fonts.googleapis.com/css2?family=Allura&family=Poppins:wght@300&display=swap");
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
    }
    .section-heading h3 {
        font-size: 6rem;

        margin-bottom: 30px;
        text-align: center;
    font-family: "Allura", serif;
    color: #002c4c;
    }
    .carousel-item img {
        max-height: 300px; 
        object-fit: cover;
    }
    .event {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0px 3px 15px rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
        position: relative;
        overflow: hidden;
        transition: transform 0.5s;
        display: flex;
        flex-direction: column;
    }
    .event:hover {
        transform: scale(1.05);
    }
    .event img {
        width: 100%;
        height: auto;
        aspect-ratio: 16 / 9;
        object-fit: cover;
    }
    .event-title {
        font-size: 24px;
        font-weight: bold;
        color: #333;
        margin: 15px 15px 0;
    }
    .event-description {
        color: #666;
        line-height: 1.6;
        padding: 0 15px 15px;
        flex-grow: 1;
    }
    .event-description .btn {
        margin-top: auto;
    }
    @media (min-width: 768px) {
        .event {
            display: flex;
            flex-direction: column;
        }
    }
</style>
<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
<section class="upcoming-events section-padding-100-0 mb-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3 class="head animate__animated animate__fadeInDown">Ekstrakurikuler</h3>
                    <p style="font-weight:400;font-size:20px;color:#ffffff;border-bottom: 4px solid #ffffff; /* Garis bawah dengan warna putih */
                    padding-bottom: 5px;" class="animate__animated animate__fadeInDown">Lorem ipsum dolor sit amet adipisicing elit. Dignissimos assumenda fuga laudantium et quidem quia vero? Omnis sapiente corrupti labore!</p>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ($ekstrakurikuler as $ekstrakurikulers)
            <div class="col-md-6">
                <div class="event animate__animated animate__fadeInUp">
                    <img src="{{ asset('folderimage/' . $ekstrakurikulers->gambar_ekstrakurikuler) }}" alt="{{ $ekstrakurikulers->judul_ekstrakurikuler }}">
                    <div class="event-title">{{ $ekstrakurikulers->judul_ekstrakurikuler }}</div>
                    <div class="event-description">
                        <a href="{{ route('ekstrakurikuler.show',$ekstrakurikulers->slug) }}" class="btn btn-primary btn-sm">Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@stop
