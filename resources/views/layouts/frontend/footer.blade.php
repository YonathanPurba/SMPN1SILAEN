<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer dengan Hover Effect</title>
    <!-- CSS untuk Animate.css (jika digunakan) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- CSS Font Awesome (jika digunakan) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        /* Aturan CSS untuk hover effect */
        .text-light a:hover {
            color: #333 !important; /* Mengubah warna teks menjadi #333 saat dihover */
            text-decoration: none; /* Menghilangkan garis bawah pada link saat dihover */
        }

        .text-light a:hover .hover-zoom {
            transform: scale(1.1); /* Mengubah skala ikon saat dihover */
        }
        
    </style>
</head>
<body>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#000080" fill-opacity="1" d="M0,160L24,149.3C48,139,96,117,144,128C192,139,240,181,288,197.3C336,213,384,203,432,170.7C480,139,528,85,576,101.3C624,117,672,203,720,218.7C768,235,816,181,864,176C912,171,960,213,1008,202.7C1056,192,1104,128,1152,133.3C1200,139,1248,213,1296,213.3C1344,213,1392,139,1416,101.3L1440,64L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"></path></svg>
    <footer class="footer-area" style="background-color: #000080; color:0">
        <!-- Top Footer Area -->
        <div class="container"><br>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <!-- Footer Logo -->
                    <div class="footer-logo mb-3">
                        <a href="/">
                            <h3 class="text-light animate__animated animate__fadeInDown style" >SMPN 1 SILAEN</h3>
                        </a>
                    </div>
                    <!-- Copywrite -->
                    <p class="text-light animate__animated animate__fadeInUp">
                        &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | SMP Negeri 1 Silaen 2024
                    </p>
                </div>
                <div class="col-md-4 mb-4">
                    <!-- Quick Links -->
                    <h5 class="text-light mb-4 animate__animated animate__fadeInLeft">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="/" class="text-light hover-underline animate__animated animate__fadeInLeft">Home</a>
                        </li>
                        <li class="mb-2">
                            <a href="/pengumuman" class="text-light hover-underline animate__animated animate__fadeInLeft">Pengumuman</a>
                        </li>
                        <li class="mb-2">
                            <a href="/prestasi" class="text-light hover-underline animate__animated animate__fadeInLeft">Prestasi</a>
                        </li>
                        <li class="mb-2">
                            <a href="/fasilitas" class="text-light hover-underline animate__animated animate__fadeInLeft">Fasilitas</a>
                        </li>
                        <li class="mb-2">
                            <a href="/artikel" class="text-light hover-underline animate__animated animate__fadeInLeft">Galeri</a>
                        </li>

                    </ul>
                </div>
                <div class="col-md-4">
                    <!-- Contact Info -->
                    <h5 class="text-light mb-4 animate__animated animate__fadeInRight">Contact Info</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2 animate__animated animate__fadeInRight">
                            <i class="fas fa-phone-alt me-2"></i>
                            <a href="#" class="text-light hover-underline">082112345678</a>
                        </li>
                        <li class="animate__animated animate__fadeInRight">
                            <i class="fas fa-envelope me-2"></i>
                            <a href="#" class="text-light hover-underline">smpn1silaen@gmail.com</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Bottom Footer Area -->
        <div class="container">
            <hr class="my-4">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <!-- Follow Us -->
                    <div class="d-flex align-items-center">
                        <h5 class="text-light mb-3 me-3">Follow Us</h5>
                        <a href="https://www.facebook.com/share/EM3YpLUBBtRKdk3y/?mibextid=A7sQZp" class="text-light mx-3 hover-zoom animate__animated animate__fadeInLeft">
                            <i class="fab fa-facebook fa-lg" style="padding-bottom: 17px"></i>
                        </a>
                    </div>
                    <div class="follow-us">
                    </div>
                </div>
                <div class="col-md-6 text-md-end">
                    <!-- Terms of Use -->
                    <p class="text-light mb-0 animate__animated animate__fadeInRight">Terms of Use | Privacy Policy</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
