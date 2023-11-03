<!-- jQuery -->
<script {{-- src="/admin/plugins/jquery/jquery.min.js" --}} src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script {{-- src="/admin/plugins/bootstrap/js/bootstrap.bundle.min.js" --}} src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script {{-- src="/admin/dist/js/adminlte.min.js" --}} src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

<script {{-- src="/admin/lib/ckeditor/ckeditor.js" --}} src="{{ asset('admin/lib/ckeditor/ckeditor.js') }}"></script>
@yield('scripts')
