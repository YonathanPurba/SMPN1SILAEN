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
                         <img width="250rem"src="{{ asset('folderimage/' . $pengajars->gambar_tenagapengajar) }}" alt="Gambar">
                            <div class="card-body">
                                <p class="card-text">Nama : {{$pengajars->nama_tenagapengajar}}</p>
                                <p class="card-text">NIP : {{$pengajars->nip}}</p>
                                <p class="card-text">Jabatan : {{$pengajars->jabatan}}</p>
                                <p class="card-text">Alamat : {{$pengajars->alamat}}</p>
                            </div>
                    </div>
                    
                    @endforeach
                </div>
            </div>
        </section>

</section>

@stop