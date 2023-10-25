@if (isset($listNews))
    <section class="section section-tin-moi" id="section_1713061961">
        <div class="bg section-bg fill bg-fill  bg-loaded">
        </div>
        <div class="section-content relative">
            <div class="row" id="row-150400443">
                <div id="col-780568708" class="col div-no-padding small-12 large-12">
                    <div class="col-inner">
                        <div class="tittle-home">
                            <h3>TIN TỨC MỚI</h3>
                        </div>
                        <div id="gap-1589044881" class="gap-element clearfix hide-for-medium"
                            style="display:block; height:auto;">
                            <style>
                                #gap-1589044881 {
                                    padding-top: 20px;
                                }
                            </style>
                        </div>
                        <div class="row large-columns-4 medium-columns-1 small-columns-1 slider row-slider slider-nav-simple slider-nav-outside slider-nav-push"
                            data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>
                            @foreach ($listNews as $news)
                                <div class="col post-item">
                                    <div class="col-inner">
                                        <a href="{{ route('public.post_detail', $news->slug) }}" class="plain">
                                            <div class="box box-normal box-text-bottom box-blog-post has-hover">
                                                <div class="box-image">
                                                    <div class="image-cover" style="padding-top:56.25%;">
                                                        <img width="280" height="280" src="{{ $news->thumb }}"
                                                            class="attachment-thumbnail size-thumbnail wp-post-image"
                                                            alt="" loading="lazy"
                                                            srcset="{{ $news->thumb }} 280w, {{ $news->thumb }} 100w"
                                                            sizes="(max-width: 280px) 100vw, 280px" />
                                                    </div>
                                                </div>
                                                <div class="box-text text-center is-small">
                                                    <div class="box-text-inner blog-post-inner">
                                                        <h5 class="post-title is-large ">
                                                            {{ $news->name_post }}
                                                        </h5>
                                                        <div class="is-divider"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            #section_1713061961 {
                padding-top: 30px;
                padding-bottom: 30px;
            }
        </style>
    </section>
@endif
