<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductImage;
use App\Products;

class ProductImageController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
  	return redirect()->back();
  }

  public function show($image)
  {
  	$images = ProductImage::where('products_id', $image)->get();
  	$products = Products::find($image);

  	return view('webmanager.productimage', ['images' => $images, 'productName' => $products->name, 'productId' => $products->id]);
  }

  public function store(Request $request)
  {
  	$request->validate([
  		'filename' => 'required',
  		'filename.*' => 'image|mimes:jpeg,png,jpg|max:4192'
  	]);

  	if($request->hasfile('filename')){
  		$image = $request->file('filename');

  		$currentTime = date('YmdHis');
  		$name = $image->getClientOriginalName();
  		$newName = $currentTime . $name;

  		$image->move(public_path() . '/images/products/', $newName);

  		$productImg = new ProductImage;

  		$productImg->products_id = $request->products_id;
  		$productImg->filename = $newName;
  		$productImg->alt = $request->alt;

  		$productImg->save();

  		return redirect()->back()->with('success', 'Image added successfully!');
  	}

  }
}
