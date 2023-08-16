<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\LoginController;

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

Route::get('/', [LoginController::class, 'index'])->name('index');

Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/pbak/{gelombang}', [PesertaController::class, 'index']);
Route::get('/pbak/{gelombang}/sinkron', [PesertaController::class, 'sinkron']);
Route::get('/pbak/{gelombang}/import', [PesertaController::class, 'import']);
Route::get('/peserta-pbak/kelompok/{kelompokId}', [PesertaController::class, 'peserta']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/peserta/dashboard', [PesertaController::class, 'dashboard'])->name('mahasiswa.dashboard');
    Route::get('/peserta/rundown-dan-absensi', [PesertaController::class, 'rundown'])->name('mahasiswa.rundown.absensi');
});
