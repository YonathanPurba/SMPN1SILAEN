@extends('layouts.frontend.app', [
    'title' => 'Home',
])
<style>
        .content-wrapper {
            display: flex;
            justify-content: center;
            gap: 2rem; /* Jarak antar elemen */
        }
        .custom-card {
            flex: 1;
            max-width: 300px; /* Atur lebar maksimal kartu */
        }
        .custom-shadow {
            box-shadow: 0 16px 20px rgba(0, 0, 0, 0.1);
        }
        .zoom-in-on-hover {
            transition: transform 0.3s ease;
        }

        .zoom-in-on-hover:hover {
            transform: scale(1.05);
        }
        .kepala {
    background-image: url(/img/picture/blob.svg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    position: relative;
    right: 100px;
    width: 110%;
    height: 100%; 
}
.row.custom-card {
    background-color: white;
}
</style>
@section('content')
<section class="hero-area bg-img bg-overlay-2by5" style="background-image: url('/img/bg/picture.jpg');">
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
<div style="margin-top: 40px" class="container animate__animated animate__fadeInDown">
    <div class="content-wrapper">
        <div class="col custom-card zoom-in-on-hover">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 custom-shadow h-md-250 position-relative" style="background-color: white;">
                <div class="col p-4 d-flex flex-column position-static text-center">
                    <strong class="d-inline-block mb-2 text-primary-emphasis">Total Siswa Laki-laki</strong>
                    <h3 class="mb-0">{{ $totalLakiLaki }}</h3>
                    <strong class="d-inline-block mb-2 text-primary-emphasis">Siswa</strong>
                </div>
            </div>
        </div>
        <div class="col custom-card zoom-in-on-hover">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 custom-shadow h-md-250 position-relative" style="background-color: white;">
                <div class="col p-4 d-flex flex-column position-static text-center">
                    <strong class="d-inline-block mb-2 text-primary-emphasis">Total Siswa Perempuan</strong>
                    <h3 class="mb-0">{{ $totalPerempuan }}</h3>
                    <strong class="d-inline-block mb-2 text-primary-emphasis">Siswi</strong>
                </div>
            </div>
        </div>
        <div class="col custom-card zoom-in-on-hover">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 custom-shadow h-md-250 position-relative" style="background-color: white;">
                <div class="col p-4 d-flex flex-column position-static text-center">
                    <strong class="d-inline-block mb-2 text-primary-emphasis">Total Keseluruhan</strong>
                    <h3 class="mb-0">{{ $total }}</h3>
                    <strong class="d-inline-block mb-2 text-primary-emphasis">Siswa</strong>
                </div>
            </div>
        </div>
    </div>
</div>
    <center>
<div class="regular-page-area section-padding-10 mt-5 mb-4 b kepala">
    <div class="container animation ">
        <div class="row ">
            <div class="col-lg-7 mx-auto" style="position:relative;top:170px">
                <div class="card-body d-flex align-items-center ">
                    <img src="{{ asset('img/picture/kepala sekolah.png') }}" class="mr-3" style="width:300px; border-radius:30px;" alt="Kepala Sekolah">
                    <div style="max-width: 280px;">
                        <h1 style="width: 350px;font-family: freshman; color: #002c4c;">
                            Kepala Sekolah SMP N 1 Silaen
                        </h1>
                        <h5 style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serifcolor: #002c4c; border-bottom: 3px solid #002c4c; /* Garis bawah dengan warna putih */
                        padding-bottom: 5px;">Hotlan Panjaitan</h5>
                        <br>
                        <p style="color: #002c4c;font-weight:900;width:400px;font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif">Puji dan Syukur Kehadirat Tuhan Yang Maha Esa karena rahmatNyalah yang masih menyertai kita. Salam sejahtera untuk seluruh pengunjung website SMP N 1 Silaen. Kami sangat gembira menyambut Anda di sini, tempat di mana kami berbagi informasi terkini seputar kegiatan pendidikan dan pengembangan di sekolah kami.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div></center>
<section class="map">
    <h3 class="animation">Temukan Kami disini</h3>
    <p class="mapp animation" id="mapp"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat omnis repudiandae neque esse modi beatae similique nemo odit, explicabo vitae ea incidunt. Maiores adipisci atque velit quam quisquam error facilis tenetur tempora distinctio nisi blanditiis reprehenderit ipsum, ratione molestiae officia beatae sequi voluptatum deleniti quas, quis ea architecto. Iure, tempore?</p>
    <iframe class="gmap animation" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d65312299.05611945!2d99.20158100240317!3d2.3904453807262036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031ffdeb4e57f5d%3A0xe3202771e6ee8ebe!2sSMP%20Negeri%201%20Silaen!5e0!3m2!1sid!2sid!4v1713237782551!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

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
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
<style>@import url("https://fonts.googleapis.com/css2?family=Allura&family=Poppins:wght@300&display=swap");
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

section {
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    text-align: center;
    width: 100%;
} 
.imgcntn {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}
.map h3{
    font-size: 6rem;
    font-family: "Allura", serif;
    color: #191a1b;
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
 margin-top: -80px;
}
.mapp {
            position: relative;
            margin-left: 26%;
            max-width: 700px;
            padding: 20px;
            color: #ffffff; /* Warna teks default, akan diubah oleh JS */
            font-weight: 400;
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