<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bike;

class BikeController extends Controller
{
    public function __construct()
    {
      //
    }

    public function index()
    {
      $bike = Bike::all()->sortByDesc('model');

      return view('webmanager.bike', ['bike' => $bike]);
    }

    public function edit()
    {
      //
    }

    public function store(Request $request)
    {
      $request->validate([
        'manufacturer' => 'required',
        'type' => 'required',
        'model' => 'required',
        'image' => 'required',
        'image.*' => 'image|mimes:jpeg,png,jpg',
      ]);

      if($request->hasfile('image')){
        $image = $request->image;

        $currentTime = date('Ymd');
        $name = $image->getClientOriginalName();
        $newName = $currentTime . '-' . $name;
        $path = public_path('/images/bike/');

        $image->move($path, $newName);

        $bike = new Bike;

        $bike->manufacturer = $request->manufacturer;
        $bike->type = $request->type;
        $bike->model = $request->model;
        $bike->specification = $request->specification;
        $bike->image = $newName;
        $bike->save();

        return redirect()->back()->with('success', 'Bike added successfully');
      }else{
        return redirect()->back()->with('error', 'Some field missing!');
      }
    }

    public function update()
    {
      //
    }

    public function destroy()
    {
      //
    }
}
