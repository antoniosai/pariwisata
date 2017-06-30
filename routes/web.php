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
    Route::get('read/{slug}', 'FrontController@readInformation')->name('home.information.read');
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

    Route::group(['prefix' => 'paket'], function(){
        Route::get('/', 'PaketController@index')->name('admin.paket.index');

        Route::get('detail/{id}', 'PaketController@detail')->name('admin.paket.detail');
    
        Route::get('add', 'PaketController@getAdd')->name('admin.paket.get.add');
        Route::post('add', 'PaketController@postAdd')->name('admin.paket.post.add');

        Route::get('edit/{id}', 'PaketController@getEdit')->name('admin.paket.get.edit');
        Route::post('edit', 'PaketController@postEdit')->name('admin.paket.post.edit');

        Route::get('delete/{id}', 'PaketController@delete')->name('admin.paket.delete');
    });

    Route::group(['prefix' => 'gallery'], function(){
        Route::get('/', 'GalleryController@index')->name('admin.gallery.index');

        Route::post('add', 'GalleryController@add')->name('admin.gallery.add');

        Route::post('edit', 'GalleryController@edit')->name('admin.gallery.edit');

        Route::get('delete/{id}', 'GalleryController@delete')->name('admin.gallery.delete');
    });

    Route::get('/keluar', 'UserController@keluar')->name('keluar');

});

Route::get('test', function(){
    return view('test');
});