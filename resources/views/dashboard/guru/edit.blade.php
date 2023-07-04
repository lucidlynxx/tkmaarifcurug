@extends('dashboard.layouts.main')

@section('container')
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3"><strong>Ubah Data Guru</strong></h1>

            <div class="row">
                <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
                    <div class="card flex-fill w-100 p-3">
                        <h5 class="card-title mb-3">Ubah Data</h5>
                        <form action="/dashboard/guru/{{ $guru->slug }}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf

                          <div class="mb-3 row">
                            <label for="nama" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('nama')
                                is-invalid
                                @enderror" id="nama" name="nama" placeholder="Masukkan Nama" value="{{ old('nama', $guru->nama) }}" required>
                                @error('nama')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                            </div>
                          </div>

                          <input type="hidden" class="form-control" id="slug" name="slug" value="{{ old('slug', $guru->slug) }}" required>

                          <div class="mb-3 row">
                            <label for="alamat" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('alamat')
                                is-invalid
                                @enderror" id="alamat" name="alamat" placeholder="Masukkan Alamat" value="{{ old('alamat', $guru->alamat) }}" required>
                                @error('alamat')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                            </div>
                          </div>

                          <div class="mb-3 row">
                            <label for="noTelepon" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">No Telepon</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control @error('noTelepon')
                                is-invalid
                                @enderror" id="noTelepon" name="noTelepon" placeholder="Masukkan No Telepon" value="{{ old('noTelepon', $guru->noTelepon) }}" required>
                                @error('noTelepon')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                            </div>
                          </div>

                          <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Jenis Kelamin</label>
                            @error('jenisKelamin')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="laki-laki" name="jenisKelamin" value="laki-laki" required @if (old('jenisKelamin', $guru->jenisKelamin) == 'laki-laki')
                                        checked
                                    @endif>
                                    <label class="form-check-label" for="laki-laki">Laki-laki</label>
                                  </div>
                                  <div class="form-check form-check-inline mb-3">
                                    <input class="form-check-input" type="radio" id="perempuan" name="jenisKelamin" value="perempuan" required @if (old('jenisKelamin', $guru->jenisKelamin) == 'perempuan')
                                    checked
                                    @endif>
                                    <label class="form-check-label" for="perempuan">Perempuan</label>
                                  </div>
                            </div>
                          </div>

                          <div class="mb-3 row">
                            <label for="image" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Upload Foto</label>
                            <div class="col-sm-10">
                                <input type="hidden" name="oldImage" value="{{ $guru->image }}">

                                @if ($guru->image)
                                <img src="{{ asset('storage/' . $guru->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                @else
                                <img class="img-preview img-fluid mb-3 col-sm-5">
                                @endif

                                <input class="form-control @error('image')
                                is-invalid
                                @enderror" type="file" id="image" name="image" onchange="previewImage()">
                                @error('image')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror

                                <div class="col-lg-offset-2 col-lg-10 mt-3">
                                  <button type="submit" class="btn btn-primary">Ubah</button>
                                  <a href="/dashboard/guru" class="btn btn-danger">Batal</a>
                                </div>
                            </div>
                          </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <script>
      function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(OFREvent) {
          imgPreview.src = OFREvent.target.result;
        }
      }
    </script>
@endsection

@push('slug')
    <script>
        const nama = document.querySelector("#nama");
        const slug = document.querySelector('#slug');

        nama.addEventListener("keyup", () => {
            let preslug = nama.value;
            preslug = preslug.replace(/ /g,"-");
            slug.value = preslug.toLowerCase();
        });
    </script>
@endpush