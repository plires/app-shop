<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UserImage extends Model
{
	use SoftDeletes;
  
  //Image->user
  public function user(){
  	return $this->belongsTo(User::class);
  }
}
