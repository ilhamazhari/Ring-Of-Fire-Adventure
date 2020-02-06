<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendor;

class VendorController extends Controller
{
  public function index()
  {
    $vendor = Vendor::all()->sortByDesc('created_at');

    return view('webmanager.vendor', ['vendor' => $vendor]);
  }

  public function store(Request $request)
  {
    $request->validate([
      'name' => 'required',
      'email' => 'required|unique:users',
      'city_code' => 'required|numeric',
      'shipping_address' => 'required',
    ]);

    $vendor = new Vendor;
    $vendor->name = $request->name;
    $vendor->email = $request->email;
    $vendor->city_code = $request->city_code;
    $vendor->shipping_address = $request->shipping_address;
    if($vendor->save()){
      return redirect()->back()->with('success', 'Vendor added successfully');
    }
  }

  public function update(Vendor $vendor,Request $request)
  {
    $request->validate([
      'name' => 'required',
      'email' => 'required|unique',
      'city_code' => 'required|numeric',
      'shipping_address' => 'required',
    ]);

    $vendor->name = $request->name;
    $vendor->email = $request->email;
    $vendor->city_code = $request->city_code;
    $vendor->shipping_address = $request->shipping_address;

    if($request->hasFile('pic')){
      $image = $request->pic;

      $name = date('Ymd') . '-' . $image->getClientOriginalName();
      $path = public_path('/images/vendor/');

      $image->move($path, $name);

      $vendor->pic = $name;
    }

    if($vendor->save()){
      return redirect()->back()->with('success', 'Vendor updated successfully');
    }else{
      return redirect()->back()->with('error', 'Vendor cant be updated');
    }

  }

  public function destroy(Vendor $vendor)
  {
    if($vendor->destroy())
    {
      return redirect()->back()->with('success', 'Vendor removed successfully');
    }else{
      return  redirect()->back()->with('error', 'Cant removed vendor');
    }
  }
}
