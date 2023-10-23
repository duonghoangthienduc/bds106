@extends('public.layout')
@section('head-title')
Tin tức - Bất Động Sản 106
@endsection
@section('content')
    <main id="main" class="">

        <div id="content" class="blog-wrapper blog-archive page-wrapper">


            <div class="row row-large row-divided ">
                <div class="large-9 col">
                    <div class="row large-columns-1 medium-columns- small-columns-1">
                        @forelse ($posts as $post)
                            <x-post_item :post="$post" />
                        @empty
                        @endforelse
                    </div>
                    {{-- <ul class="page-numbers nav-pagination links text-center">
                        <li><span aria-current="page" class="page-number current">1</span></li>
                        <li><a class="page-number"
                                href="http://batdongsan106.webdaitin.biz/chuyen-muc/tin-tuc/page/2/">2</a></li>
                        <li><a class="next page-number"
                                href="http://batdongsan106.webdaitin.biz/chuyen-muc/tin-tuc/page/2/"><i
                                    class="icon-angle-right"></i></a></li>
                    </ul> --}}
                </div>
                @include('public.patrials.downloadItem')
            </div>

        </div>


    </main>
@endsection
