<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('siswa.index');
});
Route::resource('siswa', SiswaController::class);
Route::get('/', [SiswaController::class, 'index']);