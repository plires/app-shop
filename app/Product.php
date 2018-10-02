<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\ProductImage;

class Product extends Model
{
	use SoftDeletes;

  //Product->category
	public function category(){
		return $this->belongsTo(Category::class);
	}

	//Product->images
	public function images(){
		return $this->hasMany(ProductImage::class);
	}

	// campo controlado para la imagen destacada del producto
	public function getFeaturedImageUrlAttribute() {

		// si existe una imagen destacada la seleccionamos
		$featuredImage = $this->images()->where('featured', true)->first();

		// si NO existe una imagen destacada seleccionamos la primera
		if (!$featuredImage){
			$featuredImage = $this->images()->first();
		}

		if ($featuredImage){
			return $featuredImage->url;
		}

		// si no existe la imagen para el producto seleccionamos la imagen por default
		return 'images/products/no-image.gif';

	}

}
