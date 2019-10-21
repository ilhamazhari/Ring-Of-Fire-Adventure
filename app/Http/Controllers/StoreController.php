<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Transaction;
use App\TransactionItem;
use App\Veritrans\Midtrans;

class StoreController extends Controller
{
  public function index()
  {
  	$products = Products::all()->sortByDesc('created_at');

    return view('store', ['products' => $products]);
  }

  public function products($productSlug)
  {
  	$slug = str_replace("-", " ", $productSlug);

  	$products = Products::where("name", $slug)->get();

  	return response()->json($products);
  }

	public function cart()
	{
		//
	}

	public function addToCart(Products $products)
	{
		if(!$products){
			return redirect()->back()->with('error', 'Product not found');
		}

		$cart = session()->get('cart');

		if(isset($cart[$products->id])){
			$cart[$products->id]['quantity']++;
			session()->put($cart);

			return redirect()->back()->with('success', 'Product added to cart successfully');
		}else{
			$cart[$products->id] = [
					'id' => $products->id,
					'name' => $products->name,
          'weight' => $products->weight,
					'price' => $products->price,
					'quantity' => 1
			];
			session()->put('cart', $cart);

			return redirect()->back()->with('success', 'Product added to cart successfully');
		}
	}

	public function updateCart(Request $request)
	{
		$cart = session()->get('cart');

		if($request->id AND $request->quantity){
			$cart[$request->id]['quantity'] = $request->quantity;

			session()->put('cart', $cart);
		}
	}

	public function removeCart(Request $request)
	{
		//
	}

  public function storeCheckout(Request $request)
  {
    $request->validate([
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'courier' => 'required'
    ]);

    $shipping_info = array('first_name' => $request->first_name, 'last_name' => $request->last_name, 'email' => $request->email, 'phone' => $request->phone, 'country' => $request->country_code, 'province' => $request->province, 'city' => $request->city, 'subdistrict' => $request->subdistrict, 'postal_code' => $request->postal_code, 'address' => $request->address, 'courier' => $request->courier);

    $billDetails = new Transaction;

    $transaction_id = Transaction::count();
    $transaction_id += 1;
    $transactioncode = "ROFA/".date("Y/m/d")."/".$transaction_id;

    $billDetails->transaction_code = $transactioncode;
    $billDetails->type = 'Store';
    $billDetails->first_name = $request->first_name;
    $billDetails->last_name = $request->last_name;
    $billDetails->email = $request->email;
    $billDetails->customer_info = json_encode($shipping_info);
    $billDetails->billing_info = json_encode($shipping_info);
    $billDetails->shipping_info = json_encode($shipping_info);
    $billDetails->subtotal = $request->subtotal;
    $billDetails->tax = $request->tax;
    $billDetails->total = $request->total;
    $billDetails->totalweight = $request->totalweight;
    $billDetails->courier_service = $request->courier_service;
    $billDetails->shipping_cost = $request->shipping_cost;
    $billDetails->shipping_status = $request->courier . ': On Process';
    $billDetails->save();

    $transactionItem = new TransactionItem;
    $item = [];
    foreach($request->session()->get('cart') as $ca => $cart){
      $item[] = [
        'transaction_id' => $billDetails->id,
        'quantity' => $cart['quantity'],
        'products_id' => $cart['id'],
      ];
    }
    $transactionItem->insert($item);

    $billing = Transaction::where('transaction_code', $transactioncode)->get();

    return view('pay', ['billing' => $billing]);
  }

  public function getShippingCost(Request $request)
  {
    $curl = curl_init();
    $apikey = config('app.rajaongkir');

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://api.rajaongkir.com/starter/cost',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => 'origin='.$request->origin.'&destination='.$request->destination.'&weight='.$request->weight.'&courier='.$request->courier,
      CURLOPT_HTTPHEADER => array(
        'content-type: application/x-www-form-urlencoded',
        'key: '.$apikey
      ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);

    return $response;
  }
}
