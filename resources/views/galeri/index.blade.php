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
                    <h3>Galeri SMPN1 SIlaen</h3>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($galeri as $art)
                <div class="col-md-6 col-lg-4 mb-4">
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

<style>
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

.section-heading h3 {
    font-size: 2rem;
    font-weight: bold;
    margin-bottom: 2rem;
    color: #333;
}

/* Card Styling */
.card {
    display: flex;
    flex-direction: column;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
}

.card-header {
    background-color: #007bff;
    color: #fff;
    padding: 10px;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
    text-align: center;
}

.card-title {
    margin: 0;
    font-size: 1.25rem;
}

.card-body {
    padding: 0;
}

.card-img {
    width: 100%;
    height: 300px;
    object-fit: cover;
    object-position: center;
    border-bottom: 1px solid #ddd;
    border-top-left-radius: inherit;
    border-top-right-radius: inherit;
}

.card-footer {
    padding: 10px;
    text-align: center;
}

.btn {
    display: inline-block;
    padding: 8px 16px;
    margin-top: 10px;
    font-size: 1rem;
    color: #fff;
    background-color: #007bff;
    border-radius: 4px;
    text-decoration: none;
    transition: background-color 0.3s ease-in-out;
}

.btn:hover {
    background-color: #0056b3;
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
    border-radius: 4px;
    transition: background-color 0.3s ease-in-out;
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
</style>
