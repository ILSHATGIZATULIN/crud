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

//Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth']],function () {
//Route::get('/','DushboardController@dushboard')-> name('admin.index');
//});

Route::get('/', function () {    return view('index');})->name('index');

Route::get('/contacts', function () {    return view('static/contacts');})->name('contacts');

Route::get('/admin', function () {    return view('layouts/admin');})->name('admin');
Route::get('/login', function () {    return view('auth/login');})->name('login');

Route::get('/register', function () {    return view('auth/register');})->name('register');

Route::resource('admin-lte','Product');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');