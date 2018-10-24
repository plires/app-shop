<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CartDetail;
use App\User;
use App\Product;

class cartDetailController extends Controller
{
    public function Store(Request $request, $id)
    {

    	$product = Product::find($id);

    	$cartDetail = new CartDetail();
    	$cartDetail->cart_id = 1;
    	$cartDetail->product_id = $product->id;
    	$cartDetail->quantity = $request->quantity;
    	$cartDetail->price = $product->price;
    	$cartDetail->save();

    	$message = 'El producto fue agregado al carrito';


	    if ($request->ajax() ) {
	        return $message;
	    }
    }
}
