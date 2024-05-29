@extends('layouts.backend.app', [
    'title' => 'Dashboard',
    'contentTitle' => 'Dashboard',
])
@section('content')
<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3>@count('users')</h3>
                <p>Admin</p>
            </div>
            <div class="icon">
                <i class="fas fa-user-tie"></i>
            </div>
            <a href="{{ route('admin.users.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3>@count('artikel')</h3>
                <p>Galeri</p>
            </div>
            <div class="icon">
                <i class="fas fa-image"></i>
            </div>
            <a href="{{ route('admin.artikel.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>@count('pengumuman')</h3>
                <p>Pengumuman</p>
            </div>
            <div class="icon">
                <i class="fas fa-info"></i>
            </div>
            <a href="{{ route('admin.pengumuman.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-primary">
            <div class="inner">
                <h3>@count('tenagapengajar')</h3>
                <p>Tenaga Pengajar</p>
            </div>
            <div class="icon">
                <i class="fas fa-chalkboard-teacher" style="color: blue;"></i> <!-- Ubah warna sesuai kebutuhan -->
            </div>
            <a href="{{ route('admin.tenagapengajar.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-secondary">
            <div class="inner">
                <h3>@count('fasilitas')</h3>
                <p>Fasilitas</p>
            </div>
            <div class="icon">
                <i class="fas fa-info"></i>
            </div>
            <a href="{{ route('admin.fasilitas.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
  </div>

  <!-- ./col -->
  
  <!-- ./col -->
</div>
<!-- /.row -->
@stop
