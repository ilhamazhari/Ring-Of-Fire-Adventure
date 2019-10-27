<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bike extends Model
{
    protected $table = 'bikerent';

    protected $fillable = ['manufacturer', 'type', 'model'];
}
