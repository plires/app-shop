<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ZoneController extends Controller
{
    public function index()
    {
    	return view('pasos.index');
    }

    public function pack(request $request)
    {
    	$zone = $request->input('acassuso');
    	return view('pasos.pack')->with(compact('zone'));
    }

    public function choose(request $request)
    {
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

    	$products = Product::all();
    	return view('pasos.choose')->with(compact('zone', 'pack', 'frecuency', 'products', 'maxPiece' ));
    }
}
