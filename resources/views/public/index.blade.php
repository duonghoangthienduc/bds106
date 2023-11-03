@extends('public.layout')
@section('head-title')
Liên đoàn Quần vợt tỉnh Khánh Hoà
@endsection
@section('content')
    <main id="main" class="">

        <div id="content" role="main" class="content-area">

            @component('public.patrials.banner')
                @slot('banner', $banner)
            @endcomponent

            <section class="section section-nhay-so" id="section_1479736412">
                <div class="bg section-bg fill bg-fill  bg-loaded">
                </div>
                <div class="section-content relative">
                    <div class="row" id="row-2006190746">
                        <div id="col-1674917305" class="col div-no-padding small-12 large-12" data-animate="fadeInUp">
                            <div class="col-inner">
                                <div class="tittle-home">
                                    <h3>ẤN TƯỢNG MEKONG LAND</h3>
                                </div>
                                <div id="gap-1741833088" class="gap-element clearfix hide-for-medium"
                                    style="display:block; height:auto;">
                                    <style>
                                        #gap-1741833088 {
                                            padding-top: 20px;
                                        }
                                    </style>
                                </div>
                                <div class="row" id="row-1354868556">
                                    <div id="col-118288496" class="col medium-3 small-6 large-3">
                                        <div class="col-inner">
                                            <div class="item-so">
                                                <div class="wrap">
                                                    <p class="text-tren"><span class="count-up">10</span><sup>+</sup></p>
                                                    <p class="text-duoi">Năm phát triển</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="col-1976460391" class="col medium-3 small-6 large-3">
                                        <div class="col-inner">
                                            <div class="item-so">
                                                <div class="wrap">
                                                    <p class="text-tren"><span class="count-up">35</span><sup>+</sup></p>
                                                    <p class="text-duoi">Chi nhánh</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="col-1120567496" class="col medium-3 small-6 large-3">
                                        <div class="col-inner">
                                            <div class="item-so">
                                                <div class="wrap">
                                                    <p class="text-tren"><span class="count-up">200</span><sup>+</sup></p>
                                                    <p class="text-duoi">Nhân sự</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="col-428357414" class="col medium-3 small-6 large-3">
                                        <div class="col-inner">
                                            <div class="item-so">
                                                <div class="wrap">
                                                    <p class="text-tren"><span class="count-up">50</span><sup>+</sup></p>
                                                    <p class="text-duoi">Dự án</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="col-1971495643" class="col medium-3 small-12 large-3">
                                        <div class="col-inner">
                                            <div class="item-so">
                                                <div class="wrap">
                                                    <p class="text-tren"><span class="count-up">6</span><sup>+</sup>
                                                    </p>
                                                    <p class="text-duoi">Lĩnh vực <br />hoạt động</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                    #section_1479736412 {
                        padding-top: 30px;
                        padding-bottom: 30px;
                    }
                </style>
            </section>

            {{-- @component('public.patrials.project')
                @slot('projects', $projects)
            @endcomponent --}}

            @component('public.patrials.about-us')
                @slot('getNews', $getNews)
            @endcomponent

            @component('public.patrials.news')
                @slot('listNews', $listNews)
            @endcomponent

            @include('public.patrials.customer')

            @include('public.patrials.partner')

            @include('public.patrials.prize')

            @component('public.patrials.recruitment')
                @slot('recruitment', $recruitment)
            @endcomponent

        </div>
    </main>
@endsection
