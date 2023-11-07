@extends('public.layout')
@section('head-title')
    Liên hệ - Bất Động Sản 106
@endsection
@php
    $config = '';
    if (Cache::has('CONFIG')) {
        $config = Cache::get('CONFIG');
    }
@endphp
@section('content')
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
                                            <p>
                                                {!! gettype($config) === 'object' ? $config[0]['iframe_ggmap'] : '' !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" id="row-1739863082">
                                    <div id="col-612196328" class="col medium-6 small-12 large-6">
                                        <div class="col-inner">
                                            <p>{{ gettype($config) === 'object' ? $config[0]['name_store'] : '' }}</p>
                                            <p>Địa chỉ: {{ gettype($config) === 'object' ? $config[0]['address'] : '' }}</p>
                                            <p>Điện thoại: <a
                                                    href="tel:+{{ gettype($config) === 'object' ? $config[0]['phone'] : '' }}">
                                                    {{ gettype($config) === 'object' ? $config[0]['phone'] : '' }}</a>
                                            </p>
                                            <p>Email: {{ gettype($config) === 'object' ? $config[0]['email'] : '' }}</p>
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
                                                <form action="/lien-he/#wpcf7-f5-p230-o1" method="post"
                                                    class="wpcf7-form init" novalidate="novalidate" data-status="init">
                                                    <div style="display: none;">
                                                        <input type="hidden" name="_wpcf7" value="5" />
                                                        <input type="hidden" name="_wpcf7_version" value="5.4.2" />
                                                        <input type="hidden" name="_wpcf7_locale" value="vi" />
                                                        <input type="hidden" name="_wpcf7_unit_tag"
                                                            value="wpcf7-f5-p230-o1" />
                                                        <input type="hidden" name="_wpcf7_container_post" value="230" />
                                                        <input type="hidden" name="_wpcf7_posted_data_hash"
                                                            value="" />
                                                    </div>
                                                    <p><label><br />
                                                            <span class="wpcf7-form-control-wrap your-name"><input
                                                                    type="text" name="your-name" value=""
                                                                    size="40"
                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                    aria-required="true" aria-invalid="false"
                                                                    placeholder="Họ tên của bạn" /></span> </label></p>
                                                    <p><label><br />
                                                            <span class="wpcf7-form-control-wrap your-email"><input
                                                                    type="email" name="your-email" value=""
                                                                    size="40"
                                                                    class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                                    aria-required="true" aria-invalid="false"
                                                                    placeholder="Địa chỉ email của bạn" /></span>
                                                        </label><br />
                                                        <label><br />
                                                            <span class="wpcf7-form-control-wrap your-phone"><input
                                                                    type="tel" name="your-phone" value=""
                                                                    size="40"
                                                                    class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel"
                                                                    aria-required="true" aria-invalid="false"
                                                                    placeholder="Số điện thoại của bạn" /></span> </label>
                                                    </p>
                                                    <p><label><br />
                                                            <span class="wpcf7-form-control-wrap your-message">
                                                                <textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea"
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
