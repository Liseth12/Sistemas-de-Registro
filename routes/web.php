<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::resource('roles', 'RoleController')->middleware('auth');
Route::get('/', 'HomeController@index')->name('home');
Route::resource('usuarios', 'UserController');
Route::resource('personalAcademico', 'PersonalAcademicoController');
Route::resource('formularioRegistros', 'FormularioRegistroController');
