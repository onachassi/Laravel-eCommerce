<?php 

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
/**
* 
*/
class ProductController extends Controller
{

	// all products
	public function getShop()
	{
		$products = Product::all();
		return view('shop')->with('products', $products);
	}
	// product show page
	public function showProduct($productId)
	{
		$product = Product::findOrFail($productId);
		return view('product_show')->with('product', $product);
	}

	// admin show pages
	// all product view
	public function getProducts(){
		$products = Product::all();
		return view('admin-product-view')->with('products', $products);
	}
	// create product form
	public function getProductForm(){
		return view('productForm');
	}
	// create products 
	public function postProductForm(Request $request) 
	{
		$this->validate($request, [
			'name' => 'required|max:120',
			'description' => 'required',
			'price' => 'required|min:0',
			'stock' => 'required|min:0'
		]);

		$name = $request['name'];
		$description = $request['description'];
		$price = $request['price'];
		$stock = $request['stock'];

		$product = new Product();
		$product->name = $name;
		$product->description = $description;
		$product->price = $price; 
		$product->stock = $stock; 

		$product->save();
	
		return redirect()->route('getProducts');
	}

}

?>