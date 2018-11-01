<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Product;
use Auth;

class ZoneController extends Controller
{
    public function index()
    {
      if (!session()->has('cart')) {
        session()->put('cart', array());
      }

      return view('pasos.index');
    }

    public function pack(request $request)
    {
      
      $zone = $request->input('zone');

      $request->session()->put('zone', $zone);
    	return view('pasos.pack');
    }

    public function packGet()
    {
      return view('pasos.pack');
    }

    public function chooseGet()
    {
      $products = Product::all();
      if (session()->has('cart')) {
        $cart = session()->get('cart');
      }
      return view('pasos.choose')->with(compact('products', 'cart'));
    }

    public function choose(request $request)
    {
    	$pack = $request->input('pack');
    	$frecuency = $request->input('frecuency');

    	if ($pack == 'Small') {
        $request->session()->put('maxPiece', 2);
      } elseif ($pack == 'Medium') {
        $request->session()->put('maxPiece', 4);
      } elseif ($pack == 'Large') {
        $request->session()->put('maxPiece', 8);
    	}

      $request->session()->put('pack', $pack);
      $request->session()->put('frecuency', $frecuency);
      
    	$products = Product::all();
    	return view('pasos.choose')->with(compact('products'));
    }

    public function store($id, $operation, request $request)
    {
      $product = Product::find($id);

      if ($operation == 'suma') {
        session()->push('cart', $id);
      }
      redirect('pasos.choose');

      $message = 'El Producto <strong>' .$product->name. '</strong> fue agregado al carro de compras.';

      if ($request->ajax() ) {
          return $data;
      }
    }
}
