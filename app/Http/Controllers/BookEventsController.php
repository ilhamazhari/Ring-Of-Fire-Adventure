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

      $customer_info = array('first_name' => $request->first_name, 'last_name' => $request->last_name, 'email' => $request->email, 'phone' => $request->phone, 'country' => $request->country, 'province' => $request->province, 'city' => $request->city, 'postal_code' => $request->postal_code, 'address' => $request->address);

      $transaction = new Transaction;

      $transaction_id = Transaction::count();
      $transaction_id += 1;
      $transactioncode = "ROFA/".date("Y/m/d")."/".$transaction_id;

      $transaction->transaction_code = $transactioncode;
      $transaction->first_name = $request->first_name;
      $transaction->last_name = $request->last_name;
      $transaction->email = $request->email;
      $transaction->customer_address = json_encode($customer_info);
      $transaction->billing_info = json_encode($customer_info);
      $transaction->shipping_info = json_encode($customer_info);
      $transaction->subtotal = $subtotal;
      $transaction->tax = $tax;
      $transaction->shipping_price = 0;
      $transaction->total = $total;
      $transaction->save();

      $transactionItem = new TransactionItem;

      $transactionItem->transaction_id = $transaction->id;
      $transactionItem->type = 'Event Booking';
      $transactionItem->quantity = $request->quantity;
      $transactionItem->events_id = $request->events_id;
      $transactionItem->save();

      $billing = Transaction::where('transaction_code', $transactioncode)->get();



      return view('pay', ['billing' => $billing]);
    }
}
