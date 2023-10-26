<div class="post-sidebar large-3 col">
    <div id="secondary" class="widget-area q2w3-fixed-widget-container" role="complementary" style="height: 344.781px;">
        <aside id="text-3" class="widget widget_text" style="">
            <span class="widget-title ">
                <span>TẢI TÀI LIỆU</span>
            </span>
            <div class="is-divider small"></div>
            <div class="textwidget">
                <div role="form" class="wpcf7" id="wpcf7-f156-o1" lang="vi" dir="ltr">
                    <div class="screen-reader-response">
                        <ul></ul>
                    </div>
                    <form action="{{route('ajax.store-customer')}}" method="post" 
                    class="wpcf7-form init" 
                    novalidate="novalidate" data-status="init">
                        @csrf
                        {{-- <div style="display: none;">
                            <input type="hidden" name="_wpcf7" value="156">
                            <input type="hidden" name="_wpcf7_version" value="5.4.2">
                            <input type="hidden" name="_wpcf7_locale" value="vi">
                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f156-o1">
                            <input type="hidden" name="_wpcf7_container_post" value="0">
                            <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                        </div> --}}
                        <div class="dx_widget_register">
                            <h5>Tải tài liệu dự án</h5>
                            <p class="p-khach">Quý khách hàng vui lòng đăng ký để tải tài liệu dự án.</p>
                            <p><i class="fa fa-download"></i></p>
                            <div class="clearfix"></div>
                            <p>
                                <span class="wpcf7-form-control-wrap your-phone">
                                    <input type="tel" name="your-phone" value="" size="40"
                                        class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel"
                                        aria-required="true" aria-invalid="false"
                                        placeholder="Nhập số điện thoại của bạn">
                                </span><br>
                                <span class="wpcf7-form-control-wrap your-email">
                                    <input type="email" name="your-email" value="" size="40"
                                        class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                        aria-required="true" aria-invalid="false" placeholder="Nhập email của bạn">
                                </span><br>
                                <span class="wpcf7-form-control-wrap du-an">
                                    <input type="hidden" name="du-an" value="Đầu tư bất động sản" size="40"
                                        class="wpcf7-form-control wpcf7dtx-dynamictext wpcf7-dynamichidden"
                                        aria-invalid="false">
                                </span><br>
                                {{-- <span class="wpcf7-form-control-wrap duong-dan">
                                    <input type="hidden" name="duong-dan" value="http://batdongsan106.webdaitin.biz"
                                        size="40"
                                        class="wpcf7-form-control wpcf7dtx-dynamictext wpcf7-dynamichidden"
                                        aria-invalid="false">
                                </span><br> --}}
                                <input type="submit" value="Tải tài liệu" class="wpcf7-form-control wpcf7-submit">
                                <span class="ajax-loader"></span>
                            </p>
                        </div>
                        <div class="wpcf7-response-output" aria-hidden="true"></div>
                    </form>
                </div>
            </div>
        </aside>
    </div>
</div>
