<?php

use App\Http\Controllers\PersibController;
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


//https://www.matawebsite.com/blog/laravel-export-excel
Route::get('persib', [PersibController::class, 'create'])->name('persib.create');
Route::post('persib', [PersibController::class, 'store'])->name('persib.store');
Route::get('persib/list', [PersibController::class, 'index'])->name('persib.index');
Route::get('export', [PersibController::class, 'export']);
