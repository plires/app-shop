<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\Product;

class CategoryController extends Controller
{
  public function index() 
  {
    $categories = Category::paginate(10);
    return view('admin.categories.index')->with(compact('categories')); // ver Listado de categorias
  }

  public function create() 
  {
  	$categories = Category::all();

  	$pepe = $this->quantityProducts(2);
  	//$categories = DB::table('categories')->get();
    return view('admin.categories.create')->with(compact('categories', 'pepe')); // ver formulario de registro
  }

  public function store(request $request) 
  {
  	$categories = DB::table('categories')->select('name')->get();

    $messages = [
        'name.required' => 'Debe ingresar un nombre para la categoría.',
        'name.max' => 'El campo nombre no puede exceder los 100 caracteres.',
        'description.max' => 'El campo descripción no puede exceder los 200 caracteres.',
        'slug.max' => 'El campo slug no puede exceder los 100 caracteres.',
        'picture.mimes' => 'La imágen de la categoría solo puede ser .JPG o .PNG.',
        'picture.max' => 'La imágen debe ser menor a 1 mb..'
    ];

    if (false) {
    	# code...
    	//array_push($messages['name.exist' => 'El nombre de la categoría ya esta en uso, elija otro.']);
    }

    $rules =[
        'name' => 'required|max:100',
        'description' => 'max:200',
        'slug' => 'max:200',
        'picture' => 'mimes:jpeg,jpg,png | max:1000'
    ];

    $this->validate($request, $rules, $messages);

    $categoy = new Category();
    $categoy->name = $request->input('name');
    $categoy->description = $request->input('description');
    $categoy->slug = $request->input('slug');
    //$categoy->picture = $request->input('picture');

    $categoy->save(); // Ejecuta un insert y agrega la categoria.


    return redirect('/admin/categories');
      
  }

	public function edit($id) 
  {
    $category = Category::find($id);

    return view('admin.categories.edit')->with(compact('category')); // ver formulario de registro
  }

  public function update(request $request, $id) 
  {

    $messages = [
	    'name.required' => 'Debe ingresar un nombre para la categoría.',
	    'name.max' => 'El campo nombre no puede exceder los 100 caracteres.',
	    'description.max' => 'El campo descripción no puede exceder los 200 caracteres.',
	    'slug.max' => 'El campo slug no puede exceder los 100 caracteres.',
	    'picture.mimes' => 'La imágen de la categoría solo puede ser .JPG o .PNG.',
	    'picture.max' => 'La imágen debe ser menor a 1 mb..'
    ];

    $rules =[
      'name' => 'required|max:100',
      'description' => 'max:200',
      'slug' => 'max:200',
      'picture' => 'mimes:jpeg,jpg,png | max:1000'
    ];

    $this->validate($request, $rules, $messages);

    $categoy = Category::find($id);
    $categoy->name = $request->input('name');
    $categoy->description = $request->input('description');
    $categoy->slug = $request->input('slug');
    //$categoy->picture = $request->input('picture');

    $categoy->save(); // Ejecuta un update y agrega la categoria.

    return redirect('/admin/categories');
  }

	public function delete($id, Request $request)
	{
    $category = Category::find($id);

    $message = 'La Categoría <strong>' .$category->name. '</strong> fue borrada.';

    Category::find($id)->delete();

    if ($request->ajax() ) {
        return $message;
    }
	}


  public function quantityProducts($id) 
  {
  	$quantityProducts = Product::where('category_id', $id)->count();
  	return $quantityProducts;
  }

}
