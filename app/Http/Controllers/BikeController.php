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
        $path = public_path('/images/events/');

        $image->move($path, $newName);

        $events = new Events;

        $events->name = $request->name;
        $events->image = $newName;
        $events->start_date = $request->start_date;
        $events->end_date = $request->end_date;
        $events->description = $request->description;
        $events->price = $request->price;
        $events->quantity = $request->quantity;
        $events->save();

        return redirect()->back()->with('success', 'Events added successfully');
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
