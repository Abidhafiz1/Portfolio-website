<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/', [SiteController::class, 'homepage'])->name('home');
Route::get('/about', [SiteController::class, 'aboutPage'])->name('about');
Route::get('/Services', [SiteController::class, 'ServicesPage'])->name('Services');
Route::get('/contact', [SiteController::class, 'contactPage'])->name('contact');
Route::get('/portfolio', [SiteController::class, 'portfolioPage'])->name('portfolio');
