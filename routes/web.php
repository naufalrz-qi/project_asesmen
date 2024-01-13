<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\kelompokProdukController;
use App\Http\Controllers\FixedController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'role:admin'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth','role:admin'])->group(function () {
    Route::controller(ProdukController::class)->group(function () {
        Route::get('/produk', 'index')->name('produk.index');
        Route::get('/produk/create', 'create')->name('produk.create');
        Route::post('/store/produk', 'store')->name('produk.store');
        Route::post('/update/produk/{id}', 'update')->name('produk.update');
        Route::get('/edit/produk/{id}', 'edit')->name('produk.edit');
        Route::get('/delete/produk/{id}', 'destroy')->name('produk.destroy');

    });
    Route::resource('kelompok_produk', KelompokProdukController::class);
});
require __DIR__.'/auth.php';
