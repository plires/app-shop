<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Product;

class ProductImage extends Model
{
	//use SoftDeletes;
  
  //Image->product
  public function product(){
  	return $this->belongsTo(Product::class);
  }

  // accesor
  public function getUrlAttribute(){

  	if (substr($this->image, 0, 4) === 'http') {
  		return $this->image;
  	}

  	return '/images/products/' . $this->image;

  }

}
