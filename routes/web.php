<?php

use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckRole;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('client/pages/welcome');
})->name('welcome')->middleware([CheckRole::class]);

Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
Route::get('/homepage', [UserController::class, 'index'])->name('homepage');

// Nhóm route cho profile yêu cầu phải đăng nhập
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route cho Google Auth
Route::get('auth/google', [GoogleAuthController::class, 'redirect'])->name('google-auth');
Route::get('auth/google/call-back', [GoogleAuthController::class, 'callbackGoogle']);


require __DIR__.'/auth.php';
