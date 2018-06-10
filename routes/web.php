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
Auth::routes();

Route::get('/', function () {
    return view('index');
});

Route::get('/views/{page}', function ($page) {
    return view("pages.$page");
});

Route::post('/upload', "uploadController@upload");
Route::post('/remove', "uploadController@remove");
Route::post('/edit', "uploadController@edit");

Route::get('/upload', "uploadController@uploadTest");

Route::post('/contact', "contactController@contact");


Route::get('/photos', "photosController@showGalleryPage");
Route::get('/edit/{id}', "uploadController@showEditForm");
Route::get('/remove', "uploadController@showRemoveGalleryPage");



Route::get('/home', 'HomeController@index')->name('home');
