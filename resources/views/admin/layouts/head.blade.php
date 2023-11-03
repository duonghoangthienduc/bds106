<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Trang quản trị</title>

<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" 
{{-- href="/admin/plugins/fontawesome-free/css/all.min.css"  --}}
href="{{asset('admin/plugins/fontawesome-free/css/all.css')}}">
<!-- icheck bootstrap -->
<link rel="stylesheet" 
{{-- href="/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css" --}}
href="{{asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
<!-- Theme style -->
<link rel="stylesheet" 
{{-- href="/admin/dist/css/adminlte.min.css" --}}
href="{{asset('admin/dist/css/adminlte.min.css')}}">

{{-- <script src="//cdn.ckeditor.com/4.23.0-lts/standard/ckeditor.js"></script> --}}

