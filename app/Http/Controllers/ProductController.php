<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index() {
    	$products = Product::paginate(10);
    	return view('admin.products.index')->with(compact('products')); // ver Listado de productos
    }

    public function create() {

    	return view('admin.products.create'); // ver formulario de registro
    }

    public function store(request $request) {

    	$messages = [
    		'name.required' => 'Debe ingresar un nombre para el producto.',
    		'name.max' => 'El campo nombre no puede exceder los 100 caracteres.',
    		'description.required' => 'Debe ingresar una descripcion para el producto.',
    		'description.max' => 'El campo descripción no puede exceder los 200 caracteres.',
    		'price.required' => 'Debe ingresar un precio para el producto.',
    		'price.numeric' => 'Ingrese un valor numerico para el campo precio (300.23).',
    		'price.min' => 'No se admiten valores negativos para el campo precio.'
    	];

    	$rules =[
    		'name' => 'required|max:100',
    		'description' => 'required|max:200',
    		'price' => 'required|numeric|min:0'
    	];

    	$this->validate($request, $rules, $messages);

    	$product = new Product();
    	$product->name = $request->input('name');
    	$product->description = $request->input('description');
    	$product->long_description = $request->input('long_description');
    	$product->price = $request->input('price');

    	$product->save(); // Ejecuta un insert y agrega el producto.

        $message ="Se grabo papa!!";

        if ($request->ajax() ) {
            return $message;
        }

    	//return redirect('/admin/products');
    	
    }

    public function edit($id) {
    	$product = Product::find($id);

    	return view('admin.products.edit')->with(compact('product')); // ver formulario de registro
    }

    public function update(request $request, $id) {

    	$messages = [
    		'name.required' => 'Debe ingresar un nombre para el producto.',
    		'name.max' => 'El campo nombre no puede exceder los 100 caracteres.',
    		'description.required' => 'Debe ingresar una descripcion para el producto.',
    		'description.max' => 'El campo descripción no puede exceder los 200 caracteres.',
    		'price.required' => 'Debe ingresar un precio para el producto.',
    		'price.numeric' => 'Ingrese un valor numerico para el campo precio (300.23).',
    		'price.min' => 'No se admiten valores negativos para el campo precio.'
    	];

    	$rules =[
    		'name' => 'required|max:100',
    		'description' => 'required|max:200',
    		'price' => 'required|numeric|min:0'
    	];

    	$this->validate($request, $rules, $messages);

    	$product = Product::find($id);

    	$product->name = $request->input('name');
    	$product->description = $request->input('description');
    	$product->long_description = $request->input('long_description');
    	$product->price = $request->input('price');

    	$product->save(); // Ejecuta un update y actualiza el producto.

    	return redirect('/admin/products');
    }

    public function delete($id, Request $request)
    {
        $product = Product::find($id);

        $message = 'El Producto <strong>' .$product->name. '</strong> fue borrado.';

        Product::find($id)->delete();

        if ($request->ajax() ) {
            return $message;
        }
    }
}
