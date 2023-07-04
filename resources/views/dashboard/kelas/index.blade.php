@extends('dashboard.layouts.main')

@section('container')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Data Halaman Jadwal Kelas</strong></h1>

        <div class="row">
            <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
                <div class="card flex-fill w-100 p-3">
                    <h5 class="card-title mb-3">Hari Senin</h5>
                    <div class="col-lg-offset-2 col-lg-10">
                        <a href="/dashboard/kelas/create" class="btn btn-primary mb-3">Tambah Jadwal</a>
                    </div>
                    <table class="table table-hover my-0" id="myTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Waktu</th>
                                <th>Kegiatan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($senins as $sn)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $sn->waktu }}</td>
                                <td>{{ $sn->kegiatan }}</td>
                                <td>
                                    <a href="/dashboard/kelas/{{ $sn->slug }}/edit"><i data-feather="edit-2"></i></a>
                                    @livewire('kelas-alert', ['seninId' => $sn->id])
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Waktu</th>
                                <th>Kegiatan</th>
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
                    <h5 class="card-title mb-3">Hari Selasa</h5>
                    <div class="col-lg-offset-2 col-lg-10">
                        <a href="/dashboard/kelas1/create" class="btn btn-primary mb-3">Tambah Jadwal</a>
                    </div>
                    <table class="table table-hover my-0" id="myTable1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Waktu</th>
                                <th>Kegiatan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($selasas as $sl)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $sl->waktu }}</td>
                                <td>{{ $sl->kegiatan }}</td>
                                <td>
                                    <a href="/dashboard/kelas1/{{ $sl->slug }}/edit"><i data-feather="edit-2"></i></a>
                                    @livewire('kelas1-alert', ['selasaId' => $sl->id])
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Waktu</th>
                                <th>Kegiatan</th>
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
                    <h5 class="card-title mb-3">Hari Rabu</h5>
                    <div class="col-lg-offset-2 col-lg-10">
                        <a href="/dashboard/kelas2/create" class="btn btn-primary mb-3">Tambah Jadwal</a>
                    </div>
                    <table class="table table-hover my-0" id="myTable2">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Waktu</th>
                                <th>Kegiatan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rabus as $rb)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $rb->waktu }}</td>
                                <td>{{ $rb->kegiatan }}</td>
                                <td>
                                    <a href="/dashboard/kelas2/{{ $rb->slug }}/edit"><i data-feather="edit-2"></i></a>
                                    @livewire('kelas2-alert', ['rabuId' => $rb->id])
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Waktu</th>
                                <th>Kegiatan</th>
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
                    <h5 class="card-title mb-3">Hari Kamis</h5>
                    <div class="col-lg-offset-2 col-lg-10">
                        <a href="/dashboard/kelas3/create" class="btn btn-primary mb-3">Tambah Jadwal</a>
                    </div>
                    <table class="table table-hover my-0" id="myTable3">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Waktu</th>
                                <th>Kegiatan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kamis as $km)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $km->waktu }}</td>
                                <td>{{ $km->kegiatan }}</td>
                                <td>
                                    <a href="/dashboard/kelas3/{{ $km->slug }}/edit"><i data-feather="edit-2"></i></a>
                                    @livewire('kelas3-alert', ['kamisId' => $km->id])
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Waktu</th>
                                <th>Kegiatan</th>
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
                    <h5 class="card-title mb-3">Hari Jum'at</h5>
                    <div class="col-lg-offset-2 col-lg-10">
                        <a href="/dashboard/kelas4/create" class="btn btn-primary mb-3">Tambah Jadwal</a>
                    </div>
                    <table class="table table-hover my-0" id="myTable4">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Waktu</th>
                                <th>Kegiatan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jumats as $jm)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $jm->waktu }}</td>
                                <td>{{ $jm->kegiatan }}</td>
                                <td>
                                    <a href="/dashboard/kelas4/{{ $jm->slug }}/edit"><i data-feather="edit-2"></i></a>
                                    @livewire('kelas4-alert', ['jumatId' => $jm->id])
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Waktu</th>
                                <th>Kegiatan</th>
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
                    <h5 class="card-title mb-3">Hari Sabtu</h5>
                    <div class="col-lg-offset-2 col-lg-10">
                        <a href="/dashboard/kelas5/create" class="btn btn-primary mb-3">Tambah Jadwal</a>
                    </div>
                    <table class="table table-hover my-0" id="myTable5">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Waktu</th>
                                <th>Kegiatan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sabtus as $sb)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $sb->waktu }}</td>
                                <td>{{ $sb->kegiatan }}</td>
                                <td>
                                    <a href="/dashboard/kelas5/{{ $sb->slug }}/edit"><i data-feather="edit-2"></i></a>
                                    @livewire('kelas5-alert', ['sabtuId' => $sb->id])
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Waktu</th>
                                <th>Kegiatan</th>
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
    <script>
        $(document).ready(function () {
            $('#myTable2').DataTable();
        });
    </script>
    <script>
        $(document).ready(function () {
            $('#myTable3').DataTable();
        });
    </script>
    <script>
        $(document).ready(function () {
            $('#myTable4').DataTable();
        });
    </script>
    <script>
        $(document).ready(function () {
            $('#myTable5').DataTable();
        });
    </script>
@endpush