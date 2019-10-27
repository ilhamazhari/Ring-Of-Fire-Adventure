<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $table = 'vendor';

    protected $fillable = ['name', 'email', 'city_code', 'pic', 'shipping_address'];
}
