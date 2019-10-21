<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use App\TransactionItem;
use App\Products;
use App\Events;

class TransactionController extends Controller
{
    public function index()
    {
      $transaction = Transaction::all()->sortByDesc('created_at');
      return view('webmanager.transaction', ['transaction' => $transaction]);
    }

    public function show(Transaction $transaction)
    {
      $transactionItem = TransactionItem::where('transaction_id', $transaction->id)->get();
      $item = array();
      if($transaction->type == 'Store'){
        foreach($transactionItem as $ti){
          $products = Products::where('id', $ti->products_id)->first();
          $item[] = ['name' => $products->name, 'price' => $products->price];
        }
      }else if($transaction->type == 'Events'){
        foreach($transactionItem as $ti){
          $events = Events::where('id', $ti->events_id)->first();
          $item[] = ['name' => $events->name, 'price' => $events->price];
        }
      }
      return view('webmanager.transactiondetails', ['transaction' => $transaction, 'transaction_item' => $item]);
    }

    public function create()
    {
      //
    }

    public function store(Request $request)
    {
      //
    }

    public function edit()
    {
      //
    }

    public function update()
    {
      //
    }

    public function destroy()
    {
      //
    }

    public function submitResi(Request $request)
    {
      $transaction = Transaction::where('id', $request->id)->first();
      $transaction->resi = $request->resi;
      $transaction->save();

      return redirect()->back();
    }
}
