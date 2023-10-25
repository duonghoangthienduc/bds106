<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\FontendController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProjectController;
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
;

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
            Route::prefix('/project')->group(
                function () {
                    Route::get(
                        'add',
                        [ProjectController::class, 'create']
                    )->name('project.add');
                    Route::post(
                        'add',
                        [ProjectController::class, 'store']
                    );
                    Route::get(
                        'update/{project}/edit',
                        [ProjectController::class, 'edit']
                    )->name('project.update');
                    Route::put(
                        'update/{project}/edit',
                        [ProjectController::class, 'update']
                    );
                    Route::delete(
                        'remove',
                        [ProjectController::class, 'destroy']
                    )->name('project.delete');
                    Route::get(
                        '/',
                        [ProjectController::class, 'index']
                    )->name('project.list');
                }
            );
        }
    );
});