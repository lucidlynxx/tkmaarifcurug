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

<!-- Blog Start -->
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h1 class="mb-3">{{ $blog->judul }}</h1>

        @if ($blog->image)
        <div style="max-height: 350px; overflow:hidden;">
            <img src="{{ asset('storage/' . $blog->image) }}" class="img-fluid">  
        </div>
        @else
        <img src="https://source.unsplash.com/1200x400?coding" class="img-fluid">
        @endif

        <article class="my-3">
            {!! $blog->body !!}
        </article>
        <a href="/acara" class="text-decoration-none d-block mt-3">Kembali</a>
        </div>
    </div>
</div>
<!-- Blog End -->
@endsection