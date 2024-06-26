<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $data = ['nama' => "maman", 'foto' => "m4n.jpg"];
    return view('dashboard', compact('data'));
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

Route::get('/prodi', [ProdiController::class, 'index']);
Route::get('/prodi/create', [ProdiController::class, 'create']);