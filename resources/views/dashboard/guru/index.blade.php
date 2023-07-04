@extends('dashboard.layouts.main')

@section('container')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Data Halaman Guru</strong></h1>

        <div class="row">
            <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
                <div class="card flex-fill w-100 p-3">
                    <h5 class="card-title mb-3">Daftar Data</h5>
                    <div class="col-lg-offset-2 col-lg-10">
                        <a href="/dashboard/guru/create" class="btn btn-primary mb-3">Tambah Guru</a>
                    </div>
                    <table class="table table-hover my-0" id="myTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>No. Telp</th>
                                <th>Jenis Kelamin</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($gurus as $g)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $g->nama }}</td>
                                <td>{{ $g->alamat }}</td>
                                <td>{{ $g->noTelepon }}</td>
                                <td>{{ $g->jenisKelamin }}</td>
                                @if ($g->image)
                                    <td>
                                        <div style="width: 50px;">
                                            <img src="{{ asset('storage/' . $g->image) }}" class="img-fluid">
                                        </div>
                                    </td>
                                @else
                                    <td>Belum ada foto</td>
                                @endif
                                <td>
                                    <a href="/dashboard/guru/{{ $g->slug }}/edit"><i data-feather="edit-2"></i></a>
                                    @livewire('guru-alert', ['guruId' => $g->id])
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>No. Telp</th>
                                <th>Jenis Kelamin</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

    </div>
</main>
@endsection