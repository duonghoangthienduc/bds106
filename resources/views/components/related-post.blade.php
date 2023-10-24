@if (count($relatedPost) > 0)
    <div class="related-post">
        <div class="" style="margin-top: 30px;margin-bottom: 20px">
            <h6> Bài viết liên quan </h6>
            <div class="duong-line"></div>
        </div>
        <div class="clearfix"></div>
        <div
            class="row large-columns-3 medium-columns-2 small-columns-1 has-shadow row-box-shadow-1 row-box-shadow-1-hover">
            @forelse ($relatedPost as $post)
                <div class="col post-item">
                    <div class="col-inner">
                        <a href="{{ route('public.post_detail', $post->slug) }}" class="plain">
                            <div class="box box-bounce box-text-bottom box-blog-post has-hover">
                                <div class="box-image">
                                    <div class="image-cover" style="padding-top:56%;">
                                        <img width="848" height="477" src="{{ $post->thumb }}"
                                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                            alt="" loading="lazy"
                                            srcset="{{ $post->thumb }} 848w, {{ $post->thumb }} 510w, {{ $post->thumb }} 711w, {{ $post->thumb }} 768w"
                                            sizes="(max-width: 848px) 100vw, 848px" />
                                    </div>
                                </div><!-- .box-image -->
                                <div class="box-text text-center">
                                    <div class="box-text-inner blog-post-inner">
                                        <h5 class="post-title is-large ">{{ $post->name_post }}</h5>
                                        <div class="post-meta is-small op-8">
                                            {{ date_format($post->created_at, 'D d-M-Y') }}</div>
                                        <div class="is-divider"></div>
                                    </div><!-- .box-text-inner -->
                                </div><!-- .box-text -->
                            </div><!-- .box -->
                        </a><!-- .link -->
                    </div><!-- .col-inner -->
                </div><!-- .col -->
            @empty
            @endforelse

        </div>
    </div>
@endif
