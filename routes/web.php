<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/level', [levelController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);

// Route untuk User
Route::get('/user', [UserController::class, 'index']);

// Route tambah data
Route::get('/user/tambah', [UserController::class, 'tambah']);

// Route tambah_simpan
Route::post('user/tambah_simpan', [UserController::class, 'tambah_simpan']);

// Route ubah
Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);

// Route ubah_simpan
Route::put('user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);

// Route delete
Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);