<?php

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
