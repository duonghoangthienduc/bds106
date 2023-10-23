@extends('public.layout')
@section('head-title')
Tuyển dụng - Bất Động Sản 106
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

                </div>
                @include('public.patrials.downloadItem')
            </div>

        </div>


    </main>
@endsection
