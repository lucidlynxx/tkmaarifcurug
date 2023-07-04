@extends('layouts.main')

@section('container')
<!-- Header Start -->
<div class="container-fluid bg-primary mb-5">
    <div
      class="d-flex flex-column align-items-center justify-content-center"
      style="min-height: 400px"
    >
      <h3 class="display-3 font-weight-bold text-white">Guru</h3>
      <div class="d-inline-flex text-white">
        <p class="m-0"><a class="text-white" href="/">Beranda</a></p>
        <p class="m-0 px-2">/</p>
        <p class="m-0">Guru</p>
      </div>
    </div>
  </div>
<!-- Header End -->

<!-- Team Start -->
<div class="container-fluid pt-5">
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
            <div
              class="position-relative overflow-hidden mb-4"
              style="border-radius: 100%"
            >
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
@endsection