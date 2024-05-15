@extends('layouts.frontend.app', ['title' => 'Fasilitas'])

@section('content')
<section class="facilities-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3>Fasilitas</h3>
                    <p>Berikut adalah fasilitas dari SMP N1 Silaen</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card facility-card">
                    <img src="{{ asset('img/picture/imgL1.jpg') }}" class="card-img-top" alt="Kolam Renang">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-swimming-pool"></i> Kolam Renang</h5>
                        <p class="card-text">Nikmati kesegaran di kolam renang kami yang luas dan bersih.</p>
                        <div class="facility-info">Kolam renang dengan luas 500m2 dan fasilitas lengkap</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card facility-card">
                    <img src="{{ asset('img/picture/imgL2.jpg') }}" class="card-img-top" alt="Lapangan Olahraga">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-futbol"></i> Lapangan Olahraga</h5>
                        <p class="card-text">Berbagai lapangan olahraga tersedia untuk memenuhi hasrat berolahraga Anda.</p>
                        <div class="facility-info">Lapangan futsal, basket, dan tenis dengan standar profesional</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card facility-card">
                    <img src="{{ asset('img/picture/imgL4.jpg') }}" class="card-img-top" alt="Lapangan Tenis">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-tennis-ball"></i> Lapangan Tenis</h5>
                        <p class="card-text">Lapangan tenis dengan standar profesional dan fasilitas lengkap.</p>
                        <div class="facility-info">Lapangan tenis dengan lampu penerangan untuk bermain di malam hari</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card facility-card">
                    <img src="{{ asset('img/picture/imgL4.jpg') }}" class="card-img-top" alt="Lapangan Basket">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-basketball-ball"></i> Lapangan Basket</h5>
                        <p class="card-text">Lapangan basket dengan lantai berkualitas tinggi dan fasilitas pendukung.</p>
                        <div class="facility-info">Lapangan basket dengan ring standar internasional</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card facility-card">
                    <img src="{{ asset('img/picture/imgL3.jpg') }}" class="card-img-top" alt="Lapangan Futsal">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-futbol"></i> Lapangan Futsal</h5>
                        <p class="card-text">Lapangan futsal dengan standar internasional dan fasilitas lengkap.</p>
                        <div class="facility-info">Lapangan futsal dengan lantai sintetis berkualitas tinggi</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card facility-card">
                    <img src="{{ asset('img/picture/imgL3.jpg') }}" class="card-img-top" alt="Lingkungan Asri">
                    <div class="card-body">
                        <h5 class="card-title"></i> Lingkungan Asri</h5>
                        <p class="card-text">Rileks dan nikmati suasana alam yang sejuk dan menyegarkan.</p>
                        <div class="facility-info">Taman asri dengan area berkebun dan jogging track</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

<style>
    .facility-card {
        transition: transform 0.3s ease;
        position: relative;
        overflow: hidden;
        border: none;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    .facility-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 30px rgba(0, 0, 0, 0.2);
    }

    .facility-card .card-img-top {
        transition: filter 0.3s ease;
        height: 200px;
        object-fit: cover;
    }

    .facility-card:hover .card-img-top {
        filter: brightness(0.8);
    }

    .facility-info {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        padding: 15px;
        background-color: #429ebd;
        color: #fff;
        transform: translateY(-100%);
        transition: transform 0.3s ease;
        opacity: 0;
        visibility: hidden;
        text-align: center;
    }

    .facility-card:hover .facility-info {
        transform: translateY(0);
        opacity: 1;
        visibility: visible;
    }

    .card-body {
        padding: 20px;
        text-align: center;
    }

    .card-title {
        font-weight: bold;
        margin-bottom: 10px;
    }

    .card-title i {
        margin-right: 10px;
    }
</style>