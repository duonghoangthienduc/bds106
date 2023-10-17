<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('public.layouts.head')
</head>

<body
    class="home page-template page-template-page-blank page-template-page-blank-php page page-id-41 theme-flatsome woocommerce-no-js lightbox nav-dropdown-has-arrow nav-dropdown-has-shadow nav-dropdown-has-border">
    <a class="skip-link screen-reader-text" href="#main">Skip to content</a>
    <div id="wrapper">
        @include('public.layouts.header')

        @yield('content')

        @include('public.layouts.footer')
    </div>
    @include('public.layouts.foot')
</body>

</html>
