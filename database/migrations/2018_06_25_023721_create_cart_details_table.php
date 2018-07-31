<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartDetailsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('cart_details', function (Blueprint $table) {
      $table->increments('id');

      //FK
      $table->Integer('cart_id')->unsigned();
      $table->foreign('cart_id')->references('id')->on('carts');

      //FK
      $table->Integer('product_id')->unsigned();
      $table->foreign('product_id')->references('id')->on('products');
      
      $table->float('price');
      $table->integer('quantity');
      $table->integer('discount'); // int 25%

      $table->softDeletes();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('cart_details');
  }
}
