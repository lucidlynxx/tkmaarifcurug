@extends('dashboard.layouts.main')

@section('container')
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3"><strong>Ubah Jadwal Kelas (Kamis)</strong></h1>

            <div class="row">
                <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
                    <div class="card flex-fill w-100 p-3">
                        <h5 class="card-title mb-3">UBAH JADWAL</h5>
                        <form action="/dashboard/kelas3/{{ $kamis->slug }}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf

                          <div class="mb-3 row">
                            <label for="waktu" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Waktu</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control @error('waktu')
                                  is-invalid
                              @enderror" id="waktu" name="waktu" placeholder="Masukkan Judul" value="{{ old('waktu', $kamis->waktu) }}" required>
                              @error('waktu')
                                  <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                              @enderror
                            </div>
                          </div>
    
                          <input type="hidden" class="form-control" id="slug" name="slug" value="{{ old('slug', $kamis->slug) }}" required>

                          <div class="mb-3 row">
                            <label for="kegiatan" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Kegiatan</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control @error('kegiatan')
                                  is-invalid
                              @enderror" id="kegiatan" name="kegiatan" placeholder="Masukkan Judul" value="{{ old('kegiatan', $kamis->kegiatan) }}" required>
                              @error('kegiatan')
                                  <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                              @enderror

                              <div class="col-lg-offset-2 col-lg-10 mt-3">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                                <a href="/dashboard/kelas" class="btn btn-danger">Batal</a>
                              </div>
                            </div>
                          </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection

@push('slug')
    <script>
        const kegiatan = document.querySelector("#kegiatan");
        const slug = document.querySelector('#slug');

        kegiatan.addEventListener("keyup", () => {
            let preslug = kegiatan.value;
            preslug = preslug.replace(/ /g,"-");
            slug.value = preslug.toLowerCase();
        });
    </script>
@endpush