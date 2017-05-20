<?php 

namespace App\Http\Controllers;

use App\Cart;
use App\Cart_Product;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
/**
* 
*/
class CartController extends Controller
{

	public function addToCart(Request $request, $productId)
	{
		if($request->session()->has('cartId')){
			$cartId = $request->session()->get('cartId');
			$cart = Cart::find($cartId);
		} else {
			$cart = Cart::create();
			$cartId = $cart->id;
			session(['cartId' => $cartId]);
		}
		if(Auth::user()){
			$cart->user_id = Auth::user()->id;
			$cart->save();
		}
		$product = Product::find($productId);
		$product->carts()->attach($cart);
		// this is working--now i need to create the join table somehow and redirect back to the shop
			return redirect()->route('getShop');
	}




}