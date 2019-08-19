<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class ProductsController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
		$products = Products::all();

		return view('webmanager.products', [ 'products' => $products ]);
	}

	public function store(Request $request)
	{
		$products = new Products;

		$products->name = $request->name;
		$products->category = $request->category;
		$products->description = $request->description;
		$products->price = $request->price;
		$products->discount = $request->discount;
		$products->tags = $request->tags;

		$products->save();
		return redirect()->back();
	}
}
