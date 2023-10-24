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
            <div class="flex-col medium-text-center" style="display:flex; align-items: center;">
                <p class="hide-for-medium" style="margin: 0 10px">
                    Hiển thị tất cả {{ count($projects) }} kết quả
                </p>
                <form method="get">
                    <select name="orderby" class="orderby" aria-label="Đơn hàng của cửa hàng">
                        <option value="menu_order" selected='selected'>Thứ tự mặc định</option>
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
                        @forelse ($projects as $project)
                            <div class="col">
                                <div class="col-inner">
                                    <div class="badge-container absolute left top z-1">
                                    </div>
                                    <div class="product-small box ">
                                        <div class="box-image">
                                            <div class="image-fade_in_back">
                                                <a  href="{{route('project_detail', $project->slug)}}" aria-label="{{ $project->name_project }}">
                                                    <img src="{{ $project->thumb }}" style="width:247px; height:296px"
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
                                                        href="{{route('project_detail', $project->slug)}}"
                                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                        {{ $project->name_project }}</a></p>
                                                <div class="giatien">
                                                    <p>Giá từ:<span class="gia-tien"> {{ $project->price }} {{ $project->value == 'ty' ? 'tỷ' : 'triệu' }}/{{ $project->unit == 'can' ? 'căn' : 'm2' }}</span></p>
                                                </div>
                                            </div>
                                            <div class="price-wrapper">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                        @endforelse
                        {{ $projects->links('pagination::simple-default') }}
                    </div><!-- row -->
                </div><!-- shop container -->
            </div>

            @include('public.patrials.downloadItem')
        </div>

    </main>
@endsection
