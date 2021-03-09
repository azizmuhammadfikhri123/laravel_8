<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController as SC;
use App\Http\Controllers\RayonController as RC;
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

Route::get('/siswa', [SC::class, 'index']);
Route::get('/siswa/create', [SC::class, 'create'])->name('siswa.create');
Route::post('/siswa/store', [SC::class, 'store'])->name('siswa.store');
Route::get('/siswa/edit/{id}', [SC::class, 'edit'])->name('siswa.edit');
Route::patch('/siswa/{id}/update', [SC::class, 'update'])->name('siswa.update');
Route::delete('/siswa/delete/{id}', [SC::class, 'destroy'])->name('siswa.delete');

Route::get('/rayon', [RC::class, 'index'])->name('rayon.index');
Route::get('/rayon/create', [RC::class, 'create'])->name('rayon.create');
Route::post('/rayon/store', [RC::class, 'store'])->name('rayon.store');
Route::get('/rayon/edit/{id}', [RC::class, 'edit'])->name('rayon.edit');
Route::patch('/rayon/{id}/update', [RC::class, 'update'])->name('rayon.update');
Route::delete('/rayon/delete/{id}', [RC::class, 'destroy'])->name('rayon.destroy');

