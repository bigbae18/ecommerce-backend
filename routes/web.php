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

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/admin/example', function () {
    return view('admin.example');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//PRODUCT

Route::prefix('admin')->group(function () {
    Route::get('product/index', 'ProductController@index')
    ->name('product.index');

Route::get('product/create', 'ProductController@create')
    ->name('product.create');

});




