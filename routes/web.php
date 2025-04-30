<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\ReviewController;
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

// Backend part start 


// Enquiry section
Route::get('/see/all_enquiry', [EnquiryController::class, 'index'])->name('inquiry_page_open');

Route::post('/enquiry', [EnquiryController::class, 'store'])->name('enquiry.store');

Route::get('/inquiries', [EnquiryController::class, 'enq_index']);

Route::get('/inquiries/read/{id}', [EnquiryController::class, 'markAsRead'])->name('inquiry.markAsRead');


// Review
Route::post('/submit-review', [ReviewController::class, 'store'])->name('review.store');

Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews.index');

