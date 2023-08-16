<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\APIController;
use App\Http\Controllers\PesertaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('throttle:10000,60')->group(function () {
    // Route::get('/api/example', 'ExampleController@index');
    Route::post('/sinkron', [APIController::class, 'sinkron'])->name('sinkron');
});

Route::get('/pbak/{gelombang}/kelompok/{id}/peserta', [PesertaController::class, 'kelompokPeserta'])->name('kelompok.peserta');

Route::post('/peserta/simpan', [PesertaController::class, 'store'])->name('peserta.store');
Route::get('/peserta/hapus/{id}', [PesertaController::class, 'destroy'])->name('peserta.destroy');
