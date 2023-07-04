@extends('layouts.main')

@section('container')
<!-- Header Start -->
<div class="container-fluid bg-primary mb-5">
    <div
      class="d-flex flex-column align-items-center justify-content-center"
      style="min-height: 400px"
    >
      <h3 class="display-3 font-weight-bold text-white">Kelas</h3>
      <div class="d-inline-flex text-white">
        <p class="m-0"><a class="text-white" href="/">Beranda</a></p>
        <p class="m-0 px-2">/</p>
        <p class="m-0">Kelas</p>
      </div>
    </div>
  </div>
<!-- Header End -->

<!-- Class Start -->
<div class="container-fluid pt-5">
    <div class="container">
      <div class="text-center pb-2">
        <p class="section-title px-5">
          <span class="px-2">Jadwal Kelas</span>
        </p>
        <h1 class="mb-4">Kegiatan Pembelajaran</h1>
      </div>
      <div class="row">
        <div class="col-lg-4 mb-5">
          <div class="card border-0 bg-light shadow-sm pb-2">
            {{-- <img class="card-img-top mb-2" src="img/kelas-menggambar.jpeg" alt="" /> --}}
            <div class="card-body text-center">
              <h4 class="card-title">Senin</h4>
            </div>
            <div class="card-footer bg-transparent py-4 px-5">
              <div class="row border-bottom">
                <div class="col-6 py-1 text-right border-right">
                  <strong>Waktu</strong>
                </div>
                <div class="col-6 py-1"><strong>Kegiatan</strong></div>
              </div>
              <div class="row border-bottom">
                @foreach ($kelas as $k)
                  <div class="col-6 py-1 text-right border-right">
                    {{ $k->waktu }}
                  </div>
                  <div class="col-6 py-1">{{ $k->kegiatan }}</div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-5">
          <div class="card border-0 bg-light shadow-sm pb-2">
            {{-- <img class="card-img-top mb-2" src="img/kelas-bercerita.jpeg" alt="" /> --}}
            <div class="card-body text-center">
              <h4 class="card-title">Selasa</h4>
            </div>
            <div class="card-footer bg-transparent py-4 px-5">
              <div class="row border-bottom">
                <div class="col-6 py-1 text-right border-right">
                  <strong>Waktu</strong>
                </div>
                <div class="col-6 py-1"><strong>Kegiatan</strong></div>
              </div>
              <div class="row border-bottom">
                @foreach ($kelas1 as $k1)
                  <div class="col-6 py-1 text-right border-right">
                    {{ $k1->waktu }}
                  </div>
                  <div class="col-6 py-1">{{ $k1->kegiatan }}</div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-5">
          <div class="card border-0 bg-light shadow-sm pb-2">
            {{-- <img class="card-img-top mb-2" src="img/kelas-berhitung.jpeg" alt="" /> --}}
            <div class="card-body text-center">
              <h4 class="card-title">Rabu</h4>
            </div>
            <div class="card-footer bg-transparent py-4 px-5">
              <div class="row border-bottom">
                <div class="col-6 py-1 text-right border-right">
                  <strong>Waktu</strong>
                </div>
                <div class="col-6 py-1"><strong>Kegiatan</strong></div>
              </div>
              <div class="row border-bottom">
                @foreach ($kelas2 as $k2)
                  <div class="col-6 py-1 text-right border-right">
                    {{ $k2->waktu }}
                  </div>
                  <div class="col-6 py-1">{{ $k2->kegiatan }}</div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-5">
          <div class="card border-0 bg-light shadow-sm pb-2">
            {{-- <img class="card-img-top mb-2" src="img/kelas-berhitung.jpeg" alt="" /> --}}
            <div class="card-body text-center">
              <h4 class="card-title">Kamis</h4>
            </div>
            <div class="card-footer bg-transparent py-4 px-5">
              <div class="row border-bottom">
                <div class="col-6 py-1 text-right border-right">
                  <strong>Waktu</strong>
                </div>
                <div class="col-6 py-1"><strong>Kegiatan</strong></div>
              </div>
              <div class="row border-bottom">
                @foreach ($kelas3 as $k3)
                  <div class="col-6 py-1 text-right border-right">
                    {{ $k3->waktu }}
                  </div>
                  <div class="col-6 py-1">{{ $k3->kegiatan }}</div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-5">
          <div class="card border-0 bg-light shadow-sm pb-2">
            {{-- <img class="card-img-top mb-2" src="img/kelas-berhitung.jpeg" alt="" /> --}}
            <div class="card-body text-center">
              <h4 class="card-title">Jum'at</h4>
            </div>
            <div class="card-footer bg-transparent py-4 px-5">
              <div class="row border-bottom">
                <div class="col-6 py-1 text-right border-right">
                  <strong>Waktu</strong>
                </div>
                <div class="col-6 py-1"><strong>Kegiatan</strong></div>
              </div>
              <div class="row border-bottom">
                @foreach ($kelas4 as $k4)
                  <div class="col-6 py-1 text-right border-right">
                    {{ $k4->waktu }}
                  </div>
                  <div class="col-6 py-1">{{ $k4->kegiatan }}</div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-5">
          <div class="card border-0 bg-light shadow-sm pb-2">
            {{-- <img class="card-img-top mb-2" src="img/kelas-berhitung.jpeg" alt="" /> --}}
            <div class="card-body text-center">
              <h4 class="card-title">Sabtu</h4>
            </div>
            <div class="card-footer bg-transparent py-4 px-5">
              <div class="row border-bottom">
                <div class="col-6 py-1 text-right border-right">
                  <strong>Waktu</strong>
                </div>
                <div class="col-6 py-1"><strong>Kegiatan</strong></div>
              </div>
              <div class="row border-bottom">
                @foreach ($kelas5 as $k5)
                  <div class="col-6 py-1 text-right border-right">
                    {{ $k5->waktu }}
                  </div>
                  <div class="col-6 py-1">{{ $k5->kegiatan }}</div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- Class End -->
@endsection