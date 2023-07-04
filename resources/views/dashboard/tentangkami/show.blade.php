@extends('dashboard.layouts.main')

@section('container')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Data Halaman Tentang Kami</strong></h1>

        <div class="row">
            <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
                <div class="card flex-fill w-100 p-3">
                    <h5 class="card-title mb-3">Detail Data</h5>
                    <div class="col-lg-offset-2 col-lg-10">
                        <a href="/dashboard/tentang-kami" class="btn btn-success mb-3">Kembali</a>
                    </div>
                    <h4 class="card-subtitle mb-2 mt-3">Visi</h4>
                    <p class="card-text">{{ $tentangKami->visi }}</p>
                    <h4 class="card-subtitle mb-2">Misi</h4>
                        <p class="card-text">{{ $tentangKami->misi1 }}</p>
                        <p class="card-text">{{ $tentangKami->misi2 }}</p>
                        <p class="card-text">{{ $tentangKami->misi3 }}</p>
                    
                    <h3 class="card-subtitle mb-3 mt-3">Fasilitas</h3>
                    <h4 class="card-subtitle mb-2">Taman Bermain</h4>
                    <p class="card-text">{{ $tentangKami->fasilitas1 }}</p>
                    <h4 class="card-subtitle mb-2">Nilai Agama dan Moral</h4>
                    <p class="card-text">{{ $tentangKami->fasilitas2 }}</p>
                    <h4 class="card-subtitle mb-2">Seni dan Kerajinan</h4>
                    <p class="card-text">{{ $tentangKami->fasilitas3 }}</p>
                    <h4 class="card-subtitle mb-2">Olahraga</h4>
                    <p class="card-text">{{ $tentangKami->fasilitas4 }}</p>
                    <h4 class="card-subtitle mb-2">Membaca dan Menulis</h4>
                    <p class="card-text">{{ $tentangKami->fasilitas5 }}</p>
                    <h4 class="card-subtitle mb-2">Tur Rekreasi</h4>
                    <p class="card-text">{{ $tentangKami->fasilitas6 }}</p>
                    <h4 class="card-subtitle mb-2">Foto</h4>
                    <img src="{{ asset('storage/' . $tentangKami->image) }}" class="img-fluid">  
                </div>
            </div>
        </div>

    </div>
</main>
@endsection