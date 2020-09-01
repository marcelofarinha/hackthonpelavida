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
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);

});

Route::resource('cep', 'CepController');
Route::resource('cidade', 'CidadeController');
Route::resource('convenio', 'ConvenioController');
Route::resource('estado', 'EstadoController');
Route::resource('exame', 'ExameController');
Route::resource('paciente', 'ExameController');
Route::resource('pais', 'PaisController');
Route::resource('tipoexame', 'TipoExameController');
Route::resource('unidade', 'UnidadeController');
Route::resource('perfil', 'PerfilController');




