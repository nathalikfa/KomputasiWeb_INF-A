<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\HalController;
use Illuminate\Support\Facades\Route;

# Ini untuk home contact about (blade)
// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/new', [PageController::class, 'home'])->name('home');
// Route::get('/new/about', [PageController::class, 'about'])->name('about');
// Route::get('/new/contact', [PageController::class, 'contact'])->name('contact');

Route::get('/', function () {
    return view('home');
});

Route::get('/baru/home', [HalController::class, 'home'])->name('topmenu1_blade');
Route::get('/baru/about', [HalController::class, 'about'])->name('topmenu2_blade');
Route::get('/baru/contact', [HalController::class, 'contact'])->name('topmenu3_blade');