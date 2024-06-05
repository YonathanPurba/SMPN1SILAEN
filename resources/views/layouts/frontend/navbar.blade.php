<div class="clever-main-menu">
    <div class="classy-nav-container breakpoint-off">
        <!-- Menu -->
        <nav class="classy-navbar justify-content-between" id="cleverNav">

            <!-- Logo -->
            <a class="nav-brand" href="/"><img src="{{ asset('img/icons/logo.jpeg') }}" width="50" alt=""> SMPN 1 SILAEN</a>

            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
                <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>

            <!-- Menu -->
            <div class="classy-menu">

                <!-- Close Button -->
                <div class="classycloseIcon">
                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                </div>

                <!-- Nav Start -->
                <div class="classynav">
                    <ul>
                        <li><a href="/" class="{{ Request::is('/') || Request::is('home') ? 'text-primary' : '' }}">Home</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle {{ Request::is('profil/*') ? 'text-primary' : '' }}" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profil</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item {{ Request::is('about') ? 'text-primary' : '' }}" href="{{ route('identitas') }}">Identitas</a>
                                <a class="dropdown-item {{ Request::is('about') ? 'text-primary' : '' }}" href="{{ route('visimisi') }}">Visi Misi</a>
                                <a class="dropdown-item {{ Request::is('about') ? 'text-primary' : '' }}" href="{{ route('tenagapengajar.index') }}">Tenaga Pengajar</a>
                                <a class="dropdown-item {{ Request::is('about') ? 'text-primary' : '' }}" href="{{ route('ekstrakulikuler.index') }}">Ekstrakurikuler</a>
                            </div>
                        </li>
                        <li><a href="{{ route('pengumuman.index') }}" class="{{ Request::segment(1) == 'pengumuman' ? 'text-primary' : '' }}">Pengumuman</a></li>
                        <li><a href="{{ route('prestasi.index') }}" class="{{ Request::segment(1) == 'prestasi' ? 'text-primary' : '' }}">Prestasi</a></li>
                        <li><a href="{{ route('fasilitas.index') }}" class="{{ Request::segment(1) == 'fasilitas' ? 'text-primary' : '' }}">Fasilitas</a></li>
                        <li><a href="{{ route('galeri.index') }}" class="{{ Request::segment(1) == 'galeri' ? 'text-primary' : '' }}">Galeri</a></li>
                    </ul>
                    <div class="follow-us">
                        @auth
                            <!-- Jika pengguna telah login, tombol login tidak ditampilkan -->
                        @else
                            <!-- Jika pengguna belum login, tampilkan tombol login -->
                            <a href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> Login</a>
                        @endauth
                    </div>
                    @auth
                    <div class="login-state">
                        <div class="user-name mr-30">
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" id="userName" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->name }}</a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userName">
                                    <a class="dropdown-item" href="{{ route('admin.index') }}">Dashboard</a>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endauth
                </div>
                <!-- Nav End -->
            </div>
        </nav>
    </div>
</div>
<style><style>
    .clever-main-menu {
        background-color: #fff;
    }
    
    .classy-nav-container {
        position: relative;
        z-index: 10;
    }
    
    .classy-navbar-toggler {
        cursor: pointer;
    }
    
    .classy-menu {
        position: relative;
        z-index: 10;
    }
    
    .classynav {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    
    .classynav ul {
        display: flex;
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .classynav ul li {
        margin-right: 20px;
    }
    
    .classynav ul li a {
        text-decoration: none;
        color: #000;
        transition: color 0.3s;
    }
    
    .classynav ul li a:hover {
        color: #007bff;
    }
    
    .dropdown-menu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 1000;
        float: left;
        min-width: 10rem;
        padding: 0.5rem 0;
        margin: 0.125rem 0 0;
        font-size: 1rem;
        color: #212529;
        text-align: left;
        list-style: none;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, 0.15);
        border-radius: 0.25rem;
        transition: all 0.3s ease;
    }
    
    .nav-item.dropdown:hover .dropdown-menu {
        display: block;
        opacity: 1;
        visibility: visible;
    }
    
    .follow-us a {
        text-decoration: none;
        color: #000;
        margin-left: 15px;
        display: flex;
        align-items: center;
    }
    
    .follow-us a i {
        margin-right: 5px;
    }
    
    .login-state {
        display: flex;
        align-items: center;
    }
    
    .user-name {
        margin-right: 20px;
    }
    
    .dropdown-toggle::after {
        display: none;
    }
    
    .dropdown-menu-right {
        right: 0;
        left: auto;
    }
    </style>
    </style>