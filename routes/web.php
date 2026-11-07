<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GetInvolvedController;
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

Route::get('/donate', function () {
    return view('donate');
});

Route::get('/board', function () {
    return view('board');
});

Route::get('/partners', function () {
    return view('partners');
});

Route::get('/get-involved', [GetInvolvedController::class, 'index']);
Route::post('/get-involved', [GetInvolvedController::class, 'store'])->middleware('throttle:5,1');

Route::get('/admin/login', [AdminController::class, 'loginForm']);
Route::post('/admin/login', [AdminController::class, 'login'])->middleware('throttle:5,1');
Route::post('/admin/logout', [AdminController::class, 'logout']);
Route::get('/admin', [AdminController::class, 'dashboard']);
Route::post('/admin/events', [AdminController::class, 'storeEvent']);
Route::delete('/admin/events/{event}', [AdminController::class, 'deleteEvent']);
Route::delete('/admin/volunteers/{volunteer}', [AdminController::class, 'deleteVolunteer']);
