    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <a class="text-danger" wire:click="$emit('triggerDelete', {{ $sabtuId }})"><i data-feather="trash"></i></a>

@push('kelas5Alert')
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
        @this.on('triggerDelete', sabtuId => {
            Swal.fire({
                title: 'Anda Yakin?',
                text: 'Data jadwal akan dihapus',
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#aaa',
                confirmButtonText: 'Ya Hapus!'
            }).then((result) => {
         //if user clicks on delete
                if (result.value) {
             // calling destroy method to delete
                    @this.call('destroy', sabtuId)
             // success response
                    Swal.fire({
                        title: 'Hapus Data Sukses!',
                        text: 'Data jadwal telah dihapus', 
                        icon: 'success',
                        showConfirmButton: true,
                        timer: 2500
                    });
                } else {
                    Swal.fire({
                        title: 'Hapus Data dibatalkan!',
                        text: 'Data jadwal tidak dihapus',
                        icon: 'error',
                        timer: 2500
                    });
                }
            });
        });
    })
</script>
@endpush    
