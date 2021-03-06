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

Route::get('/product/{prodId}','PublicController@showProduct')
        ->name('showproduct');


Route::post('search/selMacroCateg/{macroCatId}/selCat/{catId}', 'PublicController@search')
        ->name('search');
// ------------------------------------------------------------------------------


// --------------------------- users -------------------------------------------

//utente
Route::get('/user', 'UserController@index')
        ->name('user')->middleware('can:isUser');

Route::get('/user/changepassword', 'UserController@changePassword')
       ->name('changepassword');

Route::post('/user/changepassword', 'UserController@storePassword')
        ->name('changepassword.store');

Route::get('/user/changeinfo', 'UserController@changeInfo')
       ->name('changeinfo');

Route::post('/user/changeinfo', 'UserController@storeInfo')
        ->name('changeinfo.store');

//staff

Route::get('/staff', 'StaffController@index')
        ->name('staff')->middleware('can:isStaff');

Route::get('/staff/newproduct', 'StaffController@addProduct')
        ->name('newproduct');

Route::post('/staff/newproduct', 'StaffController@storeProduct')
        ->name('newproduct.store');

Route::get('/staff/changeproduct/{prodId}', 'StaffController@changeProduct')
       ->name('changeproduct');

Route::post('/staff/changeproduct/{prodId}', 'StaffController@updateProduct')
        ->name('changeproduct.update');

Route::get('/deleteproduct/{prodId}','StaffController@deleteProduct')
        ->name('deleteproduct');

Route::get('/showcategory', 'StaffController@showCategory')
        ->name('showcategory');

Route::post('/newcategory', 'StaffController@NewCategory')
        ->name('newcategory');

//admin
Route::get('/admin', 'AdminController@index')
        ->name('admin')->middleware('can:isAdmin');

Route::get('/showstaff', 'AdminController@showStaff')
        ->name('showstaff');

Route::get('/showusers', 'AdminController@showUser')
        ->name('showuser');

Route::get('/newstaff', 'AdminController@createNewStaff')
        ->name('newstaff');

Route::post('/newstaff', 'AdminController@storeNewStaff')
        ->name('newstaff.store');

Route::get('/updatestaff/{id}','AdminController@updateStaff')
        ->name('updatestaff');

Route::post('/updatestaff/{id}','AdminController@storeUpdateStaff')
        ->name('updatestaff.store');

Route::get('/deletestaff/{id}','AdminController@deleteStaff')
        ->name('deletestaff');

Route::get('/deleteuser/{id}','AdminController@deleteUser')
        ->name('deleteuser');

Route::post('/deleteusers','AdminController@deleteMultiple')
        ->name('multiple-delete');

//----------------------------------------------------------------------------

