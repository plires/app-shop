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
      // Si no existe el array cart, lo creamos
      if (!session()->has('cart')) {
        session()->put('cart', []);
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
      return view('pasos.choose')->with(compact('products'));
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
      } else {
        session()->forget('cart', $id);
      }

      $data = $request->session()->all();
      dd($data);

      $message = 'El Producto <strong>' .$product->name. '</strong> fue agregado al carro de compras.';

      if ($request->ajax() ) {
          return $data;
      }
    }
}
