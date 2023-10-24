 <!-- Popups v1.9.3.8 - https://wordpress.org/plugins/popups/ -->
 <style type="text/css">
     #spu-255 .spu-close {
         font-size: 30px;
         color: #666;
         text-shadow: 0 1px 0 #fff;
     }

     #spu-255 .spu-close:hover {
         color: #000;
     }

     #spu-255 {
         background-color: #015da5;
         background-color: rgba(1, 93, 165, 1);
         color: #ffffff;
         padding: 25px;
         border-radius: 0px;
         -moz-border-radius: 0px;
         -webkit-border-radius: 0px;
         -moz-box-shadow: 0px 0px 10px 1px #666;
         -webkit-box-shadow: 0px 0px 10px 1px #666;
         box-shadow: 0px 0px 10px 1px #666;
         width: 600px;

     }

     #spu-bg-255 {
         opacity: 0.5;
         background-color: #000;
     }

     /*
* Add custom CSS for this popup
* Be sure to start your rules with #spu-255 { } and use !important when needed to override plugin rules
*/
 </style>
 {{-- <div class="spu-bg" id="spu-bg-255"></div>
 <div class="spu-box  spu-centered spu-total- " id="spu-255" data-box-id="255" data-trigger="manual"
     data-trigger-number="5" data-spuanimation="fade" data-tconvert-cookie="d" data-tclose-cookie="d"
     data-dconvert-cookie="999" data-dclose-cookie="30" data-nconvert-cookie="spu_conversion_255"
     data-nclose-cookie="spu_closing_255" data-test-mode="0" data-auto-hide="0" data-close-on-conversion=""
     data-bgopa="0.5" data-total="" style="left:-99999px !important;right:auto;" data-width="600">
     <div class="spu-content">
         <div role="form" class="wpcf7" id="wpcf7-f253-o1" lang="vi" dir="ltr">
             <div class="screen-reader-response">
                 <p role="status" aria-live="polite" aria-atomic="true"></p>
                 <ul></ul>
             </div>
             <form action="/#wpcf7-f253-o1" method="post" class="wpcf7-form init" novalidate="novalidate"
                 data-status="init">
                 <div style="display: none;">
                     <input type="hidden" name="_wpcf7" value="253" />
                     <input type="hidden" name="_wpcf7_version" value="5.4.2" />
                     <input type="hidden" name="_wpcf7_locale" value="vi" />
                     <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f253-o1" />
                     <input type="hidden" name="_wpcf7_container_post" value="0" />
                     <input type="hidden" name="_wpcf7_posted_data_hash" value="" />
                 </div>
                 <div class="div-form ">
                     <h3>Đăng ký nhận thông tin chi tiết dự án</h3>
                     <p>Bảng giá bán, hợp đồng mua bán, chính sách cho vay vốn, chương trình khuyến mại mới nhất.</p>
                     <div class="large-12 row row-form-trong">
                         <div class="large-4 form-div">
                             <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email"
                                     value="" size="40"
                                     class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email"
                                     aria-invalid="false" placeholder="Email..." /></span>
                         </div>
                         <div class="large-4 form-div">
                             <span class="wpcf7-form-control-wrap your-phone"><input type="tel" name="your-phone"
                                     value="" size="40"
                                     class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel"
                                     aria-invalid="false" placeholder="Số điện thoại" /></span>
                         </div>
                         <div class="large-4 form-div">
                             <input type="submit" value="Đăng ký ngay" class="wpcf7-form-control wpcf7-submit" /><br />
                             <span class="wpcf7-form-control-wrap du-an"><input type="hidden" name="du-an"
                                     value="Trang chủ" size="40"
                                     class="wpcf7-form-control wpcf7dtx-dynamictext wpcf7-dynamichidden"
                                     aria-invalid="false" /></span>
                         </div>
                         <p>Quý khách điền đầy đủ thông tin để nhận được thông tin dự án chính xác nhất</p>
                     </div>
                 </div>
                 <div class="wpcf7-response-output" aria-hidden="true"></div>
             </form>
         </div>
         <p>&nbsp;</p>
     </div>
     <span class="spu-close spu-close-popup top_right"><i class="spu-icon spu-icon-close"></i></span>
     <span class="spu-timer"></span>
 </div> --}}
 <!-- / Popups Box -->
 <div id="fb-root" class=" fb_reset"></div>
 <div id="main-menu" class="mobile-sidebar no-scrollbar mfp-hide">
     <div class="sidebar-menu no-scrollbar ">
         <ul class="nav nav-sidebar nav-vertical nav-uppercase">
             <li
                 class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-41 current_page_item menu-item-50">
                 <a href="{{ route('home_page') }}" aria-current="page">Trang chủ</a>
             </li>
             <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-243"><a
                     href="{{ route('introduce_page') }}">Giới thiệu</a></li>
             <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-53"><a
                     href="{{ route('projects_page') }}">Dự án</a></li>
             <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-413"><a
                     href="{{ route('public.post', 'khac') }}">Lĩnh vực hoạt động</a></li>
             <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-415"><a
                     href="{{ route('public.post', 'tuyen-dung') }}">Tuyển dụng</a></li>
             <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-244"><a
                     href="{{ route('contact_page') }}">Liên hệ</a></li>
             <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-245"><a
                     href="{{ route('public.post', 'tin-tuc') }}">Tin tức</a></li>
         </ul>
     </div>
 </div>
 <div id="login-form-popup" class="lightbox-content mfp-hide">
     <div class="woocommerce-notices-wrapper"></div>
     <div class="account-container lightbox-inner">
         <div class="account-login-inner">
             <h3 class="uppercase">Đăng nhập</h3>
             <form class="woocommerce-form woocommerce-form-login login" method="post">
                 <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                     <label for="username">Tên tài khoản hoặc địa chỉ email&nbsp;<span
                             class="required">*</span></label>
                     <input type="text" class="woocommerce-Input woocommerce-Input--text input-text"
                         name="username" id="username" autocomplete="username" value="" />
                 </p>
                 <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                     <label for="password">Mật khẩu&nbsp;<span class="required">*</span></label>
                     <input class="woocommerce-Input woocommerce-Input--text input-text" type="password"
                         name="password" id="password" autocomplete="current-password" />
                 </p>
                 <p class="form-row">
                     <label
                         class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                         <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme"
                             type="checkbox" id="rememberme" value="forever" /> <span>Ghi
                             nhớ mật khẩu</span>
                     </label>
                     <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce"
                         value="98cba69696" /><input type="hidden" name="_wp_http_referer" value="/" />
                     <button type="submit" class="woocommerce-button button woocommerce-form-login__submit"
                         name="login" value="Đăng nhập">Đăng nhập</button>
                 </p>
                 <p class="woocommerce-LostPassword lost_password">
                     {{-- <a href="http://batdongsan106.webdaitin.biz/lost-password/">Quên mật khẩu?</a> --}}
                 </p>
             </form>
         </div>
     </div>
 </div>
 <script type="text/javascript">
     (function() {
         var c = document.body.className;
         c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
         document.body.className = c;
     })();
 </script>
 <script type='text/javascript' {{-- src='http://batdongsan106.webdaitin.biz/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=7.4.4' --}} src="{{ asset('public/js/polyfill.min.js') }}" id='wp-polyfill-js'>
 </script>
 <script type='text/javascript' id='wp-polyfill-js-after'>
     jQuery(".zoom-button").on("click", (function(t) {
             jQuery(".product-gallery-slider").find(".is-selected a").trigger("click"),
                 t.preventDefault()
         })),
         ('fetch' in window) || document.write(
             '<script src="{{ asset('public/js/polyfill-fetch.min.js') }}"></scr' +
             'ipt>');
     (document.contains) || document.write(
         '<script src="{{ asset('public/js/wp-polyfill-node-contains.min.js') }}"></scr' +
         'ipt>');
     (window.DOMRect) || document.write(
         '<script src="{{ asset('public/js/wp-polyfill-dom-rect.min.js') }}"></scr' +
         'ipt>');
     (window.URL && window.URL.prototype && window.URLSearchParams) || document.write(
         '<script src="{{ asset('public/js/wp-polyfill-url.min.js') }}"></scr' +
         'ipt>');
     (window.FormData && window.FormData.prototype.keys) || document.write(
         '<script src="{{ asset('public/js/wp-polyfill-formdata.min.js') }}"></scr' +
         'ipt>');
     (Element.prototype.matches && Element.prototype.closest) || document.write(
         '<script src="{{ asset('public/js/wp-polyfill-element-closest.min.js') }}"></scr' +
         'ipt>');
 </script>
 <script type='text/javascript' id='contact-form-7-js-extra'>
     /* <![CDATA[ */
     var wpcf7 = {
         "api": {
             "root": "http:\/\/batdongsan106.webdaitin.biz\/wp-json\/",
             "namespace": "contact-form-7\/v1"
         }
     };
     /* ]]> */
 </script>
 <script type='text/javascript' {{-- src='http://batdongsan106.webdaitin.biz/wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.4.2' --}} src="{{ asset('public/js/index.js') }}" id='contact-form-7-js'>
 </script>
 <script type='text/javascript' {{-- src='http://batdongsan106.webdaitin.biz/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70' --}} src="{{ asset('public/js/jquery.blockUI.min.js') }}"
     id='jquery-blockui-js'></script>
 <script type='text/javascript' id='wc-add-to-cart-js-extra'>
     /* <![CDATA[ */
     var wc_add_to_cart_params = {
         "ajax_url": "\/wp-admin\/admin-ajax.php",
         "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
         "i18n_view_cart": "Xem gi\u1ecf h\u00e0ng",
         "cart_url": "http:\/\/batdongsan106.webdaitin.biz",
         "is_cart": "",
         "cart_redirect_after_add": "no"
     };
     /* ]]> */
 </script>
 <script type='text/javascript' {{-- src='http://batdongsan106.webdaitin.biz/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=5.5.2' --}} src="{{ asset('public/js/add-to-cart.min.js') }}"
     id='wc-add-to-cart-js'></script>
 <script type='text/javascript' {{-- src='http://batdongsan106.webdaitin.biz/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4' --}} src="{{ asset('public/js/js.cookie.min.js') }}" id='js-cookie-js'>
 </script>
 <script type='text/javascript' id='woocommerce-js-extra'>
     /* <![CDATA[ */
     var woocommerce_params = {
         "ajax_url": "\/wp-admin\/admin-ajax.php",
         "wc_ajax_url": "\/?wc-ajax=%%endpoint%%"
     };
     /* ]]> */
 </script>
 <script type='text/javascript' {{-- src='http://batdongsan106.webdaitin.biz/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=5.5.2' --}} src="{{ asset('public/js/woocommerce.min.js') }}"
     id='woocommerce-js'></script>
 <script type='text/javascript' id='wc-cart-fragments-js-extra'>
     /* <![CDATA[ */
     var wc_cart_fragments_params = {
         "ajax_url": "\/wp-admin\/admin-ajax.php",
         "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
         "cart_hash_key": "wc_cart_hash_933813941b860b9b91ea8ab69d2a9875",
         "fragment_name": "wc_fragments_933813941b860b9b91ea8ab69d2a9875",
         "request_timeout": "5000"
     };
     /* ]]> */
 </script>
 <script type='text/javascript' {{-- src='http://batdongsan106.webdaitin.biz/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=5.5.2' --}} src="{{ asset('public/js/cart-fragments.min.js') }}"
     id='wc-cart-fragments-js'></script>
 <script type='text/javascript' id='spu-public-js-extra'>
     /* <![CDATA[ */
     var spuvar = {
         "is_admin": "",
         "disable_style": "",
         "ajax_mode": "",
         "ajax_url": "http:\/\/batdongsan106.webdaitin.biz\/wp-admin\/admin-ajax.php",
         "ajax_mode_url": "http:\/\/batdongsan106.webdaitin.biz\/?spu_action=spu_load",
         "pid": "41",
         "is_front_page": "1",
         "is_category": "",
         "site_url": "http:\/\/batdongsan106.webdaitin.biz",
         "is_archive": "",
         "is_search": "",
         "is_preview": "",
         "seconds_confirmation_close": "5"
     };
     var spuvar_social = [];
     /* ]]> */
 </script>
 <script type='text/javascript' {{-- src='http://batdongsan106.webdaitin.biz/wp-content/plugins/popups/public/assets/js/public.js?ver=1.9.3.8' --}} src="{{ asset('public/js/public.js') }}" id='spu-public-js'>
 </script>
 <script type='text/javascript' {{-- src='http://batdongsan106.webdaitin.biz/wp-content/themes/flatsome/inc/extensions/flatsome-live-search/flatsome-live-search.js?ver=3.14.2' --}} src="{{ asset('public/js/flatsome-live-search.js') }}"
     id='flatsome-live-search-js'></script>
 <script type='text/javascript' id='q2w3_fixed_widget-js-extra'>
     /* <![CDATA[ */
     var q2w3_sidebar_options = [{
         "sidebar": "widget-menu",
         "margin_top": 90,
         "margin_bottom": 0,
         "stop_id": "footer",
         "screen_max_width": 0,
         "screen_max_height": 0,
         "width_inherit": false,
         "refresh_interval": 1500,
         "window_load_hook": false,
         "disable_mo_api": false,
         "widgets": ["text-2"]
     }, {
         "sidebar": "sidebar-main",
         "margin_top": 90,
         "margin_bottom": 0,
         "stop_id": "footer",
         "screen_max_width": 0,
         "screen_max_height": 0,
         "width_inherit": false,
         "refresh_interval": 1500,
         "window_load_hook": false,
         "disable_mo_api": false,
         "widgets": ["text-3"]
     }];
     /* ]]> */
 </script>
 <script type='text/javascript' {{-- src='http://batdongsan106.webdaitin.biz/wp-content/plugins/q2w3-fixed-widget/js/q2w3-fixed-widget.min.js?ver=5.3.0' --}} src="{{ asset('public/js/q2w3-fixed-widget.min.js') }}"
     id='q2w3_fixed_widget-js'></script>
 <script type='text/javascript' {{-- src='http://batdongsan106.webdaitin.biz/wp-content/themes/aznet-vn/js/lightslider.min.js?ver=1.0.0' --}} src="{{ asset('public/js/lightslider.min.js') }}"
     id='lightsliderjs-js'></script>
 <script type='text/javascript' {{-- src='http://batdongsan106.webdaitin.biz/wp-content/themes/aznet-vn/js/lightslider-init.js?ver=1.0.0' --}} src="{{ asset('public/js/lightslider-init.js') }}"
     id='lightsliderinit-js'></script>
 <script type='text/javascript' {{-- src='http://batdongsan106.webdaitin.biz/wp-includes/js/hoverIntent.min.js?ver=1.8.1' --}} src="{{ asset('public/js/hoverIntent.min.js') }}"
     id='hoverIntent-js'></script>
 <script type='text/javascript' id='flatsome-js-js-extra'>
     /* <![CDATA[ */
     var flatsomeVars = {
         "ajaxurl": "http:\/\/batdongsan106.webdaitin.biz\/wp-admin\/admin-ajax.php",
         "rtl": "",
         "sticky_height": "90",
         "assets_url": "http:\/\/batdongsan106.webdaitin.biz\/wp-content\/themes\/flatsome\/assets\/js\/",
         "lightbox": {
             "close_markup": "<button title=\"%title%\" type=\"button\" class=\"mfp-close\"><svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"><\/line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"><\/line><\/svg><\/button>",
             "close_btn_inside": false
         },
         "user": {
             "can_edit_pages": false
         },
         "i18n": {
             "mainMenu": "Main Menu"
         },
         "options": {
             "cookie_notice_version": "1",
             "swatches_layout": false,
             "swatches_box_select_event": false,
             "swatches_box_behavior_selected": false,
             "swatches_box_update_urls": "1",
             "swatches_box_reset": false,
             "swatches_box_reset_extent": false,
             "swatches_box_reset_time": 300,
             "search_result_latency": "0"
         },
         "is_mini_cart_reveal": "1"
     };
     /* ]]> */
 </script>
 <script type='text/javascript' {{-- src='http://batdongsan106.webdaitin.biz/wp-content/themes/flatsome/assets/js/flatsome.js?ver=942e5d46e3c18336921615174a7d6798' --}} src="{{ asset('public/js/flatsome.js') }}" id='flatsome-js-js'>
 </script>
 <script type='text/javascript' {{-- src='http://batdongsan106.webdaitin.biz/wp-content/themes/flatsome/assets/js/woocommerce.js?ver=707a90c89eab7247f6e9e1b12f4f381b' --}} src="{{ asset('public/js/woocommerce.js') }}"
     id='flatsome-theme-woocommerce-js-js'></script>
 <script type='text/javascript' {{-- src='http://batdongsan106.webdaitin.biz/wp-includes/js/wp-embed.min.js?ver=5.6.12' --}} src="{{ asset('public/js/wp-embed.min.js') }}" id='wp-embed-js'>
 </script>
 <script type='text/javascript' {{-- src='http://batdongsan106.webdaitin.biz/wp-content/themes/flatsome/assets/libs/packery.pkgd.min.js?ver=3.14.2' --}} src="{{ asset('public/js/packery.pkgd.min.js') }}"
     id='flatsome-masonry-js-js'></script>
 {{-- <script type='text/javascript' id='zxcvbn-async-js-extra'>
    /* <![CDATA[ */
    var _zxcvbnSettings = {
        "src": "http:\/\/batdongsan106.webdaitin.biz\/wp-includes\/js\/zxcvbn.min.js"
    };
    /* ]]> */
</script> --}}
 {{-- <script type='text/javascript' src="{{ asset('public/js/zxcvbn-async.min.js') }}"
     id='zxcvbn-async-js'></script> --}}
 <script type='text/javascript' {{-- src='http://batdongsan106.webdaitin.biz/wp-includes/js/dist/i18n.min.js?ver=9e36b5da09c96c657b0297fd6f7cb1fd' --}} src="{{ asset('public/js/i18n.min.js') }}" id='wp-i18n-js'>
 </script>
 <script type='text/javascript' id='password-strength-meter-js-extra'>
     /* <![CDATA[ */
     var pwsL10n = {
         "unknown": "M\u1eadt kh\u1ea9u m\u1ea1nh kh\u00f4ng x\u00e1c \u0111\u1ecbnh",
         "short": "R\u1ea5t y\u1ebfu",
         "bad": "Y\u1ebfu",
         "good": "Trung b\u00ecnh",
         "strong": "M\u1ea1nh",
         "mismatch": "M\u1eadt kh\u1ea9u kh\u00f4ng kh\u1edbp"
     };
     /* ]]> */
 </script>
 <script type='text/javascript' id='password-strength-meter-js-translations'>
     (function(domain, translations) {
         var localeData = translations.locale_data[domain] || translations.locale_data.messages;
         localeData[""].domain = domain;
         wp.i18n.setLocaleData(localeData, domain);
     })("default", {
         "translation-revision-date": "2021-11-15 07:20:52+0000",
         "generator": "GlotPress\/4.0.0-alpha.1",
         "domain": "messages",
         "locale_data": {
             "messages": {
                 "": {
                     "domain": "messages",
                     "plural-forms": "nplurals=1; plural=0;",
                     "lang": "vi_VN"
                 },
                 "%1$s is deprecated since version %2$s! Use %3$s instead. Please consider writing more inclusive code.": [
                     "%1$s \u0111\u00e3 ng\u1eebng ho\u1ea1t \u0111\u1ed9ng t\u1eeb phi\u00ean b\u1ea3n %2$s! S\u1eed d\u1ee5ng thay th\u1ebf b\u1eb1ng %3$s."
                 ]
             }
         },
         "comment": {
             "reference": "wp-admin\/js\/password-strength-meter.js"
         }
     });
 </script>
 <script type='text/javascript' {{-- src='http://batdongsan106.webdaitin.biz/wp-admin/js/password-strength-meter.min.js?ver=5.6.12' --}} src="{{ asset('public/js/password-strength-meter.min.js') }}"
     id='password-strength-meter-js'></script>
 <script type='text/javascript' id='wc-password-strength-meter-js-extra'>
     /* <![CDATA[ */
     var wc_password_strength_meter_params = {
         "min_password_strength": "3",
         "stop_checkout": "",
         "i18n_password_error": "Vui l\u00f2ng nh\u1eadp m\u1eadt kh\u1ea9u kh\u00f3 h\u01a1n.",
         "i18n_password_hint": "G\u1ee3i \u00fd: M\u1eadt kh\u1ea9u ph\u1ea3i c\u00f3 \u00edt nh\u1ea5t 12 k\u00fd t\u1ef1. \u0110\u1ec3 n\u00e2ng cao \u0111\u1ed9 b\u1ea3o m\u1eadt, s\u1eed d\u1ee5ng ch\u1eef in hoa, in th\u01b0\u1eddng, ch\u1eef s\u1ed1 v\u00e0 c\u00e1c k\u00fd t\u1ef1 \u0111\u1eb7c bi\u1ec7t nh\u01b0 ! \" ? $ % ^ & )."
     };
     /* ]]> */
 </script>
 <script type='text/javascript' {{-- src='http://batdongsan106.webdaitin.biz/wp-content/plugins/woocommerce/assets/js/frontend/password-strength-meter.min.js?ver=5.5.2' --}} src="{{ asset('public/js/password-strength-meter.min.js') }}"
     id='wc-password-strength-meter-js'></script>
