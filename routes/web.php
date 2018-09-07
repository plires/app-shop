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
});

// Route::get('/administration', function(){
// 	$products = App\Product::paginate(10);
//   return view('administration.index')->with(compact('products')); // ver Listado de productos
// });



Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('/test', 'HomeController@test');
Route::get('/success', 'HomeController@url');
//Route::get('/failure', 'HomeController@index');
//Route::get('/pending', 'HomeController@index');

Route::get('/pago', 'PagoController@index');
Route::get('/pagar', 'PagoController@generatePaymentGateway');
Route::get('/escucha', 'PagoController@ipnNotification');
Route::post('/escucha_post', 'PagoController@ipnNotification');
