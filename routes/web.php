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

Route::get('/', function () {
    return view('welcome');
});


Route::get('villes', 'VillesController@getVilles' )->name('getVilles');
Route::get('ajouter_ville', 'VillesController@addVilles' )->name('addVilles');
Route::post('ajouter_ville', 'VillesController@postVilles' )->name('postVilles');
Route::get('supprimer_ville/{id}', 'VillesController@deleteVilles' )->name('deleteVilles');
Route::get('modifier_ville/{id}',  'VillesController@getUpdateVilles' )->name('getUpdateVilles');
Route::post('modifier_ville/{id}',  'VillesController@postUpdateVilles' )->name('postUpdateVilles');

Route::get('biens', 'BiensController@getBiens')->name('getBiens');

Route::get('ajouter_bien' ,'BiensController@getAddBiens')->name('getAddBiens');
Route::post('ajouter_bien' ,'BiensController@postAddBiens')->name('postAddBiens');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
