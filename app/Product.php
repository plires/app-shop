<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\ProductImage;

class Product extends Model
{

  //Product->category
	public function category(){
		return $this->belongsTo(Category::class);
	}

	//Product->images
	public function images(){
		return $this->hasMany(ProductImage::class);
	}

}
