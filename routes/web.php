<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\OurServiceController;
use App\Http\Controllers\SocialLoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('index');
});

Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/partners', [PartnerController::class, 'partners'])->name('partners');
Route::get('/services', [OurServiceController::class, 'services'])->name('services');
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

// Social login routes
Route::get('/auth/redirect/{provider}', [SocialLoginController::class, 'redirect']);
Route::get('/auth/callback/{provider}', [SocialLoginController::class, 'callback']);

//Admin and super admin Routes
Route::middleware(['auth', 'role:admin|super-admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', fn() => 'Admin Dashboard')->name('admin.dashboard');

    Route::get('/', [AdminController::class, 'index'])->name('dashboard');

    Route::resource('blogs', BlogController::class);

    // Route::resource('users', UsersController::class);
    Route::resource('partners', PartnerController::class);
    Route::resource('organization', OrganizationController::class);

});