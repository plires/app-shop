<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('carts', function (Blueprint $table) {
      $table->increments('id');

      $table->string('order_date')->nullable();
      $table->date('arrived_date')->nullable();
      $table->date('status');
      //FK
      $table->Integer('status_id')->unsigned();
      $table->foreign('status_id')->references('id')->on('statuses');
      //FK
      $table->Integer('user_id')->unsigned();
      $table->foreign('user_id')->references('id')->on('users');

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
    Schema::dropIfExists('carts');
  }
}
