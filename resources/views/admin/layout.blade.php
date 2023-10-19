<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.layouts.head')
</head>

<body class='hold-transition sidebar-mini layout-fixed layout-navbar-fixed'>
    <div class="wrapper">
        @include('admin.layouts.adside')
        @include('admin.layouts.navbar')
        <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </section>
        </div>
    </div>
    @include('admin.layouts.foot')
</body>

</html>
