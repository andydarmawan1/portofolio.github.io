<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

// Route::get('/', function () {
//     return view('welcome');
// });

// baris kode lain
Route::get('/',[MahasiswaController::class,'home']);

// Route::resource('mahasiswa', MahasiswaController::class);
