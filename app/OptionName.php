<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OptionName extends Model
{
    protected $fillable = ['name'];

    public function values()
    {
        return $this->belongsToMany('App\OptionValue');
    }
}
