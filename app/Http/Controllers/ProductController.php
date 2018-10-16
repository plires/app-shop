<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function show($id)
    {
    	$product = Product::find($id);
    	return view('products.show')->with(compact('product'));
    }

    public function getProduct(Request $request, $id)
    {

    	//session()->pull('productId');



    	$request->session()->push('productId', $id);

    	if ($request->session()->has('productId')) {
		    echo $request->session()->get('productId'); // si existe imprime el valor de la variable mensaje
			}


    	//dd($data);

	    //$message = 'El producto <strong>' .$product->name. '</strong> fue añadido al carrito de compras.';

	    if ($request->ajax() ) {
	        return;
	    }
    }


}
