@extends('dashboard.layouts.main')

@section('container')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Data Halaman Beranda</strong></h1>

        <div class="row">
            <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
                <div class="card flex-fill w-100 p-3">
                    <h5 class="card-title mb-3">Data Header</h5>
                    <table class="table table-hover my-0" id="myTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama TK</th>
                                <th>Deskripsi</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($header as $h)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $h->namaTk }}</td>
                                <td>{{ $h->deskripsi }}</td>
                                @if ($h->image)
                                <td>
                                    <div style="width: 150px;">
                                        <img src="{{ asset('storage/' . $h->image) }}" class="img-fluid">
                                    </div>
                                </td>
                                @else
                                    <td>Belum ada foto</td>
                                @endif
                                <td>
                                    <a href="/dashboard/beranda/{{ $h->slug }}/edit"><i data-feather="edit-2"></i></a>
                                    {{-- @livewire('kelas-alert', ['seninId' => $h->id]) --}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama TK</th>
                                <th>Deskripsi</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
                <div class="card flex-fill w-100 p-3">
                    <h5 class="card-title mb-3">Data Testimoni</h5>
                    <div class="col-lg-offset-2 col-lg-10">
                        <a href="/dashboard/beranda1/create" class="btn btn-primary mb-3">Tambah Data</a>
                    </div>
                    <table class="table table-hover my-0" id="myTable1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Deskripsi</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($testimonis as $t)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $t->nama }}</td>
                                <td>{{ $t->deskripsi }}</td>
                                @if ($t->image)
                                <td>
                                    <div style="width: 50px;">
                                        <img src="{{ asset('storage/' . $t->image) }}" class="img-fluid">
                                    </div>
                                </td>
                                @else
                                    <td>Belum ada foto</td>
                                @endif
                                <td>
                                    <a href="/dashboard/beranda1/{{ $t->slug }}/edit"><i data-feather="edit-2"></i></a>
                                    {{-- @livewire('kelas1-alert', ['selasaId' => $sl->id]) --}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Deskripsi</th>
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

@push('table')
    <script>
        $(document).ready(function () {
            $('#myTable1').DataTable();
        });
    </script>
@endpush