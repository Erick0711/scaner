<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScanerController;
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

Route::get('welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('inicio', function () {
    return view('inicio');
})->name('inicio');

Route::get('/', function(){
    return view('plantilla/plantilla');
})->name('/');

Route::Resource('scaner', ScanerController::class);

Route::get('detalle', 'App\Http\Controllers\ScanerController@detalle')->name('scaner.detalle');

