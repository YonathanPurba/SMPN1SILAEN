<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #2B65EC;">
  <!-- Brand Logo -->
  <a href="/" class="brand-link">
    <img src="{{ asset('img/icons') }}/logo.jpeg" alt="laravel Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">SMP Negeri 1 Silaen</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar" style="background-color: #2B65EC;">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('img/icons') }}/admin.jpeg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="" class="d-block">{{ auth()->user()->name }}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="{{ route('admin.index') }}" class="nav-link {{ Request::is('admin') ? 'active' : '' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        
        <!-- Manage Data Dropdown -->
        <li class="nav-item has-treeview {{ Request::is('admin/users*') || Request::is('admin/galeri*') || Request::is('admin/pengumuman*') || Request::is('admin/tenagapengajar*') || Request::is('admin/fasilitas*') || Request::is('admin/prestasi*') || Request::is('admin/ekstrakurikuler*') || Request::is('admin/kelas*') || Request::is('admin/jumlah_siswa*') || Request::is('admin/kepalasekolah*') ? 'menu-open' : '' }}">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-database"></i>
            <p>
              Manage Data
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('admin.users.index') }}" class="nav-link {{ Request::segment(2) == 'users' ? 'active' : '' }}">
                <i class="nav-icon fas fa-users"></i>
                <p>Admin</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.galeri.index') }}" class="nav-link {{ Request::segment(2) == 'galeri' ? 'active' : '' }}">
                <i class="nav-icon far fa-image"></i>
                <p>Galeri</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.pengumuman.index') }}" class="nav-link {{ Request::segment(2) == 'pengumuman' ? 'active' : '' }}">
                <i class="nav-icon fas fa-info"></i>
                <p>Pengumuman</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.tenagapengajar.index') }}" class="nav-link {{ Request::segment(2) == 'tenagapengajar' ? 'active' : '' }}">
                <i class="nav-icon fas fa-user"></i>
                <p>Tenaga Pengajar</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.fasilitas.index') }}" class="nav-link {{ Request::segment(2) == 'fasilitas' ? 'active' : '' }}">
                <i class="nav-icon fas fa-landmark"></i>
                <p>Fasilitas</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.prestasi.index') }}" class="nav-link {{ Request::segment(2) == 'prestasi' ? 'active' : '' }}">
                <i class="nav-icon fas fa-trophy"></i>
                <p>Prestasi</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.ekstrakurikuler.index') }}" class="nav-link {{ Request::segment(2) == 'ekstrakurikuler' ? 'active' : '' }}">
                <i class="nav-icon fas fa-running"></i>
                <p>Ekstrakurikuler</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.kelas.index') }}" class="nav-link {{ Request::segment(2) == 'kelas' ? 'active' : '' }}">
                <i class="nav-icon fas fa-school"></i>
                <p>Kelas</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.jumlah_siswa.index') }}" class="nav-link {{ Request::segment(2) == 'jumlah_siswa' ? 'active' : '' }}">
                <i class="nav-icon fas fa-user"></i>
                <p>Jumlah Siswa</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.kepalasekolah.index') }}" class="nav-link {{ Request::segment(2) == 'kepalasekolah' ? 'active' : '' }}">
                <i class="nav-icon fas fa-user-tie"></i>
                <p>Kepala Sekolah</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- Pengaturan Dropdown -->
        <li class="nav-item has-treeview {{ Request::is('admin/profile*') || Request::is('admin/change-password*') ? 'menu-open' : '' }}">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-cogs"></i>
            <p>
              Pengaturan
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('admin.profile.index') }}" class="nav-link {{ Request::is('admin/profile') ? 'active' : '' }}">
                <i class="nav-icon fas fa-id-card"></i>
                <p>Profil</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.change-password.index') }}" class="nav-link {{ Request::is('admin/change-password') ? 'active' : '' }}">
                <i class="nav-icon fas fa-unlock"></i>
                <p>Ubah Password</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
