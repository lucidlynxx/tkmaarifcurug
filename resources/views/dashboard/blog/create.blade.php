@extends('dashboard.layouts.main')

@section('container')
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3"><strong>Tambah Acara</strong></h1>

            <div class="row">
                <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
                    <div class="card flex-fill w-100 p-3">
                        <h5 class="card-title mb-3">TAMBAH ACARA</h5>
                        <form action="/dashboard/acara" method="post" enctype="multipart/form-data">
                        @csrf

                          <div class="mb-3 row">
                            <label for="judul" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Judul</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control @error('judul')
                                  is-invalid
                              @enderror" id="judul" name="judul" placeholder="Masukkan Judul" value="{{ old('judul') }}" required>
                              @error('judul')
                                  <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                              @enderror
                            </div>
                          </div>

                          <div class="mb-3 row">
                            <label for="body" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Deskripsi</label>
                            <div class="col-sm-10">
                              <input type="hidden" class="form-control" id="body" name="body" placeholder="Masukkan Deskripsi" value="{{ old('body') }}" required>
                              <trix-editor input="body"></trix-editor>
                              @error('body')
                                  <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                              @enderror
                            </div>
                          </div>

                          <div class="mb-3 row">
                            <label for="image" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Upload Foto</label>
                            <div class="col-sm-10">
                                <img class="img-preview img-fluid mb-3 col-sm-5">
                                <input class="form-control @error('image')
                                is-invalid
                                @enderror" type="file" id="image" name="image" onchange="previewImage()">
                                @error('image')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror

                                <div class="col-lg-offset-2 col-lg-10 mt-3">
                                  <button type="submit" class="btn btn-primary">Tambah</button>
                                  <a href="/dashboard/acara" class="btn btn-danger">Batal</a>
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

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        });
    </script>
@endsection
