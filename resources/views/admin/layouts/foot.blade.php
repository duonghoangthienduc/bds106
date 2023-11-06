<!-- jQuery -->
<script {{-- src="/admin/plugins/jquery/jquery.min.js" --}} src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script {{-- src="/admin/plugins/bootstrap/js/bootstrap.bundle.min.js" --}} src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script {{-- src="/admin/dist/js/adminlte.min.js" --}} src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>

<script src="{{ asset('admin/lib/ckfinder/ckfinder.js') }}"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
@yield('scripts')
