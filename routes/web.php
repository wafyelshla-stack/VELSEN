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
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// Protected Admin Dashboard Routes
Route::middleware(function ($request, $next) {
    if (! session('admin_authenticated')) {
        return redirect()->route('admin.login');
    }

    return $next($request);
})->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::post('/update', [AdminController::class, 'update'])->name('admin.update');
});
