<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\UserImage;
use App\Cart;

class User extends Authenticatable
{
  use Notifiable;
  use SoftDeletes;

  //User->images
  public function images(){
      return $this->hasMany(UserImage::class);
  }

  //User->carts
  public function carts(){
      return $this->hasMany(cart::class);
  }

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'name', 'email', 'password',
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
    'password', 'remember_token',
  ];

  /* Accesor para el cart_id del usuario */
  public function getCartAttribute(){

    if (Auth::user()) {
      $userId = $this->id;
    } else {
      $request->session()->put('userId', '123456');
      $userId = 123456;
    }



    $cart = $this->carts()->where('status', 'Active')->first();

    if ($cart) {
      return $cart;
    } else {
      $cart = new Cart();
      $cart->status = 'Active';
      $cart->user_id = $userId;
      $cart->save();

      return $cart;
    }

  }
}
