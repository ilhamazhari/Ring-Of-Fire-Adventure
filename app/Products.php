<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';

    protected $fillable = ['name', 'category', 'description', 'price', 'discount', 'tags'];

    public function productImage()
    {
    	return $this->hasMany('App\ProductImage');
    }
}
