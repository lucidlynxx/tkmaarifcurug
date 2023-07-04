@extends('dashboard.layouts.main')

@section('container')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Data Detail Acara</strong></h1>

        <div class="row">
            <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
                <div class="card flex-fill w-100 p-3">
                    <h5 class="card-title mb-3">Detail Acara</h5>
                    
                    <div class="row">
                        <div class="col-lg-8">
                            <a href="/dashboard/acara" class="btn btn-success"><i data-feather="arrow-left"></i> Kembali</a>
                            <a href="/dashboard/acara/{{ $blog->slug }}/edit" class="btn btn-warning"><i data-feather="edit-2"></i> Edit</a>
                        </div>
                    </div>
                    
                    @if ($blog->image)
                    <div style="width: 350px;">
                        <img src="{{ asset('storage/' . $blog->image) }}" class="img-fluid mt-3">  
                    </div>
                    @else
                        <img src="https://source.unsplash.com/1200x400?event" class="img-fluid mt-3">
                    @endif

                    <h3 class="mt-3"><strong>{{ $blog->judul }}</strong></h3>

                    <article class="my-3">
                        {!! $blog->body !!}
                    </article>
                </div>
            </div>
        </div>

    </div>
</main>
@endsection