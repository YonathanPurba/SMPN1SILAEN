@extends('layouts.frontend.app', ['title' => 'Prestasi'])

@section('content')
<section class="facilities-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h2 class="head">Prestasi</h2>
                    <p style="font-size: 1.2rem;
                    color: #ffffff;
                    font-weight: 400;
                    max-width:1150px;
                    border-bottom: 3px solid #ffffff;
                    padding-bottom: 5px;">Jelajahi prestasi yang telah diraih oleh institusi kami.</p>
                </div>
            </div>
        </div>
        <div style="margin-bottom:-100px" class="row justify-content-center">
            @foreach ($prestasi as $prestasis)
            <div class="col-md-4 mb-4">
                <div class="facility-card">
                    <div class="card-header">
                        <h5 class="card-title">{{ $prestasis->judul_prestasi }}</h5>
                    </div>
                    <img src="{{ asset('folderimage/' . $prestasis->gambar_prestasi) }}" class="card-img-top" alt="Prestasi">
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

<style>@import url("https://fonts.googleapis.com/css2?family=Allura&family=Poppins:wght@300&display=swap");
.head{
    font-family: "Allura", serif;
    font-size: 5rem;
    color: #002c4c;
    margin-top: 30px;
}
    .facility-card {
        border: none;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        background-color: #fff;
    }

    .facility-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
    }

    .facility-card .card-img-top {
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        height: 200px;
        object-fit: cover;
    }

    .facility-card .card-body {
        padding: 20px;
        text-align: center;
    }

    .facility-card .card-text {
        color: #666;
        margin-bottom: 15px;
    }

    .facility-card .btn-primary {
        background-color: #429ebd;
        border-color: #429ebd;
        transition: all 0.3s ease;
    }

    .facility-card .btn-primary:hover {
        background-color: #357a94;
        border-color: #357a94;
    }

    .facility-card .card-date {
        color: #999;
        font-size: 0.9rem;
    }

    .facility-card .card-date i {
        margin-right: 5px;
    }
</style>