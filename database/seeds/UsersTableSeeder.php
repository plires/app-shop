<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {

  	User::create([
      'name' => 'Pablo',
      'email' => 'pablo@librecomunicacion.net',
      'password' => bcrypt('123'),
      'admin' => true,
      'confirmed' => true,
      'confirmation_code' => 'saraza'
  	]);

    factory(User::class, 15)->create();
  }
}
