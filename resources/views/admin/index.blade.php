@extends('admin.layout')

@section('content')
    @include('admin.layouts.adside')
    @include('admin.layouts.navbar')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                @yield('job')
            </div>
        </section>
    </div>
@endsection
