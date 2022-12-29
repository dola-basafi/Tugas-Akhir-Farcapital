<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
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
Route::get('/logout',[AuthController::class,'logout'])->name('logout');


Route::prefix('admin')->group(function(){
    Route::middleware(['auth','Role:1'])->group(function(){
        Route::get('/',function(){return view('layouts.admin.dashboard');})->name('adminDashboard');
        Route::get('/create',function(){return view('layouts.adminAddUser');})->name('layouts.admin.adminCreateUser');
        Route::post('/create',[AdminController::class,'CreateUser']);
    });
});