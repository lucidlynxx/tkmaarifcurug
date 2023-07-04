    {{-- Be like water. --}}
    <a class="text-danger" wire:click="$emit('triggerDelete', {{ $adminId }})"><i data-feather="trash"></i></a>

 @push('AdminAlert')
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
            @this.on('triggerDelete', adminId => {
                Swal.fire({
                    title: 'Anda Yakin?',
                    text: 'Data admin akan dihapus',
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#aaa',
                    confirmButtonText: 'Ya Hapus!'
                }).then((result) => {
             //if user clicks on delete
                    if (result.value) {
                 // calling destroy method to delete
                        @this.call('destroy', adminId)
                 // success response
                        Swal.fire({
                            title: 'Hapus Data Sukses!',
                            text: 'Data admin telah dihapus', 
                            icon: 'success',
                            showConfirmButton: true,
                            timer: 2500
                        });
                    } else {
                        Swal.fire({
                            title: 'Hapus Data dibatalkan!',
                            text: 'Data admin tidak dihapus',
                            icon: 'error',
                            timer: 2500
                        });
                    }
                });
            });
        })
    </script>
@endpush    