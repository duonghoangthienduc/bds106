@extends('public.layout')
@section('head-title')
    {{ $project->name_project }}
@endsection
@section('content')
    <main id="main" class="">
        <div class="shop-container">
            <div class="container">
                <div class="woocommerce-notices-wrapper"></div>
            </div>
            <div id="product-408"
                class="product type-product post-408 status-publish first instock product_cat-can-ho-biet-thu has-post-thumbnail shipping-taxable product-type-simple">
                <div class="custom-product-page">
                    <section class="section section-anh" id="section_478400176">
                        <div class="bg section-bg fill bg-fill  bg-loaded">
                        </div>
                        <div class="section-content relative">
                            <div class="row" id="row-608437145">
                                <div id="col-771322580" class="col medium-8 small-12 large-8">
                                    <div class="col-inner">
                                        <div class="product-images relative mb-half has-hover woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images"
                                            data-columns="4">
                                            <div class="badge-container is-larger absolute left top z-1">
                                            </div>
                                            <div class="image-tools absolute top show-on-hover right z-3">
                                            </div>
                                            <figure
                                                class="woocommerce-product-gallery__wrapper product-gallery-slider slider slider-nav-small mb-half"
                                                data-flickity-options='{
                                                    "cellAlign": "center",
                                                    "wrapAround": true,
                                                    "autoPlay": false,
                                                    "prevNextButtons":true,
                                                    "adaptiveHeight": true,
                                                    "imagesLoaded": true,
                                                    "lazyLoad": 1,
                                                    "dragThreshold" : 15,
                                                    "pageDots": false,
                                                    "rightToLeft": false}'>
                                                <div data-thumb="{{ $project->thumb }}"
                                                    class="woocommerce-product-gallery__image slide first">
                                                    <a href="{{ $project->thumb }}">
                                                        <img width="510" height="382" src="{{ $project->thumb }}"
                                                            class="wp-post-image skip-lazy" alt="" loading="lazy"
                                                            title="phoca_thumb_l_hanhud_anhdung6_1" data-caption=""
                                                            data-src="{{ $project->thumb }}"
                                                            data-large_image="{{ $project->thumb }}"
                                                            data-large_image_width="735" data-large_image_height="550"
                                                            srcset="{{ $project->thumb }} 510w, {{ $project->thumb }} 535w, {{ $project->thumb }} 735w"
                                                            sizes="(max-width: 510px) 100vw, 510px" /></a>
                                                </div>
                                            </figure>
                                            {{-- <div class="image-tools absolute bottom left z-3">
                                                <a href="#product-zoom"
                                                    class="zoom-button button is-outline circle icon tooltip hide-for-small"
                                                    title="Zoom">
                                                    <i class="icon-expand"></i> </a>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                                <div id="col-375062678" class="col div-no-padding medium-4 small-12 large-4">
                                    <div class="col-inner">
                                        <nav class="woocommerce-breadcrumb breadcrumbs uppercase"><a
                                                href="{{ route('home_page') }}">Trang chủ</a> <span
                                                class="divider">&#47;</span> <a href="{{ route('projects_page') }}">Dự
                                                án</a></nav>
                                        <h1 class="product-title product_title entry-title">
                                            {{ $project->name_project }}
                                        </h1>
                                        <div class="is-divider small"></div>
                                        <div class="price-wrapper">
                                            <p class="price product-page-price ">
                                            </p>
                                        </div>
                                        <div class="giatien">
                                            @if ($project->price > 0)
                                                <p>Giá từ:<span class="gia-tien"> {{ $project->price }}
                                                        {{ $project->value == 'ty' ? 'tỷ' : 'triệu' }}/{{ $project->unit == 'can' ? 'căn' : 'm2' }}</span>
                                                </p>
                                            @endif
                                        </div>
                                        <div class="product_meta">
                                            <span class="posted_in">Danh mục: <a href="{{ route('projects_page') }}"
                                                    rel="tag">Dự Án</a></span>
                                        </div>
                                        {{-- <div class="social-icons share-icons share-row relative">
                                            <a
                                                href="whatsapp://send?text=D%E1%BB%B1%20%C3%A1n%20D%C6%B0%C6%A1ng%20Kinh%20New%20City - http://batdongsan106.webdaitin.biz/du-an-duong-kinh-new-city/"
                                                data-action="share/whatsapp/share"
                                                class="icon button circle is-outline tooltip whatsapp show-for-medium"
                                                title="Share on WhatsApp" aria-label="Share on WhatsApp"><i
                                                    class="icon-whatsapp"></i></a><a
                                                href="https://www.facebook.com/sharer.php?u=http://batdongsan106.webdaitin.biz/du-an-duong-kinh-new-city/"
                                                data-label="Facebook"
                                                onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;"
                                                rel="noopener noreferrer nofollow" target="_blank"
                                                class="icon button circle is-outline tooltip facebook"
                                                title="Share on Facebook" aria-label="Share on Facebook"><i
                                                    class="icon-facebook"></i></a><a
                                                href="https://twitter.com/share?url=http://batdongsan106.webdaitin.biz/du-an-duong-kinh-new-city/"
                                                onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;"
                                                rel="noopener noreferrer nofollow" target="_blank"
                                                class="icon button circle is-outline tooltip twitter"
                                                title="Share on Twitter" aria-label="Share on Twitter"><i
                                                    class="icon-twitter"></i></a><a
                                                href="mailto:enteryour@addresshere.com?subject=D%E1%BB%B1%20%C3%A1n%20D%C6%B0%C6%A1ng%20Kinh%20New%20City&amp;body=Check%20this%20out:%20http://batdongsan106.webdaitin.biz/du-an-duong-kinh-new-city/"
                                                rel="nofollow" class="icon button circle is-outline tooltip email"
                                                title="Email to a Friend" aria-label="Email to a Friend"><i
                                                    class="icon-envelop"></i></a><a
                                                href="https://pinterest.com/pin/create/button/?url=http://batdongsan106.webdaitin.biz/du-an-duong-kinh-new-city/&amp;media=http://batdongsan106.webdaitin.biz/wp-content/uploads/2020/02/phoca_thumb_l_hanhud_anhdung6_1.jpg&amp;description=D%E1%BB%B1%20%C3%A1n%20D%C6%B0%C6%A1ng%20Kinh%20New%20City"
                                                onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;"
                                                rel="noopener noreferrer nofollow" target="_blank"
                                                class="icon button circle is-outline tooltip pinterest"
                                                title="Pin on Pinterest" aria-label="Pin on Pinterest"><i
                                                    class="icon-pinterest"></i></a><a
                                                href="https://www.linkedin.com/shareArticle?mini=true&url=http://batdongsan106.webdaitin.biz/du-an-duong-kinh-new-city/&title=D%E1%BB%B1%20%C3%A1n%20D%C6%B0%C6%A1ng%20Kinh%20New%20City"
                                                onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;"
                                                rel="noopener noreferrer nofollow" target="_blank"
                                                class="icon button circle is-outline tooltip linkedin"
                                                title="Share on LinkedIn" aria-label="Share on LinkedIn"><i
                                                    class="icon-linkedin"></i></a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <style>
                            #section_478400176 {
                                padding-top: 20px;
                                padding-bottom: 20px;
                            }

                            @media (min-width:550px) {
                                #section_478400176 {
                                    padding-top: 30px;
                                    padding-bottom: 30px;
                                }
                            }
                        </style>
                    </section>
                    <section class="section section-thanh-menu hide-for-small" id="section_1595738501">
                        <div class="bg section-bg fill bg-fill  bg-loaded">
                        </div>
                        <div class="section-content relative">
                            <ul class="sidebar-wrapper ul-reset">
                                <li id="text-2" class="widget widget_text">
                                    <div class="textwidget">
                                        <div class="div-scroll">
                                            <div class="row">
                                                <ul class="header-nav header-nav-main nav nav-leftnav-uppercase">
                                                    <li><a href="#tong-quan" class="nav-top-link">Tổng quan</a></li>
                                                    <li><a href="#vi-tri" class="nav-top-link">Vị trí</a></li>
                                                    <li><a href="#tien-ich">Tiện ích</a></li>
                                                    <li><a href="#noi-that">Nội thất</a></li>
                                                    <li><a href="#tien-do">Tiến độ</a></li>
                                                    <li><a href="#mat-bang" class="nav-top-link">Mặt bằng</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <style>
                            #section_1595738501 {
                                padding-top: 0px;
                                padding-bottom: 0px;
                            }
                        </style>
                    </section>
                    <section class="section" id="section_1534518195">
                        <div class="bg section-bg fill bg-fill  bg-loaded">
                        </div>
                        <div class="section-content relative">
                            <div class="row" id="row-311842845">
                                <div id="col-716374092" class="col medium-9 small-12 large-9">
                                    <div class="col-inner">
                                        <div class="div-mo-ta">
                                            <div class="nut-scroll"> <span class="scroll-to"
                                                    data-label="Scroll to: #tong-quan" data-bullet="false"
                                                    data-link="#tong-quan" data-title="Change this"><a
                                                        name="vi-tri"></a></span> </div>
                                            <div class="div-tong-quan">
                                                <h2 class="h2-mo-ta">
                                                    Tổng quan dự án
                                                </h2>
                                                {!! htmlspecialchars_decode($project->content) !!}
                                                <div class="nut-scroll">
                                                    <span class="scroll-to" data-label="Scroll to: #vi-tri"
                                                        data-bullet="false" data-link="#vi-tri" data-title="Change this">
                                                        <a name="vi-tri"></a>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="div-vi-tri">
                                                <h2 class="h2-mo-ta">
                                                    VỊ TRÍ DỰ ÁN
                                                </h2>
                                                {!! htmlspecialchars_decode($project->location) !!}
                                                <div class="nut-scroll">
                                                    <span class="scroll-to" data-label="Scroll to: #tien-ich"
                                                        data-bullet="false" data-link="#tien-ich"
                                                        data-title="Change this">
                                                        <a name="tien-ich"></a>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="div-tien_ich">
                                                <h2 class="h2-mo-ta">
                                                    TIỆN ÍCH
                                                </h2>
                                                {!! htmlspecialchars_decode($project->convince) !!}
                                                <div class="nut-scroll"> <span class="scroll-to"
                                                        data-label="Scroll to: #noi-that" data-bullet="false"
                                                        data-link="#noi-that" data-title="Change this"><a
                                                            name="noi-that"></a></span> </div>
                                            </div>

                                            <div class="div-tien_ich">
                                                <h2 class="h2-mo-ta">
                                                    Nội thất dự án
                                                </h2>
                                                {!! htmlspecialchars_decode($project->decor) !!}
                                                <div class="nut-scroll"> <span class="scroll-to"
                                                        data-label="Scroll to: #tien-do" data-bullet="false"
                                                        data-link="#tien-do" data-title="Change this"><a
                                                            name="tien-do"></a></span> </div>
                                            </div>

                                            <div class="div-tien_ich">
                                                <h2 class="h2-mo-ta">
                                                    TIẾN ĐỘ
                                                </h2>
                                                {!! htmlspecialchars_decode($project->payment) !!}
                                                <div class="nut-scroll">
                                                    <span class="scroll-to" data-label="Scroll to: #mat-bang"
                                                        data-bullet="false" data-link="#mat-bang"
                                                        data-title="Change this">
                                                        <a name="mat-bang"></a>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="div-tien_ich">
                                                <h2 class="h2-mo-ta">
                                                    MẶT BẰNG
                                                </h2>
                                                {!! htmlspecialchars_decode($project->place) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @include('public.patrials.downloadItem')
                            </div>
                        </div>
                        <style>
                            #section_1534518195 {
                                padding-top: 30px;
                                padding-bottom: 30px;
                            }
                        </style>
                    </section>
                </div>


            </div>


        </div><!-- shop container -->

    </main>
@endsection
