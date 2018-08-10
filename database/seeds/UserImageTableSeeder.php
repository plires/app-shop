<?php

use Illuminate\Database\Seeder;
use App\UserImage;

class UserImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(UserImage::class, 15)->create();
    }
}
