<?php

use App\Http\Controllers\MatkulController;
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
    return redirect('/matkul/');
});

Route::get('/matkul/index', [App\Http\Controllers\MatkulController::class, 'index'])->name('matkul.index');

Route::get('/matkul/addMatkul', [App\Http\Controllers\MatkulController::class, 'addMatkul'])->name('matkul.addMatkul');