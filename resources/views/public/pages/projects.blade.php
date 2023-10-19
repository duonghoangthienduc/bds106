@extends('public.layout')
@section('head-title')
Sản phẩm - Bất Động Sản 106
@endsection
@section('content')
    <div class="shop-page-title category-page-title page-title ">
        <div class="page-title-inner flex-row  medium-flex-wrap container">
            <div class="flex-col flex-grow medium-text-center">
                <div class="is-large">
                    <nav class="woocommerce-breadcrumb breadcrumbs uppercase"><a href="{{ route('home_page') }}">Trang chủ</a>
                        <span class="divider">&#47;</span> Dự án
                    </nav>
                </div>
                <div class="category-filtering category-filter-row show-for-medium">
                    <a href="#" data-open="#shop-sidebar" data-visible-after="true" data-pos="left"
                        class="filter-button uppercase plain">
                        <i class="icon-equalizer"></i>
                        <strong>Lọc</strong>
                    </a>
                    <div class="inline-block">
                    </div>
                </div>
            </div>
            <div class="flex-col medium-text-center">
                <p class="woocommerce-result-count hide-for-medium">
                    Hiển thị tất cả 6 kết quả</p>
                <form class="woocommerce-ordering" method="get">
                    <select name="orderby" class="orderby" aria-label="Đơn hàng của cửa hàng">
                        <option value="menu_order" selected='selected'>Thứ tự mặc định</option>
                        <option value="popularity">Thứ tự theo mức độ phổ biến</option>
                        <option value="rating">Thứ tự theo điểm đánh giá</option>
                        <option value="date">Mới nhất</option>
                        <option value="price">Thứ tự theo giá: thấp đến cao</option>
                        <option value="price-desc">Thứ tự theo giá: cao xuống thấp</option>
                    </select>
                    <input type="hidden" name="paged" value="1" />
                </form>
            </div>
        </div>
    </div>

    <main id="main" class="">
        <div class="row category-page-row">

            <div class="col large-9">
                <div class="shop-container">

                    <div class="woocommerce-notices-wrapper"></div>
                    <div class="products row row-small large-columns-3 medium-columns-3 small-columns-2">

                        <div
                            class="product-small col has-hover product type-product post-391 status-publish first instock product_cat-can-ho-biet-thu has-post-thumbnail shipping-taxable product-type-simple">
                            <div class="col-inner">

                                <div class="badge-container absolute left top z-1">
                                </div>
                                <div class="product-small box ">
                                    <div class="box-image">
                                        <div class="image-fade_in_back">
                                            <a href="http://batdongsan106.webdaitin.biz/biet-thu-ha-do-charm-villas/"
                                                aria-label="Biệt thự Hà Đô Charm Villas">
                                                <img width="247" height="296"
                                                    src="http://batdongsan106.webdaitin.biz/wp-content/uploads/2020/02/ha-do-charm-villas-aeland.com_.vn_-247x296.jpg"
                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                    alt="" loading="lazy" /> </a>
                                        </div>
                                        <div class="image-tools is-small top right show-on-hover">
                                        </div>
                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                        </div>
                                        <div
                                            class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                        </div>
                                    </div>

                                    <div class="box-text box-text-products text-center grid-style-2">
                                        <div class="title-wrapper">
                                            <p class="name product-title woocommerce-loop-product__title"><a
                                                    href="http://batdongsan106.webdaitin.biz/biet-thu-ha-do-charm-villas/"
                                                    class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Biệt
                                                    thự Hà Đô Charm Villas</a></p>
                                            <div class="giatien">
                                                <p>Giá từ:<span class="gia-tien"> 1,7 tỷ/căn</span></p>
                                            </div>

                                        </div>
                                        <div class="price-wrapper">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div
                            class="product-small col has-hover product type-product post-399 status-publish instock product_cat-can-ho-biet-thu has-post-thumbnail shipping-taxable product-type-simple">
                            <div class="col-inner">

                                <div class="badge-container absolute left top z-1">
                                </div>
                                <div class="product-small box ">
                                    <div class="box-image">
                                        <div class="image-fade_in_back">
                                            <a href="http://batdongsan106.webdaitin.biz/biet-thu-thephoenix-garden/"
                                                aria-label="Biệt thự Thephoenix Garden">
                                                <img width="247" height="296"
                                                    src="http://batdongsan106.webdaitin.biz/wp-content/uploads/2020/02/banner-phoenix-3-247x296.jpg"
                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                    alt="" loading="lazy" /> </a>
                                        </div>
                                        <div class="image-tools is-small top right show-on-hover">
                                        </div>
                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                        </div>
                                        <div
                                            class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                        </div>
                                    </div>

                                    <div class="box-text box-text-products text-center grid-style-2">
                                        <div class="title-wrapper">
                                            <p class="name product-title woocommerce-loop-product__title"><a
                                                    href="http://batdongsan106.webdaitin.biz/biet-thu-thephoenix-garden/"
                                                    class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Biệt
                                                    thự Thephoenix Garden</a></p>
                                            <div class="giatien">
                                                <p>Giá từ:<span class="gia-tien"> 26 triệu / m2</span></p>
                                            </div>

                                        </div>
                                        <div class="price-wrapper">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div
                            class="product-small col has-hover product type-product post-347 status-publish last instock product_cat-can-ho-biet-thu has-post-thumbnail shipping-taxable product-type-simple">
                            <div class="col-inner">

                                <div class="badge-container absolute left top z-1">
                                </div>
                                <div class="product-small box ">
                                    <div class="box-image">
                                        <div class="image-fade_in_back">
                                            <a href="http://batdongsan106.webdaitin.biz/chung-cu-goldmark-city/"
                                                aria-label="Chung cư Goldmark City">
                                                <img width="247" height="296"
                                                    src="http://batdongsan106.webdaitin.biz/wp-content/uploads/2020/02/backgroud-247x296.jpg"
                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                    alt="" loading="lazy" /> </a>
                                        </div>
                                        <div class="image-tools is-small top right show-on-hover">
                                        </div>
                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                        </div>
                                        <div
                                            class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                        </div>
                                    </div>

                                    <div class="box-text box-text-products text-center grid-style-2">
                                        <div class="title-wrapper">
                                            <p class="name product-title woocommerce-loop-product__title"><a
                                                    href="http://batdongsan106.webdaitin.biz/chung-cu-goldmark-city/"
                                                    class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Chung
                                                    cư Goldmark City</a></p>
                                            <div class="giatien">
                                                <p>Giá từ:<span class="gia-tien"> 2 tỷ</span></p>
                                            </div>

                                        </div>
                                        <div class="price-wrapper">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div
                            class="product-small col has-hover product type-product post-166 status-publish first instock product_cat-can-ho-biet-thu has-post-thumbnail shipping-taxable product-type-simple">
                            <div class="col-inner">

                                <div class="badge-container absolute left top z-1">
                                </div>
                                <div class="product-small box ">
                                    <div class="box-image">
                                        <div class="image-fade_in_back">
                                            <a href="http://batdongsan106.webdaitin.biz/chung-cu-stellar-garden/"
                                                aria-label="Chung cư Stellar Garden">
                                                <img width="247" height="296"
                                                    src="http://batdongsan106.webdaitin.biz/wp-content/uploads/2019/03/tong-quan-stellar-garden-2-247x296.jpg"
                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                    alt="" loading="lazy" /><img width="247" height="296"
                                                    src="http://batdongsan106.webdaitin.biz/wp-content/uploads/2019/03/phoi-canh-dem-247x296.jpg"
                                                    class="show-on-hover absolute fill hide-for-small back-image"
                                                    alt="" loading="lazy" /> </a>
                                        </div>
                                        <div class="image-tools is-small top right show-on-hover">
                                        </div>
                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                        </div>
                                        <div
                                            class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                        </div>
                                    </div>

                                    <div class="box-text box-text-products text-center grid-style-2">
                                        <div class="title-wrapper">
                                            <p class="name product-title woocommerce-loop-product__title"><a
                                                    href="http://batdongsan106.webdaitin.biz/chung-cu-stellar-garden/"
                                                    class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Chung
                                                    cư Stellar Garden</a></p>
                                            <div class="giatien">
                                                <p>Giá từ:<span class="gia-tien"> 1,7 tỷ/căn</span></p>
                                            </div>

                                        </div>
                                        <div class="price-wrapper">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div
                            class="product-small col has-hover product type-product post-408 status-publish instock product_cat-can-ho-biet-thu has-post-thumbnail shipping-taxable product-type-simple">
                            <div class="col-inner">

                                <div class="badge-container absolute left top z-1">
                                </div>
                                <div class="product-small box ">
                                    <div class="box-image">
                                        <div class="image-fade_in_back">
                                            <a href="http://batdongsan106.webdaitin.biz/du-an-duong-kinh-new-city/"
                                                aria-label="Dự án Dương Kinh New City">
                                                <img width="247" height="296"
                                                    src="http://batdongsan106.webdaitin.biz/wp-content/uploads/2020/02/phoca_thumb_l_hanhud_anhdung6_1-247x296.jpg"
                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                    alt="" loading="lazy" /> </a>
                                        </div>
                                        <div class="image-tools is-small top right show-on-hover">
                                        </div>
                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                        </div>
                                        <div
                                            class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                        </div>
                                    </div>

                                    <div class="box-text box-text-products text-center grid-style-2">
                                        <div class="title-wrapper">
                                            <p class="name product-title woocommerce-loop-product__title"><a
                                                    href="http://batdongsan106.webdaitin.biz/du-an-duong-kinh-new-city/"
                                                    class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Dự
                                                    án Dương Kinh New City</a></p>
                                            <div class="giatien">
                                                <p>Giá từ:<span class="gia-tien"> 1 tỷ/ căn</span></p>
                                            </div>

                                        </div>
                                        <div class="price-wrapper">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div
                            class="product-small col has-hover product type-product post-416 status-publish last instock product_cat-can-ho-biet-thu has-post-thumbnail shipping-taxable product-type-simple">
                            <div class="col-inner">

                                <div class="badge-container absolute left top z-1">
                                </div>
                                <div class="product-small box ">
                                    <div class="box-image">
                                        <div class="image-fade_in_back">
                                            <a href="http://batdongsan106.webdaitin.biz/khu-do-thi-lien-ke-nam-32/"
                                                aria-label="Khu đô thị liền kề nam 32">
                                                <img width="247" height="296"
                                                    src="http://batdongsan106.webdaitin.biz/wp-content/uploads/2020/02/TONG-QUAN-1366X577-247x296.jpg"
                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                    alt="" loading="lazy" /> </a>
                                        </div>
                                        <div class="image-tools is-small top right show-on-hover">
                                        </div>
                                        <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                        </div>
                                        <div
                                            class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                        </div>
                                    </div>

                                    <div class="box-text box-text-products text-center grid-style-2">
                                        <div class="title-wrapper">
                                            <p class="name product-title woocommerce-loop-product__title"><a
                                                    href="http://batdongsan106.webdaitin.biz/khu-do-thi-lien-ke-nam-32/"
                                                    class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Khu
                                                    đô thị liền kề nam 32</a></p>
                                            <div class="giatien">
                                                <p>Giá từ:<span class="gia-tien"> 3,3 tỷ / căn</span></p>
                                            </div>

                                        </div>
                                        <div class="price-wrapper">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- row -->
                </div><!-- shop container -->
            </div>

            @include('public.patrials.downloadItem')
        </div>

    </main>
@endsection
