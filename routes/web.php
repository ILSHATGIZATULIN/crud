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

Route::get('/admin', function () {    return view('layouts/admin');})->name('admin1');



Auth::routes();

Route::get('/', 'PageController@index')->name('index');

Route::get('/contacts', 'PageController@contacts')->name('contacts');

Route::group(['prefix'=> '/admin', ], function() {

    Route::get('/', 'Admin\AdminController@index')->name('admin');


    Route::resource('product', 'ProductController');

    Route::resource('review', 'ReviewController');
});
