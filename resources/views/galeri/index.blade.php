@extends('layouts.frontend.app',[
    'title' => 'List Galeri',
])
@section('content')
<!-- ##### Blog Area Start ##### -->
<section class="blog-area section-padding-100-0 mb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3>Galeri SMPN1 SIlaen</h3>
                </div>
            </div>
        </div>

        <div class="row">
            
            @foreach($galeri as $art)
                <div class="col-md-6 mb-3">
                    <div class="card">
                        <div class="card-header">
                            {{ $art->judul }}
                        </div>
                        <div class="card-body">
                            <img src="{{ asset('folderimage/' . $art->thumbnail) }}" width="100%" style="height: 300px; object-fit: cover; object-position: center;">

                            <a href="{{ route('galeri.show',$art->slug) }}" class="btn btn-primary btn-sm">Selengkapnya</a>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="col-lg pagination pagination-center justify-content-center">
                {{ $galeri->appends(Request::all())->links() }}
            </div>
        </div>
    </div>
</section>
@stop