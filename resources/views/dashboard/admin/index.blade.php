@extends('dashboard.layouts.main')

@section('container')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Data Administrator</strong></h1>

        <div class="row">
            <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
                <div class="card flex-fill w-100 p-3">
                    <h5 class="card-title mb-3">Daftar Data</h5>
                    <div class="col-lg-offset-2 col-lg-10">
                        <a href="/dashboard/admin/create" class="btn btn-primary mb-3">Tambah Admin</a>
                    </div>
                    <table class="table table-hover my-0" id="myTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Username</th>
                                <th>Alamat</th>
                                <th>No Telepon</th>
                                <th>Jenis Kelamin</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($admins as $a)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $a->username }}</td>
                                <td>{{ $a->alamat }}</td>
                                <td>{{ $a->noTelepon }}</td>
                                <td>{{ $a->jenisKelamin }}</td>
                                <td>
                                    @livewire('admin-alert', ['adminId' => $a->id])
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Username</th>
                                <th>Alamat</th>
                                <th>No Telepon</th>
                                <th>Jenis Kelamin</th>
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