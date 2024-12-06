<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KreditController;
use App\Http\Controllers\AngsuranController;
use App\Http\Controllers\DendaController;

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

Route::get('/kredit', [KreditController::class, 'kredit'])->name('kredit');
Route::post('/kredit/hitung', [KreditController::class, 'hitung'])->name('kredit.hitung');

Route::get('/angsuran', [AngsuranController::class, 'angsuran'])->name('angsuran');
Route::post('/angsuran/hitung', [AngsuranController::class, 'hitung'])->name('angsuran.hitung');

Route::get('/denda', [DendaController::class, 'denda'])->name('denda');
Route::post('/denda/hitung', [DendaController::class, 'hitung'])->name('denda.hitung');
