<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/new', [PageController::class, 'home'])->name('home');
Route::get('/new/about', [PageController::class, 'about'])->name('about');
Route::get('/new/contact', [PageController::class, 'contact'])->name('contact');