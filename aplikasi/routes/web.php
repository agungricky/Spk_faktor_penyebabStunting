<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'website.index');
Route::get('/', [userController::class, 'index'])->name('Home');

Route::get('/Riwayat-posyandu', [userController::class, 'Riwayatposyandu']);
Route::get('/Riwayat-imunisasi', [userController::class, 'Riwayatimunisasi']);
Route::get('/Riwayat-kesehatan', [userController::class, 'Riwayatkesehatan']);
Route::get('/Data-anak', [userController::class, 'Dataanak']);
Route::get('/Analisa-Faktor-Stunting', [userController::class, 'Quisioner']);
Route::post('/Hasil-proses', [userController::class, 'store'])->name('proses');
Route::get('/hasil-solusi', [UserController::class, 'hasil'])->name('Hasil');


Route::get('/Admin', [AdminController::class, 'index']);
Route::get('/Data-Bidan', [AdminController::class, 'dataBidan'])->name('dataBidan');
Route::get('/Data-Kader', [AdminController::class, 'dataKader'])->name('dataKader');
Route::get('/Data-Pengguna', [AdminController::class, 'dataPengguna'])->name('dataPengguna');
Route::view('/FormBidan', 'website.Admin.formBidan');
Route::get('/Solusi', [AdminController::class, 'Solusi'])->name('Solusi');
Route::get('/Solusi/{id}', [AdminController::class, 'show'])->name('Solusi.show');