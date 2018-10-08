<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products = Product::paginate(9);

      return view('user.index')->with(compact('products'));
    }

    public function test()
    {
        return view('test');
    }

    public function url()
    {
        return view('success');
    }
}
