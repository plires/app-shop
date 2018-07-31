<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Product;

class ProductImage extends Model
{
	use SoftDeletes;
  
  //Image->product
  public function product(){
  	return $this->belongsTo(Product::class);
  }
}
