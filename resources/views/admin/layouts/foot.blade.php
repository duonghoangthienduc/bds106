<!-- jQuery -->
<script {{-- src="/admin/plugins/jquery/jquery.min.js" --}} src="{{ asset('adminv1/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script {{-- src="/admin/plugins/bootstrap/js/bootstrap.bundle.min.js" --}} src="{{ asset('adminv1/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script {{-- src="/admin/dist/js/adminlte.min.js" --}} src="{{ asset('adminv1/dist/js/adminlte.min.js') }}"></script>

<script src="{{ asset('adminv1/lib/ckfinder/ckfinder.js') }}"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
@yield('scripts')
