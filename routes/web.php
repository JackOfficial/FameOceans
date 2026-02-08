<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ServiceContoller;

Route::get('/', function () {
    return view('index');
});

Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/partners', [PartnerController::class, 'partners'])->name('partners');
Route::get('/services', [ServiceContoller::class, 'services'])->name('services');
