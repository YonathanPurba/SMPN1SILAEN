@extends('layouts.frontend.app', ['title' => 'Fasilitas'])

@section('content')
<section class="facilities-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <h3 class="head animate__animated  animate__fadeInDown">Fasilitas</h3>
<<<<<<< HEAD
=======
                    <div class="section-separator"></div>
>>>>>>> 76d93d8566232d8baa5fd42e785a524257dafe76
                    <p style="font-size: 1.2rem;
                    color: #ffffff;
                    font-weight: 400;
                    max-width:1150px;
                    border-bottom: 3px solid #ffffff; /* Garis bawah dengan warna putih */
                    padding-bottom: 5px;
                    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;" class="animate__animated  animate__fadeInDown" >Nikmati fasilitas terbaik yang kami sediakan untuk memberikan pengalaman yang tak terlupakan.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($fasilitas as $fasilitases)
            <div class="col-lg-4 col-md-6 mb-4 animate__animated animate__fadeInUp">
                <div class="facility-card">
                    <div class="card-img">
                        <img src="{{ asset('folderimage/' . $fasilitases->gambar_fasilitas) }}" class="card-img-top" alt="Kolam Renang">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $fasilitases->nama_fasilitas }}</h5>
                        <p class="card-text">{{ Str::limit($fasilitases->deskripsi, 100) }}</p>
                        <a href="{{ route('fasilitas.show', $fasilitases->slug) }}" class="btn btn-primary btn-sm">Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<style>@import url("https://fonts.googleapis.com/css2?family=Allura&family=Poppins:wght@300&display=swap");
.head{
    font-family: "Allura", serif;
    font-size: 5rem;
    color: #002c4c;
    margin-top: 30px;
}
    .facility-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
        position: relative;
        overflow: hidden;
        border: none;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        background-color: #0099ff;
    }

    .facility-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 30px rgba(0, 0, 0, 0.2);
        background-color: #fff;
    }

    .facility-card .card-img {
        overflow: hidden;
        padding-bottom: 70.25%; /* Rasio 16:9 (100/16*9) */
        width: 100%;
        position: relative;
    }

    .facility-card .card-img-top {
        transition: transform 0.3s ease;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .facility-card:hover .card-img-top {
        transform: scale(1.1);
    }

    .section-heading {
        margin-bottom: 40px;
    }

    .section-title {
        font-size: 32px;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    .section-separator {
        width: 80px;
        height: 3px;
        background-color: #429ebd;
        margin: 15px auto;
    }

    .section-description {
        max-width: 600px;
        margin: 15px auto 0;
        font-size: 18px;
        color: #666;
    }

    .card-body {
        padding: 20px;
        text-align: center;
        color: #fff;
    }

    .facility-card:hover .card-body {
        color: #333;
    }

    .card-title {
        font-weight: bold;
        margin-bottom: 10px;
    }

    .card-text {
        margin-bottom: 15px;
    }

    @media (max-width: 767px) {
        .section-description {
            font-size: 16px;
        }
    }
</style>
@endsection