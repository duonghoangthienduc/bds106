@extends('public.layout')
@section('head-title')
Liên đoàn Quần vợt tỉnh Khánh Hoà - Liên hệ
@endsection
@section('content')
    <x-alert/>
    <main id="main" class="">
        <div id="content" role="main" class="content-area">
            <section class="section" id="section_438243470">
                <div class="bg section-bg fill bg-fill  bg-loaded">
                </div>
                <div class="section-content relative">
                    <div class="row" id="row-385751901">
                        <div id="col-1564971644" class="col small-12 large-12">
                            <div class="col-inner">
                                <div class="tittle-home">
                                    <h3>THÔNG TIN LIÊN HỆ</h3>
                                </div>
                                <div class="row" id="row-598192304">
                                    <div id="col-1102438798" class="col small-12 large-12">
                                        <div class="col-inner">
                                            <p><iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3898.9675397262404!2d109.18955267432374!3d12.25047593027948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3170678115db0a61%3A0x1d5d9b3ad37f38cf!2zMTAgWWVyc2luLCBW4bqhbiBUaOG6oW5oLCBOaGEgVHJhbmcsIEtow6FuaCBIw7JhIDY1MDAwMCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1698910654035!5m2!1svi!2s"
                                                    width="100%" height="450" frameborder="0" style="border:0"
                                                    allowfullscreen></iframe></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" id="row-1739863082">
                                    <div id="col-612196328" class="col medium-6 small-12 large-6">
                                        <div class="col-inner">
                                            <p>Liên đoàn Quần vợt tỉnh Khánh Hoà</p>
                                            <p>Địa chỉ: Số 10 Yersin, phường Xương Huân, TP Nha Trang, tỉnh Khánh Hoà</p>
                                            <p>Điện thoại: 0258 3841 734</p>
                                            <p>Email: info@ktf.org.vn</p>
                                            <p>Website: http://www.ktf.org.vn</p>
                                        </div>
                                    </div>
                                    <div id="col-689241520" class="col medium-6 small-12 large-6">
                                        <div class="col-inner">
                                            <div role="form" class="wpcf7" id="wpcf7-f5-p230-o1" lang="vi"
                                                dir="ltr">
                                                <div class="screen-reader-response">
                                                    <p role="status" aria-live="polite" aria-atomic="true"></p>
                                                    <ul></ul>
                                                </div>
                                                <form action="{{route('ajax.store-customer')}}" method="post"
                                                    class="wpcf7-form init" novalidate="novalidate" data-status="init">
                                                    @csrf
                                                    {{-- <div style="display: none;">
                                                        <input type="hidden" name="_wpcf7" value="5" />
                                                        <input type="hidden" name="_wpcf7_version" value="5.4.2" />
                                                        <input type="hidden" name="_wpcf7_locale" value="vi" />
                                                        <input type="hidden" name="_wpcf7_unit_tag"
                                                            value="wpcf7-f5-p230-o1" />
                                                        <input type="hidden" name="_wpcf7_container_post" value="230" />
                                                        <input type="hidden" name="_wpcf7_posted_data_hash"
                                                            value="" />
                                                    </div> --}}
                                                    <p><label><br />
                                                            <span class="wpcf7-form-control-wrap your-name"><input
                                                                    type="text" name="name" value=""
                                                                    size="40"
                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                    aria-required="true" aria-invalid="false"
                                                                    placeholder="Họ tên của bạn" /></span> </label></p>
                                                    <p><label><br />
                                                            <span class="wpcf7-form-control-wrap your-email"><input
                                                                    type="email" name="email" value=""
                                                                    size="40"
                                                                    class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                                    aria-required="true" aria-invalid="false"
                                                                    placeholder="Địa chỉ email của bạn" /></span>
                                                        </label><br />
                                                        <label><br />
                                                            <span class="wpcf7-form-control-wrap your-phone"><input
                                                                    type="tel" name="phone" value=""
                                                                    size="40"
                                                                    class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel"
                                                                    aria-required="true" aria-invalid="false"
                                                                    placeholder="Số điện thoại của bạn" /></span> </label>
                                                    </p>
                                                    <p><label><br />
                                                            <span class="wpcf7-form-control-wrap your-message">
                                                                <textarea name="note" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea"
                                                                    aria-invalid="false" placeholder="Vui lòng nhập nội dung"></textarea>
                                                            </span> </label></p>
                                                    <p><input type="submit" value="Gửi đi"
                                                            class="wpcf7-form-control wpcf7-submit" /></p>
                                                    <div class="wpcf7-response-output" aria-hidden="true"></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                    #section_438243470 {
                        padding-top: 30px;
                        padding-bottom: 30px;
                    }
                </style>
            </section>
        </div>
    </main>
@endsection
