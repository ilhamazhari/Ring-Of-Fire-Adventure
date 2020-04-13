<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Member extends Authenticatable
{
    protected $table = 'member';

    protected $guard = 'member';

    protected $fillable = ['first_name', 'last_name', 'email', 'password', 'phone', 'address', 'billing_info', 'shipping_info', 'bike_info', 'emergency_contact', 'medical_history'];

    protected $hidden = ['password', 'remember_token'];

    public function __construct()
    {
      parent::__construct();
    }
}
