<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $table = 'product_vendor';

    protected $fillable = ['name', 'email', 'city_code', 'pic', 'shipping_address'];

    public function products()
    {
      return $this->hasMany('App\Products');
    }
}
