<!-- Footer Start -->
<div class="container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5">
  <div class="row pt-5">
    <div class="col-lg-4 col-md-6 mb-5">
      <a href="" class="navbar-brand font-weight-bold text-primary m-0 mb-4 p-0"
        style="font-size: 40px; line-height: 40px">
        <span class="text-white">{{ $title }}</span>
      </a>
      <p>
        Membantu anak didik mengembangkan berbagai potensi yang dimiliki untuk siap memasuki pendidikan dasar melalui
        kegiatan bermain sambil belajar
      </p>
    </div>
    <div class="col-lg-4 col-md-6 mb-5">
      <h3 class="text-primary mb-4">Lebih Dekat Dengan Kami</h3>
      <div class="d-flex">
        <h4 class="fa fa-map-marker-alt text-primary"></h4>
        <div class="pl-3">
          <h5 class="text-white">Alamat</h5>
          <p>Ds.Batukaras, Kec. Cijulang, Kabupaten Ciamis, Jawa Barat 46394</p>
        </div>
      </div>
      <div class="d-flex">
        <h4 class="fa fa-envelope text-primary"></h4>
        <div class="pl-3">
          <h5 class="text-white">Email</h5>
          <p>tkmaarifcurug@gmail.com</p>
        </div>
      </div>
      <div class="d-flex">
        <h4 class="fa fa-phone-alt text-primary"></h4>
        <div class="pl-3">
          <h5 class="text-white">Telepon</h5>
          <p>+62 853-1763-4386</p>
        </div>
      </div>
    </div>

    @if (Request::is('/'))
    <div class="col-lg-4 col-md-6 mb-5">
      <h3 class="text-primary mb-4">Link Cepat</h3>
      <div class="d-flex flex-column justify-content-start">
        <a class="text-white mb-2" href="#beranda"><i class="fa fa-angle-right mr-2"></i>Beranda</a>
        <a class="text-white mb-2" href="#tentang-kami"><i class="fa fa-angle-right mr-2"></i>Tentang Kami</a>
        <a class="text-white mb-2" href="#kelas"><i class="fa fa-angle-right mr-2"></i>Kelas</a>
        <a class="text-white mb-2" href="#guru"><i class="fa fa-angle-right mr-2"></i>Guru</a>
        <a class="text-white mb-2" href="#testimoni"><i class="fa fa-angle-right mr-2"></i>Testimoni</a>
        <a class="text-white mb-2" href="#acara"><i class="fa fa-angle-right mr-2"></i>Acara</a>
      </div>
    </div>
    @else
    <div class="col-lg-4 col-md-6 mb-5">
      <h3 class="text-primary mb-4">Link Cepat</h3>
      <div class="d-flex flex-column justify-content-start">
        <a class="text-white mb-2" href="/"><i class="fa fa-angle-right mr-2"></i>Beranda</a>
        <a class="text-white mb-2" href="/tentang-kami"><i class="fa fa-angle-right mr-2"></i>Tentang Kami</a>
        <a class="text-white mb-2" href="/kelas"><i class="fa fa-angle-right mr-2"></i>Kelas</a>
        <a class="text-white mb-2" href="/guru"><i class="fa fa-angle-right mr-2"></i>Guru</a>
        <a class="text-white mb-2" href="/galeri"><i class="fa fa-angle-right mr-2"></i>Galeri</a>
        <a class="text-white mb-2" href="/acara"><i class="fa fa-angle-right mr-2"></i>Acara</a>
        <a class="text-white mb-2" href="/kontak"><i class="fa fa-angle-right mr-2"></i>Kontak</a>
      </div>
    </div>
    @endif

  </div>
  <div class="container-fluid pt-5" style="border-top: 1px solid rgba(23, 162, 184, 0.2) ;">
    <p class="m-0 text-center text-white">
      &copy;
      <a class="text-primary font-weight-bold" href="#">{{ $title }}</a>.
      All Rights Reserved.

      <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
      Designed by
      <a class="text-primary font-weight-bold" href="#">{{ $author }}</a>
    </p>
  </div>
</div>
<!-- Footer End -->