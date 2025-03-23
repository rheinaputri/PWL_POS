<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

// Route Welcome
Route::get('/', [WelcomeController::class, 'index']);
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

// Route Level
Route::group(['prefix' => 'level'], function () {
    Route::get('/', [LevelController::class, 'index'])->name('level.index');
    Route::get('/list', [LevelController::class, 'list'])->name('level.list');
    Route::get('/create', [LevelController::class, 'create'])->name('level.create');
    Route::post("/", [LevelController::class, "store"])->name('level.store');;
    Route::get('/{id}', [LevelController::class, 'show'])->name('level.show');
    Route::get('/{id}/edit', [LevelController::class, 'edit']);
    Route::put('/{id}', [LevelController::class, 'update']);
    Route::delete("/{id}", [LevelController::class, "destroy"]);
});

// Route Kategori
Route::group(['prefix' => 'kategori'], function () {
    Route::get('/', [KategoriController::class, 'index'])->name('kategori.index');
    Route::get('/list', [KategoriController::class, 'list'])->name('kategori.list');
    Route::get('/create', [KategoriController::class, 'create'])->name('kategori.create');
    Route::post("/", [KategoriController::class, "store"])->name('kategori.store');;
    Route::get('/{id}', [KategoriController::class, 'show'])->name('level.show');
    Route::get('/{id}/edit', [KategoriController::class, 'edit']);
    Route::put('/{id}', [KategoriController::class, 'update']);
    Route::delete("/{id}", [KategoriController::class, "destroy"]);
});

Route::group(['prefix' => 'barang'], function () {
    Route::get('/', [BarangController::class, 'index'])->name('barang.index');
    Route::get('/list', [BarangController::class, 'list'])->name('barang.list');
    Route::get('/create', [BarangController::class, 'create'])->name('barang.create');
    Route::post('/', [BarangController::class, 'store'])->name('barang.store');
    Route::get('/{id}', [BarangController::class, 'show'])->name('barang.show');
    Route::get('/{id}/edit', [BarangController::class, 'edit'])->name('barang.edit');
    Route::put('/{id}', [BarangController::class, 'update'])->name('barang.update');
    Route::delete('/{id}', [BarangController::class, 'destroy'])->name('barang.destroy');
});

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/level', [levelController::class, 'index']);
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
