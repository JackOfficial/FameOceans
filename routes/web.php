<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\SocialAuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\OurServiceController;
use Illuminate\Support\Facades\Route;

//Guest user routes
Route::get('/', function () {
    return view('index');
});

//Authenticated user routes
Route::middleware(['auth', 'verified', 'role:user'])->group(function () { 
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/partners', [PartnerController::class, 'partners'])->name('partners');
Route::get('/services', [OurServiceController::class, 'services'])->name('services');
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

// Social login routes
Route::get('/auth/google', [SocialAuthController::class, 'redirect']);
Route::get('/auth/google/callback', [SocialAuthController::class, 'callback']);

//Admin and super admin Routes
Route::middleware(['auth', 'role:admin|super-admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', fn() => 'Admin Dashboard')->name('admin.dashboard');

    Route::get('/', [AdminController::class, 'index'])->name('dashboard');
    Route::resource('categories', BlogCategoryController::class)->except(['show']);
    Route::resource('blogs', BlogController::class);

    // Route::resource('users', UsersController::class);
    Route::resource('partners', PartnerController::class);
    Route::resource('organization', OrganizationController::class);

    //Trash Management
    Route::get('categories-trash', [BlogCategoryController::class, 'trash'])
    ->name('categories.trash');

    Route::post('categories/{id}/restore', [BlogCategoryController::class, 'restore'])
    ->name('categories.restore');

    Route::delete('categories/{id}/force-delete', [BlogCategoryController::class, 'forceDelete'])
    ->name('categories.force-delete');

});

//Using permissions
Route::middleware(['permission:create posts'])->group(function () {
    // Route::get('/posts/create', ...);
});

//Using roles
Route::middleware(['role:admin'])->group(function () {
    // Route::get('/admin', ...);
});

//Multiple roles
Route::middleware(['role:admin|editor'])->group(function () {
    //
});

