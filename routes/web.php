<?php

use App\Http\Controllers\AjaxController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FontendController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SettingController;
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

Route::get('/co-cau-to-chuc', function () {
    return view('public.pages.introduce');
})->name('introduce_page');

Route::get(
    '/du-an',
    [FontendController::class, 'getProjectView']
)->name('projects_page');

Route::get(
    '/du-an/orderby',
    [FontendController::class, 'projectOrderBy']
)->name('orderby_project');

Route::get(
    '/du-an/{slug}',
    [FontendController::class, 'projectDetail']
)->name('project_detail');

Route::get('/lien-he', function () {
    return view('public.pages.contact');
})->name('contact_page');

Route::get(
    '/chuyen-muc/{slug}',
    [FontendController::class, 'getPostWithCategory']
)->name('public.post');

Route::get(
    '/bai-viet/{slug}',
    [FontendController::class, 'getPostView']
)->name('public.post_detail');

// Route::get('/danh-sach-hoi-vien', 
//     [FontendController::class, 'getListMember']
// )->name('member_page');

Route::post('/customer/store', [AjaxController::class, 'storeCustomer'])->name('ajax.store-customer');

Route::middleware(['user.hasLogin'])->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('admin.login');
    Route::post('/login', [LoginController::class, 'store']);
});

Route::middleware(['user.role'])->group(function () {
    Route::prefix('/admin')->group(
        function () {
            Route::get('/logout', [LoginController::class, 'logOut'])->name('admin.logout');
            Route::get('/dashboard', function () {
                return view('admin.index');
            })->name('admin.dashboard');
            Route::prefix('/banner')->group(
                function () {
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
                }
            );
            Route::prefix('/post')->group(
                function () {
                    Route::get(
                        'add',
                        [PostController::class, 'create']
                    )->name('post.add');
                    Route::post(
                        'add',
                        [PostController::class, 'store']
                    );
                    Route::get(
                        'update/{post}/edit',
                        [PostController::class, 'edit']
                    )->name('post.update');
                    Route::put(
                        'update/{post}/edit',
                        [PostController::class, 'update']
                    );
                    Route::delete(
                        'remove',
                        [PostController::class, 'destroy']
                    )->name('post.delete');
                    Route::get(
                        '/',
                        [PostController::class, 'index']
                    )->name('post.list');
                }
            );
            // Route::prefix('/project')->group(
            //     function () {
            //         Route::get(
            //             'add',
            //             [ProjectController::class, 'create']
            //         )->name('project.add');
            //         Route::post(
            //             'add',
            //             [ProjectController::class, 'store']
            //         );
            //         Route::get(
            //             'update/{project}/edit',
            //             [ProjectController::class, 'edit']
            //         )->name('project.update');
            //         Route::put(
            //             'update/{project}/edit',
            //             [ProjectController::class, 'update']
            //         );
            //         Route::delete(
            //             'remove',
            //             [ProjectController::class, 'destroy']
            //         )->name('project.delete');
            //         Route::get(
            //             '/',
            //             [ProjectController::class, 'index']
            //         )->name('project.list');
            //     }
            // );
            Route::prefix('/customer')->group(
                function () {
                    Route::get(
                        'update/{customer}/edit',
                        [CustomerController::class, 'edit']
                    )->name('customer.update');
                    Route::put(
                        'update/{customer}/edit',
                        [CustomerController::class, 'update']
                    );
                    Route::delete(
                        'remove',
                        [CustomerController::class, 'destroy']
                    )->name('customer.delete');
                    Route::get(
                        '/',
                        [CustomerController::class, 'index']
                    )->name('customer.list');
                }
            );
            Route::prefix('/setting')->group(function () {
                Route::get(
                    '/',
                    [SettingController::class, 'index']
                )->name('setting.list');
            });
            Route::prefix('/member')->group(
                function () {
                    Route::get(
                        'add',
                        [MemberController::class, 'create']
                    )->name('member.add');
                    Route::post(
                        'add',
                        [MemberController::class, 'store']
                    );
                    Route::get(
                        'update/{member}/edit',
                        [MemberController::class, 'edit']
                    )->name('member.update');
                    Route::put(
                        'update/{member}/edit',
                        [MemberController::class, 'update']
                    );
                    Route::delete(
                        'remove',
                        [MemberController::class, 'destroy']
                    )->name('member.delete');
                    Route::get(
                        '/',
                        [MemberController::class, 'index']
                    )->name('member.list');
                }
            );
        }
    );
});

Route::any('/ckfinder/connector', '\CKSource\CKFinderBridge\Controller\CKFinderController@requestAction')
    ->name('ckfinder_connector');

Route::any('/ckfinder/browser', '\CKSource\CKFinderBridge\Controller\CKFinderController@browserAction')
    ->name('ckfinder_browser');