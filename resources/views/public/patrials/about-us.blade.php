@php
    $config = '';
    if (Cache::has('CONFIG')) {
        $config = Cache::get('CONFIG');
    }
@endphp
@if (count($getNews) > 0 || (gettype($config) === 'object' && !is_null($config[0]['iframe_youtube']) ))
<section class="section section-ve-chung-toi" id="section_782243146">
    <div class="bg section-bg fill bg-fill  bg-loaded">
    </div>
    <div class="section-content relative">
        <div class="row" id="row-884416162">
            <div id="col-384411622" class="col div-no-padding small-12 large-12">
                <div class="col-inner">
                    <div class="tittle-home">
                        <h3>VỀ CHÚNG TÔI<h3>
                    </div>
                    <div id="gap-966371257" class="gap-element clearfix hide-for-medium"
                        style="display:block; height:auto;">
                        <style>
                            #gap-966371257 {
                                padding-top: 20px;
                            }
                        </style>
                    </div>
                    <div class="row" id="row-905970194">
                        <div id="col-1305041140"
                            class="col div-no-padding @if (count($getNews) > 0) medium-8 small-12 large-8 @else medium-12 small-12 large-12 @endif">
                            <div class="col-inner">
                                <div class="video video-fit mb" style="padding-top:56.25%;">
                                    <p>
                                        {{-- <iframe title="Phim giới thiệu Doanh Nghiệp HƯNG THỊNH" width="1020"
                                            height="574"
                                            src="https://www.youtube.com/embed/yFDZPLMvWCk?feature=oembed"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe> --}}
                                        {!! gettype($config) === 'object' ? $config[0]['iframe_youtube'] : '' !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div id="col-1178396783" class="col div-no-padding  @if (count($getNews) > 0) medium-4 small-12 large-4 @endif">
                            <div class="col-inner">
                                <div class="row large-columns-1 medium-columns-1 small-columns-1">
                                    @if (isset($getNews))
                                        @foreach ($getNews as $news)
                                            <div class="col post-item">
                                                <div class="col-inner">
                                                    <a href="{{ route('public.post_detail', $news->slug) }}"
                                                        class="plain">
                                                        <div
                                                            class="box box-vertical box-text-bottom box-blog-post has-hover">
                                                            <div class="box-image" style="width:35%;">
                                                                <div class="image-cover" style="padding-top:100%;">
                                                                    <img width="280" height="280"
                                                                        src="{{ $news->thumb }}"
                                                                        class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                        alt="" loading="lazy"
                                                                        srcset="{{ $news->thumb }} 280w, {{ $news->thumb }} 100w"
                                                                        sizes="(max-width: 280px) 100vw, 280px" />
                                                                </div>
                                                            </div>
                                                            <div class="box-text text-left is-small">
                                                                <div class="box-text-inner blog-post-inner">
                                                                    <h5 class="post-title is-large ">
                                                                        {{ $news->name_post }}
                                                                    </h5>
                                                                    <div class="from_the_blog_excerpt line-3">
                                                                        {!! htmlspecialchars_decode($news->short_des) !!}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        #section_782243146 {
            padding-top: 30px;
            padding-bottom: 30px;
        }
    </style>
</section>
@endif

