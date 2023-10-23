<div class="col post-item">
    <div class="col-inner">
        <a href="{{ route('public.post_detail', $post->slug) }}" class="plain">
            <div class="box box-vertical box-text-bottom box-blog-post has-hover">
                <div class="box-image" style="width:30%;">
                    <div class="image-cover" style="padding-top:60%;">
                        <img width="711" height="400" src="{{ $post->thumb }}"
                            class="attachment-medium size-medium wp-post-image" alt=""
                            loading="lazy"
                            srcset="{{ $post->thumb }} 711w, {{ $post->thumb }} 510w, {{ $post->thumb }} 768w, {{ $post->thumb }} 900w"
                            sizes="(max-width: 711px) 100vw, 711px" />
                    </div>
                </div>
                <div class="box-text text-left">
                    <div class="box-text-inner blog-post-inner">
                        <h5 class="post-title is-large ">{{ $post->name_post }}</h5>
                        <div class="from_the_blog_excerpt line-3">
                            {!! htmlspecialchars_decode($post->short_des) !!}
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>