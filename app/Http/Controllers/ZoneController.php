<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Auth;

class ZoneController extends Controller
{
    public function index()
    {
    	return view('pasos.index');
    }

    public function pack(request $request)
    {
      // borro variable de sesion
      $request->session()->pull('zone');
      
      $zone = $request->input('zone');

      $request->session()->push('zone', $zone);
    	return view('pasos.pack')->with(compact('zone'));
    }

    public function choose(request $request)
    {

      dd(Auth::user(), Auth::Guest());
      // borro variable de sesion
      $request->session()->pull('pack');
      $request->session()->pull('frecuency');

      if ($request->session()->has('zone')) {
        echo $request->session()->get('mensaje'); // si existe imprime el valor de la variable mensaje
      }

    	$zone = $request->input('zone');
    	$pack = $request->input('pack');
    	$frecuency = $request->input('frecuency');

    	if ($pack == 'Small') {
    		$maxPiece = 2;
    	} elseif ($pack == 'Medium') {
    		$maxPiece = 4;
    	} elseif ($pack == 'Large') {
    		$maxPiece = 8;
    	}

      $request->session()->push('pack', $pack);
      $request->session()->push('frecuency', $frecuency);

    	$products = Product::all();
    	return view('pasos.choose')->with(compact('zone', 'pack', 'frecuency', 'products', 'maxPiece' ));
    }
}
