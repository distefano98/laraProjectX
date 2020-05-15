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

Route::view('/', 'Homepage')
        ->name('Homepage');

Route::get('/catalog', 'PublicController@showCatalog')
        ->name('catalog');

Route::get('login', 'Auth\LoginController@showLoginForm')
        ->name('login');

Route::post('login', 'Auth\LoginController@login');

Route::post('logout', 'Auth\LoginController@logout')
        ->name('logout');

Route::view('/where', 'where')
        ->name('where');

Route::view('/who', 'who')
        ->name('who');

Route::view('/privacypolicy', 'privacypolicy')
        ->name('privacypolicy');

Route::get('/user', 'UserController@index')
        ->name('user');

Route::get('/staff', 'StaffController@index')
        ->name('staff');

Route::get('/admin', 'AdminController@index')
        ->name('admin');
