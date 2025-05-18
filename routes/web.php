<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/resume', [HomeController::class, 'resume'])->name('resume');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [AdminController::class,'index'])->name('dashboard');
    Route::get('/profile', [AdminController::class,'edit'])->name('profile');
    Route::put('/profile/{user}', [AdminController::class,'update']);
    Route::get('/slider', [AdminController::class,'slider'])->name('slider');
    Route::put('/slider', [AdminController::class,'storeSlider'])->name('slider.store');
    Route::put('/slider/{id}', [AdminController::class,'updateSlider'])->name('slider.update');
    Route::delete('/slider/{id}', [AdminController::class,'destroySlider'])->name('slider.destroy');
});
