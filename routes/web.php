<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/mission', function () {
    return view('mission');
});

Route::get('/history', function () {
    return view('history');
});

Route::get('/what-we-offer', function () {
    return view('what-we-offer');
});

Route::get('/get-involved', function () {
    return view('get-involved');
});