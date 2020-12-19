<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable=[
           'name',
           'job',
           'company',
           'review_message',
           'photo'
    ];
}
