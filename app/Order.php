<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=[
        'order_id',
        'user_name',
        'user_id',
        'email',
        'phone',
        'address',
        'cart_items',
        'total_cost',
    ];
}
