<?php

namespace App\Providers;

use App\View\Components\Alert;
use App\View\Components\PostItem;
use App\View\Components\RelatedPost;
use App\View\Composers\BannerCarousel;
use App\View\Composers\CategoryDropDownMenu;
use App\View\Composers\CategoryMenu;
use App\View\Composers\LoveListProduct;
use App\View\Composers\RecentProduct;
use Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::component('alert', Alert::class);
        Blade::component('post_item', PostItem::class);
        Blade::component('related_post', RelatedPost::class);
    }
}
