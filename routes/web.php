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

Route::get('/','Auth\LoginController@showLoginFrom');
Route::get('/home','homeController@index')->name('home');
Route::post('/login','Auth\LoginController@login')->name('login');
Route::post('/logout','Auth\LoginController@logout')->name('logout');

Route::get('/register','Auth\RegisterController@showRegistrationForm');
Route::post('/register','Auth\RegisterController@register')->name('register');


Route::get('/admins','LoginadminController@showLoginFrom');
Route::get('/admins/home','LoginadminController@index')->name('homeandmin');
Route::post('/admins/login','LoginadminController@login')->name('loginandmin');
Route::post('/admins/logout','LoginadminController@logout')->name('logoutandmin');

Route::get('/admins/register','RegisteradminController@showRegistrationForm');
Route::post('/admins/register','RegisteradminController@register')->name('registeradmin');




Route::resource('/nueva',  'nuevoController');
Route::get('/reserva',  'nuevoController@reserva');
Route::resource('/detalle',  'detallesController');


/*aerlineas*/
Route::resource('/aerlineas','aerolineasController');
/*aropuertos*/
Route::resource('/aeropuertos','aeropuertosController');
/*ciudades*/
Route::resource('/ciudades','ciudadesController');
/*paises*/
Route::resource('/paises','paisesController');
/*clases*/
Route::resource('/clases','clasesController');
/*reserva*/
Route::resource('/reservaciones','reservaController');
/*destinos*/
Route::resource('/destinos','destinosController');
/*pasajeros*/
Route::resource('/passengers','pasajerosController');
/*usuasrios*/
Route::resource('/user','usuariosController');



