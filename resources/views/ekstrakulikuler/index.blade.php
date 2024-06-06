@extends('layouts.frontend.app',[
    'title' => 'Ekstrakurikuler',
])
@section('content')

<style>
@import url("https://fonts.googleapis.com/css2?family=Allura&family=Poppins:wght@300&display=swap");

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
        flex-direction: column;
    }

    .section-heading h3 {
        font-size: 4rem;
    }
}

@media (max-width: 767px) {
    .section-heading h3 {
        font-size: 3rem;
    }

    .event-title {
        font-size: 20px;
    }

    .event-description {
        font-size: 14px;
    }
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<section class="upcoming-events section-padding-100-0 mb-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3 class="head animate__animated animate__fadeInDown">Ekstrakurikuler</h3>
                    <p style="font-weight:400;font-size:20px;color: #002c4c;border-bottom: 4px solid#002c4c; padding-bottom: 5px; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;" class="animate__animated animate__fadeInDown">Jelajahi keberagaman ekstrakurikuler SMP Negeri 1 Silaen melalui situs web kami yang menyajikan informasi dan kegiatan yang inspiratif untuk pengembangan siswa secara kreatif dan sosial.</p>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ($ekstrakulikuler as $ekstrakulikulers)
            <div class="col-md-6 col-lg-4">
                <div class="event animate__animated animate__fadeInUp">
                    <img src="{{ asset('folderimage/' . $ekstrakulikulers->gambar_ekstrakulikuler) }}" alt="{{ $ekstrakulikulers->judul_ekstrakulikuler }}">
                    <div class="event-title">{{ $ekstrakulikulers->judul_ekstrakulikuler }}</div>
                    <div class="event-description">
                        <a href="{{ route('ekstrakulikuler.show',$ekstrakulikulers->slug) }}" class="btn btn-primary btn-sm">Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@stop
