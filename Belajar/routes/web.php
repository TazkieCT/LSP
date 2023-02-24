<?php

use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\AdminController;
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

Route::get('/', [AspirasiController::class, 'index']);

Route::post('/login', [AdminController::class, 'login']);
Route::post('/logout', [AdminController::class, 'logout']);

Route::get('/form', [AspirasiController::class, 'form']);
Route::post('/form/store', [AspirasiController::class, 'input']);

Route::get('/admin', [AdminController::class, 'index'])->middleware('auth');
Route::post('/admin/status', [AdminController::class, 'status'])->middleware('auth');
Route::get('/admin/delete/{id_aspirasi}', [AdminController::class, 'delete'])->middleware('auth');
