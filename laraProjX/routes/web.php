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



// --------------- login ----------------------------------------------
Route::get('login', 'Auth\LoginController@showLoginForm')
        ->name('login');

Route::post('login', 'Auth\LoginController@login');

Route::post('logout', 'Auth\LoginController@logout')
        ->name('logout');
// -----------------------------------------------------------------------


// ------------------ registrazione ----------------------------------------
Route::get('register', 'Auth\RegisterController@showRegistrationForm')
        ->name('register');

Route::post('register', 'Auth\RegisterController@register');


// --------------------------------------------------------------------------


// ------------------- viste "statiche"  -----------------------------

Route::view('/', 'Homepage')
        ->name('Homepage');

Route::view('/where', 'where')
        ->name('where');

Route::view('/who', 'who')
        ->name('who');

Route::view('/privacypolicy', 'privacypolicy')
        ->name('privacypolicy');

//-------------------------------------------------------------------------------



// ----------------------------public catalog----------------------------------------
Route::get('/catalog', 'PublicController@showCatalog')
        ->name('catalog');

Route::get('/selMacroCateg/{macroCatId}', 'PublicController@showMacroCategProds')
        ->name('catalogMacro');

Route::get('/selMacroCateg/{macroCatId}/selCat/{catId}', 'PublicController@showCategProds')
        ->name('catalogCateg');

// ------------------------------------------------------------------------------


// --------------------------- users -------------------------------------------
Route::get('/user', 'UserController@index')
        ->name('user');

Route::get('/staff', 'StaffController@index')
        ->name('staff');

Route::get('/admin', 'AdminController@index')
        ->name('admin');

//----------------------------------------------------------------------------



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
