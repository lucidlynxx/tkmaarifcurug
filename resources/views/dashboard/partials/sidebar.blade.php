<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="/dashboard">
             <span class="align-middle">TK Ma'arif Curug</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-item {{ Request::is('dashboard') ? 'active' : '' }}">
                <a class="sidebar-link" href="/dashboard">
                    <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-header">
                Data Halaman
            </li>

            <li class="sidebar-item {{ Request::is('dashboard/beranda*') ? 'active' : '' }}">
                <a class="sidebar-link" href="/dashboard/beranda">
                    <i class="align-middle" data-feather="home"></i> <span class="align-middle">Beranda</span>
                </a>
            </li>
            <li class="sidebar-item {{ Request::is('dashboard/tentang-kami*') ? 'active' : '' }}">
                <a class="sidebar-link" href="/dashboard/tentang-kami">
                    <i class="align-middle" data-feather="info"></i> <span class="align-middle">Tentang Kami</span>
                </a>
            </li>
            <li class="sidebar-item {{ Request::is('dashboard/kelas*') ? 'active' : '' }}">
                <a class="sidebar-link" href="/dashboard/kelas">
                    <i class="align-middle" data-feather="briefcase"></i> <span class="align-middle">Kelas</span>
                </a>
            </li>
            <li class="sidebar-item {{ Request::is('dashboard/guru*') ? 'active' : '' }}">
                <a class="sidebar-link" href="/dashboard/guru">
                    <i class="align-middle" data-feather="users"></i> <span class="align-middle">Guru</span>
                </a>
            </li>
            <li class="sidebar-item {{ Request::is('dashboard/galeri*') ? 'active' : '' }}">
                <a class="sidebar-link" href="/dashboard/galeri">
                    <i class="align-middle" data-feather="image"></i> <span class="align-middle">Galeri</span>
                </a>
            </li>
            <li class="sidebar-item {{ Request::is('dashboard/acara*') ? 'active' : '' }}">
                <a class="sidebar-link" href="/dashboard/acara">
                    <i class="align-middle" data-feather="map-pin"></i> <span class="align-middle">Acara</span>
                </a>
            </li>
            <li class="sidebar-item {{ Request::is('dashboard/kontak*') ? 'active' : '' }}">
                <a class="sidebar-link" href="/dashboard/kontak">
                    <i class="align-middle" data-feather="smartphone"></i> <span class="align-middle">Kontak</span>
                </a>
            </li>

            <li class="sidebar-header">
                Data Administrator
            </li>

            <li class="sidebar-item {{ Request::is('dashboard/admin*') ? 'active' : '' }}">
                <a class="sidebar-link" href="/dashboard/admin">
                    <i class="align-middle" data-feather="user-check"></i> <span class="align-middle">Admin</span>
                </a>
            </li>

        </ul>

    </div>
</nav>