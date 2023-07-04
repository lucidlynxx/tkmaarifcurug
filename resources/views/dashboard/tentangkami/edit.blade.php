@extends('dashboard.layouts.main')

@section('container')
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3"><strong>Ubah Data Halaman Tentang Kami</strong></h1>

            <div class="row">
                <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
                    <div class="card flex-fill w-100 p-3">
                        <h5 class="card-title mb-3">Ubah Data</h5>
                        <form action="/dashboard/tentang-kami/{{ $tentangKami->slug }}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf

                          <div class="mb-3 row">
                            <label for="visi" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Visi</label>
                            <div class="col-sm-10">
                                <textarea class="form-control @error('visi')
                                is-invalid
                                @enderror" id="visi" name="visi" rows="4" required>{{ old('visi', $tentangKami->visi) }}</textarea>
                                @error('visi')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                            </div>
                          </div>

                          <div class="mb-3 row">
                            <label for="misi1" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Misi 1</label>
                            <div class="col-sm-10">
                                <textarea class="form-control @error('misi1')
                                is-invalid
                                @enderror" id="misi1" name="misi1" rows="4" required>{{ old('misi1', $tentangKami->misi1) }}</textarea>
                                @error('misi1')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                            </div>
                          </div>

                          <div class="mb-3 row">
                            <label for="misi2" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Misi 2</label>
                            <div class="col-sm-10">
                                <textarea class="form-control @error('misi2')
                                is-invalid
                                @enderror" id="misi2" name="misi2" rows="4" required>{{ old('misi2', $tentangKami->misi2) }}</textarea>
                                @error('misi2')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                            </div>
                          </div>

                          <div class="mb-3 row">
                            <label for="misi3" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Misi 3</label>
                            <div class="col-sm-10">
                                <textarea class="form-control @error('misi3')
                                is-invalid
                                @enderror" id="misi3" name="misi3" rows="4" required>{{ old('misi3', $tentangKami->misi3) }}</textarea>
                                @error('misi3')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                            </div>
                          </div>

                          <div class="mb-3 row">
                            <label for="fasilitas1" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Taman Bermain</label>
                            <div class="col-sm-10">
                                <textarea class="form-control @error('fasilitas1')
                                is-invalid
                                @enderror" id="fasilitas1" name="fasilitas1" rows="4" required>{{ old('fasilitas1', $tentangKami->fasilitas1) }}</textarea>
                                @error('fasilitas1')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                            </div>
                          </div>
                          
                          <div class="mb-3 row">
                            <label for="fasilitas2" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Nilai Agama dan Moral</label>
                            <div class="col-sm-10">
                                <textarea class="form-control @error('fasilitas2')
                                is-invalid
                                @enderror" id="fasilitas2" name="fasilitas2" rows="4" required>{{ old('fasilitas2', $tentangKami->fasilitas2) }}</textarea>
                                @error('fasilitas2')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                            </div>
                          </div>

                          <div class="mb-3 row">
                            <label for="fasilitas3" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Seni dan Kerajinan</label>
                            <div class="col-sm-10">
                                <textarea class="form-control @error('fasilitas3')
                                is-invalid
                                @enderror" id="fasilitas3" name="fasilitas3" rows="4" required>{{ old('fasilitas3', $tentangKami->fasilitas3) }}</textarea>
                                @error('fasilitas3')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                            </div>
                          </div>

                          <div class="mb-3 row">
                            <label for="fasilitas4" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Olahraga</label>
                            <div class="col-sm-10">
                                <textarea class="form-control @error('fasilitas4')
                                is-invalid
                                @enderror" id="fasilitas4" name="fasilitas4" rows="4" required>{{ old('fasilitas4', $tentangKami->fasilitas4) }}</textarea>
                                @error('fasilitas4')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                            </div>
                          </div>

                          <div class="mb-3 row">
                            <label for="fasilitas5" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Membaca dan Menulis</label>
                            <div class="col-sm-10">
                                <textarea class="form-control @error('fasilitas5')
                                is-invalid
                                @enderror" id="fasilitas5" name="fasilitas5" rows="4" required>{{ old('fasilitas5', $tentangKami->fasilitas5) }}</textarea>
                                @error('fasilitas5')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                            </div>
                          </div>

                          <div class="mb-3 row">
                            <label for="fasilitas6" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Tur Rekreasi</label>
                            <div class="col-sm-10">
                                <textarea class="form-control @error('fasilitas6')
                                is-invalid
                                @enderror" id="fasilitas6" name="fasilitas6" rows="4" required>{{ old('fasilitas6', $tentangKami->fasilitas6) }}</textarea>
                                @error('fasilitas6')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror

                            </div>
                          </div>

                          <div class="mb-3 row">
                            <label for="image" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Upload Foto</label>
                            <div class="col-sm-10">
                                <input type="hidden" name="oldImage" value="{{ $tentangKami->image }}">
                                @if ($tentangKami->image)
                                <img src="{{ asset('storage/' . $tentangKami->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
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
                                  <a href="/dashboard/tentang-kami" class="btn btn-danger">Batal</a>
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