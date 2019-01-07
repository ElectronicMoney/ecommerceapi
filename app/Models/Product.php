<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'name', 'detail', 'price', 'stock', 'discount'
    ];

    public function review() {
        return $this->hasMany('App\Models\Review');
    }
}
