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
})->name('home-page');

Route::get('/gioi-thieu', function () {
    return view('public.pages.introduce');
})->name('introduce-page');

Route::get('/du-an', function () {
    return view('public.pages.projects');
})->name('projects-page');

Route::get('/linh-vuc-hoat-dong', function () {
    return view('public.pages.fieldOfActivity');
})->name('fieldOfActivity-page');

Route::get('/tuyen-dung', function () {
    return view('public.pages.recruitment');
})->name('recruitment-page');

Route::get('/lien-he', function () {
    return view('public.pages.contact');
})->name('contact-page');
