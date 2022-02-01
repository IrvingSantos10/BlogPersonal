<?php

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
    return view('PracticaIrving.Inicio');
})->name('Inicio');
//
Route::get('/Desarrollo', function () {
    return view('PracticaIrving.Desarrollo');
})->name('Desarrollo');
//
Route::get('/Fin', function () {
    return view('PracticaIrving.Fin');
})->name('Fin');

Route::get('/Prueba', function () {
    return view('PracticaIrving.Prueba');
})->name('Prueba');

Route::get('/Layout', function () {
    return view('PracticaIrving.Template.Layout');
})->name('Layout');
?>