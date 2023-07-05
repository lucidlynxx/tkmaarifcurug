<!-- Navbar Start -->
<div class="container-fluid bg-light position-relative shadow">
  <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
    <a href="" class="navbar-brand font-weight-bold text-secondary" style="font-size: 35px">
      <img class="img-fluid" src="/img/logo.png" alt="TK Ma'arif Curug" style="width: 60px; height: 60px" />
      <span class="text-primary">{{ $title }}</span>
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
      <div class="navbar-nav font-weight-bold mx-auto py-0">
        <a href="/" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Beranda</a>
        <a href="/tentang-kami" class="nav-item nav-link {{ Request::is('tentang-kami') ? 'active' : '' }}">Tentang
          Kami</a>
        <a href="/kelas" class="nav-item nav-link {{ Request::is('kelas') ? 'active' : '' }}">Kelas</a>
        <a href="/guru" class="nav-item nav-link {{ Request::is('guru') ? 'active' : '' }}">Guru</a>
        <a href="/galeri" class="nav-item nav-link {{ Request::is('galeri') ? 'active' : '' }}">Galeri</a>
        <a href="/acara" class="nav-item nav-link {{ Request::is('acara*') ? 'active' : '' }}">Acara</a>
        <a href="/kontak" class="nav-item nav-link {{ Request::is('kontak') ? 'active' : '' }}">Kontak</a>
      </div>
      @auth
      <a target="_blank" href="/dashboard" class="btn btn-primary px-4 mr-2">{{ auth()->user()->username }}</a>
      @else
      <a target="_blank" href="/login" class="btn btn-primary px-4 mr-2">Login</a>
      @endauth
    </div>
  </nav>
</div>
<!-- Navbar End -->