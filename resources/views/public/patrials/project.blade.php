@if (isset($projects))
    <section class="section section-du-an" id="section_1929750100">
        <div class="bg section-bg fill bg-fill bg-loaded">
        </div>
        <div class="section-content relative">
            <div class="row" id="row-1970329504">
                <div id="col-588724703" class="col div-no-padding small-12 large-12">
                    <div class="col-inner">
                        <div class="tittle-home">
                            <h3>CÁC DỰ ÁN</h3>
                        </div>
                        <div id="gap-143173613" class="gap-element clearfix hide-for-medium"
                            style="display:block; height:auto;">
                            <style>
                                #gap-143173613 {
                                    padding-top: 20px;
                                }
                            </style>
                        </div>
                    </div>
                </div>
                <div id="col-1098045392" class="col div-no-padding small-12 large-12">
                    <div class="col-inner">
                        <div id="product-grid-1450583303"
                            class="row large-columns-3 medium-columns- small-columns-2 row-small row-masonry"
                            data-packery-options='{"itemSelector": ".col", "gutter": 0, "presentageWidth" : true}'>
                            @foreach ($projects as $project)
                                <div class="col" data-animate="fadeInUp">
                                    <div class="col-inner">
                                        <div class="badge-container absolute left top z-1">
                                        </div>
                                        <div class="product-small box has-hover box-normal box-text-bottom">
                                            <div class="box-image">
                                                <div class="image-cover" style="padding-top:56%;">
                                                    <a href="{{ route('project_detail', $project->slug) }}"
                                                        aria-label="{{ $project->name_project }}">
                                                        <img width="247" height="296" src="{{ $project->thumb }}"
                                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                            alt="" loading="lazy" /> </a>
                                                </div>
                                                <div class="image-tools top right show-on-hover">
                                                </div>
                                                <div
                                                    class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                                </div>
                                            </div>
                                            <div class="box-text text-center">
                                                <div class="title-wrapper">
                                                    <p class="name product-title woocommerce-loop-product__title">
                                                        <a href="{{ route('project_detail', $project->slug) }}"
                                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                            {{ $project->name_project }}
                                                        </a>
                                                    </p>
                                                    <div class="giatien">
                                                        @if ($project->price > 0)
                                                            <p>Giá từ:<span class="gia-tien">{{ $project->price }}
                                                                    {{ $project->value == 'ty' ? 'tỷ' : 'triệu' }}/{{ $project->unit == 'can' ? 'căn' : 'm2' }}</span>
                                                            </p>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="price-wrapper">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col div-no-padding small-12 large-12" style="text-align:center">
                    <div class="col-inner">
                        <div class="tittle-home">
                            <a href="{{ route('projects_page') }}">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            #section_1929750100 {
                padding-top: 30px;
                padding-bottom: 30px;
            }
        </style>
    </section>
@endif
