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
        Route::get('/create',[AdminController::class,'CreateUserForm'])->name('CreateUserForm');
        Route::post('/create',[AdminController::class,'CreateUser'])->name('adminCreateUser');
        Route::get('/detail/{id}',[AdminController::class,'detailUser'])->name('detailUser');
        Route::get('/delete/{id}',[AdminController::class,'delete'])->name('deleteUser');
        Route::get('/dashboard/{pg?}',[AdminController::class,'dashboard'])->name('adminDashboard');
        // Route::get('/edit/{id}',[AdminController::class,'editForm'])->name('editUserForm');
        // Route::post('/edit/{id}',[AdminController::class,'edit'])->name('editUser');
    });
});