<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
	use SoftDeletes;
	
    return $this->hasMany(CartDetail::class);
}
