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

/* Ruta auth Persona */
Route::get('persona/login', function () {
    return view('auth/default/persona/login');
});

Route::get('persona/register', function () {
    return view('auth/default/persona/register');
});

Route::get('persona/recovery-pass', function () {
    return view('auth/default/persona/recoverypass');
});

/* Ruta auth Artista */
Route::get('artista/login', function () {
    return view('auth/default/artista/login');
});

Route::get('artista/register', function () {
    return view('auth/default/artista/register');
});

Route::get('artista/recovery-pass', function () {
    return view('auth/default/artista/recoverypass');
});


