<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Product;
use App\ProductImage;

class ProductsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {

    //Una manera de poblar las tablas
  	//factory(Category::class, 5)->create();
  	//factory(Product::class, 50)->create();
  	//factory(ProductImage::class, 100)->create();

    // Otro modo de hacerlo:
    $categories = factory(Category::class, 5)->create();
    $categories->each(function ($category) {
      $products = factory(Product::class, 20)->make();
      $category->products()->saveMany($products);

      $products->each(function ($p){
        $images = factory(ProductImage::class, 5)->make();
        $p->images()->saveMany($images);
      });
    });

  }


}
