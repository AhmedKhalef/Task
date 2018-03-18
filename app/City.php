<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = array();

    //
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function products()
    {
        return $this->hasMany(Products::class);
    }
}
