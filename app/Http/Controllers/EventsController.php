<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Events;

class EventsController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}


	public function index()
	{
		$events = Events::all()->sortByDesc('date');

		return view('webmanager.events', ['events' => $events]);
	}

    public function store(Request $request)
    {
    	$request->validate([
    		'name' => 'required',
    		'image' => 'required',
    		'image.*' => 'image|mimes:jpeg,png,jpg',
    		'start_date' => 'required|date',
    		'end_date' => 'required|date',
        'price' => 'required|numeric',
        'quantity' => 'required',
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
    	}
    	
    }

    public function show(Events $events)
    {
    	return response()->json($events);
    }

    public function edit(Events $events)
    {
    	return redirect()->back();
    }

    public function update(Request $request,Events $events)
    {
    	$request->validate([
        'name' => 'required',
        'start_date' => 'required',
        'end_date' => 'required',
        'price' => 'required|numeric',
        'quantity' => 'required',
      ]);

      if($request->hasFile('image')){
        $image = $request->image;

        $name = date('Ymd') . '-' . $image->getClientOriginalName();
        $path = public_path('/images/events/');

        $image->move($path, $name);

        $events->image = $name;
      }

      $events->name = $request->name;
      $events->start_date = $request->start_date;
      $events->end_date = $request->end_date;
      $events->description = $request->description;
      $events->price = $request->price;
      $events->quantity = $request->quantity;
      $events->save();

      return redirect()->back()->with('success', 'Events updated successfully');
    }

    public function destroy(Events $events)
    {
      File::delete(public_path() . '/images/events' . $events->image);
    	$events->delete();

      return redirect()->back()->with('success', 'Event deleted successfully');
    }
}
