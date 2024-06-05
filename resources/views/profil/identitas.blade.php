

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
    <title>SMPN 1 SILAEN | Identitas Sekolah</title>
    <style>@import url("https://fonts.googleapis.com/css2?family=Allura&family=Poppins:wght@300&display=swap");
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
        .identitas-names{
            max-width: 50%;
            }
        .head{
            background-color: #0099ff;
            padding: 10px;
            border-radius: 20px;
            color: #f5f5f5;
            font-family: "Allura", serif;
            font-size: 60px
        }

        h4 {
            width: 100%; /* Ensure the h4 takes full width */
            margin-top: 0;
        }
        /* Gaya untuk seluruh halaman */
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f5f5f5;
}

/* Gaya untuk judul */
h1, h3, h4, h5 {
    color: #333;
    text-align: center;
    font-family: "Allura", serif;
}

/* Gaya untuk konten utama */
.page-content {
    display: flex;
    justify-content: center;
    gap: 30px;
    flex-wrap: wrap;
    align-items: center;
    background-color: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Gaya untuk gambar */
.page-content img {
    max-width: 300px;
    max-height: 300px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

/* Gaya untuk paragraf */
.page-content p {
    margin: 0;
    padding: 10px;
    flex: 1;
    font-size: 16px;
    line-height: 1.5;
    color: #555;
}

/* Gaya untuk akreditas */
.akreditas {
    text-align: center;
    margin-top: 50px;
}

.akreditas img {
    max-width: 280px;
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
                        <h2 class="underline">Identitas SMP N1 Silaen</h2>
                        <h5 class="underline">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, aspernatur?</h5>
                    </center>
                    <img style="max-width: 300px;max-height:300px;border-radius:20px" src="/img/picture/imgL1.jpg" alt=""> 
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
                <div class="page-content">
                    <center><h2 class="underline">Akreditas</h2><br>
                    <h5 class="underline">Lorem ipsum, dolor sit amet cl Lorem ipsum dolor sit amet.onsectetur adipisicing elit. Totam, et!</h5></center> 
                    <img src="img/picture/akreditas.png" class="mr-3" style="width: 280px;" alt="">
                    <p class="identitas-names">
                        Lorem ipsum dolor sit  amet consectetur adipisicing elit. Explicabo minima quo, consectetur quibusdam impedit praesentium placeat ex est repellendus eum quidem a porro asperiores culpa non nesciunt, vel ipsum, reprehenderit sapiente! Molestiae est suscipit alias, hic dolor placeat debitis distinctio architecto illo ullam repellat, assumenda quos! Expedita doloribus perspiciatis aspernatur.
                      </p>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>
<script>
        const the_animation = document.querySelectorAll('.animation')

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('scroll-animation')
        }
            else {
                entry.target.classList.remove('scroll-animation')
            }
        
    })
},
   { threshold: 0.5
   });
//
  for (let i = 0; i < the_animation.length; i++) {
   const elements = the_animation[i];

    observer.observe(elements);
  } 
</script>
@stop
</body>
</html>