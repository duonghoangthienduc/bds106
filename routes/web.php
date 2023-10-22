<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\FontendController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [FontendController::class, 'getHomeView'])->name('home_page');

Route::get('/gioi-thieu', function () {
    return view('public.pages.introduce');
})->name('introduce_page');

Route::get('/du-an', function () {
    return view('public.pages.projects');
})->name('projects_page');

Route::get('/linh-vuc-hoat-dong', function () {
    return view('public.pages.field-of-activity');
})->name('field_of_activity_page');

Route::get('/tuyen-dung', function () {
    return view('public.pages.recruitment');
})->name('recruitment_page');

Route::get('/lien-he', function () {
    return view('public.pages.contact');
})->name('contact_page');

Route::get('/tin-tuc', function () {
    return view('public.pages.news');
})->name('news_page');

Route::middleware(['user.hasLogin'])->group(function () {
    Route::get('/login', [LoginController::class ,'index'])->name('admin.login');
    Route::post('/login', [LoginController::class ,'store']);
});

Route::middleware(['user.role'])->group(function () {
    Route::prefix('/admin')->group( 
        function () {
            Route::get('/logout', [LoginController::class, 'logOut'])->name('admin.logout');
            Route::get('/dashboard', function(){
                return view('admin.index');
            })->name('admin.dashboard');
            Route::prefix('/banner')
                    ->group(function () {
                        Route::get(
                            'add',
                            [BannerController::class, 'create']
                        )->name('banner.add');
                        Route::post(
                            'add',
                            [BannerController::class, 'store']
                        );
                        Route::get(
                            'update/{banner}/edit',
                            [BannerController::class, 'edit']
                        )->name('banner.update');
                        Route::put(
                            'update/{banner}/edit',
                            [BannerController::class, 'update']
                        );
                        Route::delete(
                            'remove',
                            [BannerController::class, 'destroy']
                        )->name('banner.delete');
                        Route::get(
                            '/',
                            [BannerController::class, 'index']
                        )->name('banner.list');
                    });
        }
    );
});