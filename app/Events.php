<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $table = 'events';

    protected $fillable = ['name', 'image', 'start_date', 'end_date', 'price', 'description', 'quantity'];

    public function bookEvents()
    {
      $this->hasMany('App\BookEvents');
    }
}
