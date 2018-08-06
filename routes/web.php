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

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {

	// Rutas para Admin.Categories
	Route::get('/categories', 'CategoryController@index'); // listado de Categorias
	Route::get('/categories/create', 'CategoryController@create'); // Muestra el formulario de registro
	Route::post('/categories', 'CategoryController@store'); // Registra la nueva categoria
	Route::get('/categories/{id}/edit', 'CategoryController@edit'); // Muestra el formulario de edicion de la categoria
	Route::post('/categories/{id}/edit', 'CategoryController@update'); // Actualiza la categoria
	Route::delete('/categories/{id}', 'CategoryController@delete'); // elimina la categoria

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
