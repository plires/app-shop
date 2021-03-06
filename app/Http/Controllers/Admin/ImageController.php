<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\ProductImage;
use File;

class ImageController extends Controller
{
    public function index($id)
    {
    	$product = Product::find($id);
    	$images = $product->images()->orderBy('featured', 'desc')->get();
    	return view('admin.products.images.index')->with(compact('product', 'images'));
    }

    public function store(Request $request, $id)
    {

      $messages = [
        'photo.required' => 'Debe ingresar un archivo de imágen.',
        'photo.max' => 'El archivo no puede exceder los 2 mb.',
        'photo.mimes' => 'Ingrese archivo de imágen con extención (.jpeg, .bmp, .png, .gif).'
      ];

      $rules =[
        'photo' => 'required|max:20|mimes:jpeg,jpg,png,gif'
      ];

      $this->validate($request, $rules, $messages);

      // Guardamos el archivo en el servidor
      $file = $request->file('photo');
      $path = public_path() . '/images/products';
      $fileName = uniqid() . $file->getClientOriginalName();
      $moved = $file->move($path, $fileName);

      // Si se guardo la imagen en el servidor
      if ($moved) {
        // Guardamos el registro en la bdd
        $productImage = new ProductImage();
        $productImage->image = $fileName;
        $productImage->product_id = $id;
        $productImage->save();

      }

      return back();

    }

    public function delete(Request $request)
    {

      $productImage = ProductImage::find($request->input('image_id'));

      if (substr($productImage->image, 0, 4) === 'http') {
        $deleted = true;
      } else {
        $fullPath = public_path() . '/images/products/' . $productImage->image;
        $deleted = file::delete($fullPath);
      }

      // Si se elimino la imagen en el servidor
      if ($deleted){
        // Borramos el registro en la bdd
        $productImage->delete();
      }

      return back();

    }

    public function select($id, $image){

      // Ponemos todas las imagenes del productos con el campo featured en false (sin destacar)
      ProductImage::where('product_id', $id)->update([
          'featured' => false
      ]);


      $productImage = ProductImage::find($image);
      $productImage->featured = true;
      $productImage->save();

      return back();

    }
}
