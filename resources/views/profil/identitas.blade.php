

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Identitas Sekolah</title>
    <style>
        .page-content {
            display: flex;
            justify-content: center; /* Adjust as needed */
            gap: 20px; /* Adjust the gap between items as needed */
            flex-wrap: wrap; /* Center align horizontally */
            align-items: center;
            
        }

        .page-content p {
            margin: 0;
            padding: 5px; /* Add padding inside each paragraph */ /* Center-align paragraph content */
            flex: 1; /* Allow paragraphs to grow and shrink within flex container */
             /* Remove default paragraph margins */
        }

        .t-dua {
            max-width: 0%; 
        }

        .identitas-name {
            max-width: 18%;

        }

        h4 {
            width: 100%; /* Ensure the h4 takes full width */
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