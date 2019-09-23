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
			$cart = [
				$products->id => [
					'id' => $products->id,
					'name' => $products->name,
					'price' => $products->price,
					'quantity' => 1
				]
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
}
