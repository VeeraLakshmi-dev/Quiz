<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Admin Auth Routes
Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login']);
Route::get('/admin/register', [AdminAuthController::class, 'showRegister'])->name('admin.register');
Route::post('/admin/register', [AdminAuthController::class, 'register']);
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminAuthController::class, 'dashboard'])->name('admin.dashboard');
});

Route::get('/dashboard', function () {
    return redirect()->route('quiz');
})->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Quiz routes for normal users
Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/quiz', [QuizController::class, 'show'])->name('quiz');
    Route::post('/quiz/submit', [QuizController::class, 'submit'])->name('quiz.submit');
});

// Thank you and submitted pages
Route::get('/thank-you', function () {
    return view('thank-you');
})->name('thank-you');

Route::get('/submitted', function () {
    return view('submitted');
})->name('submitted');

Route::get('/quiz/timeout', [QuizController::class, 'timeout'])->name('quiz.timeout');

require __DIR__.'/auth.php';
