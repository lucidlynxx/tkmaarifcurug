    {{-- Nothing in the world is as soft and yielding as water. --}}
    <a class="text-danger" wire:click="$emit('triggerDelete', {{ $galeriId }})"><i data-feather="trash"></i></a>

@push('GaleriAlert')
    <script type="text/javascript">
           document.addEventListener('DOMContentLoaded', function () {
               @this.on('triggerDelete', galeriId => {
                   Swal.fire({
                       title: 'Anda Yakin?',
                       text: 'Data galeri akan dihapus',
                       icon: "warning",
                       showCancelButton: true,
                       confirmButtonColor: '#3085d6',
                       cancelButtonColor: '#aaa',
                       confirmButtonText: 'Ya Hapus!'
                   }).then((result) => {
                //if user clicks on delete
                       if (result.value) {
                    // calling destroy method to delete
                           @this.call('destroy', galeriId)
                    // success response
                           Swal.fire({
                               title: 'Hapus Data Sukses!',
                               text: 'Data galeri telah dihapus', 
                               icon: 'success',
                               showConfirmButton: true,
                               timer: 2500
                           });
                       } else {
                           Swal.fire({
                               title: 'Hapus Data dibatalkan!',
                               text: 'Data galeri tidak dihapus',
                               icon: 'error',
                               timer: 2500
                           });
                       }
                   });
               });
           })
    </script>
@endpush