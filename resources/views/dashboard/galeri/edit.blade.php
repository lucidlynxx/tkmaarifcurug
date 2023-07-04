@extends('dashboard.layouts.main')

@section('container')
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3"><strong>Ubah Data Galeri</strong></h1>

            <div class="row">
                <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
                    <div class="card flex-fill w-100 p-3">
                        <h5 class="card-title mb-3">Ubah Data</h5>
                        <form action="/dashboard/galeri/{{ $galeri->slug }}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf

                          <div class="mb-3 row">
                            <label for="kategori" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Kategori</label>
                            <div class="col-sm-10">
                                <select class="form-select @error('kategori')
                                is-invalid
                                @enderror" id="kategori" name="kategori" required> 
                                  <option value="{{ old('kategori', $galeri->kategori) }}" selected>{{ old('kategori', $galeri->kategori) }}</option>
                                  <option value="Bermain">Bermain</option>
                                  <option value="Menggambar">Menggambar</option>
                                  <option value="Membaca">Membaca</option>
                                </select>
                                @error('kategori')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                            </div>
                          </div>

                          <input type="hidden" class="form-control" id="slug" name="slug" value="{{ old('slug', $galeri->slug) }}" required>

                          <div class="mb-3 row">
                            <label for="image" class="col-sm-2 col-form-label text-end fw-semibold text-secondary">Upload Foto</label>
                            <div class="col-sm-10">
                                <input type="hidden" name="oldImage" value="{{ $galeri->image }}">

                                @if ($galeri->image)
                                <img src="{{ asset('storage/' . $galeri->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
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
                                  <a href="/dashboard/galeri" class="btn btn-danger">Batal</a>
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
    const kategori = document.querySelector('#kategori');
    const slug = document.querySelector('#slug');
    const characters ='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
  
    function generateString(length) {
      let result = ' ';
      const charactersLength = characters.length;
      for ( let i = 0; i < length; i++ ) {
          result += characters.charAt(Math.floor(Math.random() * charactersLength));
      }
  
      return result;
    }
    
    kategori.addEventListener('change', () => {
      let preslug = kategori.length;
      preslug = generateString(preslug);
      slug.value = preslug;
    });
</script>
@endpush