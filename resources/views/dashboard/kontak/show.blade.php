@extends('dashboard.layouts.main')

@section('container')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Data Detail Pesan</strong></h1>

        <div class="row">
            <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
                <div class="card flex-fill w-100 p-3">
                    <h5 class="card-title mb-3">Detail Pesan</h5>
                    
                    <div class="row">
                        <div class="col-lg-8">
                            <a href="/dashboard/kontak" class="btn btn-success"><i data-feather="arrow-left"></i> Kembali</a>
                        </div>
                    </div>
                    
                    <h3 class="mt-3"><strong>{{ $kontak->nama }}</strong></h3>
                    <h5 class="fst-italic"><strong>{{ $kontak->email }}</strong></h5>

                    <article class="my-3">
                        {!! $kontak->body !!}
                    </article>
                </div>
            </div>
        </div>

    </div>
</main>
@endsection