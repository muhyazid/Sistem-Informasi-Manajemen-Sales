<?php

use App\Http\Controllers\SearchController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\PelatihanController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\GajiController;
use App\Http\Controllers\TunjanganController;
use App\Http\Controllers\IjinController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// route report
Route::get('/report/sales', 'ReportController@sales')->name('report.sales');




// route unutk search
Route::get('/search', [SearchController::class, 'index'])->name('search');

// route dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

//route sales
Route::get('/sales', [SalesController::class, 'index']) ->name('sales.index');
Route::get('/sales/create', [SalesController::class, 'addView'])->name('sales.create');
Route::post('/sales', [SalesController::class, 'store']) -> name ('sales.store');
Route::get('/sales/edit/{id}', [SalesController::class, 'edit'])->name('sales.edit');
Route::put('/sales/update/{id}', [SalesController::class, 'update'])->name('sales.update');
Route::get('/sales/delete/{id}', [SalesController::class, 'destroy']);

//route absensi
Route::get('/absensi', [AbsensiController::class, 'index']) ->name('absensi.index');
Route::get('/absensi/create', [AbsensiController::class, 'addView'])->name('absensi.create');
Route::post('/absensi', [AbsensiController::class, 'store']) -> name ('absensi.store');
Route::get('/absensi/edit/{id}', [AbsensiController::class, 'edit'])->name('absensi.edit');
Route::put('/absensi/update/{id}', [AbsensiController::class, 'update'])->name('absensi.update');
Route::get('/absensi/delete/{id}', [AbsensiController::class, 'destroy']);

//route pelatihan
Route::get('/pelatihan', [PelatihanController::class, 'index']) ->name('pelatihan.index');
Route::get('/pelatihan/create', [PelatihanController::class, 'addView'])->name('pelatihan.create');
Route::post('/pelatihan', [PelatihanController::class, 'store']) -> name ('pelatihan.store');
Route::get('/pelatihan/edit/{id}', [PelatihanController::class, 'edit'])->name('pelatihan.edit');
Route::put('/pelatihan/update/{id}', [PelatihanController::class, 'update'])->name('pelatihan.update');
Route::get('/pelatihan/delete/{id}', [PelatihanController::class, 'destroy']);

//route pendidikan
Route::get('/pendidikan', [PendidikanController::class, 'index']) ->name('pendidikan.index');
Route::get('/pendidikan/create', [PendidikanController::class, 'addView'])->name('pendidikan.create');
Route::post('/pendidikan', [PendidikanController::class, 'store']) -> name ('pendidikan.store');
Route::get('/pendidikan/edit/{id}', [PendidikanController::class, 'edit'])->name('pendidikan.edit');
Route::put('/pendidikan/update/{id}', [PendidikanController::class, 'update'])->name('pendidikan.update');
Route::get('/pendidikan/delete/{id}', [PendidikanController::class, 'destroy']);


//route gaji
Route::get('/gaji', [GajiController::class, 'index']) ->name('gaji.index');
Route::get('/gaji/create', [GajiController::class, 'addView'])->name('gaji.create');
Route::post('/gaji', [GajiController::class, 'store']) -> name ('gaji.store');
Route::get('/gaji/edit/{id}', [GajiController::class, 'edit'])->name('gaji.edit');
Route::put('/gaji/update/{id}', [GajiController::class, 'update'])->name('gaji.update');
Route::get('/gaji/delete/{id}', [GajiController::class, 'destroy']);

//route tunjangan
Route::get('/tunjangan', [TunjanganController::class, 'index']) ->name('tunjangan.index');
Route::get('/tunjangan/create', [TunjanganController::class, 'addView'])->name('tunjangan.create');
Route::post('/tunjangan', [TunjanganController::class, 'store']) -> name ('tunjangan.store');
Route::get('/tunjangan/edit/{id}', [TunjanganController::class, 'edit'])->name('tunjangan.edit');
Route::put('/tunjangan/update/{id}', [TunjanganController::class, 'update'])->name('tunjangan.update');
Route::get('/tunjangan/delete/{id}', [TunjanganController::class, 'destroy']);

//route jenis ijin
Route::get('/ijin', [IjinController::class, 'index']) ->name('ijin.index');
Route::get('/ijin/create', [IjinController::class, 'addView'])->name('ijin.create');
Route::post('/ijin', [IjinController::class, 'store']) -> name ('ijin.store');
Route::get('/ijin/edit/{id}', [IjinController::class, 'edit'])->name('ijin.edit');
Route::put('/ijin/update/{id}', [IjinController::class, 'update'])->name('ijin.update');
Route::get('/ijin/delete/{id}', [IjinController::class, 'destroy']);

//route ijin
Route::get('/pengajuanijin', [PengajuanController::class, 'index']) ->name('pengajuanijin.index');
Route::get('/pengajuanijin/create', [PengajuanController::class, 'addView'])->name('pengajuanijin.create');
Route::post('/pengajuanijin', [PengajuanController::class, 'store']) -> name ('pengajuanijin.store');
Route::get('/pengajuanijin/edit/{id}', [PengajuanController::class, 'edit'])->name('pengajuanijin.edit');
Route::put('/pengajuanijin/update/{id}', [PengajuanController::class, 'update'])->name('pengajuanijin.update');
Route::get('/pengajuanijin/delete/{id}', [PengajuanController::class, 'destroy']);

// route landing page
Route::get('/started', function () {
    return view('started');
});



// routes untuk login
Auth::routes();
Route::get('/logout', [AuthenticatedSessionController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');