<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events;
use App\BookEvents;
use App\Transaction;
use App\TransactionItem;

class BookEventsController extends Controller
{
    public function index()
    {
      $events = Events::all()->sortByDesc('start_date');

      return view('events', ['events' => $events]);
    }

    public function eventDetails($events)
    {
      $events = str_replace('-', ' ', $events);
      $ev = Events::where('name', $events)->get();
      return view('eventdetails', ['events' => $ev]);
    }

    public function eventBooking(Events $events, Request $request)
    {
      $request->validate([
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'quantity' => 'required',
      ]);

      $subtotal = $request->quantity * $events->price;
      $tax = $subtotal * 0.1;
      $total = $subtotal + $tax;

      $general_info = array('first_name' => $request->first_name, 'last_name' => $request->last_name, 'email' => $request->email, 'phone' => $request->phone, 'country' => $request->country, 'province' => $request->province, 'city' => $request->city, 'postal_code' => $request->postal_code, 'address' => $request->address);
      $customer_info = array('first_name' => $request->first_name, 'last_name' => $request->last_name, 'email' => $request->email, 'phone' => $request->phone, 'country' => $request->country, 'province' => $request->province, 'city' => $request->city, 'postal_code' => $request->postal_code, 'address' => $request->address, 'riders_data' => array('riders_name' => $request->riders_name, 'riders_email' => $request->riders_email, 'riders_phone' => $request->riders_phone, 'riders_address' => $request->riders_address, 'riders_blood', 'riders_vehicle' => $request->riders_vehicle, 'riders_vehicleplate' => $request->riders_vehicleplate), 'emergency_contact' => array('emergency_name' => $request->emergency_name, 'emergency_relation' => $request->emergency_relation, 'emergency_phone' => $request->emergency_phone));

      $transaction = new Transaction;

      $transaction_id = Transaction::count();
      $transaction_id += 1;
      $transactioncode = "ROFA/".date("Y/m/d")."/".$transaction_id;

      $transaction->transaction_code = $transactioncode;
      $transaction->type = 'Events';
      $transaction->first_name = $request->first_name;
      $transaction->last_name = $request->last_name;
      $transaction->email = $request->email;
      $transaction->customer_info = json_encode($customer_info);
      $transaction->billing_info = json_encode($general_info);
      $transaction->shipping_info = json_encode($general_info);
      $transaction->subtotal = $subtotal;
      $transaction->tax = $tax;
      $transaction->shipping_price = 0;
      $transaction->total = $total;
      $transaction->save();

      $transactionItem = new TransactionItem;

      $transactionItem->transaction_id = $transaction->id;
      $transactionItem->quantity = $request->quantity;
      $transactionItem->events_id = $request->events_id;
      $transactionItem->save();

      $billing = Transaction::where('transaction_code', $transactioncode)->get();



      return view('pay', ['billing' => $billing]);
    }
}
