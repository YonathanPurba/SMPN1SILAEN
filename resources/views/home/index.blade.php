@extends('layouts.frontend.app', [
    'title' => 'Home',
])

@section('content')
<section class="hero-area bg-img bg-overlay-2by5" style="background-image: url('/img/bg/pict1.jpg');">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">                
                <div class="hero-content text-center">
                    <h2 id="typing-text"></h2>
                </div>
            </div>
        </div>
    </div>
</section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#0099ff" fill-opacity="1" d="M0,192L34.3,208C68.6,224,137,256,206,234.7C274.3,213,343,139,411,122.7C480,107,549,149,617,176C685.7,203,754,213,823,186.7C891.4,160,960,96,1029,80C1097.1,64,1166,96,1234,122.7C1302.9,149,1371,171,1406,181.3L1440,192L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path>
    </svg>
    <h3 style="margin-top:-50px"><center>SMP N1 SILAEN</center></h3>
    <div class="content">
        <div class="imgcntn">
            <div class="item">
                <img src="{{ asset('img/picture/imgL1.jpg') }}" alt="Sekolah Kami">
                <a href="/identitas">Sekolah Kami<span>></span></a>
            </div>
            <div class="item">
                <img src="{{ asset('img/picture/imgL2.jpg') }}" alt="Pengumuman">
                <a href="/pengumuman">Pengumuman<span>></span></a>
            </div>
            <div class="item">
                <img src="{{ asset('img/picture/imgL3.jpg') }}" alt="Prestasi">
                <a href="/prestasi">Prestasi<span>></span></a>
            </div>
            <div class="item">
                <img src="{{ asset('img/picture/imgL4.jpg') }}" alt="Galeri">
                <a href="/artikel">Galeri<span>></span></a>
            </div>
        </div>
    </div>
<div class="regular-page-area section-padding-10 mt-5 mb-4 b" style="background-color: #0099ff">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-auto">
                <div class="card-body d-flex align-items-center ">
                    <img src="{{ asset('img/picture/kepala sekolah.png') }}" class="mr-3" style="width:300px; border-radius:30px" alt="Kepala Sekolah">
                    <div style="max-width: 280px;">
                        <h1 style="width: 350px;font-family: freshman;">
                            Kepala Sekolah SMP N 1 Silaen
                        </h1>
                        <h5 style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">Hotlan Pangaribuan</h5>
                        <br>
                        <p style="color:aliceblue;font-weight:900;width:400px;font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif">Puji dan Syukur Kehadirat Tuhan Yang Maha Esa karena rahmatNyalah yang masih menyertai kita. Salam sejahtera untuk seluruh pengunjung website SMP N 1 Silaen. Kami sangat gembira menyambut Anda di sini, tempat di mana kami berbagi informasi terkini seputar kegiatan pendidikan dan pengembangan di sekolah kami.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<svg style="margin-top: -25px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,128L24,133.3C48,139,96,149,144,133.3C192,117,240,75,288,58.7C336,43,384,53,432,69.3C480,85,528,107,576,106.7C624,107,672,85,720,69.3C768,53,816,43,864,53.3C912,64,960,96,1008,112C1056,128,1104,128,1152,144C1200,160,1248,192,1296,192C1344,192,1392,160,1416,144L1440,128L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z"></path></svg>
<section class="map">
    <h3>Temukan Kami disini</h3>
    <p class="mapp">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat omnis repudiandae neque esse modi beatae similique nemo odit, explicabo vitae ea incidunt. Maiores adipisci atque velit quam quisquam error facilis tenetur tempora distinctio nisi blanditiis reprehenderit ipsum, ratione molestiae officia beatae sequi voluptatum deleniti quas, quis ea architecto. Iure, tempore?</p>
    <iframe class="gmap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d65312299.05611945!2d99.20158100240317!3d2.3904453807262036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031ffdeb4e57f5d%3A0xe3202771e6ee8ebe!2sSMP%20Negeri%201%20Silaen!5e0!3m2!1sid!2sid!4v1713237782551!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var text = "Selamat Datang di SMP Negeri 1 Silaen";
        var index = 0;
        var typingSpeed = 100;
        var repeatDelay = 1900; 

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

@endsection

<style>
section {
    background-image: url('/img/picture/bg_indo.png');
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    text-align: center;
    width: 100%;
    margin-bottom: -50px;
} 
.imgcntn {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.imgcntn .item {
  padding: 10px;
  margin: 10px; 
  padding-left: 20px
}

.imgcntn img {
  width: 300px;
  height: auto; 
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
 margin-top: -100px;
}
.mapp{
    position:relative;
    margin-left: 26%;
   max-width: 700px;
   font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
   font-weight: 600;
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