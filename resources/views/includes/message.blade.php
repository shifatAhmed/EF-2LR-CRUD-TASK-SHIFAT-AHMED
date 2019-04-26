<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

@if (session('success'))
    <script>
        Swal.fire({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            type: 'success',
            title: '{{ session('success') }}',
        })
    </script>
@endif

@if (session('error'))
    <script>
        Swal.fire({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            type: 'error',
            title: '{{ session('error') }}',
        })
    </script>
@endif
