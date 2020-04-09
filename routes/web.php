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

/* Ruta del Home usuarios logeados*/
Route::get('artista/home', function () {
    return view('default/artista/home');
});

Route::get('persona/home', function () {
    return view('default/persona/home');
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




