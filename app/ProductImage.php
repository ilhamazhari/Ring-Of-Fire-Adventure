<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $table = 'product_image';

    protected $fillable = ['products_id', 'filename', 'alt'];

    public function products()
    {
    	return $this->belongsTo('App\Products');
    }
}
