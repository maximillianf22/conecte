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

/* Ruta del Home*/
Route::get('/', function () {
    return view('home');
});

/* Ruta al home que esta en los navbars*/
Route::get('/inicio', function () {
    return view('home');
});

/* Ruta del Home usuarios logeados*/

/* Artista*/
Route::get('artista/home', function () {
    return view('default/artista/home');
});

Route::get('artista/perfil', function () {
    return view('default/artista/perfil');
});

/* Persona*/
Route::get('persona/home', function () {
    return view('default/persona/home');
});

Route::get('persona/perfil', function () {
    return view('default/persona/perfil');
});

Route::get('persona/pago', function () {
    return view('default/persona/pago');
});

Route::get('persona/pago/opcional', function () {
    return view('default/persona/pagoOpcional');
});

Route::get('persona/pago/confirmacion', function () {
    return view('default/persona/pagoConfirmacion');
});

Route::get('persona/pago/exito', function () {
    return view('default/persona/pagoExito');
});


/* Ruta del Login*/

Route::get('login', function () {
    return view('auth/default/login');
});

Route::get('artista/recovery-pass', function () {
    return view('auth/default/artista/recoverypass');
});

/* Ruta auth Persona */

Route::get('persona/register', function () {
    return view('auth/default/persona/register');
});

Route::get('persona/register/fin', function () {
    return view('auth/default/persona/register-fin');
});

/* Ruta auth Artista */

Route::get('artista/register', function () {
    return view('auth/default/artista/register');
});

Route::get('artista/register/fin', function () {
    return view('auth/default/artista/register-fin');
});




