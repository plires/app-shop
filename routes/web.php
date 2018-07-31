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


Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {

	// Rutas para Admin.Products
	Route::get('/products', 'ProductController@index'); // listado de productos
	Route::get('/products/create', 'ProductController@create'); // Muestra el formulario de registro
	Route::post('/products', 'ProductController@store'); // Registra el nuevo producto
	Route::get('/products/{id}/edit', 'ProductController@edit'); // Muestra el formulario de edicion del producto
	Route::post('/products/{id}/edit', 'ProductController@update'); // Actualiza el producto
	Route::delete('/products/{id}', 'ProductController@delete'); // elimina el producto
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
