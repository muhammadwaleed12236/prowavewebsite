<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes - Prowave Technologies Software House
|--------------------------------------------------------------------------
*/

Route::get('/', [SiteController::class, 'index'])->name('home');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.submit');
