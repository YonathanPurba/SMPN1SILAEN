@extends('layouts.frontend.app',[
    'title' => 'Baca Artikel',
])
@section('content')
<div class="clever-catagory blog-details bg-img d-flex align-items-center justify-content-center p-3 height-400" style="background-image: url('{{ asset('folderimage/' . $pengajar->gambar_tenagapengajar) }}');">
    <div class="blog-details-headline">
        <h3 class="text-capitalize">{{ $pengajar->nama_tenagapengajar }}</h3>
        <div class="meta d-flex align-items-center justify-content-center">
        </div>
    </div>
</div>
<style>
    .blog-details-text .info {
        display: flex;
        align-items: baseline;
        margin-bottom: 10px;
    }

    .blog-details-text h4 {
        font-weight: bold;
        margin-right: 10px;
        min-width: 80px; /* Adjust based on the longest label */
    }

    .blog-details-text .colon {
        margin: 0 10px;
        min-width: 10px;
    }

    .blog-details-text p {
        margin: 0;
        color: #555;
    }
</style>
<!-- ##### Catagory Area End ##### -->

<!-- ##### Blog Details Content ##### -->
<div class="blog-details-content section-padding-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <!-- Blog Details Text -->
                <div class="blog-details-text">
                    <div class="info">
                        <h4>Nama</h4>
                        <div class="colon">:</div>
                        <p>{{ $pengajar->nama_tenagapengajar }}</p>
                    </div>
                    <div class="info">
                        <h4>Jabatan</h4>
                        <div class="colon">:</div>
                        <p>{{ $pengajar->jabatan }}</p>
                    </div>
                    <div class="info">
                        <h4>NIP</h4>
                        <div class="colon">:</div>
                        <p>{{ $pengajar->nip }}</p>
                    </div>
                    <div class="info">
                        <h4>Alamat</h4>
                        <div class="colon">:</div>
                        <p>{{ $pengajar->alamat }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
