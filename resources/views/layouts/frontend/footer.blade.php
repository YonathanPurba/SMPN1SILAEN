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
        #svg {
    width: 100%;
    height: auto;
    position: relative;;
    margin-bottom: 700px;
    bottom: 40px;
    left: 0;
}

    </style>
</head>
<body>
    <svg style="margin-bottom:-130px; " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ff6600" fill-opacity="1" d="M0,288L0,320L144,320L144,224L288,224L288,224L432,224L432,192L576,192L576,256L720,256L720,96L864,96L864,192L1008,192L1008,256L1152,256L1152,256L1296,256L1296,160L1440,160L1440,320L1296,320L1296,320L1152,320L1152,320L1008,320L1008,320L864,320L864,320L720,320L720,320L576,320L576,320L432,320L432,320L288,320L288,320L144,320L144,320L0,320L0,320Z"></path></svg>
<footer class="footer-area" style="background-color: #ff6600;margin-top:50px;" >
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
                            <a href="/galeri" class="text-light hover-underline animate__animated animate__fadeInLeft">Galeri</a>
                        </li>

                        
                    </ul>
                </div>
                <div class="col-md-4">
                    <!-- Contact Info -->
                    <h5 class="text-light mb-4 animate__animated animate__fadeInRight">Contact Info</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2 animate__animated animate__fadeInRight">
                            <i class="fas fa-phone-alt me-2"></i>
                            <a href="#" class="text-light hover-underline">0823-7033-2820</a>
                        </li>
                        <li class="animate__animated animate__fadeInRight">
                            <i class="fas fa-envelope me-2"></i>
                            <a href="#" class="text-light hover-underline">smpnsatusilaen@yahoo.com</a>
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
