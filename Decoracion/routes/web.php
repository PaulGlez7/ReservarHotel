<?php

use App\Http\Controllers\ClienteController;
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

Route::get('/principal', function () {
    return view('principal');
});

Route::get('/maderas', function() {
    return view('maderas');
})->name('maderas');

Route::get('/persianas', function() {
    return view('Persianas');
})->name('persianas');

Route::get('/persianasproductos', function() {
    return view('persianasproductos');
})->name('persianasproductos');

Route::get('/mapa', function() {
    return view('mapa');
})->name('mapa');

Route::get('/error', function() {
    return view('error');
})->name('error');

Route::get('/imagenes', function() {
    return view('imagenes');
})->name('imagenes');


Route::resource('clientes', ClienteController::class)->middleware('auth');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


