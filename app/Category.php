<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=['name','title','subtitle','banner_img','sub_banner_img'];

    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
