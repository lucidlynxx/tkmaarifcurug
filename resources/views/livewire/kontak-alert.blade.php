    {{-- The best athlete wants his opponent at his best. --}}
    <a class="text-danger" wire:click="$emit('triggerDelete', {{ $kontakId }})"><i data-feather="trash"></i></a>

 @push('KontakAlert')
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
            @this.on('triggerDelete', kontakId => {
                Swal.fire({
                    title: 'Anda Yakin?',
                    text: 'Data pesan akan dihapus',
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#aaa',
                    confirmButtonText: 'Ya Hapus!'
                }).then((result) => {
             //if user clicks on delete
                    if (result.value) {
                 // calling destroy method to delete
                        @this.call('destroy', kontakId)
                 // success response
                        Swal.fire({
                            title: 'Hapus Data Sukses!',
                            text: 'Data pesan telah dihapus', 
                            icon: 'success',
                            showConfirmButton: true,
                            timer: 2500
                        });
                    } else {
                        Swal.fire({
                            title: 'Hapus Data dibatalkan!',
                            text: 'Data pesan tidak dihapus',
                            icon: 'error',
                            timer: 2500
                        });
                    }
                });
            });
        })
    </script>
@endpush    