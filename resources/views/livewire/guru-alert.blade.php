    {{-- Do your work, then step back. --}}
    <a class="text-danger" wire:click="$emit('triggerDelete', {{ $guruId }})"><i data-feather="trash"></i></a>

 @push('GuruAlert')
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
            @this.on('triggerDelete', guruId => {
                Swal.fire({
                    title: 'Anda Yakin?',
                    text: 'Data guru akan dihapus',
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#aaa',
                    confirmButtonText: 'Ya Hapus!'
                }).then((result) => {
             //if user clicks on delete
                    if (result.value) {
                 // calling destroy method to delete
                        @this.call('destroy', guruId)
                 // success response
                        Swal.fire({
                            title: 'Hapus Data Sukses!',
                            text: 'Data guru telah dihapus', 
                            icon: 'success',
                            showConfirmButton: true,
                            timer: 2500
                        });
                    } else {
                        Swal.fire({
                            title: 'Hapus Data dibatalkan!',
                            text: 'Data guru tidak dihapus',
                            icon: 'error',
                            timer: 2500
                        });
                    }
                });
            });
        })
    </script>
@endpush    