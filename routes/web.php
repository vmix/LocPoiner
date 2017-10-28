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
    return view('layouts.app');
});

Auth::routes();

Route::get('/welcome', function () {
    return view('temp.welcome');
});

Route::get('/earthquakes', function () {
    return view('temp.earthquakes');
});

Route::get('/chat', function () {
    return view('temp.chat');
})->name('chat');

Route::get('dropzoneFile', 'PhotosController@dropzoneFile')->name('upload');
Route::post('dropzoneFile', array('as' => 'dropzone.uploadfile', 'uses' => 'PhotosController@dropzoneUploadFile'));


Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/admin/users', 'UserController@adminView');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/services', 'HomeController@services')->name('services');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');
