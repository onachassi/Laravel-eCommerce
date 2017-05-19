<?php 

namespace App\Http\Controllers;

use App\Cart;
use App\Cart_Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
/**
* 
*/
class CartController extends Controller
{

	public function addToCart(Request $request, $productId)
	{
		if($request->session()->has('cartId')){
			$cartId = $request->session()->get('cartId');
			$cart = Cart::findOrFail($cartId);
			return redirect()->route('root');
		} else {
			$cart = Cart::create();
			$cartId = $cart->id;
			session(['cartId' => $cartId]);
			return redirect()->route('cart');
		}
		// this is working--now i need to create the join table somehow and redirect back to the shop
	}




}