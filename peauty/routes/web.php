<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HasilController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\RekomendasiController;
use App\Http\Controllers\UserController;
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

Auth::routes();

Route::get('/', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::prefix('user')->middleware('auth')->name('user.')->group(function (){
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('/profil', [UserController::class, 'profil'])->name('profil');
    Route::post('/edit', [UserController::class, 'post_edit'])->name('post-edit');
    Route::get('/input', [RekomendasiController::class, 'index'])->name('rekomendasi');
    Route::post('/input', [RekomendasiController::class, 'post_input'])->name('post-rekomendasi');
    Route::get('/hasil/{id}', [HasilController::class, 'index'])->name('hasil');
    Route::get('/rekomendasi/{id}', [HasilController::class, 'rekomendasi'])->name('product');
});

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::post('/register-user', [RegisterUserController::class, 'create'])->name('register-user');
