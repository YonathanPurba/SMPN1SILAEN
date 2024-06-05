@extends('layouts.frontend.app', ['title' => 'Jumlah Siswa'])

@section('content')
<section class="facilities-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <h3 class="head">Jumlah Siswa</h3>
                    <div class="section-separator"></div>
                    <p style="font-size: 1.2rem;
                    color: #ffffff;
                    font-weight: 400;
                    max-width:1150px;
                    border-bottom: 3px solid #ffffff; /* Garis bawah dengan warna putih */
                    padding-bottom: 5px;" >Jumlah Siswa per Kelas dapat dilihat pada tampilan ini</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="{{ route('jumlahsiswa.index') }}" method="GET" class="mb-4">
                    <div class="form-group">
                        <label for="kelas">Cari Kelas:</label>
                        <select class="form-control" id="kelas" name="kelas">
                            <option value="">Semua Kelas</option>
                            @foreach($kelas as $k)
                            <option value="{{ $k->id_kelas }}" {{ request()->input('kelas') == $k->id_kelas ? 'selected' : '' }}>{{ $k->nama_kelas }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Cari</button>
                </form>
            </div>
        </div>
        

        <div class="row">
            @foreach($jumlah_siswa as $k)
            @if(request()->input('kelas') == null || request()->input('kelas') == $k->id_kelas)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="facility-card">
                    <div class="card-content">
                        <h5 class="card-title">Kelas {{ $k->kelas->snama_kelas }}</h5>
                        <p class="card-text">
                            Jumlah Siswa Laki-laki: {{ $k->jumlah_siswa_laki_laki }} <br>
                            Jumlah Siswa Perempuan: {{ $k->jumlah_siswa_perempuan }} <br>
                            Total Siswa: {{ $k->total }}
                        </p>
                    </div>
                </div>
            </div>
            @endif
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
            .card-img-bg {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
    background-color: #0099ff;
    color: #fff;
    font-size: 5rem;
}

.card-title {
    font-size: 1.5rem;
    font-weight: bold;
    margin-bottom: 10px;
}

.card-text {
    font-size: 1rem;
    line-height: 1.5;
}
.facility-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
    position: relative;
    overflow: hidden;
    border: none;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    background-color: #0099ff;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 200px;
}

.facility-card .card-content {
    text-align: center;
    color: #fff;
    padding: 20px;
}

.facility-card:hover .card-content {
    color: #0099ff;
}

.card-title {
    font-size: 1.5rem;
    font-weight: bold;
    margin-bottom: 10px;
}

.card-text {
    font-size: 1rem;
    line-height: 1.5;
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