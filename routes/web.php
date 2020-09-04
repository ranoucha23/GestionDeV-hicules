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

Route::get('vehicule_show','VehiculeController@show');
Route::get('vehicule_delete/{id}','VehiculeController@destroy');
Route::get('vehicule_create','VehiculeController@create');
Route::post('vehicule_submit','VehiculeController@store');
Route::get('vehicule_edit/{id}','VehiculeController@edit');
Route::post('vehicule_update/{id}','VehiculeController@update')->name('vehicule_update');


Route::get('marque_show','MarqueController@show');
Route::get('marque_delete/{id}','MarqueController@destroy');
Route::get('marque_create','MarqueController@create');
Route::post('marque_submit','MarqueController@store');
Route::get('marque_edit/{id}','MarqueController@edit');
Route::post('marque_update/{id}','MarqueController@update')->name('marque_update');


Route::get('modele_show','ModeleController@show');
Route::get('modele_delete/{id}','ModeleController@destroy');
Route::get('modele_create','ModeleController@create');
Route::post('modele_submit','ModeleController@store');
Route::get('modele_edit/{id}','ModeleController@edit');
Route::post('modele_update/{id}','ModeleController@update')->name('modele_update');


