<div class="clever-main-menu">
    <div class="classy-nav-container breakpoint-off">
        <nav class="classy-navbar justify-content-between" id="cleverNav">

            <a class="nav-brand" href="/"><img src="{{ asset('img/icons') }}/logo.jpeg" width="50" alt=""> SMPN 1 SILAEN</a>

                <div class="classynav">
                    <ul><center>
                        <li><a href="/" class="{{ Request::is('/') || Request::is('home') ? 'text-primary' : '' }}">Home</a></li>
                        <li>
                        <a href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profil</a>
        <div class="dropdown-menu">
        <a class="dropdown-item {{ Request::is('about') ? 'text-primary' : '' }}" href="{{ route('identitas') }}">Identitas</a>
        <a class="dropdown-item {{ Request::is('about') ? 'text-primary' : '' }}" href="{{ route('visimisi') }}">Visi Misi</a>
        <a class="dropdown-item {{ Request::is('about') ? 'text-primary' : '' }}" href="{{ route('tenagapengajar') }}">Tenaga Pengajar</a>
        <a class="dropdown-item {{ Request::is('about') ? 'text-primary' : '' }}" href="{{ route('ekstrakurikuler') }}">Ekstrakurikuler</a>
    </div>
</li>                   <li><a href="{{ route('pengumuman') }}" class="{{ Request::segment(1) == 'pengumuman' ? 'text-primary' : '' }}">Pengumuman</a></li>

                        <li><a href="{{ route('prestasi') }}" class="{{ Request::segment(1) == 'prestasi' ? 'text-primary' : '' }}">Prestasi</a></li>

                        <li><a href="{{ route('fasilitas') }}" class="{{ Request::segment(1) == 'fasilitas' ? 'text-primary' : '' }}">Fasilitas</a></li>
                        
                        <li><a href="{{ route('artikel') }}" class="{{ Request::segment(1) == 'artikel' ? 'text-primary' : '' }}">Galeri</a></li>
                    </ul>
                    </center>
                    @auth
                    <div class="login-state d-flex align-items-center">
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
            </div>
        </nav>
    </div>
</div>