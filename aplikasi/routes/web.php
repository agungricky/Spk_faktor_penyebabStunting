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


Route::get('/Admin', [AdminController::class, 'index']);
Route::get('/Data-imunisasi', [AdminController::class, 'imunisasi']);

Route::view('/Lingkungan', 'website.solusi.Lingkungan');
