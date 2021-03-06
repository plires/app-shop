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

	// Rutas para Admin.Users
	Route::get('/users', 'UserController@index'); // listado de usuarios
	Route::get('/users/create', 'UserController@create'); // Muestra el formulario de registro
	Route::post('/users', 'UserController@store'); // Registra el nuevo usuario
	Route::get('/users/{id}/edit', 'UserController@edit'); // Muestra el formulario de edicion del usuario
	Route::post('/users/{id}/edit', 'UserController@update'); // Actualiza el usuario
	Route::delete('/users/{id}', 'UserController@delete'); // elimina el usuario

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

	// Rutas para las imagenes del producto
	Route::get('/products/{id}/images', 'ImageController@index'); // listado de las imagenes del productos
	Route::post('/products/{id}/images', 'ImageController@store'); // Registra la nueva imagene del producto
	Route::delete('/products/{id}/images', 'ImageController@delete'); // elimina la imagen del producto
	Route::get('/products/{id}/images/select/{image}', 'ImageController@select'); // destacar imagenes de productos

});

Auth::routes();
Route::get('/products/{id}', 'ProductController@show'); // Controlador para todos los usuarios
Route::post('/products/{id}', 'ProductController@getProduct'); // Controlador para todos los usuarios

/* PRUEBA DE PASOS */

Route::get('/zone', 'ZoneController@index'); 
Route::get('/pack', 'ZoneController@packGet');
Route::get('/choose', 'ZoneController@chooseGet');
Route::post('/pack', 'ZoneController@pack');
Route::post('/choose', 'ZoneController@choose');
Route::post('/cart/{id}/{operation}', 'ZoneController@store'); // Agrega un cartDetail 

Route::get('/', 'HomeController@index');
Route::get('/test', 'HomeController@test');
Route::get('/success', 'HomeController@url');
//Route::get('/failure', 'HomeController@index');
//Route::get('/pending', 'HomeController@index');

Route::get('/pago', 'PagoController@index');
Route::get('/pagar', 'PagoController@generatePaymentGateway');
Route::get('/escucha', 'PagoController@ipnNotification');
Route::post('/escucha_post', 'PagoController@ipnNotification');
