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

Route::group(['prefix'=>'user'],function(){
    Route::get('profile',function(){
        return view('userpage.profile');
    });
    Route::get('homepage',function(){
        return view('userpage.homepage');
    });
    Route::get('albumhot',function(){
        return view('userpage.albumhot');
    });
});

Route::group(['prefix'=>'admin'],function(){
    Route::group(['prefix'=>'genre'],function(){
        Route::get('list', 'GenreController@index')->name('GenreList');
        Route::get('add', 'GenreController@create')->name('GenreAdd');
        Route::get('update', 'GenreController@edit')->name('GenreEdit');
    });
    Route::group(['prefix'=>'singer'],function(){
        Route::get('list', 'SingerController@index')->name('SingerList');
        Route::get('add', 'SingerController@create')->name('SingerAdd');
        Route::get('update', 'SingerController@edit')->name('SingerEdit');
    });
    Route::group(['prefix'=>'album'],function(){
        Route::get('list', 'AlbumController@index')->name('AlbumList');
        Route::get('add', 'AlbumController@create')->name('AlbumAdd');
        Route::get('update', 'AlbumController@edit')->name('AlbumEdit');
    });
    Route::group(['prefix'=>'song'],function(){
        Route::get('list', 'SongController@index')->name('SongList');
        Route::get('add', 'SongController@create')->name('SongAdd');
        Route::get('update', 'SongController@edit')->name('SongEdit');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

