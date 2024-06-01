@extends('layouts.frontend.app',[
    'title' => 'Ekstrakurikuler',
])
@section('content')

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .section-heading h3 {
            color: #333;
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 30px;
        }
        .carousel-item img {
            max-height: 300px; 
            object-fit: cover;
        }
        .event {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 3px 15px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-bottom: 30px;
            position: relative;
            overflow: hidden;
            transition: transform 0.5s;
            
        }
        .event:hover {
            transform: scale(1.05);
        }
        .event .event-title {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-bottom: 15px;
        }
        .event .event-description {
            color: #666;
            line-height: 1.6;
        }
    </style>

    {{-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/img/picture/imgL1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/img/picture/imgL2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/img/picture/imgL3.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div> --}}

    <section class="upcoming-events section-padding-100-0 mb-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Ekstrakurikuler</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($ekstrakulikuler as $ekstrakulikulers)
                <div class="col-md-6">
                    <div class="event">
                        <img src="{{ asset('folderimage/' . $ekstrakulikulers->gambar_ekstrakulikuler) }}" alt="Paskibra" style="width: 100%; height: auto;">
                        <div class="event-title">{{ $ekstrakulikulers->judul_ekstrakulikuler }}</div>
                        <div class="event-description">
                            {{ $ekstrakulikulers->deskripsi_ekstrakulikuler }}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@stop
