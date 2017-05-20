@extends('layouts.master')

@section('title')
    Cart
@endsection

@section('body')
	<div class="container">
		<header class="header">
			<h2 class="pageheader">Cart</h2>
		</header>
		<div class="products">
			@if ($products->count() > 0)
			@foreach ($products as $product)
				<div class="product">
					<h2 class="product-name">{{$product->name}}</h2>
				</div>
			@endforeach
			@endif
			<h3 class="cart-total"></h3>
			<p>{{$cart->cartTotal($cart)}}</p>
		</div>
	</div>
@endsection