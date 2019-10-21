<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Products;

class ProductsController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
		$products = Products::all()->sortBy('name');

		return view('webmanager.products', [ 'products' => $products ]);
	}

	public function create()
	{
		return redirect()->back();
	}

	public function store(Request $request)
	{
		$request->validate([
			'name' => 'required',
			'category' => 'required',
			'price' => 'required|numeric',
      'weight' => 'required|numeric',
			'discount' => 'numeric|nullable',
		]);
		
		$products = new Products;

		$products->name = $request->name;
		$products->category = $request->category;
		$products->description = $request->description;
		$products->price = $request->price;
    $products->weight = $request->weight;
		$products->discount = $request->discount;
		$products->tags = $request->tags;
		$products->save();

		return redirect()->back()->with('success', 'Products added successfully!');
		
	}

	public function show(Products $product)
	{
		return view('storedetails', ['product' => $product]);
	}

	public function edit(Products $product)
	{
		return redirect()->back();
	}

	public function update(Request $request, Products $product)
	{
		$request->validate([
			'name' => 'required',
			'category' => 'required',
			'price' => 'required|numeric',
			'discount' => 'numeric|nullable',
		]);

		$product->update($request->all());

		return redirect()->back()->with('success', 'Products updated successfully');
	}

	public function destroy($product)
	{
		$products = Products::find($product);

		$products->delete();

		return redirect()->back()->with('success', 'Product deleted successfully');
	}
	
}
