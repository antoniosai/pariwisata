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

Route::get('/', 'FrontController@index')->name('home.index');

Route::group(['prefix'=> 'paket'], function(){
    Route::get('/', 'FrontController@paket')->name('home.paket');
    
    Route::get('/detail/{id}', 'FrontController@detailPaket')->name('home.paket.detail');

    Route::get('/booking/{id}', 'FrontController@bookingPaket')->name('home.paket.booking');
    Route::post('/booking/submit', 'FrontController@postBooking')->name('home.paket.submit');

    Route::get('/booking/confirm/{id}', 'FrontController@ticketConfirm')->name('home.paket.confirm');
});

Route::group(['prefix' => 'gallery'], function(){
    Route::get('/', 'FrontController@gallery')->name('home.gallery');
});

Route::group(['prefix' => 'location'], function(){
    Route::get('/', 'FrontController@location')->name('home.location');
});

Route::group(['prefix' => 'about_us'], function(){
    Route::get('/', 'FrontController@about_us')->name('home.about');
});

Route::group(['prefix' => 'information'], function(){
    Route::get('/', 'FrontController@information')->name('home.information');
    Route::get('read/{id}', 'FrontController@readInformation')->name('home.information.read');
});

Auth::routes();

Route::group(['prefix'=> 'admin'], function(){

    Route::get('/', 'DashboardController@index')->name('dashboard');

    Route::group(['prefix' => 'user'], function(){
        Route::get('/', 'UserController@index')->name('user.index');

        Route::get('detail/{id}', 'UserController@detail')->name('user.detail');

        Route::get('add', 'UserController@getAdd')->name('user.get.add');
        Route::post('add', 'UserController@postAdd')->name('user.post.add');
        
        Route::get('edit/{id}', 'UserController@getEdit')->name('user.get.edit');
        Route::post('edit/{id}', 'UserController@postEdit')->name('user.post.edit');

        Route::get('delete/{id}', 'UserController@delete');
    });


});

Route::get('test', function(){
    return view('test');
});