    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <a class="text-danger" wire:click="$emit('triggerDelete', {{ $blogId }})"><i data-feather="trash"></i></a>

 @push('BlogAlert')
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
            @this.on('triggerDelete', blogId => {
                Swal.fire({
                    title: 'Anda Yakin?',
                    text: 'Data acara akan dihapus',
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#aaa',
                    confirmButtonText: 'Ya Hapus!'
                }).then((result) => {
             //if user clicks on delete
                    if (result.value) {
                 // calling destroy method to delete
                        @this.call('destroy', blogId)
                 // success response
                        Swal.fire({
                            title: 'Hapus Data Sukses!',
                            text: 'Data acara telah dihapus', 
                            icon: 'success',
                            showConfirmButton: true,
                            timer: 2500
                        });
                    } else {
                        Swal.fire({
                            title: 'Hapus Data dibatalkan!',
                            text: 'Data acara tidak dihapus',
                            icon: 'error',
                            timer: 2500
                        });
                    }
                });
            });
        })
    </script>
@endpush    