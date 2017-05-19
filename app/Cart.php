<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function products()
    {
    	return $this->belongsToMany('Product', 'cart_products');
    }

    // public function user()
    // {
    // 	return $this->belongsTo('User');
    // }
}
