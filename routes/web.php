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
    Route::resource('profile', 'ProfileController', [ 'names' => [
        'index' => 'userpage.profile',
    ]]);
    Route::resource('homepage', 'HomepageController', [ 'names' => [
        'index' => 'userpage.homepage',
    ]]);
    Route::resource('albumhot', 'AlbumhotController', [ 'names' => [
        'index' => 'userpage.albumhot',
    ]]);
    Route::resource('singerhot', 'SingerhotController', [ 'names' => [
        'index' => 'userpage.singerhot',
    ]]);
    Route::resource('song', 'UsersongController', [ 'names' => [
        'index' => 'userpage.song',
    ]]);
    Route::resource('video', 'VideoController', [ 'names' => [
        'index' => 'userpage.video',
    ]]);
    Route::resource('playlist', 'PLaylistController', [ 'names' => [
        'index' => 'userpage.playlist',
    ]]);
});

Route::group(['prefix'=>'admin', 'middleware' => ['auth', 'admin']], function() {
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
            'show' => 'admin.album.show',
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
    Route::put('album/{id}/import-song-to-album', 'AlbumController@createAlbumDetails')->name('admin.album.import');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
