@extends('layouts.frontend.app', ['title' => 'Prestasi'])

@section('content')
<section class="facilities-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center">
                    <h1 class="main-head animate__animated animate__fadeInDown">Pencapaian Sekolah Kami</h1>
                    <p class="sub-text animate__animated animate__fadeInDown">Jelajahi prestasi yang telah diraih oleh sekolah kami.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center animate__animated animate__fadeInUp">
            <div class="col-12">
            </div>
        </div>
        <div style="font-weight: bold" class="row justify-content-center animate__animated animate__fadeInUp">
            <div class="col-md-6">
                <p class="intro-text" style="font-weight: bold" >Selamat datang di halaman prestasi kami! Di sini, Anda dapat menjelajahi berbagai pencapaian yang telah diraih oleh siswa dan staf kami di berbagai bidang.</p>
            </div>
            <div class="col-md-6">
                <p class="intro-text" style="font-weight: bold" >Kami bangga dapat berbagi kisah sukses dan prestasi luar biasa yang menunjukkan dedikasi, kerja keras, dan semangat juang komunitas sekolah kami.</p>
            </div>
        </div>
        <div class="row justify-content-center animate__animated animate__fadeInUp">
            <div class="col-12">
                <h3 class="sub-head animate__animated animate__fadeInDown">Daftar Prestasi</h3>
            </div>
        </div>
        <div class="row justify-content-center animate__animated animate__fadeInUp">
            @foreach ($prestasi as $prestasis)
            <div class="col-md-4 mb-4">
                <div class="facility-card d-flex flex-column h-100 animate__animated animate__fadeInUp">
                    <div class="card-header">
                        <h5 class="card-title">{{ $prestasis->judul_prestasi }}</h5>
                    </div>
                    <div class="card-img-container">
                        <img src="{{ asset('folderimage/' . $prestasis->gambar_prestasi) }}" class="card-img-top" alt="Prestasi">
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{ substr(strip_tags($prestasis->deskripsi), 0, 100) }}...</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{ route('prestasi.show', ['prestasi' => $prestasis->slug]) }}" class="btn btn-primary">Selengkapnya</a>
                            <div class="card-date">
                                <i class="fa fa-calendar"></i>
                                <span>{{ date('d M Y', strtotime($prestasis->tanggal_prestasi)) }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<style>
@import url("https://fonts.googleapis.com/css2?family=Allura&family=Poppins:wght@300&display=swap");

.main-head {
    font-family: sans-serif;
    font-size: 5rem;
    color: #002c4c;
    margin-top: 30px;
    text-align: center;
}

.head {
    font-family: sans-serif;
    font-size: 3rem;
    color: #002c4c;
    text-align: center;
    margin-top: 10px;
}

.sub-text {
    font-size: 1.2rem;
    color: #ffffff;
    font-weight: 400;
    max-width: 1150px;
    border-bottom: 3px solid #ffffff;
    padding-bottom: 5px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    text-align: center;
    margin: 20px auto;
}

.sub-head {
    font-family: "Poppins", sans-serif;
    font-size: 2rem;
    color: #002c4c;
    text-align: center;
    margin-top: 20px;
    margin-bottom: 20px;
}

.intro-text {
    font-family: "Poppins", sans-serif;
    font-size: 1rem;
    color: #333;
    text-align: justify;
    margin-bottom: 15px;
}

.facility-card {
    border: none;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
    background-color: #fff;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    animation-delay: 0.2s;
}

.facility-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
}

.facility-card .card-header {
    background-color: #ffffff;
    color: #002c4c;
    padding: 10px;
    text-align: center;
}

.facility-card .card-img-container {
    position: relative;
    width: 100%;
    padding-bottom: 56.25%; /* 16:9 aspect ratio */
    overflow: hidden;
}

.facility-card .card-img-top {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.facility-card:hover .card-img-top {
    transform: scale(1.05);
}

.facility-card .card-body {
    padding: 20px;
    text-align: center;
    flex-grow: 1;
}

.facility-card .card-title {
    font-family: "Poppins", sans-serif;
    font-size: 1.5rem;
    color: #002c4c;
    margin-bottom: 15px;
}

.facility-card .card-text {
    color: #666;
    margin-bottom: 15px;
}

.facility-card .btn-primary {
    background-color: #ff6600;
    border-color: #ff6600;
    transition: all 0.3s ease;
    font-family: "Poppins", sans-serif;
}

.facility-card .btn-primary:hover {
    background-color: #0099ff;
    border-color: #0099ff;
}

.facility-card .card-date {
    color: #999;
    font-size: 0.9rem;
}

.facility-card .card-date i {
    margin-right: 5px;
}

.facility-card .card-footer {
    background-color: #f8f9fa;
    padding: 10px;
    text-align: center;
    border-top: 1px solid #e9ecef;
}

.facility-card .footer-text {
    color: #666;
    font-size: 0.9rem;
}
</style>

