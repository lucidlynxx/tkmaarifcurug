@extends('layouts.main')

@section('container')
<!-- Header Start -->
<div class="container-fluid bg-primary mb-5">
    <div
      class="d-flex flex-column align-items-center justify-content-center"
      style="min-height: 400px"
    >
      <h3 class="display-3 font-weight-bold text-white">Kontak Kami</h3>
      <div class="d-inline-flex text-white">
        <p class="m-0"><a class="text-white" href="/">Beranda</a></p>
        <p class="m-0 px-2">/</p>
        <p class="m-0">Kontak Kami</p>
      </div>
    </div>
  </div>
<!-- Header End -->

<!-- Contact Start -->
<div class="container-fluid pt-5">
    <div class="container">
      <div class="text-center pb-2">
        <p class="section-title px-5">
          <span class="px-2">Kontak Kami</span>
        </p>
        <h1 class="mb-4">Lebih Dekat Dengan Kami</h1>
      </div>
      <div class="row">
        <div class="col-lg-7 mb-5">
          <div class="contact-form">
            <div id="success"></div>
            <form action="/kontak" method="post" enctype="multipart/form-data">
              @csrf
              <div class="control-group mb-3">
                  <input type="text" class="form-control @error('nama')
                      is-invalid
                  @enderror" id="nama" name="nama" placeholder="Masukkan Nama" value="{{ old('nama') }}" required>
                  @error('nama')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                  @enderror
              </div>
              <div class="control-group mb-3">
                  <input type="email" class="form-control @error('email')
                      is-invalid
                  @enderror" id="email" name="email" placeholder="Masukkan Email" value="{{ old('email') }}" required>
                  @error('email')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                  @enderror
              </div>
              <div class="control-group mb-3">
                <textarea class="form-control @error('body')
                      is-invalid
                @enderror" id="body" name="body" placeholder="Masukkan Pesan" rows="6" required>{{ old('body') }}</textarea>
                @error('body')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                 @enderror
              </div>
              <div>
                <button
                  class="btn btn-primary py-2 px-4"
                  type="submit"
                  id="sendMessageButton"
                >
                  Kirim Pesan
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-5 mb-5">
          <p>
            Membantu anak didik mengembangkan berbagai potensi yang dimiliki untuk siap memasuki pendidikan dasar melalui kegiatan bermain sambil belajar
          </p>
          <div class="d-flex">
            <i
              class="fa fa-map-marker-alt d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
              style="width: 45px; height: 45px"
            ></i>
            <div class="pl-3">
              <h5>Alamat</h5>
              <p>Ds.Batukaras, Kec. Cijulang, Kabupaten Ciamis, Jawa Barat 46394</p>
            </div>
          </div>
          <div class="d-flex">
            <i
              class="fa fa-envelope d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
              style="width: 45px; height: 45px"
            ></i>
            <div class="pl-3">
              <h5>Email</h5>
              <p>info@example.com</p>
            </div>
          </div>
          <div class="d-flex">
            <i
              class="fa fa-phone-alt d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
              style="width: 45px; height: 45px"
            ></i>
            <div class="pl-3">
              <h5>Telepon</h5>
              <p>+62 853-1763-4386</p>
            </div>
          </div>
          <div class="d-flex">
            <i
              class="far fa-clock d-inline-flex align-items-center justify-content-center bg-primary text-secondary rounded-circle"
              style="width: 45px; height: 45px"
            ></i>
            <div class="pl-3">
              <h5>Jam Buka</h5>
              <strong>Senin - Jum'at:</strong>
              <p class="m-0">08:00 - 17:00</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Contact End -->
@endsection