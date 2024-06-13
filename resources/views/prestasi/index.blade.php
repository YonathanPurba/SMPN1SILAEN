@extends('layouts.frontend.app', ['title' => 'Prestasi'])

@section('content')
<section class="prestasi-hero">
    <div class="container">
        <h1 class="main-head animate__animated animate__fadeInDown">Pencapaian Gemilang</h1>
        <p style="color: #f8f9fa" class="sub-text animate__animated animate__fadeInUp">Merayakan keberhasilan dan dedikasi siswa serta staf kami</p>
    </div>
</section>

<section class="prestasi-overview">
    <div class="container">
        <div class="overview-content">
            <h2 class="section-title animate__animated animate__fadeInLeft">Sekilas Prestasi</h2>
            <p class="intro-text animate__animated animate__fadeInRight">Sekolah kami bangga atas pencapaian luar biasa yang telah diraih dalam berbagai bidang. Dari akademik hingga olahraga, seni hingga teknologi, siswa-siswi kami terus menunjukkan bakat dan dedikasi mereka.</p>
        </div>
        <div class="stats-container animate__animated animate__fadeInUp">
            <div class="stat-item">
                <span class="stat-number">5+</span>
                <span class="stat-label">Penghargaan Nasional</span>
            </div>
            <div class="stat-item">
                <span class="stat-number">10+</span>
                <span class="stat-label">Prestasi Akademik</span>
            </div>
            <div class="stat-item">
                <span class="stat-number">10+</span>
                <span class="stat-label">Juara Olahraga</span>
            </div>
        </div>
    </div>
</section>

<section class="prestasi-highlight">
    <div class="container">
        <h2 class="section-title center animate__animated animate__fadeInDown">Sorotan Prestasi</h2>
        <div class="prestasi-grid animate__animated animate__fadeInUp">
            @foreach ($prestasi as $prestasis)
            <div class="prestasi-card">
                <img src="{{ asset('folderimage/' . $prestasis->gambar_prestasi) }}" alt="{{ $prestasis->judul_prestasi }}">
                <div class="prestasi-content">
                    <h3>{{ $prestasis->judul_prestasi }}</h3>
                    <p>{{ substr(strip_tags($prestasis->deskripsi), 0, 100) }}...</p>
                    <div class="prestasi-footer">
                        <a href="{{ route('prestasi.show', ['prestasi' => $prestasis->slug]) }}" class="btn-details">Selengkapnya</a>
                        <span class="prestasi-date">{{ date('d M Y', strtotime($prestasis->tanggal_prestasi)) }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section style="margin-bottom: -50px" class="testimonial-section">
    <div class="container">
        <h2 class="section-title center animate__animated animate__fadeInDown">Apa Kata Mereka</h2>
        <div class="testimonial-container animate__animated animate__fadeInUp">
            <div class="testimonial-item">
                <p>"Berkat dukungan sekolah, saya berhasil meraih medali emas dalam Olimpiade Sains Nasional."</p>
                <span class="testimonial-author">- Andi, Kelas IX</span>
            </div>
            <div class="testimonial-item">
                <p>"Program ekstrakurikuler di sini sangat membantu saya mengembangkan bakat seni dan meraih juara dalam kompetisi lukis."</p>
                <span class="testimonial-author">- Siti, Kelas VIII</span>
            </div>
        </div>
    </div>
</section>
@endsection

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<style>
@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;600&display=swap');
body {
    font-family: 'Poppins', sans-serif;
    line-height: 1.6;
    color: #333;
    background-color: #f8f9fa;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 1rem;
}

.prestasi-hero {
    background: linear-gradient(rgba(0, 44, 76, 0.8), rgba(0, 44, 76, 0.8)), url('img/picture/imgL1.jpg') no-repeat center center/cover;
    color: #fff;
}
.main-head {
    font-family: sans-serif;
    font-size: 5rem;
    color: #002c4c;
    margin-top: 30px;
    text-align: center;
}

.head {
    font-family: sans-serif;
    font-size: 3rem;
    color: #002c4c;
    text-align: center;
    padding: 6rem 0;
}

.main-head {
    font-family: 'Playfair Display', serif;
    font-size: 3.5rem;
    margin-bottom: 1rem;
}

.sub-text {
    font-size: 1.2rem;
    max-width: 600px;
    margin: 0 auto;
}

.section-title {
    font-family: 'Playfair Display', serif;
    font-size: 2.5rem;
    color: #002c4c;
    margin-bottom: 2rem;
}

.center {
    text-align: center;
}

.prestasi-overview {
    padding: 4rem 0;
    background-color: #fff;
}

.overview-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 3rem;
}

.intro-text {
    font-size: 1.1rem;
    max-width: 600px;
}

.stats-container {
    display: flex;
    justify-content: space-around;
    text-align: center;
}

.stat-item {
    padding: 1rem;
}

.stat-number {
    display: block;
    font-size: 3rem;
    font-weight: bold;
    color: #ff6600;
}

.stat-label {
    font-size: 1.1rem;
    color: #002c4c;
}

.prestasi-highlight {
    padding: 4rem 0;
}

.prestasi-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 2rem;
}

.prestasi-card {
    background-color: #fff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.prestasi-card:hover {
    transform: translateY(-5px);
}

.prestasi-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.prestasi-content {
    padding: 1.5rem;
}

.prestasi-content h3 {
    font-family: 'Playfair Display', serif;
    font-size: 1.5rem;
    color: #002c4c;
    margin-bottom: 1rem;
}

.prestasi-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 1rem;
}

.btn-details {
    background-color: #ff6600;
    color: #fff;
    padding: 0.5rem 1rem;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.btn-details:hover {
    background-color: #0099ff;
}

.prestasi-date {
    font-size: 0.9rem;
    color: #999;
}

.testimonial-section {
    background-color: #f0f4f8;
    padding: 4rem 0;
}

.testimonial-container {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}

.testimonial-item {
    background-color: #fff;
    padding: 2rem;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    max-width: 400px;
    margin: 1rem;
}

.testimonial-item p {
    font-style: italic;
    margin-bottom: 1rem;
}

.testimonial-author {
    display: block;
    text-align: right;
    font-weight: bold;
    color: #002c4c;
}

@media (max-width: 768px) {
    .main-head {
        font-size: 2.5rem;
    }

    .section-title {
        font-size: 2rem;
    }

    .overview-content {
        flex-direction: column;
        text-align: center;
    }

    .intro-text {
        margin-top: 1rem;
    }

    .stats-container {
        flex-wrap: wrap;
    }

    .prestasi-grid {
        grid-template-columns: 1fr;
    }
}
</style>