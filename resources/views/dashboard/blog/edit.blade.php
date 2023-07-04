@extends('dashboard.layouts.main')

@section('container')
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3"><strong>Ubah Acara</strong></h1>

            <div class="row">
                <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
                    <div class="card flex-fill w-100 p-3">
                        <h5 class="card-title mb-3">UBAH ACARA</h5>
                        <form action="/dashboard/acara/{{ $blog->slug }}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf

                          <div class="mb-3 row">
                            <label for="judul" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Judul</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control @error('judul')
                                  is-invalid
                              @enderror" id="judul" name="judul" placeholder="Masukkan Judul" value="{{ old('judul', $blog->judul) }}" required>
                              @error('judul')
                                  <div class="invalid-feedback">
                                    {{ $message }}
                                  </div>
                              @enderror
                            </div>
                          </div>

                          <input type="hidden" class="form-control" id="slug" name="slug" value="{{ old('slug', $blog->slug) }}" required>

                          <div class="mb-3 row">
                            <label for="body" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Deskripsi</label>
                            <div class="col-sm-10">
                              <input type="hidden" class="form-control" id="body" name="body" placeholder="Masukkan Deskripsi" value="{{ old('body', $blog->body) }}" required>
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
                                <input type="hidden" name="oldImage" value="{{ $blog->image }}">

                                @if ($blog->image)
                                <img src="{{ asset('storage/' . $blog->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
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

@push('slug')
    <script>
        const judul = document.querySelector("#judul");
        const slug = document.querySelector('#slug');

        judul.addEventListener("keyup", () => {
            let preslug = judul.value;
            preslug = preslug.replace(/ /g,"-");
            slug.value = preslug.toLowerCase();
        });
    </script>
@endpush
