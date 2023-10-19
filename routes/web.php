<?php

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

Route::get('/', function () {
    return view('public.index');
})->name('home_page');

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

Route::get('/admin/login', function () {});

Route::prefix('/admin')->group( 
    function () {
        Route::get('/dashboard', function(){
            return view('admin.index');
        })->name('admin.dashboard');
    }
);
// ->middleware(['auth','user.role']);