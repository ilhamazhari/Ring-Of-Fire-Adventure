<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transaction';

    protected $fillable = ['transaction_code', 'type', 'first_name', 'last_name', 'customer_address', 'billing_info', 'shipping_info', 'subtotal', 'tax', 'total', 'totalweight', 'status', 'courier_service', 'shipping_cost', 'shipping_status', 'snap_token', 'resi'];

    public function transactionItem()
    {
    	return $this->hasMany('App\TransactionItem');
    }

    public function setPending()
    {
    	$this->attributes['status'] = 'pending';
    	self::save();
    }

    public function setSuccess()
    {
    	$this->attributes['status'] = 'success';
    	self::save();
    }

    public function setFailed()
    {
    	$this->attributes['status'] = 'failed';
    	self::save();
    }

    public function setExpired()
    {
    	$this->attributes['status'] = 'expired';
    	self::save();
    }
}
