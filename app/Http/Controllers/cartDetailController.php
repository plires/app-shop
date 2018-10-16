<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CartDetail;
use App\User;

class cartDetailController extends Controller
{
    public function Store(Request $request)
    {

    	$cartDetail = new CartDetail();
    	$cartDetail->cart_id = User()->cart->id;
    	$cartDetail->product_id = $request->product_id;
    	$cartDetail->quatity = $request->quatity;
    	$cartDetail->save();

    }
}
