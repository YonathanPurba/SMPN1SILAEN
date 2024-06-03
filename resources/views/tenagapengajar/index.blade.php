@extends('layouts.frontend.app',[
    'title' => 'TenagaPengajar',
])
@section('content')

<section class="upcoming-events section-padding-100-0 mb-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3>Tenaga Pengajar</h3>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row ">
                    @foreach($pengajar as $pengajars)
                    <div class="card ml-3 mt-3">
                         <img width="250rem" src="{{ asset('folderimage/' . $pengajars->gambar_tenagapengajar) }}" alt="Gambar">
                            <div class="card-body">
                                <h5 class="card-title">{{ $pengajars->nama_tenagapengajar }}</h5>
                                <a href="{{ route('tenagapengajar.show', $pengajars->slug) }}" class="btn btn-primary btn-sm">Selengkapnya</a>
                            </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
</section>

@stop
