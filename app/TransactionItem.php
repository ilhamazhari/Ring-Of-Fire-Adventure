<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionItem extends Model
{
    protected $table = 'transaction_item';

    protected $fillable = ['transaction_id', 'quantity', 'products_id', 'events_id'];

    public function transaction()
    {
    	return $this->belongsTo('App\Transaction');
    }
}
