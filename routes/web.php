<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\FrontEndController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();


Route::get('/', [FrontEndController::class, 'index'])->name('front_end_index');

Route::get('/dashboard', [BackendController::class, 'index'])->name('backend_index');


// linking the sub menus  ( Front end Part ) 

Route::get('/choose_us', [FrontEndController::class, 'choose'])->name('choose_us');
Route::get('/contact_us', [FrontEndController::class, 'contact'])->name('contact_us');
Route::get('/pricing', [FrontEndController::class, 'pricing'])->name('pricing');
Route::get('/review_us', [FrontEndController::class, 'review_us'])->name('review_us');
Route::get('/services', [FrontEndController::class, 'services'])->name('services');
Route::get('/sitemap', [FrontEndController::class, 'sitemap'])->name('sitemap');
