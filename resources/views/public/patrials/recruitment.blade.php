@if (isset($recruitment))
    <section class="section section-tin-tuc" id="section_1717038873">
        <div class="bg section-bg fill bg-fill  bg-loaded">
        </div>
        <div class="section-content relative">
            <div class="row" id="row-142157125">
                <div id="col-9936584" class="col div-no-padding small-12 large-12">
                    <div class="col-inner">
                        <div class="tittle-home">
                            <h3>TUYỂN DỤNG<h3>
                        </div>
                        <div id="gap-452346573" class="gap-element clearfix hide-for-medium"
                            style="display:block; height:auto;">
                            <style>
                                #gap-452346573 {
                                    padding-top: 20px;
                                }
                            </style>
                        </div>
                    </div>
                </div>
                <div id="col-1771548073" class="col div-no-padding small-12 large-12">
                    <div class="col-inner">
                        <div class="row" id="row-965589234">
                            <div id="col-2113136000" class="col div-tin-trai div-no-padding medium-5 small-12 large-5">
                                @foreach ($recruitment as $news)
                                    @if ($loop->first)
                                        <div class="col-inner">
                                            <div class="row large-columns-1 medium-columns-1 small-columns-1">
                                                <div class="col post-item">
                                                    <div class="col-inner">
                                                        <a href="{{ route('public.post_detail', $news->slug) }}"
                                                            class="plain">
                                                            <div
                                                                class="box box-normal box-text-bottom box-blog-post has-hover">
                                                                <div class="box-image">
                                                                    <div class="image-cover"
                                                                        style="padding-top:56.25%;">
                                                                        <img width="656" height="400"
                                                                            src="{{ $news->thumb }}"
                                                                            class="attachment-medium size-medium wp-post-image"
                                                                            alt="" loading="lazy"
                                                                            srcset="{{ $news->thumb }} 656w, {{ $news->thumb }} 510w"
                                                                            sizes="(max-width: 656px) 100vw, 656px" />
                                                                    </div>
                                                                </div>
                                                                <div class="box-text text-left">
                                                                    <div class="box-text-inner blog-post-inner">
                                                                        <h5 class="post-title is-large ">
                                                                            {{ $news->name_post }}
                                                                        </h5>
                                                                        <div class="is-divider"></div>
                                                                        <div class="from_the_blog_excerpt line-3">
                                                                            {!! htmlspecialchars_decode($news->short_des) !!}
                                                                        </div>
                                                                        <button
                                                                            href="{{ route('public.post_detail', $news->slug) }}"
                                                                            class="button  is-gloss is-small mb-0">
                                                                            Xem thêm </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach

                            </div>
                            <div id="col-1966566429" class="col div-tin-phai div-no-padding medium-7 small-12 large-7">
                                <div class="col-inner">
                                    <div class="row large-columns-1 medium-columns-1 small-columns-1 row-small">
                                        @foreach ($recruitment as $news)
                                            @if (!$loop->first)
                                                <div class="col post-item">
                                                    <div class="col-inner">
                                                        <a href="{{ route('public.post_detail', $news->slug) }}"
                                                            class="plain">
                                                            <div
                                                                class="box box-vertical box-text-bottom box-blog-post has-hover">
                                                                <div class="box-image" style="width:32%;">
                                                                    <div class="image-cover"
                                                                        style="padding-top:56.25%;">
                                                                        <img width="280" height="280"
                                                                            src="{{ $news->thumb }}"
                                                                            class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                            alt="" loading="lazy"
                                                                            srcset="{{ $news->thumb }} 280w,{{ $news->thumb }} 100w"
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
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            #section_1717038873 {
                padding-top: 30px;
                padding-bottom: 30px;
            }
        </style>
    </section>
@endif
