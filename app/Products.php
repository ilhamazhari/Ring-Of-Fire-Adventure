<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';

    protected $fillable = ['vendor_id', 'name', 'category', 'description', 'price', 'weight', 'discount', 'tags'];

    public function productImage()
    {
    	return $this->hasMany('App\ProductImage');
    }

    public function productVendor()
    {
      return $this->belongsTo('App\Vendor', 'vendor_id');
    }
}
