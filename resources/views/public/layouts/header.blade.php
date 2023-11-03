<header id="header" class="header has-sticky sticky-jump">
    <div class="header-wrapper">
        <div id="masthead" class="header-main ">
            <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">
                <!-- Logo -->
                <div id="logo" class="flex-col logo">
                    <!-- Header logo -->
                    <a href="{{route('home_page')}}" title="Liên đoàn Quần vợt tỉnh Khánh Hoà" rel="home" style="width: 65%">
                        <img width="255" height="95" src="{{ asset('public/imgs/logoKTF.jpg') }}"
                            class="header_logo header-logo" alt="KTF" />
                        <img width="255" height="95" src="{{  asset('public/imgs/logoKTF.jpg') }}" 
                            class="header-logo-dark" alt="KTF" /></a>
                </div>

                <!-- Mobile Left Elements -->
                <div class="flex-col show-for-medium flex-left">
                    <ul class="mobile-nav nav nav-left ">
                        <li class="nav-icon has-icon">
                            <a href="#" data-open="#main-menu" data-pos="left" data-bg="main-menu-overlay"
                                data-color="" class="is-small" aria-label="Menu" aria-controls="main-menu"
                                aria-expanded="false">
                                <i>
                                    <div class="bar1"></div>
                                    <div class="bar2"></div>
                                    <div class="bar3"></div>
                                </i>
                                <style>
                                    .bar1,
                                    .bar2,
                                    .bar3 {
                                        width: 35px;
                                        height: 3px;
                                        background-color: #333;
                                        margin: 6px 0;
                                        transition: 0.4s;
                                    }
                                </style>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Left Elements -->
                <div class="flex-col hide-for-medium flex-left flex-grow">
                    <ul
                        class="header-nav header-nav-main nav nav-left  nav-size-medium nav-spacing-xlarge nav-uppercase">
                    </ul>
                </div>

                <!-- Right Elements -->
                <div class="flex-col hide-for-medium flex-right">
                    <ul
                        class="header-nav header-nav-main nav nav-right  nav-size-medium nav-spacing-xlarge nav-uppercase">
                        <li id="menu-item-50"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-41 current_page_item menu-item-50 menu-item-design-default">
                            <a href="{{ route('home_page') }}" aria-current="page" class="nav-top-link">Trang chủ</a>
                        </li>
                        <li id="menu-item-243"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-243 menu-item-design-default">
                            <a href="#" class="nav-top-link">Giới thiệu </a><i class="arrow down" style="margin: 2px 4px;"></i>
                            <ul class="sub-menu" style="width: 160px;">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-design-default">
                                    <a  href="#" class="nav-top-link">Về KTF</a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-design-default">
                                    <a href="{{ route('introduce_page') }}" class="nav-top-link">Cơ cấu tổ chức</a>
                                </li>
                            </ul>
                        </li>
                        <li id="menu-item-53"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-53 menu-item-design-default">
                            <a href="{{ route('public.post', 'tin-tuc') }}" class="nav-top-link">Tin tức</a>
                        </li>
                        <li id="menu-item-413"
                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-413 menu-item-design-default">
                            <a href="#" class="nav-top-link">Hội viên</a>
                        </li>
                        <li id="menu-item-415"
                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-415 menu-item-design-default">
                            <a href="#" class="nav-top-link">Giải đấu</a>
                        </li>
                        <li id="menu-item-244"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-244 menu-item-design-default">
                            <a href="#" class="nav-top-link">Hình ảnh & Video</a><i class="arrow down" style="margin: 2px 4px;"></i>
                            <ul class="sub-menu" style="width: 160px;">
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-design-default">
                                    <a  href="{{ route('public.post', 'hinh-anh') }}" class="nav-top-link">Hình ảnh</a>
                                </li>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-design-default">
                                    <a href="{{ route('public.post', 'video') }}" class="nav-top-link">Video</a>
                                </li>
                            </ul>
                        </li>
                        <li id="menu-item-245"
                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-245 menu-item-design-default">
                            <a href="{{ route('contact_page') }}" class="nav-top-link">Liên hệ</a>
                        </li>
                    </ul>
                </div>
                <style>
                    .sub-menu {
                        display: none;
                        box-shadow: 2px 4px #caabab81;
                        position: absolute;
                        left: 0;
                        background-color: #ffffff;
                        z-index: 1;
                        overflow: hidden;
                        font-weight: 700;
                        font-size: .9em;
                        text-transform: uppercase;
                    }
                    .sub-menu li {
                        padding: 6px 12px;
                    }
                    .sub-menu li>a {
                        display: block;
                    }
                    #menu-item-243:hover ul.sub-menu{
                        display: block !important;
                    }
                    #menu-item-244:hover ul.sub-menu{
                        display: block !important;
                    }
                    li a {
                        color: rgba(102, 102, 102, .85);
                    }
                    .down {
                        transform: rotate(45deg);
                        -webkit-transform: rotate(45deg);
                    }
                </style>
                <!-- Mobile Right Elements -->
                {{-- <div class="flex-col show-for-medium flex-right">
                    <ul class="mobile-nav nav nav-right ">
                        <li class="header-search header-search-dropdown has-icon has-dropdown menu-item-has-children">
                            <a href="#" aria-label="Tìm kiếm" class="is-small"><i class="icon-search"></i></a>
                            <ul class="nav-dropdown nav-dropdown-default">
                                <li class="header-search-form search-form html relative has-icon">
                                    <div class="header-search-form-wrapper">
                                        <div class="searchform-wrapper ux-search-box relative is-normal">
                                            <form role="search" method="get" class="searchform"
                                                action="http://batdongsan106.webdaitin.biz/">
                                                <div class="flex-row relative">
                                                    <div class="flex-col flex-grow">
                                                        <label class="screen-reader-text"
                                                            for="woocommerce-product-search-field-0">Tìm
                                                            kiếm:</label>
                                                        <input type="search" id="woocommerce-product-search-field-0"
                                                            class="search-field mb-0" placeholder="Tìm kiếm&hellip;"
                                                            value="" name="s" />
                                                        <input type="hidden" name="post_type" value="product" />
                                                    </div>
                                                    <div class="flex-col">
                                                        <button type="submit" value="Tìm kiếm"
                                                            class="ux-search-submit submit-button secondary button icon mb-0"
                                                            aria-label="Submit">
                                                            <i class="icon-search"></i> </button>
                                                    </div>
                                                </div>
                                                <div class="live-search-results text-left z-top"></div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div> --}}

            </div>

            <div class="container">
                <div class="top-divider full-width"></div>
            </div>
        </div>
        <div class="header-bg-container fill">
            <div class="header-bg-image fill"></div>
            <div class="header-bg-color fill"></div>
        </div>
    </div><!-- header-wrapper-->
</header>
