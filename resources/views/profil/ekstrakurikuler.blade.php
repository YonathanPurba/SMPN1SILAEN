@extends('layouts.frontend.app',[
    'title' => 'Ekstrakurikuler',
])
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekstrakurikuler</title>
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
</head>
<body>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
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
    </div>

    <section class="upcoming-events section-padding-100-0 mb-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Ekstrakurikuler</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates, quia?</p>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ( $ekstrakulikuler as $ekstrakulikulers )
                <div class="col-md-6">
                    <div class="event">
                        <img src="/img/picture/eks1.jpg" alt="Paskibra" style="max-width: 100%; height: auto;">
                        <div class="event-title">Paskibra</div>
                        <div class="event-description">
                            Paskibra adalah salah satu ekstrakurikuler yang mengajarkan kedisiplinan, kerja sama tim, dan kebanggaan akan negara melalui latihan dan penampilan pada upacara-upacara sekolah dan nasional.
                        </div>
                    </div>
                </div>  
                @endforeach
                
                <div class="col-md-6">
                    <div class="event">
                        <img src="/img/picture/eks2.jpg" alt="Teater" style="max-width: 100%; height: auto;">
                        <div class="event-title">Teater</div>
                        <div class="event-description">
                            Ekstrakurikuler teater memungkinkan siswa untuk mengembangkan bakat seni peran mereka, belajar kerjasama tim, dan meningkatkan kepercayaan diri melalui latihan dan pertunjukan di sekolah.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
@stop