<?php

use Illuminate\Support\Facades\Route;
// import controller
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\Admin\ArtikelController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sesi-2', function () {
    return view('belajar', [
        'topik'     => 'Pengenalan View Dan Route', 
        'tanggal'   => '2023/08/01'
    ]);
});

// route untuk home controller
Route::get('/sesi-3', [HomeController::class, 'index']);
Route::get('/belajar', [HomeController::class, 'belajar']);
Route::get('/belajar2', [HomeController::class, 'belajar2']);

// route untuk dashbord controller
Route::resource('dashbord', DashbordController::class);

// route untuk artikel controller
Route::resource('/admin/artikel', ArtikelController::class);

