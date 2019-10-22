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

Route::resource('/home', 'HomeController');

Route::resource('group', 'GroupController');

Route::resource('offer', 'OfferController');

Route::get('profile/{user}','ProfileController@show')->name('userProfile');

Route::resource('profile', 'ProfileController');

Route::post('group{group}/addUser{user}','GroupController@addUser')->name('group.addUser');

Route::get('group/addUser','GroupController@findUser')->name('group.findUser');