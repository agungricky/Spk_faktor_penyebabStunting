<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Auth;
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

// =================== Proses Authentikasi User =======================//
route::redirect('/', 'login');
Route::get('/login', [AuthController::class, 'Login'])->name('login');
Route::view('/login', 'website.Login.Login');
Route::post('/login', [AuthController::class, 'Authenticate'])->name('proses-Login');

Route::get('/Register', [AuthController::class, 'Register'])->name('Register');
Route::post('/proses-Register', [AuthController::class, 'proses_Register'])->name('proses_Register');

Route::get('/logout', [AuthController::class, 'Logout']);

Route::fallback(function () {
    return view('website.Login.error');
});

// =================== Proses Authentikasi User =======================//


Route::middleware(['auth'])->group(function () {
    
    //Dashboar User
    Route::get('/user', [userController::class, 'index'])->name('Home');

    //Dasbord Admin
    Route::get('/Admin', [AdminController::class, 'index']);

    // =================== Proses AI =======================//
    Route::get('/Analisa-Faktor-Stunting', [userController::class, 'Quisioner']);
    Route::post('/Hasil-proses', [userController::class, 'store'])->name('proses');
    Route::get('/hasil-solusi', [UserController::class, 'hasil'])->name('Hasil');
    Route::get('/Riwayat-kesehatan', [userController::class, 'Riwayatkesehatan']);
    // =================== Proses AI =======================//


    // =================== Data Solusi =======================//
    Route::get('/Solusi', [AdminController::class, 'Solusi'])->name('Solusi');
    Route::get('/Solusi/{id}', [AdminController::class, 'show']);
    Route::get('/Edit/{id}', [AdminController::class, 'edit']);
    Route::patch('/update/{id}', [AdminController::class, 'update'])->name('update');
    Route::delete('/hapus/{id}', [AdminController::class, 'destroy'])->name('delete');
    // =================== Data Solusi =======================//


    // =================== Data Akun =======================//
    Route::get('/Data-Bidan', [AdminController::class, 'dataBidan']);
    Route::get('/Data-Kader', [AdminController::class, 'dataKader']);
    Route::get('/Data-Pengguna', [AdminController::class, 'dataPengguna']);
    Route::get('/Chart', [AdminController::class, 'Chart']);


    Route::get('/Form/Bidan', [AdminController::class, 'create_Bidan']);
    Route::get('/Form/Kader', [AdminController::class, 'create_Kader']);

    Route::get('/Edit_Akun/{id}', [AdminController::class, 'edit_Akun'])->name('Edit_Akun');
    Route::post('/Input-Akun', [AdminController::class, 'store'])->name('input');
    Route::get('Edit-Profile/{iddataPengguna}/{Akun_idAkun}', [userController::class, 'Editprofile']);
    Route::patch('/updateProfile/{iddataPengguna}/{Akun_idAkun}', [userController::class, 'updateProfile'])->name('updateProfile');
    Route::patch('/update_Akun/{id}', [AdminController::class, 'update_Akun'])->name('Update_Akun');
    Route::delete('/hapus_Akun/{id}', [AdminController::class, 'destroy_Akun'])->name('Hapus_Akun');
    // =================== Data Akun =======================//


    // =================== Data Pengguna =======================//
    Route::get('/Pengguna', [AdminController::class, 'Pengguna']);
    Route::delete('/hapus_Pengguna/{id}', [AdminController::class, 'destroy_Pengguna'])->name('Hapus');
    // =================== Data Pengguna =======================//
});
