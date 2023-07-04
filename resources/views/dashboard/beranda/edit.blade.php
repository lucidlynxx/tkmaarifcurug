@extends('dashboard.layouts.main')

@section('container')
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3"><strong>Ubah Data Header</strong></h1>

            <div class="row">
                <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
                    <div class="card flex-fill w-100 p-3">
                        <h5 class="card-title mb-3">Ubah Data</h5>
                        <form action="/dashboard/beranda/{{ $header->slug }}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf

                        <div class="mb-3 row">
                            <label for="namaTk" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Nama TK</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control @error('namaTk')
                                  is-invalid
                              @enderror" id="namaTk" name="namaTk" placeholder="Masukkan Nama TK" value="{{ old('namaTk', $header->namaTk) }}" required>
                              @error('namaTk')
                                  <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                              @enderror
                            </div>
                          </div>

                          <div class="mb-3 row">
                            <label for="deskripsi" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Deskripsi</label>
                            <div class="col-sm-10">
                                <textarea class="form-control @error('deskripsi')
                                is-invalid
                                @enderror" id="deskripsi" name="deskripsi" rows="4" placeholder="Masukkan Deskripsi" required>{{ old('deskripsi', $header->deskripsi) }}</textarea>
                                @error('deskripsi')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                            </div>
                          </div>

                          <div class="mb-3 row">
                            <label for="image" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Upload Foto</label>
                            <div class="col-sm-10">
                                <input type="hidden" name="oldImage" value="{{ $header->image }}">
                                @if ($header->image)
                                <img src="{{ asset('storage/' . $header->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
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
                                  <a href="/dashboard/beranda" class="btn btn-danger">Batal</a>
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