<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController as ControllersUserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();


Route::get('/', [FrontEndController::class, 'index'])->name('front_end_index');

Route::get('/dashboard', [BackendController::class, 'index'])->name('backend_index')->middleware('auth');


// linking the sub menus  ( Front end Part ) 

Route::get('/choose_us', [FrontEndController::class, 'choose'])->name('choose_us');
Route::get('/contact_us', [FrontEndController::class, 'contact'])->name('contact_us');
Route::get('/pricing/all', [FrontEndController::class, 'pricing'])->name('pricing');
Route::get('/review_us', [FrontEndController::class, 'review_us'])->name('review_us');
Route::get('/services/all', [FrontEndController::class, 'services'])->name('services');
Route::get('/sitemap', [FrontEndController::class, 'sitemap'])->name('sitemap');

// Backend part start 


Route::post('/users', [ControllersUserController::class, 'store'])->name('users.store');


// Enquiry section
Route::get('/see/all_enquiry', [EnquiryController::class, 'index'])->name('inquiry_page_open');

Route::post('/enquiry', [EnquiryController::class, 'store'])->name('enquiry.store');

Route::get('/inquiries', [EnquiryController::class, 'enq_index']);

Route::get('/inquiries/read/{id}', [EnquiryController::class, 'markAsRead'])->name('inquiry.markAsRead');


// Review
Route::post('/submit-review', [ReviewController::class, 'store'])->name('review.store');

Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews.index');


// routes/web.php

// Custom route for form view (you named it logo.index)
Route::get('/logo/adding', [LogoController::class, 'index'])->name('logo.index');

// Resource route, but excluding index, store, and destroy to avoid conflict
Route::resource('logos', LogoController::class)->except(['index', 'store', 'destroy'])->middleware(['auth', 'is_admin']);

// Manually define store and destroy routes
Route::post('/logos', [LogoController::class, 'store'])->name('logos.store');
Route::delete('/logos/{id}', [LogoController::class, 'destroy'])->name('logos.destroy');

// Custom make-active route
Route::get('/logos/{id}/make-active', [LogoController::class, 'makeActive'])->name('logos.makeActive');




// Services
Route::resource('services', ServiceController::class)->middleware(['auth', 'is_admin']);

// Pricing 

Route::resource('pricing', PricingController::class)->middleware(['auth', 'is_admin']);;

// admin role 

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin-dashboard', [App\Http\Controllers\BackendController::class, 'index'])->name('dashboard');

    Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    
    Route::patch('/users/{id}/make-admin', [App\Http\Controllers\UserController::class, 'makeAdmin'])->name('users.makeAdmin');
    Route::get('/users/{id}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');
});

Route::get('/dashboard', function () {
    return redirect('/');
});


// Profile Section


Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/admin/profile/see_page', [AdminProfileController::class, 'index'])->name('admin_profile.index');

    Route::get('/admin/profile/edit', [AdminProfileController::class, 'edit'])->name('admin.profile.edit');

    Route::post('/admin/profile/update', [AdminProfileController::class, 'update'])->name('admin.profile.update');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// ✅ এই লাইনে register বন্ধ হবে:
Auth::routes(['register' => false]);