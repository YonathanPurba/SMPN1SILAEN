@extends('layouts.frontend.app', [
    'title' => 'Home',
])
<style>
    .content-wrapper {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 2rem; /* Jarak antar elemen */
    }
    .custom-card {
        flex: 1;
        max-width: 300px; /* Atur lebar maksimal kartu */
        margin: 10px;
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
        background-image: url("/img/picture/blob.svg");
        background-size: cover; /* Ensures the background image covers the entire element */
        background-position: center; /* Centers the background image */
        background-repeat: no-repeat; /* Prevents the background image from repeating */
        height: auto; /* Sets the height to auto */
        padding: 20px; /* Adds padding for better spacing */
        margin-top: 20px; /* Adds margin to separate from previous section */
        width: 100%;
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
    .map h3 {
        font-size: 5rem; /* Adjusted for smaller screens */
        font-family: "Allura", serif;
        color: #191a1b;
    }
    .imgcntn .item {
        padding: 10px;
        margin: 10px; 
        padding-left: 20px
    }

    .imgcntn img {
        width: 100%;
        height: auto; 
        border-radius: 10px;
    }

    .imgcntn a {
        display: block;
        font-size: 15px;
        margin-top: 5px;
    }
    h3 {
        padding: 20px;
        font-size: 10px;
        font-family: 'Times New Roman', Times, serif;
    }
    .imgcntn a span {    
        color:#E68c3a;
    }
    .map {
        text-align: center;
        margin-top: 20px;
    }
    .mapp {
        position: relative;
        margin-left: auto;
        margin-right: auto;
        max-width: 700px;
        color: #ffffff; /* Changed to a darker color for better contrast */
        font-weight: 400;
        margin-bottom: 30px;
        font-size: 15px;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }

    .gmap {
        width: 100%;
        max-width: 1000px;
        height: 350px;
        margin-bottom: 20px; /* Adjusted margin */
    }

    .count-number {
        font-size: 2em; /* ukuran font */
        font-weight: bold; /* ketebalan font */
    }

    .shadow {
        width: 100%;
        height: auto;
        position: relative;
        bottom: 0;
        left: 0;
        z-index: -1;
    }

    .principal-card {
    display: flex;
    align-items: center;
    margin-top: 50px;
}

.principal-image {
    border-radius: 30px;
    width: 100%;
    max-width: 230px !important;
    
}

.principal-text {
    max-width: 500px;
    width: 100%;
    padding-bottom: 100px;
    padding-top: 100px;
}

    @media (max-width: 768px) {
        .principal-image {
            max-width: 200px;
        }

        .principal-text {
            padding: 10px;
        }

        h1 {
            font-size: 1.5rem;
        }

        h5 {
            font-size: 1.2rem;
        }

        p {
            font-size: 0.9rem;
        }
    }

    @media (max-width: 480px) {
        .principal-image {
            max-width: 150px;
        }

        h1 {
            font-size: 1.2rem;
        }

        h5 {
            font-size: 1rem;
        }

        p {
            font-size: 0.8rem;
        }
    }

    @media (max-width: 768px) {
        .content-wrapper {
            flex-direction: column;
            align-items: center;
        }

        .custom-card {
            max-width: 90%;
            margin-bottom: 20px;
        }

        .kepala {
            padding: 10px;
        }

        .map h3 {
            font-size: 3rem;
        }

        .mapp {
            margin-left: 10%;
            margin-right: 10%;
            font-size: 14px;
        }

        .principal-card {
            flex-direction: column;
            text-align: center;
        }

        .principal-image {
            margin-bottom: 20px;
        }

        .principal-text {
            padding: 10px;
        }
        .gmap {
        max-width: 90%; /* Mengurangi lebar maksimal gambar peta */
        margin-left: auto;
        margin-right: auto;
    }
    }

    @media (max-width: 480px) {
        .map h3 {
            font-size: 2rem;
        }

        .mapp {
            font-size: 12px;
        }

        .count-number {
            font-size: 1.5em;
        }
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

<div style="margin-top: 40px;" class="container animate__animated animate__fadeInDown">
    <div class="content-wrapper">
        <div class="col-12 col-md-6 col-lg-3 custom-card zoom-in-on-hover">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 custom-shadow h-md-250 position-relative" style="background-color: white;">
                <div class="col p-4 d-flex flex-column position-static text-center">
                    <strong class="d-inline-block mb-2 text-primary-emphasis">Total Siswa Laki-laki</strong>
                    <h3 class="mb-0 count-number" data-count="{{ $totalLakiLaki }}">{{ $totalLakiLaki }}</h3>
                    <strong class="d-inline-block mb-2 text-primary-emphasis">Siswa</strong>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 custom-card zoom-in-on-hover">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 custom-shadow h-md-250 position-relative" style="background-color: white;">
                <div class="col p-4 d-flex flex-column position-static text-center">
                    <strong class="d-inline-block mb-2 text-primary-emphasis">Total Siswa Perempuan</strong>
                    <h3 class="mb-0 count-number" data-count="{{ $totalPerempuan }}">{{ $totalPerempuan }}</h3>
                    <strong class="d-inline-block mb-2 text-primary-emphasis">Siswi</strong>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 custom-card zoom-in-on-hover">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 custom-shadow h-md-250 position-relative" style="background-color: white;">
                <div class="col p-4 d-flex flex-column position-static text-center">
                    <strong class="d-inline-block mb-2 text-primary-emphasis">Total Keseluruhan</strong>
                    <h3 class="mb-0 count-number" data-count="{{ $total }}">{{ $total }}</h3>
                    <strong class="d-inline-block mb-2 text-primary-emphasis">Murid</strong>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="regular-page-area section-padding-10 mt-5 mb-4 b kepala">
    <div class="container animation">
        <div class="row justify-content-center align-items-center"> <!-- Mengubah 'align-items-center' -->
            <div class="col-lg-8"> <!-- Menyesuaikan lebar kolom -->
                <div class="row principal-card align-items-center"> <!-- Mengubah 'align-items-center' -->
                    <div class="col-md-6 text-center text-md-start"> <!-- Menyesuaikan lebar kolom dan teks alignment -->
                        <img src="{{ asset('img/picture/kepala sekolah.png') }}" class="principal-image img-fluid" alt="Kepala Sekolah">
                    </div>
                    <div class="col-md-6">
                        <div class="principal-text">
                            <h1 style="font-family: freshman; color: #002c4c;">
                                Kepala Sekolah SMPN 1 Silaen
                            </h1>
                            <h5 style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;color: #002c4c; border-bottom: 3px solid #002c4c; padding-bottom: 5px;">
                                {{ $kepalasekolah->nama }}
                            </h5>
                            <p class="mb-0" style="font-family: 'Lucida Sans', Arial, sans-serif">
                                Puji dan Syukur Kehadirat Tuhan Yang Maha Esa karena rahmatNyalah yang masih menyertai kita. Salam sejahtera untuk seluruh pengunjung website SMP N 1 Silaen. Kami sangat gembira menyambut Anda di sini, tempat di mana kami berbagi informasi terkini seputar kegiatan pendidikan dan pengembangan di sekolah kami.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="map">
    <h3 class="animation">Temukan Kami di sini</h3>
    <p class="mapp animation" id="mapp">Mari mampir ke SMP Negeri 1 Silaen sesuai pada lokasi, kami sangat senang jika kalian datang.</p>
    <iframe class="gmap animation"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.3463964763187!2d99.19899977472731!3d2.390438997588844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031ffdeb4e57f5d%3A0xe3202771e6ee8ebe!2sSMP%20Negeri%201%20Silaen!5e0!3m2!1sid!2sid!4v1717639446160!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

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

    document.addEventListener("DOMContentLoaded", function() {
        const elements = document.querySelectorAll(".count-number");

        elements.forEach(el => {
            const endValue = parseInt(el.getAttribute("data-count"));
            let startValue = 0;
            const duration = 2000; // durasi animasi dalam milidetik
            const incrementTime = 50; // waktu jeda antara setiap increment
            const step = Math.ceil(endValue / (duration / incrementTime));

            function count() {
                startValue += step;
                if (startValue >= endValue) {
                    el.textContent = endValue;
                } else {
                    el.textContent = startValue;
                    setTimeout(count, incrementTime);
                }
            }

            count();
        });
    });
</script>

@endsection
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
<style>
@import url("https://fonts.googleapis.com/css2?family=Allura&family=Poppins:wght@300&display=swap");
</style>
