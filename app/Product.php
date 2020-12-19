<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=[
        'category_id',
        'product_id',
        'name',
        'title',
        'price',
        'order_type',
        'product_type',
        'description',
        'product_img',
        'options'
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
