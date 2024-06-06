@extends('layouts.frontend.app',[
    'title' => 'List Galeri',
])
@section('content')
<!-- ##### Blog Area Start ##### -->
<section class="blog-area section-padding-100-0 mb-50">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="section-heading">
<<<<<<< HEAD
                    <h3 class="head animate__animated  animate__fadeInDown">Galeri SMPN 1 Silaen</h3>
=======
                    <h3 class="head animate__animated  animate__fadeInDown">Galeri SMP N1 SIlaen</h3>
>>>>>>> 0a736fdf8103fd43e4ed0c364ae98ed5b440d1a4
                    <p style="   font-size: 1.2rem;
                    color: #ffffff;
                    font-weight: 400;
                    border-bottom: 3px solid #ffffff; 
<<<<<<< HEAD
                    padding-bottom: 5px;" class="animate__animated  animate__fadeInDown">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus dolore libero neque cumque qui consequatur!</p>
=======
                    padding-bottom: 5px;
                    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;" class="animate__animated  animate__fadeInDown">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus dolore libero neque cumque qui consequatur!</p>
>>>>>>> 0a736fdf8103fd43e4ed0c364ae98ed5b440d1a4
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($galeri as $art)
                <div class="col-md-6 col-lg-4 mb-4 animate__animated  animate__fadeInUp">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">{{ $art->judul }}</h5>
                        </div>
                        <div class="card-body">
                            <img src="{{ asset('folderimage/' . $art->thumbnail) }}" class="card-img" alt="{{ $art->judul }}">
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('galeri.show',$art->slug) }}" class="btn">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
        <div class="row">
            <div class="col-12 d-flex justify-content-center mt-4">
                {{ $galeri->appends(Request::all())->links() }}
            </div>
        </div>
    </div>
</section>
@stop
<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
<style>@import url("https://fonts.googleapis.com/css2?family=Allura&family=Poppins:wght@300&display=swap");

body {
    font-family: 'Roboto', sans-serif;
    background-color: #f4f4f9;
    color: #333;
}

.container {
    max-width: 1200px;
    margin: auto;
    padding: 0 15px;
}

.row {
    display: flex;
    flex-wrap: wrap;
}

.col-12, .col-md-6, .col-lg-4 {
    padding: 15px;
}

.section-heading h3.head {
    font-size: 4rem;
    margin-bottom: 0.5rem;
    font-weight: bold;
    font-family: "Allura", serif;
    color: #002c4c;
}

/* Card Styling */
.card {
    display: flex;
    flex-direction: column;
    background-color: #fff;
    border-radius: 15px;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    position: relative;
}

.card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(0, 123, 255, 0.5), rgba(0, 255, 238, 0.5));
    opacity: 0;
    transition: opacity 0.3s ease;
    z-index: 1;
}

.card:hover::before {
    opacity: 1;
}

.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
}

.card-header {
    background-color: transparent;
    color: #333;
    padding: 10px;
    text-align: center;
    z-index: 2;
    position: relative;
}

.card-title {
    margin: 0;
    font-size: 1.5rem;
    font-weight: bold;
}

.card-body {
    padding: 0;
    position: relative;
    z-index: 2;
}

.card-img {
    width: 100%;
    height: 300px;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.card:hover .card-img {
    transform: scale(1.1);
}

.card-footer {
    padding: 10px;
    text-align: center;
    background-color: #fff;
    z-index: 2;
    position: relative;
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    margin-top: 10px;
    font-size: 1rem;
    color: #fff;
    background: linear-gradient(135deg, rgba(0, 123, 255, 0.5), rgba(0, 255, 238, 0.5));
    border-radius: 50px;
    text-decoration: none;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.btn:hover {
    background-color: #0056b3;
    transform: scale(1.05);
    color: #f4f4f9
}

/* Pagination */
.pagination {
    display: flex;
    list-style: none;
    padding: 0;
}

.pagination li {
    margin: 0 5px;
}

.pagination a {
    color: #007bff;
    text-decoration: none;
    padding: 8px 12px;
    border: 1px solid #ddd;
    border-radius: 50px;
    transition: background-color 0.3s ease;
}

.pagination a:hover {
    background-color: #007bff;
    color: #fff;
}

.pagination .active a {
    background-color: #007bff;
    color: #fff;
    border-color: #007bff;
}

/* Add transition effect for pagination */
.pagination a {
    transition: background-color 0.3s, color 0.3s;
}
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
    const cards = document.querySelectorAll('.card');

    cards.forEach(card => {
        card.addEventListener('mouseover', function() {
            this.querySelector('.card-img').style.transform = 'scale(1.1)';
        });

        card.addEventListener('mouseout', function() {
            this.querySelector('.card-img').style.transform = 'scale(1)';
        });
    });
});

</script>
