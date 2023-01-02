<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GudangController;
use App\Http\Controllers\KasirController;
use App\Http\Livewire\TransaksiKasir;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login',[AuthController::class,'loginForm'])->name('loginForm');
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::get('/register',[AuthController::class,'registerForm'])->name('registerForm');
Route::post('/register',[AuthController::class,'register'])->name('register');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');

Route::middleware('auth')->group(function(){
    Route::get('/profil',[AuthController::class,'profilForm'])->name('profilForm');
    Route::post('/profil',[AuthController::class,'updateProfil'])->name('profil');
});


Route::prefix('admin')->group(function(){
    Route::middleware(['auth','Role:1'])->group(function(){
        Route::get('/dashboard',[AdminController::class,'dashboard'])->name('adminDashboard');
        Route::get('/create',[AdminController::class,'CreateUserForm'])->name('CreateUserForm');
        Route::post('/create',[AdminController::class,'CreateUser'])->name('adminCreateUser');
        Route::get('/detail/{id}',[AdminController::class,'detailUser'])->name('detailUser');
        Route::get('/delete/{id}',[AdminController::class,'delete'])->name('deleteUser');
        // Route::get('/edit/{id}',[AdminController::class,'editForm'])->name('editUserForm');
        // Route::post('/edit/{id}',[AdminController::class,'edit'])->name('editUser');
    });
});

Route::prefix('gudang')->group(function(){
    Route::middleware(['auth','Role:2'])->group(function(){
        Route::get('/create',[GudangController::class,'createBarangForm'])->name('createBarangForm');
        Route::post('/create',[GudangController::class,'createBarang'])->name('createBarang');
        Route::get('/detail/{id}',[GudangController::class,'detailBarang'])->name('detailBarang');
        Route::post('/delete',[GudangController::class,'delete'])->name('deleteBarang');
        Route::get('/',[GudangController::class,'index'])->name('gudangDashboard');
    });
});

Route::prefix('kasir')->group(function(){
    Route::middleware(['auth','Role:3'])->group(function(){
        Route::get('/',TransaksiKasir::class);
        Route::get('/transaksi',[KasirController::class,'transaksiForm'])->name('kasirTransaksiForm');
        Route::post('/transaksi',[KasirController::class,'transaksi'])->name('kasirTransaksi');
        Route::get('/member',[KasirController::class,'addMemberForm'])->name('addMemberForm');
        Route::post('/member',[KasirController::class,'addMember'])->name('addMember');
    });
});
