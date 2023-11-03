@extends('public.layout')
@section('head-title')
Liên đoàn Quần vợt tỉnh Khánh Hoà - {{ $tilte }}
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
                    {{ $posts->links('pagination::simple-default') }}
                </div>
                @include('public.patrials.downloadItem')
            </div>
        </div>
    </main>
@endsection
