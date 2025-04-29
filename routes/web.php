<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\FrontEndController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();


Route::get('/', [FrontEndController::class, 'index'])->name('front_end_index');

Route::get('/dashboard', [BackendController::class, 'index'])->name('backend_index');
