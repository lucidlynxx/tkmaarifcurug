@extends('layouts.main')

@section('container')
<!-- Header Start -->
<div class="container-fluid bg-primary px-0 px-md-5 mb-5" id="beranda">
  <div class="row align-items-center px-3">
    @foreach ($header as $h)
    <div class="col-lg-6 text-center text-lg-left">
      <h4 class="text-white mb-4 mt-5 mt-lg-0">Taman Kanak-Kanak</h4>
      <h1 class="display-3 font-weight-bold text-white">
        {{ $h->namaTk }}
      </h1>
      <p class="text-white mb-4">
        {{ $h->deskripsi }}
      </p>
    </div>
    <div class="col-lg-6 text-center text-lg-right">
      <img class="img-fluid mt-5" src="{{ asset('storage/' . $h->image) }}" alt="" />
    </div>
    @endforeach
  </div>
</div>
<!-- Header End -->

<!-- Facilities Start -->
@foreach ($tentangKami as $tk)
<div class="container-fluid pt-5">
  <div class="container pb-3">
    <div class="row">
      <div class="col-lg-4 col-md-6 pb-1">
        <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px">
          <i class="flaticon-050-fence h1 font-weight-normal text-primary mb-3"></i>
          <div class="pl-4">
            <h4>Taman Bermain</h4>
            <p class="m-0">
              {{ $tk->fasilitas1 }}
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 pb-1">
        <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px">
          <i class="flaticon-028-kindergarten h1 font-weight-normal text-primary mb-3"></i>
          <div class="pl-4">
            <h4>Nilai Agama dan Moral</h4>
            <p class="m-0">
              {{ $tk->fasilitas2 }}
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 pb-1">
        <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px">
          <i class="flaticon-030-crayons h1 font-weight-normal text-primary mb-3"></i>
          <div class="pl-4">
            <h4>Seni dan Kerajinan</h4>
            <p class="m-0">
              {{ $tk->fasilitas3 }}
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 pb-1">
        <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px">
          <i class="flaticon-018-ball h1 font-weight-normal text-primary mb-3"></i>
          <div class="pl-4">
            <h4>Olahraga</h4>
            <p class="m-0">
              {{ $tk->fasilitas4 }}
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 pb-1">
        <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px">
          <i class="flaticon-032-book h1 font-weight-normal text-primary mb-3"></i>
          <div class="pl-4">
            <h4>Membaca dan Menulis</h4>
            <p class="m-0">
              {{ $tk->fasilitas5 }}
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 pb-1">
        <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px">
          <i class="flaticon-047-backpack h1 font-weight-normal text-primary mb-3"></i>
          <div class="pl-4">
            <h4>Tur Rekreasi</h4>
            <p class="m-0">
              {{ $tk->fasilitas6 }}
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Facilities Start -->

<!-- Rincian Biaya Masuk -->
<div class="container-fluid pt-5" id="kelas">
  <div class="container">
    <div class="text-center pb-2">
      <p class="section-title px-5">
        <span class="px-2">Biaya Masuk</span>
      </p>
      <h1 class="mb-4">Rincian Biaya Masuk</h1>
    </div>
    <div class="row">
      <div class="col-lg-4 mb-5">
        <div class="card border-0 bg-light shadow-sm pb-2">
          {{-- <img class="card-img-top mb-2" src="img/kelas-menggambar.jpeg" alt="" /> --}}
          <div class="card-body text-center">
            <h4 class="card-title">Baju Seragam</h4>
          </div>
          <div class="card-footer bg-transparent py-4 px-5">
            <div class="row border-bottom">
              <div class="col-6 py-1 text-right border-right">
                <strong>Hari</strong>
              </div>
              <div class="col-6 py-1"><strong>Biaya</strong></div>
            </div>
            <div class="row border-bottom">
              <div class="col-6 py-1 text-right border-right">
                Senin - Selasa
              </div>
              <div class="col-6 py-1">Rp. 150.000</div>
              <div class="col-6 py-1 text-right border-right">
                Rabu - Kamis
              </div>
              <div class="col-6 py-1">Rp. 75.000</div>
              <div class="col-6 py-1 text-right border-right">
                Jum'at
              </div>
              <div class="col-6 py-1">Rp. 120.000</div>
              <div class="col-6 py-1 text-right border-right">
                Sabtu
              </div>
              <div class="col-6 py-1">Rp. 95.000</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Rincian Biaya Masuk -->

