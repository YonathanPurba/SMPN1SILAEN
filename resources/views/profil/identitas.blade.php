<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Identitas Sekolah</title>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
<<<<<<< HEAD
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Allura&family=Poppins:wght@300&display=swap");
=======
<<<<<<< HEAD
    <title>SMPN 1 SILAEN | Identitas Sekolah</title>
    <style>@import url("https://fonts.googleapis.com/css2?family=Allura&family=Poppins:wght@300&display=swap");
        .page-content {
            display: flex;
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
            justify-content: center;
            align-items: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            flex-wrap: wrap;
            margin-bottom: 20px;
        }

        .page-content img, .akreditas img {
            max-width: 300px;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .underline {
            border-bottom: 3px solid #0099ff;
            display: inline-block;
            padding-bottom: 5px;
        }

        .animation {
            opacity: 0;
            transform: translateX(-300px);
            transition: all 0.7s ease-out;
            transition-delay: 0.4s;
        }

        .scroll-animation {
            opacity: 1;
            transform: translateX(0);
        }

        .identitas-names, .identitas-isi, .t-dua {
            flex: 1;
            margin: 5px;
        }

        .identitas-names, .identitas-isi {
            min-width: 200px;
        }

        @media (max-width: 768px) {
            .identitas-names, .identitas-isi {
                min-width: 100%;
                text-align: center;
            }

            .page-content, .page-contents {
                flex-direction: column;
            }

            h1.head {
                font-size: 40px;
            }

            h2.underline {
                font-size: 24px;
            }

            h5.underline {
                font-size: 18px;
            }
        }
    </style>
</head>
<body>
    @extends('layouts.frontend.app',[
    'title' => 'Identitas Sekolah',
])
@section('content')

<section class="upcoming-events section-padding-100-0 mb-0">
    <div class="container animate__animated animate__fadeInDown">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h1 class="head">Identitas Sekolah</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="regular-page-area section-padding-1">
    <div class="container animate__animated animation">
        <div class="row">
            <div class="col-12">
                <div class="page-content">
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

<div class="regular-page-area section-padding-100 animation">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-contents">
                    <center><h2>Akreditas</h2><br>
                    <h5>Akreditas SMP Negeri 1 Silaen saat ini yaitu A.</h5>
                    <img src="img/picture/akreditas.png" alt="Akreditasi Sekolah"></center> 
                    <p>
                        Sekolah kami dengan bangga mengumumkan bahwa kami telah mendapatkan akreditasi A dari Badan Akreditasi Nasional. Pengakuan ini mencerminkan komitmen kami untuk memberikan pendidikan berkualitas tinggi, kurikulum yang inovatif, serta lingkungan belajar yang mendukung perkembangan akademis dan karakter siswa. Dengan akreditasi ini, kami terus berupaya menjaga standar pendidikan yang unggul dan membekali siswa kami dengan keterampilan serta pengetahuan yang diperlukan untuk sukses di masa depan.                      
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>
<script>
const the_animation = document.querySelectorAll('.animation');

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('scroll-animation');
            observer.unobserve(entry.target); // Stop observing the element once it has been animated
        }
    });
}, {
    threshold: 0.5
});

the_animation.forEach((element) => {
    observer.observe(element);
});
</script>
@stop
</body>
</html>
