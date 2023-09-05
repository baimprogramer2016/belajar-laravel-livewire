<?php

use App\Http\Controllers\CrudController;
use App\Http\Controllers\CrudLivewireController;
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
Route::post('/crud-update/{id}', [CrudController::class, 'update'])->name('crud-update');
Route::post('/crud-hapus/{id}', [CrudController::class, 'hapus'])->name('crud-hapus');

Route::get('/crud-modal-tambah', [CrudController::class, 'modalTambah'])->name('crud-modal-tambah');
Route::get('/crud-modal-edit/{id}', [CrudController::class, 'modalEdit'])->name('crud-modal-edit');
Route::get('/crud-modal-hapus/{id}', [CrudController::class, 'modalHapus'])->name('crud-modal-hapus');

Route::get('/crud-livewire', [CrudLivewireController::class, 'index'])->name('crud-livewire');