<!-- About Start -->
<div class="container-fluid py-5" id="tentang-kami">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-5">
        <img class="img-fluid rounded mb-5 mb-lg-0" src="{{ asset('storage/' . $tk->image) }}" />
      </div>
      <div class="col-lg-7">
        <p class="section-title pr-5">
          <span class="pr-2">Tentang Kami</span>
        </p>
        <h1 class="mb-4">Visi & Misi TK Ma'arif Curug</h1>
        <p>
          {{ $tk->visi }}
        </p>
        <div class="row pt-2 pb-4">
          <div class="col-12">
            <ul class="list-inline m-0">
              <li class="py-2 border-top border-bottom">
                <i class="fa fa-check text-primary mr-3"></i>{{ $tk->misi1 }}
              </li>
              <li class="py-2 border-bottom">
                <i class="fa fa-check text-primary mr-3"></i>{{ $tk->misi2 }}
              </li>
              <li class="py-2 border-bottom">
                <i class="fa fa-check text-primary mr-3"></i>{{ $tk->misi3 }}
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach
<!-- About End -->

<!-- Class Start -->
<div class="container-fluid pt-5" id="kelas">
  <div class="container">
    <div class="text-center pb-2">
      <p class="section-title px-5">
        <span class="px-2">Kelas Populer</span>
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
    </div>
  </div>
</div>
<!-- Class End -->

<!-- Team Start -->
<div class="container-fluid pt-5" id="guru">
  <div class="container">
    <div class="text-center pb-2">
      <p class="section-title px-5">
        <span class="px-2">Guru Kami</span>
      </p>
      <h1 class="mb-4">Bertemu Guru Kami</h1>
    </div>
    <div class="row">
      @foreach ($guru as $g)
      <div class="col-md-6 col-lg-3 text-center team mb-5">
        <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%">
          @if ($g->image)
          <img class="img-fluid w-100" src="{{ asset('storage/' . $g->image) }}" alt="" />
          @else
          <img class="img-fluid w-100" src="img/default.png" alt="" />
          @endif
        </div>
        <h4>{{ $g->nama }}</h4>
      </div>
      @endforeach
    </div>
  </div>
</div>
<!-- Team End -->

<!-- Testimonial Start -->
<div class="container-fluid py-5" id="testimoni">
  <div class="container p-0">
    <div class="text-center pb-2">
      <p class="section-title px-5">
        <span class="px-2">Testimonials</span>
      </p>
      <h1 class="mb-4">Apa yang Orang Tua Katakan?</h1>
    </div>
    <div class="owl-carousel testimonial-carousel">
      @foreach ($testimonis as $t)
      <div class="testimonial-item px-3">
        <div class="bg-light shadow-sm rounded mb-4 p-4">
          <h3 class="fas fa-quote-left text-primary mr-3"></h3>
          {{ $t->deskripsi }}
        </div>
        <div class="d-flex align-items-center">
          @if ($t->image)
          <img class="rounded-circle" src="{{ asset('storage/' . $t->image) }}" style="width: 70px; height: 70px"
            alt="Image" />
          @else
          <img class="rounded-circle" src="img/default.png" style="width: 70px; height: 70px" alt="Image" />
          @endif
          <div class="pl-3">
            <h5>{{ $t->nama }}</h5>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
<!-- Testimonial End -->

<!-- Blog Start -->
<div class="container-fluid pt-5" id="acara">
  <div class="container">
    <div class="text-center pb-2">
      <p class="section-title px-5">
        <span class="px-2">Acara</span>
      </p>
      <h1 class="mb-4">Acara Terbaru</h1>
    </div>
    <div class="row pb-3">
      @foreach ($blogs as $b)
      <div class="col-lg-4 mb-4">
        <div class="card border-0 shadow-sm mb-2">

          @if ($b->image)
          <img src="{{ asset('storage/' . $b->image) }}" class="img-fluid mt-3">
          @else
          <img src="https://source.unsplash.com/400x400?coding" class="img-fluid mt-3">
          @endif

          <div class="card-body bg-light text-center p-4">
            <h4 class="">{{ $b->judul }}</h4>
            <div class="d-flex justify-content-center mb-3">
              <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
              <small class="mr-3"><i class="fa fa-calendar text-primary"></i> {{ $b->created_at->diffForHumans()
                }}</small>
            </div>
            <p>
              {!! $b->excerpt !!}
            </p>
            <a href="/acara/{{ $b->slug }}" class="btn btn-primary px-4 mx-auto my-2">Baca Lebih Lanjut</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
<!-- Blog End -->
@endsection