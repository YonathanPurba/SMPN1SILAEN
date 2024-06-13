    @extends('layouts.frontend.app', [
        'title' => 'Home',
    ])
    <style>
        .content-wrapper {
            display: flex;
            justify-content: space-around;
            align-items: center;
            text-align: center;
            margin-top: 40px;
            margin-bottom: 40px;
            flex-wrap: wrap; /* Ensure it wraps on smaller screens */
        }
        .stat-box {
            font-size: 2em; /* Font size */
            font-weight: bold; /* Font weight */
            color: #fff; /* Text color */
            padding: 20px; /* Padding inside the box */
            border-radius: 10px; /* Rounded corners */
            margin: 10px; /* Margin between boxes */
            width: 200px; /* Fixed width for consistency */
        }
        .stat-box h3 {
            margin: 0;
            font-size: 1em; /* Smaller font size for the label */
        }
        .stat-laki {
            background-color: #3498db; /* Blue background for male */
        }
        .stat-perempuan {
            background-color: #e74c3c; /* Red background for female */
        }
        .stat-total {
            background-color: #2ecc71; /* Green background for total */
        }
        .zoom-in-on-hover {
            transition: transform 0.3s ease;
        }
        .zoom-in-on-hover:hover {
            transform: scale(1.05);
        }

        .kepala {
            background-color:#ffffff;
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
        padding: 2rem 0;
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
        width: 300px;
        max-width: 300px !important;
        
    }

    .principal-text {
    width: 600px;
        padding-bottom: 100px;
        padding-top: 100px;
        font-size: 40px;

    }

        @media (max-width: 768px) {
            .principal-image {
                max-width: 200px;
            }

            .principal-text {
                padding: 10px;
                max-width: 380px;
                
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
            .map p{
                
            }
        }

        @media (max-width: 768px) {
            .content-wrapper {
                flex-direction: column;
                align-items: center;
                margin-right: 20px;
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

        .hero-area::before {
        content: "Selamat Datang di SMPN 1 Silaen";
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        font-size: 2.5rem;
        font-weight: bold;
        font-family:'Playfair Display';
        z-index: 1; /* Ensure the text is above the background but below other content */
    }

    .hero-area {
        position: relative;
    }

    .bg-overlay-2by5::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5); /* Adjust the overlay color and opacity as needed */
        z-index: 0; /* Ensure the overlay is below the text */
    }
    .content-wrapper {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        text-align: center;
        margin: 2rem 0;
    }

    .stat-box {
        font-size: 1.5rem;
        font-weight: bold;
        color: #fff;
        padding: 1rem;
        border-radius: 10px;
        margin: 0.5rem;
        width: 100%;
        max-width: 200px;
    }

    .principal-card {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        margin-top: 2rem;
    }

    .principal-image {
        border-radius: 30px;
        width: 100%;
        max-width: 300px;
        margin-bottom: 1rem;
    }

    .principal-text {
        width: 100%;
        max-width: 600px;
        padding: 1rem;
        font-size: clamp(1rem, 2.5vw, 1.5rem);
    }

    .map h3 {
        font-size: clamp(2rem, 5vw, 3rem);
        font-family: 'Playfair Display', serif;
        color: #191a1b;
        margin-bottom: 1rem;
    }

    .mapp {
        width: 90%;
        max-width: 700px;
        margin: 0 auto;
        font-size: clamp(0.8rem, 2vw, 1rem);
    }
    .map-description {
        max-width: 600px;
        margin: 0 auto 2rem;
        font-size: clamp(1rem, 2vw, 1.1rem);
        color: #333;
        font-weight: bold;
    }   

    .gmap {
        width: 100%;
        height: 350px;
        margin-bottom: 1rem;
    }

    @media (max-width: 768px) {
        .principal-card {
            flex-direction: column;
        }

        .map-info-container {
            flex-direction: column;
        }

        .map-info,
        .map-frame {
            width: 100%;
        }
        
    }

    @media (max-width: 480px) {
        .stat-box {
            font-size: 1.2rem;
        }

        .principal-text {
            font-size: clamp(0.9rem, 2vw, 1.2rem);
        }

        .map h3 {
            font-size: clamp(1.5rem, 4vw, 2rem);
        }
        .map-frame{
            margin-bottom: 400px
        }
    }

    /* Tambahkan CSS untuk membuat peta responsif */
    .map-container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .map-info-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        gap: 2rem;
    }

    .map-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }


    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap');
        
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




    <section class="regular-page-area section-padding-10 mt-5 mb-4 b kepala">
        <div class="container animation">
            <div style="margin-top: -50px;" class="row justify-content-center align-items-center"> <!-- Mengubah 'align-items-center' -->
                <div  class="col-lg-8"> <!-- Menyesuaikan lebar kolom -->
                    <div class="row principal-card align-items-center"> <!-- Mengubah 'align-items-center' -->
                    <div class="col-md-6 text-center text-md-start">
        <img src="{{ $kepalasekolah && $kepalasekolah->gambar_kepalasekolah ? asset('folderimage/' . $kepalasekolah->gambar_kepalasekolah) : asset('img/picture/kepala sekolah.png') }}" class="principal-image img-fluid" alt="Kepala Sekolah">
    </div>

                        <div style="background-color:" class="col-md-6">
                            <div class="principal-text">
                                <h1 style="font-family: freshman; color: #002c4c;">
                                    Kepala Sekolah SMPN 1 Silaen
                                </h1>
                                <h5 style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;color: #002c4c; border-bottom: 3px solid #002c4c; padding-bottom: 5px;">
                                {{ $kepalasekolah && $kepalasekolah->nama ? $kepalasekolah->nama : 'Hotlan Panjaitan' }}
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
    <h3 class="animation">Temukan Kami di Sini</h3>
    <p class="animation" style="max-width: 600px;text-align:center;font-size:1.1rem;position:relative;left:450px;margin-bottom:50px;color:#ffffff;font-weight:bold">Mari mampir ke SMP Negeri 1 Silaen sesuai pada lokasi, kami sangat senang jika kalian datang.</p>
    <div class="map-container">
        <div class="map-info-container">
            <div class="map-info animation">
                <h4><i class="fas fa-map-marker-alt"></i> Informasi Lokasi:</h4>
                <div style="text-align: left;margin-left:150px;color:#ffffff" class="info-details">
                    <p style="color: #ffffff"><i  class="fas fa-school"></i> <strong>Nama Sekolah:</strong> SMP Negeri 1 Silaen</p>
                    <p style="color: #ffffff"><i class="fas fa-map-marked-alt"></i> <strong>Alamat:</strong> Jl. Pelajar No. 123, Silaen</p>
                    <p style="color: #ffffff"><i class="fas fa-phone-alt"></i> <strong>Kontak:</strong> 081234567890</p>
                    <p style="color: #ffffff"><i class="fas fa-clock"></i> <strong>Jam Operasional:</strong> Senin - Jumat: 07.00 - 15.00</p>
                    <p style="color: #ffffff"><i class="fas fa-globe"></i> <strong>Website:</strong> <a style="color: #E68c3a;font-weight:bold" href="http://www.smp1silaen.sch.id">www.smp1silaen.sch.id</a></p>
                </div>
                <a href="https://www.google.com/maps/dir//SMP+Negeri+1+Silaen/@2.390439,99.1989998,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3031ffdeb4e57f5d:0xe3202771e6ee8ebe!2m2!1d99.1989998!2d2.390439" target="_blank" class="btn btn-primary"><i class="fas fa-directions"></i> Dapatkan Arah</a>
            </div>
            <div class="map-frame animation">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.3463964763187!2d99.19899977472731!3d2.390438997588844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031ffdeb4e57f5d%3A0xe3202771e6ee8ebe!2sSMP%20Negeri%201%20Silaen!5e0!3m2!1sid!2sid!4v1717639446160!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

    <style>

        .map{
            margin-bottom: 150px
        }
        .map-info-container {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
    }

    .map-info {
        flex-basis: 40%;
        padding-right: 20px;
    }
    .map-info, .map-frame {
        flex: 1 1 300px;
    }

    .map-frame {
        flex-basis: 60%;
    }
    .map-info h4 {
        margin-bottom: 1rem;
        color: #002c4c;
    }

    .info-details p {
        margin-bottom: 0.5rem;
        color: #333;
    }

    .info-details a {
        color: #E68c3a;
        font-weight: bold;
    }

    .btn-primary {
        background-color: #002c4c;
        border-color: #002c4c;
        margin-top: 1rem;
    }

    .map-frame iframe {
        width: 100%;
        height: 450px;
        border-radius: 10px;
    }

    @media (max-width: 768px) {
        .map-info-container {
            flex-direction: column;
        }

        .map-info, .map-frame {
            flex-basis: 100%;
        }
    }

    .map-info {
        text-align: left;
        background-color: #f8f9fa;
        padding: 1.5rem;
        border-radius: 10px;
    }
    @media (max-width: 768px) {
        .map-info-container {
            flex-direction: column;
        }

        .map-info,
        .map-frame {
            flex-basis: auto;
        }
    }
    </style>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        // Ensure all elements are loaded
        const theAnimation = document.querySelectorAll('.animation');

        if (theAnimation.length > 0) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('scroll-animation');
                        observer.unobserve(entry.target); // Stop observing once animated
                    }
                });
            }, {
                threshold: 0.1 // Lower threshold to ensure animation triggers on small screens
            });

            theAnimation.forEach((element) => {
                observer.observe(element);
            });
        }

        // Count-up animation
        const elements = document.querySelectorAll(".count-number");

        elements.forEach(el => {
            const endValue = parseInt(el.getAttribute("data-count"));
            let startValue = 0;
            const duration = 2000; // animation duration in milliseconds
            const incrementTime = 50; // delay between increments
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

    // Optional: Debounce scroll events for better performance on mobile
    function debounce(func, wait) {
        let timeout;
        return function(...args) {
            const context = this;
            clearTimeout(timeout);
            timeout = setTimeout(() => func.apply(context, args), wait);
        };
    }

    window.addEventListener('scroll', debounce(() => {
        // Add any scroll-related functions here if needed
    }, 100), { passive: true }); // Use passive listener for better performance

    // Ensure the script runs even on smaller screens by checking for specific screen sizes
    window.addEventListener('resize', debounce(() => {
        const viewportWidth = window.innerWidth || document.documentElement.clientWidth;
        if (viewportWidth <= 390) { // iPhone 12 Pro width is 390px in portrait mode
            // Add any adjustments needed specifically for small screens
            console.log("Viewport width is small, ensure elements are visible and animations are triggered.");
        }
    }, 100), { passive: true });

    function redirectToFasilitas() {
            window.location.href = '{{ route("jumlahsiswa.index") }}';
        }

    </script>

    @endsection
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <style>
    @import url("https://fonts.googleapis.com/css2?family=Allura&family=Poppins:wght@300&display=swap");
    </style>