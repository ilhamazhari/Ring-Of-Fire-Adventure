<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transaction';

    protected $fillable = ['transaction_code', 'first_name', 'last_name', 'customer_address', 'billing_info', 'shipping_info', 'subtotal', 'tax', 'shipment', 'total'];

    public function transactionItem()
    {
    	return $this->hasMany('App\TransactionItem');
    }
}
