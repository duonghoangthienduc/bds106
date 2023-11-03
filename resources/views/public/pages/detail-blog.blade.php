@extends('public.layout')
@section('head-title')
Liên đoàn Quần vợt tỉnh Khánh Hoà - {{ $post->name_post }}
@endsection
@section('content')
    <main id="main" class="">
        <div id="content" class="blog-wrapper blog-single page-wrapper">
            <div class="row row-large row-divided ">
                <div class="large-9 col">
                    <article id="post-305"
                        class="post-305 post type-post status-publish format-standard has-post-thumbnail hentry category-linh-vuc-hoat-dong">
                        <div class="article-inner ">
                            {{-- <header class="entry-header">
                                <div class="entry-header-text entry-header-text-top  text-left">
                                    <div class="entry-meta is-small single-date">
                                        <span class="posted-on">Posted on <a
                                                href="http://batdongsan106.webdaitin.biz/dau-tu-bat-dong-san/"
                                                rel="bookmark"><time class="entry-date published updated"
                                                    datetime="{{ $post->created_at }}">{{ $post->created_at }}</time></a></span><span
                                            class="byline">
                                            by <span
                                                class="meta-author vcard"><a class="url fn n"
                                                    href="http://batdongsan106.webdaitin.biz/author/bds106/">Bds106</a></span></span>
                                    </div><!-- .entry-meta -->
                                </div><!-- .entry-header -->

                                <div class="entry-image relative">

                                </div><!-- .entry-image -->
                            </header> --}}
                            <!-- post-header -->

                            <div class="entry-content single-page">

                                <p class="lead">
                                    {!! htmlspecialchars_decode($post->post_content) !!}
                                <p>&nbsp;</p>


                                {{-- <div class="blog-share text-center">
                                    <div class="social-icons share-icons share-row relative"><a
                                            href="whatsapp://send?text=%C4%90%E1%BA%A7u%20t%C6%B0%20b%E1%BA%A5t%20%C4%91%E1%BB%99ng%20s%E1%BA%A3n - http://batdongsan106.webdaitin.biz/dau-tu-bat-dong-san/"
                                            data-action="share/whatsapp/share"
                                            class="icon button circle is-outline tooltip whatsapp show-for-medium"
                                            title="Share on WhatsApp" aria-label="Share on WhatsApp"><i
                                                class="icon-whatsapp"></i></a><a
                                            href="https://www.facebook.com/sharer.php?u=http://batdongsan106.webdaitin.biz/dau-tu-bat-dong-san/"
                                            data-label="Facebook"
                                            onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;"
                                            rel="noopener noreferrer nofollow" target="_blank"
                                            class="icon button circle is-outline tooltip facebook" title="Share on Facebook"
                                            aria-label="Share on Facebook"><i class="icon-facebook"></i></a><a
                                            href="https://twitter.com/share?url=http://batdongsan106.webdaitin.biz/dau-tu-bat-dong-san/"
                                            onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;"
                                            rel="noopener noreferrer nofollow" target="_blank"
                                            class="icon button circle is-outline tooltip twitter" title="Share on Twitter"
                                            aria-label="Share on Twitter"><i class="icon-twitter"></i></a><a
                                            href="mailto:enteryour@addresshere.com?subject=%C4%90%E1%BA%A7u%20t%C6%B0%20b%E1%BA%A5t%20%C4%91%E1%BB%99ng%20s%E1%BA%A3n&amp;body=Check%20this%20out:%20http://batdongsan106.webdaitin.biz/dau-tu-bat-dong-san/"
                                            rel="nofollow" class="icon button circle is-outline tooltip email"
                                            title="Email to a Friend" aria-label="Email to a Friend"><i
                                                class="icon-envelop"></i></a><a
                                            href="https://pinterest.com/pin/create/button/?url=http://batdongsan106.webdaitin.biz/dau-tu-bat-dong-san/&amp;media=http://batdongsan106.webdaitin.biz/wp-content/uploads/2020/02/conveyance-1.jpg&amp;description=%C4%90%E1%BA%A7u%20t%C6%B0%20b%E1%BA%A5t%20%C4%91%E1%BB%99ng%20s%E1%BA%A3n"
                                            onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;"
                                            rel="noopener noreferrer nofollow" target="_blank"
                                            class="icon button circle is-outline tooltip pinterest" title="Pin on Pinterest"
                                            aria-label="Pin on Pinterest"><i class="icon-pinterest"></i></a><a
                                            href="https://www.linkedin.com/shareArticle?mini=true&url=http://batdongsan106.webdaitin.biz/dau-tu-bat-dong-san/&title=%C4%90%E1%BA%A7u%20t%C6%B0%20b%E1%BA%A5t%20%C4%91%E1%BB%99ng%20s%E1%BA%A3n"
                                            onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;"
                                            rel="noopener noreferrer nofollow" target="_blank"
                                            class="icon button circle is-outline tooltip linkedin" title="Share on LinkedIn"
                                            aria-label="Share on LinkedIn"><i class="icon-linkedin"></i></a></div>
                                </div> --}}
                            </div><!-- .entry-content2 -->
                            {{-- <footer class="entry-meta text-left">
                                This entry was posted in <a
                                    href="http://batdongsan106.webdaitin.biz/chuyen-muc/linh-vuc-hoat-dong/"
                                    rel="category tag">Lĩnh vực hoạt động</a>. Bookmark the <a
                                    href="http://batdongsan106.webdaitin.biz/dau-tu-bat-dong-san/"
                                    title="Permalink to Đầu tư bất động sản" rel="bookmark">permalink</a>.</footer> --}}
                            <!-- .entry-meta -->
                            <x-related_post :relatedPost=" $relatedPosts "/>
                        </div>
                    </article>

                </div>
                @include('public.patrials.downloadItem')
            </div>
        </div>

        </div>


    </main>
@endsection