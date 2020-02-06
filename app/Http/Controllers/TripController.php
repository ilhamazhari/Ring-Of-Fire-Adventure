<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;

class TripController extends Controller
{
    public function index()
    {
      $trip = Trip::all();

      return view('trip', ['trip' => $trip]);
    }

    public function show(Trip $trip)
    {
      //
    }

    public function update(Trip $trip, Request $Request)
    {
      //
    }

    public function destroy(Trip $trip)
    {
      //
    }
}
