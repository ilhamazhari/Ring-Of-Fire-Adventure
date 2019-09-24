<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;

use App\Veritrans\Midtrans;

class PaymentController extends Controller
{

    public function checkout()
    {
    	return view('checkout');
    }

    public function payment()
    {
    	//
    }

    public function snapToken(Request $request)
    {
        $midtrans = new Midtrans;

        $transaction_details = array(
            'order_id' => $request->order_id,
            'gross_amount' => $request->gross_amount
        );

        $item = [
            array(
                'id' => 'shipping1',
                'name' => 'shipping_price',
                'price' => $request->shipping_price,
                'quantity' => 1
            ),
            array(
                'id' => 'tax1',
                'name' => 'tax_price',
                'price' => $request->tax,
                'quantity' => 1
            )
        ];

        foreach($request->session()->get('cart') as $products)
        {
            $item[] = $products;
        }

        $transactionCode = Transaction::where('transaction_code', $request->order_id)->get();
        $ca = json_decode($transactionCode->customer_address);
        $bi = json_decode($transactionCode->billing_info);
        $si = json_decode($transactionCode->shipping_info);

        $customer_details = array(
            'first_name' => $ca['first_name'],
            'last_name' => $ca['last_name'],
            'email' => $transactionCode->email,
            'phone' => $ca['phone'],
            'billing_address' => $bi,
            'shipping_address' => $si

        );

        $credit_card['secure'] = true;

        $time = time();
        $custom_expiry = array(
            'start_time' => date("Y-m-d H:i:s O",$time),
            'unit'       => 'hour', 
            'duration'   => 2
        );

        $transaction_data = array(
            'transaction_details' => $transaction_details,
            'item_details' => $item,
            'customer_details' => $customer_details,
            'credit_card' => $credit_card,
            'expiry' => $custom_expiry
        );

        try{
            $snap_token = $midtrans->getSnapToken($transaction_data);
            echo $snap_token;
        }catch(Exception $e){
            return $e->getMessage;
        }
    }

    public function snapFinish(Request $request)
    {
        $result = json_decode($request->result_data);
        echo $result->status_message.'<br>';
        echo 'RESULT <br><pre>';
        var_dump($result);
        echo '</pre>';
    }

    public function storeBillDetails(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'courier' => 'required'
        ]);

        $shipping_info = array('first_name' => $request->first_name, 'last_name' => $request->last_name, 'email' => $request->email, 'phone' => $request->phone, 'province' => $request->province, 'city' => $request->city, 'postal_code' => $request->postal_code, 'address' => $request->address, 'courier' => $request->courier);

        $billDetails = new Transaction;

        $transaction_id = Transaction::count();
        $transaction_id += 1;
        $transactioncode = "ROFA/".date("Y/m/d")."/".$transaction_id;

        $billDetails->transaction_code = $transactioncode;
        $billDetails->first_name = $request->first_name;
        $billDetails->last_name = $request->last_name;
        $billDetails->email = $request->email;
        $billDetails->customer_address = json_encode($shipping_info);
        $billDetails->billing_info = json_encode($shipping_info);
        $billDetails->shipping_info = json_encode($shipping_info);
        $billDetails->subtotal = $request->subtotal;
        $billDetails->tax = $request->tax;
        $billDetails->shipping_price = $request->shipping_price;
        $billDetails->total = $request->total;
        $billDetails->save();

        $billing = Transaction::where('transaction_code', $transactioncode)->get();

        return view('pay', ['billing' => $billing]);
    }
}
