<?php

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
    return view('home');
});

Route::get('/equipos', function () {
    return view('equipos');
});

Route::get('/alquiler', function () {
    return view('alquiler');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/requisitos', function () {
    return view('requisitos');
});

Route::post('/contactar', 'EmailController@contact')->name('contact');
//Ruta que esta señalando nuestro formulario
