<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $table = 'trip';

    protected $fillable = ['name', 'content', 'minimum_pax', 'price', 'bikerent'];
}
