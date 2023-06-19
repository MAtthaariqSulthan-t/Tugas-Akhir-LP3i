<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// User
Route::get('/', function () {
    return view('user.pages.home');
});
Route::get('/layanan', function () {
    return view('user.pages.layanan');
});
Route::get('/list', function () {
    return view('user.pages.list');
});
// Admin
Route::get('/admin', function () {
    return view('admin.pages.dashboard');
});
Route::get('/admindevisi', function () {
    return view('admin.pages.devisis.list');
});
