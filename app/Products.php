<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = array();

    //
    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
