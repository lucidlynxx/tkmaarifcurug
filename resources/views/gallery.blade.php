@extends('layouts.main')

@section('container')
<!-- Header Start -->
<div class="container-fluid bg-primary mb-5">
    <div
      class="d-flex flex-column align-items-center justify-content-center"
      style="min-height: 400px"
    >
      <h3 class="display-3 font-weight-bold text-white">Galeri</h3>
      <div class="d-inline-flex text-white">
        <p class="m-0"><a class="text-white" href="/">Beranda</a></p>
        <p class="m-0 px-2">/</p>
        <p class="m-0">Galeri</p>
      </div>
    </div>
  </div>
<!-- Header End -->

<!-- Gallery Start -->
<div class="container-fluid pt-5 pb-3">
    <div class="container">
      <div class="text-center pb-2">
        <p class="section-title px-5">
          <span class="px-2">Galeri Kami</span>
        </p>
        <h1 class="mb-4">Galeri Sekolah Kami</h1>
      </div>
      <div class="row">
        <div class="col-12 text-center mb-2">
          <ul class="list-inline mb-4" id="portfolio-flters">
            <li class="btn btn-outline-primary m-1 active" data-filter="*">
              Semua
            </li>
            <li class="btn btn-outline-primary m-1" data-filter=".first">
              Bermain
            </li>
            <li class="btn btn-outline-primary m-1" data-filter=".second">
              Menggambar
            </li>
            <li class="btn btn-outline-primary m-1" data-filter=".third">
              Membaca
            </li>
          </ul>
        </div>
      </div>
      <div class="row portfolio-container">
        @foreach ($galeri as $g)
            @if ($g->kategori == 'Bermain')
              <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                <div class="position-relative overflow-hidden mb-2">
                  <img class="img-fluid w-100" src="{{ asset('storage/' . $g->image) }}" alt="" />
                  <div
                    class="portfolio-btn bg-primary d-flex align-items-center justify-content-center"
                  >
                    <a href="{{ asset('storage/' . $g->image) }}" data-lightbox="portfolio">
                      <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                    </a>
                  </div>
                </div>
              </div>
            @endif
            @if ($g->kategori == 'Menggambar')
              <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                <div class="position-relative overflow-hidden mb-2">
                  <img class="img-fluid w-100" src="{{ asset('storage/' . $g->image) }}" alt="" />
                  <div
                    class="portfolio-btn bg-primary d-flex align-items-center justify-content-center"
                  >
                    <a href="{{ asset('storage/' . $g->image) }}" data-lightbox="portfolio">
                      <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                    </a>
                  </div>
                </div>
              </div>
            @endif
            @if ($g->kategori == 'Membaca')
              <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
                <div class="position-relative overflow-hidden mb-2">
                  <img class="img-fluid w-100" src="{{ asset('storage/' . $g->image) }}" alt="" />
                  <div
                    class="portfolio-btn bg-primary d-flex align-items-center justify-content-center"
                  >
                    <a href="{{ asset('storage/' . $g->image) }}" data-lightbox="portfolio">
                      <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                    </a>
                  </div>
                </div>
              </div>
            @endif
        @endforeach
      </div>
    </div>
  </div>
<!-- Gallery End -->
@endsection