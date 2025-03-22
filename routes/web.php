<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

// Route Welcome
Route::get('/', [WelcomeController::class,'index']);
// Route User
Route::group(['prefix' => 'user'], function () {
    Route::get("/", [UserController::class, "index"]);  // menampilkan halaman awal user
    Route::post("/list", [UserController::class, "list"]);  // menampilkan data user dalam bentuk json untuk datatables
    Route::get("/create", [UserController::class, "create"]);  // menampilkan halaman form tambah user
    Route::post("/", [UserController::class, "store"]);  // menyimpan data user baru
    Route::get("/{id}", [UserController::class, "show"]);  // menampilkan detail user
    Route::get("/{id}/edit", [UserController::class, "edit"]);  // menampilkan halaman form edit user
    Route::put("/{id}", [UserController::class, "update"]);  // menyimpan perubahan data user
    Route::delete("/{id}", [UserController::class, "destroy"]);  // menghapus data user
});

// Route Hapus
Route::delete('/{id}', [UserController::class, 'destroy']);

// Route::get('/', function () {
//     return view('welcome');
// });

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

