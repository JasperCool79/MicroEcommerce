<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proof extends Model
{
    protected $fillable =[
      'order_id',
      'name',
      'phone',
      'address',
      'img',
      'message'
    ];
}
