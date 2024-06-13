<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Identitas SMPN 1 Silaen</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        @import url("https://fonts.googleapis.com/css2?family=sans-serif&family=Poppins:wght@300&display=swap");

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        .head{
            font-family: playfair display;
            font-size: 4rem;
        }

        h1, h3, h4, h5 {
            color: #333;
            text-align: center;
            font-family: "playfair display", serif;
        }

        .page-content, .page-contents {
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
            max-width: 100%;
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
                font-size: 50px;
            }

            h2.underline {
                font-size: 24px;
            }

            h5.underline {
                font-size: 18px;
            }
            .text-container h3{
                margin-top: 50px
            }
            .my-5{
                margin-left: 5px
            }
        }

        @media (max-width: 390px) {
            body {
                padding: 10px;
            }

            h1.head {
                font-size: 50px;
            }

            h2.underline {
                font-size: 20px;
            }

            h5.underline {
                font-size: 16px;
            }

            .page-content, .page-contents {
                padding: 10px;
                box-shadow: none;
            }

            .page-content img, .akreditas img {
                max-width: 100%;
                box-shadow: none;
            }

            .identitas-names, .identitas-isi {
                min-width: 100%;
                text-align: left;
                margin: 0;
                padding: 5px 0;
            }

            .identitas-names {
                font-size: 14px;
            }

            .t-dua {
                font-size: 14px;
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
                        <p style="font-family: playfair display;font-size:1.2rem;margin-bottom:-90px">Memperkenalkan Sekolah: SMP Negeri 1 Silaen</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="my-5">
        <div class="regular-page-area section-padding-1">
            <div class="animate__animated animation">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="page-content d-flex flex-column flex-lg-row">
                            <div class="image-container mb-4 mb-lg-0 me-lg-4 text-center">
                                <img class="img-fluid uniform-image" src="/img/picture/imgL6.jpg" alt="Identitas Sekolah" style="max-height: 400px;"><br>
                                <h3 class="mb-3" style="font-family: playfair display;font-size:3rem">Data Rinci</h3>
                                <p class="identitas-names mb-4" style="">
                                    Status BOS : Bersedia Menerima <br>
                                    Waktu Penyelenggaraan : Pagi <br>
                                    Sertifikasi ISO : Proses Sertifikasi <br>
                                    Sumber Listrik : PLN <br>
                                    Daya Listrik : 4800 <br>
                                    Kecepatan Internet : 50 Mb <br>
                                </p>
                                
                                <img class="img-fluid uniform-image" src="/img/picture/imgL5.jpg" alt="Identitas Sekolah" style="max-height: 400px;width:540px">
                            </div>
                            <div class="text-container" style="margin-top: -100px">
                                <h3 class="mb-3" style="font-family: playfair display;font-size:3rem">Identitas Sekolah</h3>
                                <p class="identitas-names mb-4" style="text-align: center">
                                    NPSN                 : 10208496<br>
                                    Status               : Negeri  <br>
                                    Bentuk Pendidikan    : SMP <br>
                                    Status Kepemilikan   : Pemerintah Daerah <br>
                                    SK Pendirian Sekolah : 21/NP/02 N/1959<br>
                                    Tanggal SK Pendirian : 1959-08-05 <br>
                                    SK Izin Operasional  : 420/2127.Disdikpora/2022<br>
                                </p>
                                <img src="/img/picture/imgL1.jpg" alt="Identitas Sekolah" style="max-height: 400px;"><br>
                                <h3 class="mb-3" style="font-family: playfair display;font-size:3rem">Data Lainnya</h3>
    
                                <p class="identitas-names" style="text-align: center">
                                    Kebutuhan Khusus Dilayani : Tidak ada <br>
                                    Nama Bank : BRI <br>
                                    Cabang KCP/Unit : BALIGE <br>
                                    Rekening Atas Nama : DANA BOS SMP NEGERI 1 SILAEN <br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="regular-page-area section-padding-1">
            <div class="animate__animated animation">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <table  class="table table-bordered">
                            <tr>
                                <center><h2 style="font-family:playfair display;font-size:4rem">Rekapitulasi</h2>
                                    <p style="font-family: playfair display;font-size:1.2rem;">Situs resmi SMP Negeri 1 Silaen: informasi prestasi, kegiatan, dan profil sekolah. Segera akses untuk update terkini.</p></center>
                                <th colspan="5" class="text-center bg-primary text-white">Data PTK dan PD</th>
                            </tr>
                            <tr>
                                <th>Uraian</th>
                                <th>Guru</th>
                                <th>Tendik</th>
                                <th>PTK</th>
                                <th>PD</th>
                            </tr>
                            <tr>
                                <td>Laki-laki</td>
                                <td>5</td>
                                <td>4</td>
                                <td>9</td>
                                <td>268</td>
                            </tr>
                            <tr>
                                <td>Perempuan</td>
                                <td>24</td>
                                <td>2</td>
                                <td>26</td>
                                <td>257</td>
                            </tr>
                            <tr>
                                <td>Total</td>
                                <td>29</td>
                                <td>6</td>
                                <td>35</td>
                                <td>525</td>
                            </tr>
                        </table>
                    
                        <p style="color: #FF6600;font-weight:bold;font-size:40px;font-family:playfair display">Keterangan:</p>
                        <ul>
                            <li>Data Rekap Per Tanggal 11 Juni 2024</li>
                            <li>Penghitungan PTK adalah yang sudah mendapat penugasan, berstatus aktif dan terdaftar di sekolah induk.</li>
                            <li>Singkatan:
                                <ol>
                                    <li><span style="color: #FF6600;font-weight:bold;font-size:20px">PTK </span>= Guru ditambah Tendik</li>
                                    <li><span style="color: #FF6600;font-weight:bold;font-size:20px">PD</span> = Peserta Didik</li>
                                </ol>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    <style>
        .page-content {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
    }

    .image-container {
        flex: 1;
        padding: 10px;
    }

    .text-container {
        flex: 1;
        padding: 10px;
    }

    .image-container img {
        max-width: 100%;
        height: auto;
    }

    @media (max-width: 768px) {
        .page-content {
            flex-direction: column;
        }
    }
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap');
    </style>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>
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

        // Typing animation
        const typingElement = document.getElementById('typing-text');
        if (typingElement) {
            var text = "Selamat Datang di SMP Negeri 1 Silaen";
            var index = 0;
            var typingSpeed = 100;
            var repeatDelay = 1900;

            function type() {
                if (index < text.length) {
                    typingElement.textContent += text.charAt(index);
                    index++;
                    setTimeout(type, typingSpeed);
                } else {
                    // Delay before repeating the animation
                    setTimeout(resetAndType, repeatDelay);
                }
            }

            function resetAndType() {
                // Clear text and reset index
                typingElement.textContent = '';
                index = 0;
                // Start typing animation again
                type();
            }

            // Start typing animation when the page loads
            type();
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

    </script>
    @stop
    </body>
    </html>
