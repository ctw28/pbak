<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesertaController;

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

Route::get('/pbak/{gelombang}', [PesertaController::class, 'index']);
Route::get('/pbak/{gelombang}/sinkron', [PesertaController::class, 'sinkron']);
Route::get('/peserta-pbak/kelompok/{kelompokId}', [PesertaController::class, 'peserta']);