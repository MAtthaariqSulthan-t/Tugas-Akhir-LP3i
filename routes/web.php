<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DevisiController;
use App\Http\Controllers\LogrequestController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\UserController;

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
Route::middleware(['guest'])->group(function () {
    Route::get('/', [SesiController::class, 'index'])->name('login');
    Route::post('/', [SesiController::class, 'login']);
});

Route::middleware(['auth'])->group(function () {
    //karyawan
    Route::get('/home', function () {
        return view('user.pages.home');
    });
    Route::resource('service', ServiceController::class);

    //admin
    Route::get('/admin', [DashboardController::class, 'index'])->middleware('userAkses:admin');
    Route::get('/export-pdf', [DashboardController::class, 'exportPdf'])->middleware('userAkses:admin');
    Route::resource('devisi', DevisiController::class)->middleware('userAkses:admin');
    Route::resource('request', RequestController::class)->middleware('userAkses:admin');
    Route::resource('logrequest', LogrequestController::class)->middleware('userAkses:admin');
    Route::resource('user', UserController::class)->middleware('userAkses:admin');

    Route::get('/logout', [SesiController::class, 'logout']);
});


// ->middleware('userAkses:karyawan')


























// Route::middleware(['auth'])->group(function () {
//     // Route::get('/admin', [AdminController::class, 'index']);
//     Route::get('/admin/admin', function () {
//         return view('admin.pages.dashboard');
//     })->middleware('userAkses:admin');

//     Route::get('/admin/karyawan', function () {
//         return view('user.pages.home');
//     })->middleware('userAkses:karyawan');

//     Route::get('/logout', [SesiController::class, 'logout']);



//     // Route::get('/', function () {
//     //     return view('user.pages.home');
//     // });

//     Route::get('/layanan', function () {
//         return view('user.pages.layanan');
//     });
//     Route::get('/list', function () {
//         return view('user.pages.list');
//     });

//     // Route::get('/devisi', [DevisiController::class, 'index'])->name('devisi');
//     Route::resource('devisi', DevisiController::class);
//     Route::resource('service', ServiceController::class);
//     Route::resource('request', RequestController::class);
//     Route::resource('logrequest', LogrequestController::class);
//     // Route::get('service/adminservice', [ServiceController::class, 'adminservice'])->name('service.adminservice');
//     // Route::get('service/webnotif', [ServiceController::class, 'webnotif'])->name('service.webnotif');
// });

// //logs
//     // Admin
//     // Route::get('/admin', function () {
//     //     return view('admin.pages.dashboard');
//     // });
