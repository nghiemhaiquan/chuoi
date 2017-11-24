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

Route::group(['prefix'=>'user'], function() {
  	Route::get('profile', function(){
    		return view('userpage.profile');
  	});
  	Route::get('homepage', function() {
    		return view('userpage.homepage');
  	});
  	Route::get('albumhot', function() {
    		return view('userpage.albumhot');
  	});
});

Route::group(['prefix'=>'admin'], function() {
    Route::resource('genre', 'GenreController', [ 'names' => [
        'index' => 'admin.genre.list',
        'create' => 'admin.genre.getAdd',
        'store' => 'admin.genre.postAdd',
        'edit' => 'admin.genre.edit',
        'update' => 'admin.genre.update',
        'destroy' => 'admin.genre.delete'
    ]]);
    Route::resource('singer', 'SingerController', [ 'names' => [
        'index' => 'admin.singer.list',
    		'create' => 'admin.singer.getAdd',
    		'store' => 'admin.singer.postAdd',
    		'edit' => 'admin.singer.edit',
    		'update' => 'admin.singer.update',
    		'destroy' => 'admin.singer.delete'
  	]]);
    Route::resource('album', 'AlbumController', [ 'names' => [
        'index' => 'admin.album.list',
    		'create' => 'admin.album.getAdd',
    		'store' => 'admin.album.postAdd',
    		'edit' => 'admin.album.edit',
    		'update' => 'admin.album.update',
    		'destroy' => 'admin.album.delete'
  	]]);
  	Route::resource('song', 'SongController', [ 'names' => [
        'index' => 'admin.song.list',
    		'create' => 'admin.song.getAdd',
    		'store' => 'admin.song.postAdd',
    		'edit' => 'admin.song.edit',
    		'update' => 'admin.song.update',
    		'destroy' => 'admin.song.delete'
  	]]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
