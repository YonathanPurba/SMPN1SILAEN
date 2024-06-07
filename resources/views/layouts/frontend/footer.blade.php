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
    <svg style="margin-bottom: -150px" width="100%" height="100%" id="svg" viewBox="0 0 1440 390" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150"><defs><linearGradient id="gradient" x1="50%" y1="100%" x2="50%" y2="0%"><stop offset="5%" stop-color="#0099ff"></stop><stop offset="95%" stop-color="#8ED1FC"></stop></linearGradient></defs><path d="M 0,400 L 0,100 C 119.04306220095694,82.23923444976077 238.08612440191388,64.47846889952153 315,62 C 391.9138755980861,59.52153110047847 426.6985645933014,72.32535885167464 531,88 C 635.3014354066986,103.67464114832536 809.1196172248806,122.22009569377991 909,130 C 1008.8803827751194,137.7799043062201 1034.822966507177,134.79425837320574 1111,128 C 1187.177033492823,121.20574162679426 1313.5885167464116,110.60287081339713 1440,100 L 1440,400 L 0,400 Z" stroke="none" stroke-width="0" fill="url(#gradient)" fill-opacity="0.53" class="transition-all duration-300 ease-in-out delay-150 path-0"></path><defs><linearGradient id="gradient" x1="50%" y1="100%" x2="50%" y2="0%"><stop offset="5%" stop-color="#0099ff"></stop><stop offset="95%" stop-color="#8ED1FC"></stop></linearGradient></defs><path d="M 0,400 L 0,233 C 92.13397129186606,227.35406698564594 184.26794258373212,221.70813397129186 288,230 C 391.7320574162679,238.29186602870814 507.06220095693766,260.52153110047846 612,253 C 716.9377990430623,245.47846889952154 811.4832535885168,208.20574162679426 899,197 C 986.5167464114832,185.79425837320574 1067.0047846889952,200.65550239234452 1156,211 C 1244.9952153110048,221.34449760765548 1342.4976076555024,227.17224880382776 1440,233 L 1440,400 L 0,400 Z" stroke="none" stroke-width="0" fill="url(#gradient)" fill-opacity="1" class="transition-all duration-300 ease-in-out delay-150 path-1"></path></svg>
    <footer class="footer-area" style="background-color: #0099ff;" >
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
