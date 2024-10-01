<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\KlinikController;
use App\Http\Controllers\DokterController;

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

// Landing Page
Route::get('/', [LandingPageController::class, 'show_landingpage'])->name('landingpage2');
Route::get('/klinik', [LandingPageController::class, 'show_klinik'])->name('landingpage2.klinik');
Route::get('/galeri', [LandingPageController::class, 'show_galeri'])->name('landingpage2.galeri');
Route::get('/pelayanan', [LandingPageController::class, 'show_pelayanan'])->name('landingpage2.pelayanan');
Route::get('/kontak', [LandingPageController::class, 'show_kontak'])->name('landingpage2.kontak');

// Login
Route::get('/login/admin', [LoginController::class, 'showLoginFormAdmin'])->name('loginAdmin');
Route::post('/login/admin', [LoginController::class, 'loginAdmin']);
Route::get('/login/klinik', [LoginController::class, 'showLoginFormKlinik'])->name('loginKlinik');
Route::post('/login/klinik', [LoginController::class, 'loginKlinik']);
Route::get('/login/dokter', [LoginController::class, 'showLoginFormDokter'])->name('loginDokter');
Route::post('/login/dokter', [LoginController::class, 'loginDokter']);
Route::get('/login/petowner', [LoginController::class, 'showLoginFormPetOwner'])->name('loginPetOwner');
Route::post('/login/petowner', [LoginController::class, 'loginPetOwner']);

// Logout
Route::post('/logout/admin', [LogoutController::class, 'logoutAdmin'])->name('logoutAdmin');
Route::post('/logout/dokter', [LogoutController::class, 'logoutDokter'])->name('logoutDokter');
Route::post('/logout/klinik', [LogoutController::class, 'logoutKlinik'])->name('logoutKlinik');
Route::post('/logout/petowner', [LogoutController::class, 'logoutPetOwner'])->name('logoutPetOwner');

// Register
Route::get('/register/klinik', [RegisterController::class, 'showRegistrationFormKlinik'])->name('register_klinik');
Route::post('/register/klinik', [RegisterController::class, 'registerKlinik']);
Route::get('/register/petowner', [RegisterController::class, 'showRegistrationFormPetOwner'])->name('register_petowner');
Route::post('/register/petowner', [RegisterController::class, 'registerPetOwner']);
Route::get('/register/dokter', [RegisterController::class, 'showRegistrationFormDokter'])->name('register_dokter');
Route::post('/register/dokter', [RegisterController::class, 'registerDokter']);

// Dashboard
Route::get('/dashboard_admin', [DashboardController::class, 'dashboard_admin'])->name('dashboard_admin');
Route::get('/dashboard_petowner', [DashboardController::class, 'dashboard_petowner'])->name('dashboard_petowner');
Route::get('/dashboard_klinik', [DashboardController::class, 'dashboard_klinik'])->name('dashboard_klinik');
Route::get('/dashboard_dokter', [DashboardController::class, 'dashboard_dokter'])->name('dashboard_dokter');

//klinik
Route::get('/klinik/create', [KlinikController::class, 'create'])->name('klinik.create');
Route::get('/klinik/{id}/show', [KlinikController::class, 'show'])->name('klinik.show');
Route::post('/klinik', [KlinikController::class, 'store'])->name('klinik.store');
Route::get('/klinik/{id}/edit', [KlinikController::class, 'edit'])->name('klinik.edit');
Route::put('/klinik/{id}', [KlinikController::class, 'update'])->name('klinik.update');
Route::delete('/klinik/{id}', [KlinikController::class, 'destroy'])->name('klinik.destroy');
Route::get('/klinik/find', [KlinikController::class, 'find'])->name('klinik.find');

//dokter
Route::get('/dokter/create', [DokterController::class, 'create'])->name('dokter.create');
Route::get('/dokter/{id}/show', [DokterController::class, 'show'])->name('dokter.show');
Route::post('/dokter/store', [DokterController::class, 'store'])->name('dokter.store');
Route::get('/dokter/{id}/edit', [DokterController::class, 'edit'])->name('dokter.edit');
Route::put('/dokter/{id}', [DokterController::class, 'update'])->name('dokter.update');
Route::delete('/dokter/{id}', [DokterController::class, 'destroy'])->name('dokter.destroy');
Route::get('/dokter/find', [DokterController::class, 'find'])->name('dokter.find');
Route::get('/dokter', [DokterController::class, 'index'])->name('dokter.index');

//review
use App\Http\Controllers\ReviewController;

// Rute untuk menampilkan profil klinik dengan review
Route::get('/review/{id}', [ReviewController::class, 'show'])->name('reviews.show');

// Rute untuk menyimpan review
Route::post('/klinik/{id}/review', [ReviewController::class, 'store'])->name('reviews.store');

//reservasi
use App\Http\Controllers\ReservasiController;

    Route::get('/reservasi/create', [ReservasiController::class, 'create'])->name('reservasi.create');
    Route::post('/reservasi', [ReservasiController::class, 'store'])->name('reservasi.store');
    Route::get('/reservasi/riwayat', [ReservasiController::class, 'riwayatJanjiTemu'])->name('reservasi.riwayat');
    Route::get('/reservasi/{reservasi}/edit', [ReservasiController::class, 'edit'])->name('reservasi.edit');
    Route::put('/reservasi/{reservasi}', [ReservasiController::class, 'update'])->name('reservasi.update');
    Route::delete('/reservasi/{reservasi}', [ReservasiController::class, 'destroy'])->name('reservasi.destroy');



