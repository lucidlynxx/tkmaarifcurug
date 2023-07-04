@extends('layouts.main')

@section('container')
<!-- Header Start -->
<div class="container-fluid bg-primary mb-5">
    <div
      class="d-flex flex-column align-items-center justify-content-center"
      style="min-height: 400px"
    >
      <h3 class="display-3 font-weight-bold text-white">Tentang Kami</h3>
      <div class="d-inline-flex text-white">
        <p class="m-0"><a class="text-white" href="/">Beranda</a></p>
        <p class="m-0 px-2">/</p>
        <p class="m-0">Tentang Kami</p>
      </div>
    </div>
  </div>
<!-- Header End -->

<!-- About Start -->
@foreach ($tentangKami as $tk)
<div class="container-fluid py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5">
          <img
            class="img-fluid rounded mb-5 mb-lg-0"
            src="{{ asset('storage/' . $tk->image) }}"
          />
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
<!-- About End -->

<!-- Facilities Start -->
<div class="container-fluid pt-5">
    <div class="container pb-3">
      <div class="row">
        <div class="col-lg-4 col-md-6 pb-1">
          <div
            class="d-flex bg-light shadow-sm border-top rounded mb-4"
            style="padding: 30px"
          >
            <i
              class="flaticon-050-fence h1 font-weight-normal text-primary mb-3"
            ></i>
            <div class="pl-4">
              <h4>Taman Bermain</h4>
              <p class="m-0">
                {{ $tk->fasilitas1 }}
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 pb-1">
          <div
            class="d-flex bg-light shadow-sm border-top rounded mb-4"
            style="padding: 30px"
          >
            <i
              class="flaticon-028-kindergarten h1 font-weight-normal text-primary mb-3"
            ></i>
            <div class="pl-4">
              <h4>Nilai Agama dan Moral</h4>
              <p class="m-0">
                {{ $tk->fasilitas2 }}
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 pb-1">
          <div
            class="d-flex bg-light shadow-sm border-top rounded mb-4"
            style="padding: 30px"
          >
            <i
              class="flaticon-030-crayons h1 font-weight-normal text-primary mb-3"
            ></i>
            <div class="pl-4">
              <h4>Seni dan Kerajinan</h4>
              <p class="m-0">
                {{ $tk->fasilitas3 }}
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 pb-1">
          <div
            class="d-flex bg-light shadow-sm border-top rounded mb-4"
            style="padding: 30px"
          >
            <i
              class="flaticon-018-ball h1 font-weight-normal text-primary mb-3"
            ></i>
            <div class="pl-4">
              <h4>Olahraga</h4>
              <p class="m-0">
                {{ $tk->fasilitas4 }}
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 pb-1">
          <div
            class="d-flex bg-light shadow-sm border-top rounded mb-4"
            style="padding: 30px"
          >
            <i
              class="flaticon-032-book h1 font-weight-normal text-primary mb-3"
            ></i>
            <div class="pl-4">
              <h4>Membaca dan Menulis</h4>
              <p class="m-0">
                {{ $tk->fasilitas5 }}
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 pb-1">
          <div
            class="d-flex bg-light shadow-sm border-top rounded mb-4"
            style="padding: 30px"
          >
            <i
              class="flaticon-047-backpack h1 font-weight-normal text-primary mb-3"
            ></i>
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
@endforeach
<!-- Facilities Start -->
@endsection