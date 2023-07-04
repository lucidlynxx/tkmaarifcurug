@extends('layouts.main')

@section('container')
<!-- Header Start -->
<div class="container-fluid bg-primary mb-5">
    <div
      class="d-flex flex-column align-items-center justify-content-center"
      style="min-height: 400px"
    >
      <h3 class="display-3 font-weight-bold text-white">Acara</h3>
      <div class="d-inline-flex text-white">
        <p class="m-0"><a class="text-white" href="/">Beranda</a></p>
        <p class="m-0 px-2">/</p>
        <p class="m-0">Acara</p>
      </div>
    </div>
  </div>
<!-- Header End -->

@if ($blogs->count())
<!-- Blog Start -->
<div class="container-fluid pt-5">
  <div class="container">
    <div class="text-center pb-2">
      <p class="section-title px-5">
        <span class="px-2">Acara</span>
      </p>
      <h1 class="mb-4">Acara Terbaru</h1>
    </div>
    <div class="row justify-content-center mb-3">
      <div class="col-md-6">
        <form action="/acara">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Cari.." name="search" value="{{ request('search') }}">
            <button class="btn btn-link" type="submit">Cari</button>
          </div>
        </form>
      </div>
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
                <small class="mr-3"
                  ><i class="fa fa-user text-primary"></i> Admin</small
                >
                <small class="mr-3"
                  ><i class="fa fa-calendar text-primary"></i> {{ $b->created_at->diffForHumans() }}</small
                >
              </div>
              <p>
                {!! $b->excerpt !!}
              </p>
              <a href="/acara/{{ $b->slug }}" class="btn btn-primary px-4 mx-auto my-2"
                >Baca Lebih Lanjut</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>
<!-- Blog End -->
@else
  <p class="text-center fs-4">No Post Found.</p>
@endif

<div class="d-flex justify-content-center">
  {{ $blogs->links() }}
</div>

@endsection