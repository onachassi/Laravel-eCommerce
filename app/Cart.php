<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function products()
    {
    	return $this->belongsToMany('App\Product')->withTimestamps();;
    }

    public function cartTotal($cart){
    	$products = $cart->products;
    	
    	$sum = 0;
    	foreach ($products as $product) {
    		$sum = $sum + $product->price;
    	}
    	return $sum;
    }

}
