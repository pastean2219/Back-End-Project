<?php

use App\Http\Controllers\FishingController;
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

Auth::routes();




Route::get('/MagazinPescuit', [FishingController::class, 'index'])->name('fishing_gear.index');

Route::get('/MagazinPescuit/create', [FishingController::class, 'create'])->name('fishing_gear.create');

Route::post('/MagazinPescuit', [FishingController::class, 'store'])->name('fishing_gear.store');

Route::get('/MagazinPescuit/{item}', [FishingController::class, 'show'])->name('fishing_gear.show');

Route::get('/MagazinPescuit/{item}/edit', [FishingController::class, 'edit'])->name('fishing_gear.edit');

Route::put('/MagazinPescuit/{item}', [FishingController::class, 'update'])->name('fishing_gear.update');

Route::delete('/MagazinPescuit/{item}/', [FishingController::class, 'destroy'])->name('fishing_gear.destroy');

