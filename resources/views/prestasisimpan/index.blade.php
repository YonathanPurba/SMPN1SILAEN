<<<<<<< HEAD
@extends('layouts.frontend.app', ['title' => 'Prestasi'])

@section('content')
<section class="upcoming-events section-padding-100-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center">
                    <h3 class="animate__animated animate__fadeInDown animate__delay-1s">Prestasi SMPN1 Silaen</h3>
                    <p class="animate__animated animate__fadeInUp animate__delay-1s">Berikut adalah prestasi-prestasi yang telah diraih oleh SMPN1 Silaen.</p>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 animate__animated animate__fadeInLeft animate__delay-1s">
                    <img src="img/picture/prs1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Best Category PHYSICS</h5>
                        <p class="card-text">SMP N1 Silaen berhasil meraih juara di MIPA YASOP (Yayasan Soposurung) 2023 </p>
                        <div class="additional-info">
                            <p>2023</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 animate__animated animate__fadeInLeft animate__delay-1s">
                    <img src="img/picture/prs2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Menerima Penghargaan Dari YASOP</h5>
                        <p class="card-text">SMP N1 Silaen Berhasil meraih penghargaan di YASOP SMAN-2</p>
                        <div class="additional-info">
                            <p>-</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 animate__animated animate__fadeInLeft animate__delay-1s">
                    <img src="img/picture/prs3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">juara 3 Cerdas cermat Kabupaten</h5>
                        <p class="card-text">SMP N1 Silaen Berhasil meraih Juara 3 di Cerdas cermat antar kabupaten</p>
                        <div class="additional-info">
                            <p>19 Mei 2023</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    window.addEventListener('load', function() {
        const cards = document.querySelectorAll('.card');
        cards.forEach(card => {
            const additionalInfo = card.querySelector('.additional-info');
            card.addEventListener('mouseenter', () => {
                additionalInfo.classList.add('show');
            });
            card.addEventListener('mouseleave', () => {
                additionalInfo.classList.remove('show');
            });
        });
    });
</script>
</body>
</html>
=======
>>>>>>> 78ab92047ed80a7ec5208971b65d4f1102751da7
