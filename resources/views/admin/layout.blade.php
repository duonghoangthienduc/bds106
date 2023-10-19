<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.layouts.head')
</head>

<body class='hold-transition sidebar-mini layout-fixed layout-navbar-fixed'>
    <div class="wrapper">
        @yield('content')
    </div>
    @include('admin.layouts.foot')
</body>

</html>
