<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/servicii', function () {
    return view('services-page');
});

Route::get('/despre-noi', function () {
    return view('about');
});

// Admin Authentication Routes
Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');

Route::middleware(['admin'])->group(function () {
    Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

    Route::prefix('admin')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
        Route::post('/update', [AdminController::class, 'update'])->name('admin.update');
    });
});

// Alias admin routes so the admin panel is also reachable at /veslen1213
Route::get('/veslen1213/login', [AdminController::class, 'showLogin'])->name('admin.login.alias');
Route::post('/veslen1213/login', [AdminController::class, 'login'])->name('admin.login.submit.alias');

Route::middleware(['admin'])->group(function () {
    Route::post('/veslen1213/logout', [AdminController::class, 'logout'])->name('admin.logout.alias');

    Route::prefix('veslen1213')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard.alias');
        Route::post('/update', [AdminController::class, 'update'])->name('admin.update.alias');
    });
});
