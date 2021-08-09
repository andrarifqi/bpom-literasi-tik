<?php

use App\Http\Middleware\cek_login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResponseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HighChartController;
use App\Http\Controllers\KuisionerController;
use App\Http\Controllers\ResponKepuasanController;
use App\Http\Controllers\KuisionerKepuasanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(["middleware" => "guest"], function () {
    Route::get('/', function () {
        return view('users.login');
    });

    //Login
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::POST('proses_login', [AuthController::class, 'proses_login'])->name('proses_login');
});

Route::group(['middleware' => ['auth']], function () {
    // logout
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    // cek_login
    Route::group(['middleware' => ['cek:admin']], function () {
        Route::get('dashboard_literasi', [LoginController::class, 'admin'])->name('admin');
    });

    Route::group(['middleware' => ['cek:responden']], function () {
        Route::get('dashboard_literasi', [LoginController::class, 'responden'])->name('responden');
    });

    // Chart Dashboard
    Route::get('dashboard_literasi', [DashboardController::class, 'dashboard_literasi'])->name('dashboardLiterasi');
    Route::get('dashboard_kepuasan', [DashboardController::class, 'dashboard_kepuasan'])->name('dashboardKepuasan');

    // Kelola Akun
    Route::get('kelola_akun/index', [AkunController::class, 'index'])->name('kelola_akun');
    Route::get('kelola_akun/tambah', [AkunController::class, 'create'])->name('akun_tambah');
    Route::POST('kelola_akun/tambah', [AkunController::class, 'store'])->name('akun_tambah');
    Route::get('kelola_akun/edit/{id}', [AkunController::class, 'edit'])->name('akun_edit');
    Route::POST('kelola_akun/edit/{id}', [AkunController::class, 'update'])->name('akun_edit');
    Route::DELETE('kelola_akun/hapus/{id}', [AkunController::class, 'destroy'])->name('akun_delete');

    // Kuisioner
    Route::get('kuisioner', [KuisionerController::class, 'index'])->name('kuisioner');
    Route::get('kuisioner_tambah', [KuisionerController::class, 'create'])->name('kuisioner_create');
    Route::POST('kuisioner_tambah', [KuisionerController::class, 'store'])->name('kuisioner_create');
    Route::get('kuisioner_edit{id_kuisioner}', [KuisionerController::class, 'edit'])->name('kuisioner_edit');
    Route::POST('kuisioner_edit{id_kuisioner}', [KuisionerController::class, 'update'])->name('kuisioner_edit');
    Route::DELETE('kuisioner/hapus/{id_kuisioner}', [KuisionerController::class, 'destroy'])->name('kuisioner_delete');

    // Kuisioner Kepuasan
    Route::get('kuisioner_kepuasan', [KuisionerKepuasanController::class, 'index'])->name('kuisioner_kepuasan');
    Route::get('kuisioner_kepuasan_tambah', [KuisionerKepuasanController::class, 'create'])->name('kuisioner_kepuasan_create');
    Route::POST('kuisioner_kepuasan_tambah', [KuisionerKepuasanController::class, 'store'])->name('kuisioner_kepuasan_create');
    Route::get('kuisioner_kepuasan_edit{id_kuisioner_kepuasan}', [KuisionerKepuasanController::class, 'edit'])->name('kuisioner_kepuasan_edit');
    Route::POST('kuisioner_kepuasan_edit{id_kuisioner_kepuasan}', [KuisionerKepuasanController::class, 'update'])->name('kuisioner_kepuasan_edit');
    Route::DELETE('kuisioner_kepuasan/hapus/{id_kuisioner_kepuasan}', [KuisionerKepuasanController::class, 'destroy'])->name('kuisioner_kepuasan_delete');

    // Response
    Route::get('responden', [ResponseController::class, 'index'])->name('index_response');
    Route::get('kuisioner_responden', [ResponseController::class, 'create'])->name('response');
    Route::get('kuisioner_responden_2021', [ResponseController::class, 'create2021'])->name('response2021');
    Route::POST('kuisioner_responden', [ResponseController::class, 'response'])->name('response_tambah');

    //Respon Kepuasan
    Route::get('respon_kepuasan', [ResponKepuasanController::class, 'index'])->name('index_respon_kepuasan');
    Route::get('kuisioner_respon_kepuasan', [ResponKepuasanController::class, 'create'])->name('respon_kepuasan');
    Route::get('kuisioner_respon_kepuasan_2021', [ResponKepuasanController::class, 'create2021'])->name('respon_kepuasan_2021');
    Route::POST('kuisioner_respon_kepuasan', [ResponKepuasanController::class, 'respon_kepuasan'])->name('respon_kepuasan');
    
    //Edit Profile
    Route::get('index', [ProfileController::class, 'index'])->name('profile');
    Route::get('profile/{id}', [ProfileController::class, 'edit'])->name('edit_profile');
    Route::POST('profile/{id}', [ProfileController::class, 'update'])->name('edit_profile');
    
});