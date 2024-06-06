@extends('layouts.frontend.app', [
    'title' => 'Home',
])
<style>
<<<<<<< HEAD
=======
<<<<<<< HEAD
        @import url("https://fonts.googleapis.com/css2?family=Allura&family=Poppins:wght@300&display=swap");

body {
    font-family: 'Poppins', sans-serif;
}

.count-number {
    font-size: 2em; /* ukuran font */
    font-weight: bold; /* ketebalan font */
}

.kepala {
    background-image: url("/img/picture/blob.svg");
    background-size: cover; /* Ensures the background image covers the entire element */
    background-position: center; /* Centers the background image */
    background-repeat: no-repeat; /* Prevents the background image from repeating */
    width: 100%;
    height: 100vh; /* Sets the height to cover the full viewport height */
    position: relative;
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
    font-size: 5rem;
    font-family: "Allura", serif;
    color: #191a1b;
}

.imgcntn .item {
    padding: 10px;
    margin: 10px;
    padding-left: 20px;
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

h3 {
    padding: 20px;
    font-size: 10px;
    font-family: 'Times New Roman', Times, serif;
}

.imgcntn a span {
    color: #E68c3a;
}

.map {
    text-align: center;
    margin-top: -30px;
}

.mapp {
    position: relative;
    margin: 0 auto;
    max-width: 700px;
    color: #ffffff; /* Warna teks default, akan diubah oleh JS */
    font-weight: 400;
    margin-bottom: 30px;
    font-size: 15px;
}

.gmap {
    width: 100%;
    height: 350px;
    max-width: 1000px;
    margin-bottom: 80px;
}

.shadow {
    width: 1000px;
    height: 380px;
    position: relative;
    bottom: 420px;
    left: 50px;
    z-index: -1;
}
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
=======
>>>>>>> ff4396a84ac782c0b9edf21e2fc027a218375a0e
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
<<<<<<< HEAD
=======
>>>>>>> 0a736fdf8103fd43e4ed0c364ae98ed5b440d1a4
>>>>>>> ff4396a84ac782c0b9edf21e2fc027a218375a0e
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
<<<<<<< HEAD
                    <h3 class="mb-0 count-number" data-count="{{ $totalLakiLaki }}">{{ $totalLakiLaki }}</h3>
=======
<<<<<<< HEAD
                    <h3 class="mb-0" id="totalLakiLaki">0</h3>
=======
                    <h3 class="mb-0 count-number" data-count="{{ $totalLakiLaki }}">{{ $totalLakiLaki }}</h3>
>>>>>>> 0a736fdf8103fd43e4ed0c364ae98ed5b440d1a4
>>>>>>> ff4396a84ac782c0b9edf21e2fc027a218375a0e
                    <strong class="d-inline-block mb-2 text-primary-emphasis">Siswa</strong>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 custom-card zoom-in-on-hover">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 custom-shadow h-md-250 position-relative" style="background-color: white;">
                <div class="col p-4 d-flex flex-column position-static text-center">
                    <strong class="d-inline-block mb-2 text-primary-emphasis">Total Siswa Perempuan</strong>
<<<<<<< HEAD
                    <h3 class="mb-0 count-number" data-count="{{ $totalPerempuan }}">{{ $totalPerempuan }}</h3>
=======
<<<<<<< HEAD
                    <h3 class="mb-0" id="totalPerempuan">0</h3>
=======
                    <h3 class="mb-0 count-number" data-count="{{ $totalPerempuan }}">{{ $totalPerempuan }}</h3>
>>>>>>> 0a736fdf8103fd43e4ed0c364ae98ed5b440d1a4
>>>>>>> ff4396a84ac782c0b9edf21e2fc027a218375a0e
                    <strong class="d-inline-block mb-2 text-primary-emphasis">Siswi</strong>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 custom-card zoom-in-on-hover">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 custom-shadow h-md-250 position-relative" style="background-color: white;">
                <div class="col p-4 d-flex flex-column position-static text-center">
                    <strong class="d-inline-block mb-2 text-primary-emphasis">Total Keseluruhan</strong>
<<<<<<< HEAD
                    <h3 class="mb-0 count-number" data-count="{{ $total }}">{{ $total }}</h3>
                    <strong class="d-inline-block mb-2 text-primary-emphasis">Murid</strong>
=======
<<<<<<< HEAD
                    <h3 class="mb-0" id="total">0</h3>
                    <strong class="d-inline-block mb-2 text-primary-emphasis">Siswa</strong>
=======
                    <h3 class="mb-0 count-number" data-count="{{ $total }}">{{ $total }}</h3>
                    <strong class="d-inline-block mb-2 text-primary-emphasis">Murid</strong>
>>>>>>> 0a736fdf8103fd43e4ed0c364ae98ed5b440d1a4
>>>>>>> ff4396a84ac782c0b9edf21e2fc027a218375a0e
                </div>
            </div>
        </div>
    </div>
</div>

<<<<<<< HEAD
=======
<<<<<<< HEAD
    <center>
<div class="regular-page-area section-padding-10 mt-5 mb-4 b kepala">
    <div class="container animation ">
        <div class="row ">
            <div class="col-lg-7 mx-auto" style="position:relative;top:170px">
                <div class="card-body d-flex align-items-center ">
                    <img style="width: 12rem; border-radius: 5%;"
                        src="{{ ($kepalasekolah ?? (object)['gambar_kepalasekolah' => 'img/picture/kepala sekolah.png'])->gambar_kepalasekolah }}"class="mr-3" style="width:300px; border-radius:30px;" alt="Kepala Sekolah">
                    <div style="max-width: 280px;">
                        <h1 style="width: 350px;font-family: freshman; color: #002c4c;">
                            Kepala Sekolah SMP N 1 Silaen
                        </h1>
                        <h5 style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color: #002c4c; border-bottom: 3px solid #002c4c; padding-bottom: 5px;">
                            {{ $kepalasekolah->nama ?? 'Hotlan Panjaitan' }}
                        </h5>
                        <br>
                        <p style="color: #002c4c;font-weight:900;width:400px;font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif">Puji dan Syukur Kehadirat Tuhan Yang Maha Esa karena rahmatNyalah yang masih menyertai kita. Salam sejahtera untuk seluruh pengunjung website SMP N 1 Silaen. Kami sangat gembira menyambut Anda di sini, tempat di mana kami berbagi informasi terkini seputar kegiatan pendidikan dan pengembangan di sekolah kami.</p>
=======
>>>>>>> ff4396a84ac782c0b9edf21e2fc027a218375a0e

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
<<<<<<< HEAD
=======
>>>>>>> 0a736fdf8103fd43e4ed0c364ae98ed5b440d1a4
>>>>>>> ff4396a84ac782c0b9edf21e2fc027a218375a0e
                    </div>
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
</section>


<section class="map">
    <h3 class="animation">Temukan Kami di sini</h3>
    <p class="mapp animation" id="mapp">Mari mampir ke SMP Negeri 1 Silaen sesuai pada lokasi, kami sangat senang jika kalian datang.</p>
    <iframe class="gmap animation"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.3463964763187!2d99.19899977472731!3d2.390438997588844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031ffdeb4e57f5d%3A0xe3202771e6ee8ebe!2sSMP%20Negeri%201%20Silaen!5e0!3m2!1sid!2sid!4v1717639446160!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
=======
>>>>>>> ff4396a84ac782c0b9edf21e2fc027a218375a0e
</section>


<section class="map">
    <h3 class="animation">Temukan Kami di sini</h3>
    <p class="mapp animation" id="mapp">Mari mampir ke SMP Negeri 1 Silaen sesuai pada lokasi, kami sangat senang jika kalian datang.</p>
    <iframe class="gmap animation"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.3463964763187!2d99.19899977472731!3d2.390438997588844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031ffdeb4e57f5d%3A0xe3202771e6ee8ebe!2sSMP%20Negeri%201%20Silaen!5e0!3m2!1sid!2sid!4v1717639446160!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<script>
<<<<<<< HEAD
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

=======
<<<<<<< HEAD
    const totalLakiLakiCard = document.getElementById('totalLakiLaki');
    const totalPerempuanCard = document.getElementById('totalPerempuan');
    const totalCard = document.getElementById('total');

    totalLakiLakiCard.addEventListener('click', () => {
        // Navigasi ke tampilan baru
        window.location.href = '/jumlahsiswa';
    });

    totalPerempuanCard.addEventListener('click', () => {
        // Navigasi ke tampilan baru
        window.location.href = '/jumlahsiswa';
    });
    totalCard.addEventListener('click', () => {
        // Navigasi ke tampilan baru
        window.location.href = '/jumlahsiswa';
    });
</script>
<script>

const totalLakiLakiElement = document.getElementById('totalLakiLaki');
const totalPerempuanElement = document.getElementById('totalPerempuan');
const totalElement = document.getElementById('total');

// Target values for the animation
const targetLakiLaki = {{ $totalLakiLaki }};
const targetPerempuan = {{ $totalPerempuan }};
const targetTotal = {{ $total }};

// Initial values for the animation (set to 0)
let currentLakiLaki = 0;
let currentPerempuan = 0;
let currentTotal = 0;

// Animation duration (in milliseconds)
const animationDuration = 5000; // Adjust as desired (e.g., 3000 for a slower animation)

// Animation step (increment for each update)
const animationStep = Math.ceil(Math.max(targetLakiLaki, targetPerempuan, targetTotal) / (animationDuration / 100));

function updateCounts() {
  // Update each count with the animation step
  currentLakiLaki = Math.min(currentLakiLaki + animationStep, targetLakiLaki);
  currentPerempuan = Math.min(currentPerempuan + animationStep, targetPerempuan);
  currentTotal = Math.min(currentTotal + animationStep, targetTotal);

  // Display the updated counts
  totalLakiLakiElement.textContent = Math.floor(currentLakiLaki);
  totalPerempuanElement.textContent = Math.floor(currentPerempuan);
  totalElement.textContent = Math.floor(currentTotal);

  // Check if the animation has reached the target values
  if (currentLakiLaki === targetLakiLaki && currentPerempuan === targetPerempuan && currentTotal === targetTotal) {
    clearInterval(updateInterval); // Stop the animation
  }
}

const updateInterval = setInterval(updateCounts, 100); // Update every 100 milliseconds

</script>
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
=======
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

>>>>>>> ff4396a84ac782c0b9edf21e2fc027a218375a0e
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
<<<<<<< HEAD
=======
>>>>>>> 0a736fdf8103fd43e4ed0c364ae98ed5b440d1a4
>>>>>>> ff4396a84ac782c0b9edf21e2fc027a218375a0e
</script>
<script>
    const totalLakiLakiElement = document.getElementById('totalLakiLaki');
    const totalPerempuanElement = document.getElementById('totalPerempuan');
    const totalElement = document.getElementById('total');
  
    // Target values for the animation (replace with your actual totals)
    const targetLakiLaki = 200; // Total number of male students
    const targetPerempuan = 150; // Total number of female students
    const targetTotal = targetLakiLaki + targetPerempuan; // Total students
  
    // Initial values for the animation (set to 0)
    let currentLakiLaki = 0;
    let currentPerempuan = 0;
    let currentTotal = 0;
  
    // Animation duration (in milliseconds)
    const animationDuration = 2000; // Adjust as desired (e.g., 3000 for a slower animation)
  
    // Animation step (increment for each update)
    const animationStep = Math.ceil(Math.max(targetLakiLaki, targetPerempuan, targetTotal) / (animationDuration / 100));
  
    function updateCounts() {
      // Update each count with the animation step
      currentLakiLaki = Math.min(currentLakiLaki + animationStep, targetLakiLaki);
      currentPerempuan = Math.min(currentPerempuan + animationStep, targetPerempuan);
      currentTotal = Math.min(currentTotal + animationStep, targetTotal);
  
      // Display the updated counts
      totalLakiLakiElement.textContent = currentLakiLaki;
      totalPerempuanElement.textContent = currentPerempuan;
      totalElement.textContent = currentTotal;
  
      // Check if the animation has reached the target values
      if (currentLakiLaki === targetLakiLaki && currentPerempuan === targetPerempuan && currentTotal === targetTotal) {
        clearInterval(updateInterval); // Stop the animation
      }
    }
  
    const updateInterval = setInterval(updateCounts, 100); // Update every 100 milliseconds
  </script>

@endsection
<<<<<<< HEAD
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
=======
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
<style>
@import url("https://fonts.googleapis.com/css2?family=Allura&family=Poppins:wght@300&display=swap");
</style>
<<<<<<< HEAD
=======
>>>>>>> 0a736fdf8103fd43e4ed0c364ae98ed5b440d1a4
>>>>>>> ff4396a84ac782c0b9edf21e2fc027a218375a0e
