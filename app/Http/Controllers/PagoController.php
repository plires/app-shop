<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MP;

class PagoController extends Controller
{

	public function Index()
	{
		return view('index'); // ver prueba
	}

	// Redirect to order payment gateway
	//return redirect()->to($order->generatePaymentGateway());


	public function generatePaymentGateway()
	{
	    $mp = new MP (env('MP_CLIENT_ID'), env('MP_CLIENT_SECRET'));

	    $current_user = auth()->user();

	    $preference_data = array (
			  'items' => 
			  array (
			    0 => 
			    array (
			      'title' => 'Title of what you are paying for. It will be displayed in the payment process.',
			      'currency_id' => 'ARS',
			      'picture_url' => 'https://www.mercadopago.com/org-img/MP3/home/logomp3.gif',
			      'description' => 'Item description',
			      'quantity' => 1,
			      'unit_price' => 100,
			    ),
			  ),
			  'payer' => 
			  array (
			    'name' => 'user-name',
			    'surname' => 'user-surname',
			    'email' => 'test_user_94915103@testuser.com',
			    'date_created' => '2015-06-02T12:58:41.425-04:00',
			    'phone' => 
			    array (
			      'area_code' => '11',
			      'number' => '4444-4444',
			    ),
			    'identification' => 
			    array (
			      'number' => '12345678',
			    ),
			    'address' => 
			    array (
			      'street_name' => 'Street',
			      'street_number' => 123,
			    ),
			  ),

			  
			  'shipments' => 
			  array (
			    'receiver_address' => 
			    array (
			      'street_number' => 123,
			      'street_name' => 'Street',
			      'floor' => 4,
			      'apartment' => 'C',
			    ),
			  )
			  
			);

	    $preference = $mp->create_preference($preference_data);

	    // return init point to be redirected
	    return redirect()->to($preference['response']['init_point']);
	    //return $preference['response']['init_point'];
	}

	public function escucha(){
		$mp = new MP("2664232087964621", "hrG1pYSukzesHP4UrYlUU7FulvzgpTP4");

		if (!isset($_GET["id"], $_GET["topic"]) || !ctype_digit($_GET["id"])) {
			http_response_code(400);
			return;
		}

		// Get the payment and the corresponding merchant_order reported by the IPN.
		if($_GET["topic"] == 'payment'){
			$payment_info = $mp->get("/v1/payments/" . $_GET["id"]);
			$merchant_order_info = $mp->get("/merchant_orders/" . $payment_info["response"]["order"]["id"]);
		// Get the merchant_order reported by the IPN.
		} else if($_GET["topic"] == 'merchant_order'){
			$merchant_order_info = $mp->get("/merchant_orders/" . $_GET["id"]);
		}

		if ($merchant_order_info["status"] == 200) {
			// If the payment's transaction amount is equal (or bigger) than the merchant_order's amount you can release your items 
			$paid_amount = 0;

			foreach ($merchant_order_info["response"]["payments"] as  $payment) {
				if ($payment['status'] == 'approved'){
					$paid_amount += $payment['transaction_amount'];
				}	
			}

			if($paid_amount >= $merchant_order_info["response"]["total_amount"]){
				if(count($merchant_order_info["response"]["shipments"]) > 0) { // The merchant_order has shipments
					if($merchant_order_info["response"]["shipments"][0]["status"] == "ready_to_ship"){
						print_r("Totally paid. Print the label and release your item.");
					}
				} else { // The merchant_order don't has any shipments
					print_r("Totally paid. Release your item.");
				}
			} else {
				print_r("Not paid yet. Do not release your item.");
			}
		}
	}


	public function ipnNotification(Request $request)
	{

		$mp = new MP("2664232087964621", "hrG1pYSukzesHP4UrYlUU7FulvzgpTP4");

		if (!isset($_GET["id"], $_GET["topic"]) || !ctype_digit($_GET["id"])) {
			http_response_code(400);
			return;
		}

		// Get the payment and the corresponding merchant_order reported by the IPN.
		if($_GET["topic"] == 'payment'){
			$payment_info = $mp->get("/v1/payments/" . $_GET["id"]);
			$merchant_order_info = $mp->get("/merchant_orders/" . $payment_info["response"]["order"]["id"]);
		// Get the merchant_order reported by the IPN.
		} else if($_GET["topic"] == 'merchant_order'){
			$merchant_order_info = $mp->get("/merchant_orders/" . $_GET["id"]);
		}

		if ($merchant_order_info["status"] == 200) {
			// If the payment's transaction amount is equal (or bigger) than the merchant_order's amount you can release your items 
			$paid_amount = 0;

			foreach ($merchant_order_info["response"]["payments"] as  $payment) {
				if ($payment['status'] == 'approved'){
					$paid_amount += $payment['transaction_amount'];
				}	
			}

			if($paid_amount >= $merchant_order_info["response"]["total_amount"]){
				if(count($merchant_order_info["response"]["shipments"]) > 0) { // The merchant_order has shipments
					if($merchant_order_info["response"]["shipments"][0]["status"] == "ready_to_ship"){
						print_r("Totally paid. Print the label and release your item.");
					}
				} else { // The merchant_order don't has any shipments
					print_r("Totally paid. Release your item.");
				}
			} else {
				print_r("Not paid yet. Do not release your item.");
			}
			
	    return header("HTTP/1.1 200 OK");
 			return \Response::json(['HTTP/1.1 200 OK'], 200);
	}

}
