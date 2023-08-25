<?php

use App\Http\Controllers\CrudController;
use App\Http\Controllers\DashboardController;
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


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/crud', [CrudController::class, 'index'])->name('crud');
Route::post('/crud-simpan', [CrudController::class, 'simpan'])->name('crud-simpan');
Route::get('/crud-modal-tambah', [CrudController::class, 'modalTambah'])->name('crud-modal-tambah');
