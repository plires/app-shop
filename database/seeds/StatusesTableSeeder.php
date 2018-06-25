<?php

use Illuminate\Database\Seeder;
use App\Status;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	Status::create([
      	'name' => 'Active',
      	'description' => 'Los productos estan en la cesta del cliente'
  		]);

  		Status::create([
      	'name' => 'Pending',
      	'description' => 'Los productos estan en la Orden y se encuentran pendientes'
  		]);

  		Status::create([
      	'name' => 'Approved',
      	'description' => 'Los productos estan en la Orden y se encuentran aprobados para el envio'
  		]);

  		Status::create([
      	'name' => 'Calcelled',
      	'description' => 'El pedido esta cancelado y el carrito liberado'
  		]);

  		Status::create([
      	'name' => 'Finished',
      	'description' => 'El pedido esta completo'
  		]);

    }
}
