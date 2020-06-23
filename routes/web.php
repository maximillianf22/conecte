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
Route::get('/', ['uses' => 'HomeController@index', 'as' => 'index']);

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

Route::get('mail', function () {
    return view('mail/recovery');
});

// Route::get('persona/pago', function () {
//     return view('default/persona/pago');
// });

Route::get('persona/pago/opcional', function () {
    return view('default/persona/pagoOpcional');
});

Route::get('persona/pago/confirmacion', function () {
    return view('default/persona/pagoConfirmacion');
});

Route::get('persona/pago/exito', function () {
    return view('default/persona/pagoExito');
});



Route::get('artista/recovery-pass', function () {
    return view('auth/default/artista/recoverypass');
});

/* Ruta auth Persona */

Route::get('persona/register',  ['uses' => 'Auth\RegisterController@registros_usuarios', 'as' => 'register.usuarios']);

// Route::get('persona/register', function () {
//     return view('auth/default/persona/register');
// });

Route::get('persona/register/fin', function () {
    return view('auth/default/persona/register-fin');
});

/* Ruta auth Artista */

Route::get('artista/register', ['uses' => 'Auth\RegisterController@registros_artistas', 'as' => 'register.artista']);
// Route::get('artista/register', function () {
//     return view('auth/default/artista/register');
// });

Route::get('artista/register/fin', function () {
    return view('auth/default/artista/register-fin');
});

















Route::get('/app', 'HomeController@notResponsive');
/* Start autentificación */
Auth::routes();
Route::get('/login/?', ['uses' => 'Auth\LoginController@login', 'as' => 'loginView']);
Route::get('/login/administrador', ['uses' => 'Auth\LoginController@loginAdmin', 'as' => 'loginViewAdmin']);
Route::get('/logout', ['uses' => 'Auth\LoginController@getLogout', 'as' => 'getLogout']);
Route::post('/loginPost', ['uses' => 'Auth\LoginController@loginPost', 'as' => 'loginPost']);
Route::post('/loginPostAdmin', ['uses' => 'Auth\LoginController@loginPostAdmin', 'as' => 'loginPostAdmin']);

Route::get('/recoveryaccount', ['uses' => 'Auth\LoginController@RecoveryAccount', 'as' => 'recoveryaccount']);
Route::post('/recoveryaccount', ['uses' => 'Auth\LoginController@PostRecoveryAccount', 'as' => 'recoveryaccount']);
Route::get('/confirmationEmail/identificacion/{id}/token/{token_}', ['uses' => 'Auth\LoginController@ConfirmationRecoveryAccount', 'as' => 'confirmationEmail']);
Route::post('/resetpasswordaccount', ['uses' => 'Auth\LoginController@ResetPassAccount', 'as' => 'resetpasswordaccount']);


Route::get('/registro-usuarios', ['uses' => 'Auth\RegisterController@registros_usuarios', 'as' => 'register.usuarios']);
Route::get('/registro-artistas', ['uses' => 'Auth\RegisterController@registros_artistas', 'as' => 'register.artista']);

Route::post('/registroArtistaPost', ['uses' => 'Auth\RegisterController@registroArtistaPost', 'as' => 'registroArtistaPost']);
Route::post('/registroUsuariosPost', ['uses' => 'Auth\RegisterController@registroUsuariosPost', 'as' => 'registroUsuariosPost']);

//Route::get('/administrador/login', ['uses' => 'Auth\LoginController@login', 'as' => 'loginView']);
Route::get('/auth/confirm/email/{email}/confirm_token/{confirm_token}', ['uses' => 'Auth\RegisterController@confirmRegister', 'as' => 'confirmarCorreo']);
/* End autentificación */

Route::group(['prefix' => 'administrador', 'middleware' => 'administrador'], function () {
    Route::get('/', ['uses' => 'AdministradorController@index', 'as' => 'admin']);
    Route::resource('clientes', 'UsuariosController', ['as' => 'clientes']);
    Route::resource('artistas', 'ArtistasController', ['as' => 'artistas']);
    Route::resource('configuraciones', 'ConfiguracionesController', ['as' => 'configuraciones']);
    Route::post('configuraciones/crear', ['uses' => 'ConfiguracionesController@store', 'as' => 'configuracionesStore']);
    Route::resource('movimientos', 'MovimientosController', ['as' => 'movimientos']);
    Route::resource('liquidaciones', 'LiquidacionesController', ['as' => 'liquidaciones']);
    Route::resource('dedicatorias', 'DedicatoriasController', ['as' => 'dedicatorias']);
    Route::resource('contrataciones', 'ContratacionesController', ['as' => 'contrataciones']);
    Route::resource('valoresConguraciones', 'ValoresConfiguracionController', ['as' => 'valoresConguraciones']);
});

Route::group(['prefix' => '/',  'middleware' => 'auth'], function () {

    Route::get('/welcome', ['uses' => 'HomeController@welcome', 'as' => 'welcome']);
    Route::get('/persona/perfil/{section}', 'HomeController@perfil');
    Route::get('/artista/{name}', ['uses' => 'HomeController@artista', 'as' => 'artista']);
    Route::post('/actulizarCliente', ['uses' => 'HomeController@actulizarCliente', 'as' => 'actulizarCliente']);
    Route::post('/actulizarArtista', ['uses' => 'HomeController@actulizarArtista', 'as' => 'actulizarArtista']);
    Route::post('/pedir-dedicatoria', ['uses' => 'HomeController@pedirDedicatoria', 'as' => 'pedirDedicatoria']);
    Route::get('/mis-pendientes', ['uses' => 'HomeController@misPedientes', 'as' => 'misPendientes']);
    Route::get('/solicitudes', ['uses' => 'HomeController@miHistorial', 'as' => 'miHistorial']);
    Route::get('/ver-respuesta/{id}', ['uses' => 'HomeController@verRespuesta', 'as' => 'verRespuesta']);

    Route::post('/ajax/sendGreeting', ['uses' => 'HomeController@ajaxSendGreeting']);
});

/*PAGOS PAYU*/
Route::get('/payu/response/recharge/get', ['uses' => 'PayuController@getRecharge']);
Route::post('/payu/response/recharge/post', ['uses' => 'PayuController@postRecharge']);

Route::get('/payu/response/payment/get', ['uses' => 'PayuController@getPayment']);
Route::post('/payu/response/payment/post', ['uses' => 'PayuController@postPayment']);
