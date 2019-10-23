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

Auth::routes();

//TODO: separar todos los resources en rutas individuales
Route::resource('/home', 'HomeController');

Route::resource('group', 'GroupController');

Route::resource('offer', 'OfferController');

Route::get('profile/{user}','ProfileController@show')->name('userProfile');

Route::resource('profile', 'ProfileController');

Route::patch('group{group}/addUser{user}','GroupController@addUser')->name('group.addUser');

Route::get('group{group}/addUser','GroupController@findUser')->name('group.findUser');

Route::get('group{group}/deleteUser{user}','GroupController@deleteUser')->name('group.deleteUser');

//TODO: renombrar ruta
Route::get('index', 'OfferController@indexGroups')->name('offer.indexGroups');
