<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\ParamedikController;
use App\Http\Controllers\PeriksaController;
use App\Http\Controllers\kelurahanController;
use App\Http\Controllers\unit_kerjaController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salam', function () {
    return "Hai, Saya Hanna Anggraini siap belajar Laravel 11";
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/pasien', function () {
    return view('pasien');
});

Route::get('/admin', [AdminController::class, 'index']);

Route::get('/pasien', [PasienController::class, 'index']);

Route::get('/paramedik', [ParamedikController::class, 'index']);

Route::get('/periksa', [PeriksaController::class, 'index']);

Route::get('/kelurahan', [kelurahanController::class, 'index']);

Route::get('/unit_kerja', [unit_kerjaController::class, 'index']);

Route::get('/pasien/index', [PasienController::class, 'index'])->name('pasien.index');
Route::get('/pasien/create', [PasienController::class, 'create'])->name('pasien.create');
Route::post('/pasien/store', [PasienController::class, 'store'])->name('pasien.store');
Route::get('/pasien/{id}/edit', [PasienController::class, 'edit'])->name('pasien.edit');
Route::delete('/pasien/{id}', [PasienController::class, 'destroy'])->name('pasien.destroy');
Route::get('/pasien/{id}', [PasienController::class, 'view'])->name('pasien.view');

Route::get('/paramedik/index', [paramedikController::class, 'index'])->name('paramedik.index');
Route::get('/paramedik/create', [paramedikController::class, 'create'])->name('paramedik.create');
Route::post('/paramedik/store', [paramedikController::class, 'store'])->name('paramedik.store');
Route::get('/paramedik/{id}/edit', [paramedikController::class, 'edit'])->name('paramedik.edit');
Route::delete('/paramedik/{id}', [paramedikController::class, 'destroy'])->name('paramedik.destroy');
Route::get('/paramedik/{id}', [paramedikController::class, 'view'])->name('paramedik.view');

Route::get('/periksa/index', [periksaController::class, 'index'])->name('periksa.index');
Route::get('/periksa/create', [periksaController::class, 'create'])->name('periksa.create');
Route::post('/periksa/store', [periksaController::class, 'store'])->name('periksa.store');
Route::get('/periksa/{id}/edit', [periksaController::class, 'edit'])->name('periksa.edit');
Route::delete('/periksa/{id}', [periksaController::class, 'destroy'])->name('periksa.destroy');
Route::get('/periksa/{id}', [periksaController::class, 'view'])->name('periksa.view');

Route::get('/kelurahan/index', [kelurahanController::class, 'index'])->name('kelurahan.index');
Route::get('/kelurahan/create', [kelurahanController::class, 'create'])->name('kelurahan.create');
Route::post('/kelurahan/store', [kelurahanController::class, 'store'])->name('kelurahan.store');
Route::get('/kelurahan/{id}/edit', [kelurahanController::class, 'edit'])->name('kelurahan.edit');
Route::delete('/kelurahan/{id}', [kelurahanController::class, 'destroy'])->name('kelurahan.destroy');
Route::get('/kelurahan/{id}', [kelurahanController::class, 'view'])->name('kelurahan.view');

Route::get('/unit_kerja/index', [unit_kerjaController::class, 'index'])->name('unit_kerja.index');
Route::get('/unit_kerja/create', [unit_kerjaController::class, 'create'])->name('unit_kerja.create');
Route::post('/unit_kerja/store', [unit_kerjaController::class, 'store'])->name('unit_kerja.store');
Route::get('/unit_kerja/{id}/edit', [unit_kerjaController::class, 'edit'])->name('unit_kerja.edit');
Route::delete('/unit_kerja/{id}', [unit_kerjaController::class, 'destroy'])->name('unit_kerja.destroy');
Route::get('/unit_kerja/{id}', [unit_kerjaController::class, 'view'])->name('unit_kerja.view');