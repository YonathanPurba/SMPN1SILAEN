<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Identitas Sekolah</title>
<<<<<<< HEAD
=======
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 2eee8d4fa76298fec518d3fac9f34826d5587200
    <style>
        .page-content {
            display: flex;
<<<<<<< HEAD
=======
            justify-content: center; /* Adjust as needed */
            gap: 20px; /* Adjust the gap between items as needed */
            flex-wrap: wrap; /* Center align horizontally */
            align-items: center;
            
        }
=======
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Allura&family=Poppins:wght@300&display=swap");
>>>>>>> 0a736fdf8103fd43e4ed0c364ae98ed5b440d1a4
>>>>>>> ff4396a84ac782c0b9edf21e2fc027a218375a0e
=======
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Allura&family=Poppins:wght@300&display=swap");
>>>>>>> 76d93d8566232d8baa5fd42e785a524257dafe76
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        h1, h3, h4, h5 {
            color: #333;
            text-align: center;
            font-family: "Allura", serif;
        }

        .page-content, .page-contents {
            display: flex;
>>>>>>> 2eee8d4fa76298fec518d3fac9f34826d5587200
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            align-items: center;
        }

        .page-content p {
            margin: 0;
            padding: 5px;
            flex: 1;
<<<<<<< HEAD
        }

        .t-dua {
            max-width: 0%;
=======
            margin: 10px;
            
        }

        .identitas-names, .identitas-isi {
            min-width: 20px;
>>>>>>> 2eee8d4fa76298fec518d3fac9f34826d5587200
        }

        .identitas-name {
            max-width: 18%;
        }

        h4 {
            width: 100%;
            margin-top: 0;
        }
    </style>
</head>
<body>
    @extends('layouts.frontend.app',[
    'title' => 'Identitas Sekolah',
])
@section('content')

<section class="upcoming-events section-padding-100-0 mb-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3>Identitas Sekolah</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="regular-page-area section-padding-1">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-content">
<<<<<<< HEAD
                    <p class="identitas-name">
                      NPSN <br>
                      Status <br>
                      Bentuk Pendidikan <br>
                      Status Kepemilikan <br>
                      SK Pendirian Sekolah <br>
                      Tanggal SK Pendirian <br>
                      SK Izin Operasional <br>  
                    </p>
                    <p class="t-dua">
                        : <br>
                        : <br>
                        : <br>
                        : <br>
                        : <br>
                        : <br>
                        : <br>
                    </p>
                    <p class="identitas-isi">
                        10208496 <br>
                        Negeri <br>
                        SMP <br>
                        Pemerintah Daerah <br>
                        21/NP/02 N/1959 <br>
                        1959-08-05 <br>
                        420/2127.Disdikpora/2022 <br>
                    </p>
=======
                    <center>
                        <h2 class="underline">Identitas SMPN 1 Silaen</h2>
                        <h5 class="underline">Berikut identitas SMP Negeri 1 Silaen berdasarkan Data Pokok Pendidikan</h5>
                    </center>
                    <img src="/img/picture/imgL1.jpg" alt="Identitas Sekolah"> 
                    <p class="identitas-names">
    NPSN <br>
    Status <br>
    Bentuk Pendidikan <br>
    Status Kepemilikan <br>
    SK Pendirian Sekolah <br>
    Tanggal SK Pendirian <br>
    SK Izin Operasional <br>  
</p>

<p class="identitas-isi">
    : 10208496 <br>
    : Negeri <br>
    : SMP <br>
    : Pemerintah Daerah <br>
    : 21/NP/02 N/1959 <br>
    : 1959-08-05 <br>
    : 420/2127.Disdikpora/2022 <br>
</p>

>>>>>>> 2eee8d4fa76298fec518d3fac9f34826d5587200
                </div>
            </div>
        </div>
    </div>
</div>

<div class="regular-page-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-content">
                    <h4>Akreditas</h4>
                    <img src="img/picture/akreditas.png" class="mr-3" style="width: 280px;" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

@stop
</body>
</html>
