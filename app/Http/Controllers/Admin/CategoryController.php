<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CategoryController extends Controller
{
    public function index() {
      $categories = Category::paginate(10);

      return view('admin.categories.index')->with(compact('categories')); // ver Listado de categorias
    }
}
