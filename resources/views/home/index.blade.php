<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <style>
.imgcntn {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.imgcntn .item {
  padding: 10px; /* Jarak antara konten dan garis kotak */
  margin: 10px; /* Jarak antara kotak */
  padding-left: 20px
}

.imgcntn img {
  width: 300px; /* Atur lebar gambar sesuai kebutuhan */
  height: auto; /* Untuk menjaga aspek rasio gambar */
  border-radius: 10px;
}

.imgcntn a {
  display: block;
  font-size: 15px;
  margin-top: 5px;
}
h3{
    padding: 20px;
    font-size: 10px;
    font-family: 'Times New Roman', Times, serif;
}
.imgcntn a span{    
    color:#E68c3a;
    
}
.map{
 text-align: center;
}
.mapp{
    position:relative;
    margin-left: 26%;
   max-width: 700px;
}
.gmap{
    width: 1000px;
    height: 350px;
    max-width: 1000px;
    margin-bottom:80px; 
}
.shadow{
    width: 1000px;
    height: 380px;
    position: relative;
    bottom: 420px;
    left: 50px;
   
    z-index: -1;
}
    </style>
</head>
<body>
    @extends('layouts.frontend.app',[
    'title' => 'Home',
])
@section('content')
<section class="hero-area bg-img bg-overlay-2by5" style="background-image: url(img/bg/pict1.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">                
                <div class="hero-content text-center">
                    <h2 id="typing-text"></h2>
                    <a href="#" class="btn clever-btn">Lihat Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</section>

<h3>SMP N1 SILAEN</h3>
<div class="content">
    <div class="imgcntn">
        <div class="item">
        <img src="img/picture/imgL1.jpg" alt="img">
        <a href="">Sekolah Kami<span>></span></a>
      </div>
      <div class="item">
        <img src="img/picture/imgL2.jpg" alt="img">
        <a href="">Tentang kami <span>></span></a>
      </div>
      <div class="item">
        <img src="img/picture/imgL3.jpg" alt="img">
        <a href="">Akademik <span>></span></a>
      </div>
      <div class="item">
        <img src="img/picture/imgL4.jpg" alt="img">
        <a href="">Lorem ipsum <span>></span></a>
      </div>
    </div>
  </div>

<div class="regular-page-area section-padding-10 mt-5 mb-4 b" style="background-color: #E68c3a">
    <div class="col-lg-7 mx-auto">
       
            <div class="card-body d-flex align-items-center "> <!-- Menggunakan flexbox untuk penempatan bersebelahan -->
                <img src="img/picture/kepala sekolah.png" class="mr-3" style="width: 280px; border-radius:30px" alt="Kepala Sekolah">
                <div style="max-width: 280px;">
                    <h1 style="width: 350px">
                        Kepala Sekolah SMP N 1 Silaen
                    </h1>
                    <h5>Hotlan Pangaribuan</h5>
                    <br>
                    
                    <p style="color:aliceblue;font-weight:300;width:400px">Puji dan Syukur Kehadirat Tuhan Yang Maha Esa karena rahmatNyalah yang masih menyertai kita. Salam sejahtera untuk seluruh pengunjung website SMP N 1 Silaen. Kami sangat gembira menyambut Anda di sini, tempat di mana kami berbagi informasi terkini seputar kegiatan pendidikan dan pengembangan di sekolah kami.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="map">
    <h3>Temukan Kami disini</h3>
    <p class="mapp">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat omnis repudiandae neque esse modi beatae similique nemo odit, explicabo vitae ea incidunt. Maiores adipisci atque velit quam quisquam error facilis tenetur tempora distinctio nisi blanditiis reprehenderit ipsum, ratione molestiae officia beatae sequi voluptatum deleniti quas, quis ea architecto. Iure, tempore?</p>
    <iframe class="gmap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d65312299.05611945!2d99.20158100240317!3d2.3904453807262036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031ffdeb4e57f5d%3A0xe3202771e6ee8ebe!2sSMP%20Negeri%201%20Silaen!5e0!3m2!1sid!2sid!4v1713237782551!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var text = "Selamat Datang di SMP Negeri 1 Silaen";
        var index = 0;
        var typingSpeed = 100; // Kecepatan pengetikan (ms per karakter)
        var repeatDelay = 1900; // Delay sebelum animasi diulang (ms)

        function type() {
            if (index < text.length) {
                document.getElementById('typing-text').textContent += text.charAt(index);
                index++;
                setTimeout(type, typingSpeed);
            } else {
                // Delay sebelum mengulang animasi
                setTimeout(resetAndType, repeatDelay);
            }
        }

        function resetAndType() {
            // Mengosongkan teks dan mengatur ulang index
            document.getElementById('typing-text').textContent = '';
            index = 0;
            // Mulai animasi pengetikan lagi
            type();
        }

        // Memulai animasi pengetikan ketika halaman dimuat
        type();
    });
</script>

@stop
</body>
</html>