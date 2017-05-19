@extends('layouts.master')

@section('title')
    {{ $product->name }}
@endsection

@section('body')
<div class="product-info">
	<div class="image">
		
	</div>
	<div class="product-info">
		<h2 class="product-name">{{$product->name}}</h2>
		<p class="product-description">{{$product->description}}</p>
		<h4 class="product-price">{{$product->price}}</h4>
		@php
			if (Session::has('cartId')){
				$cartId = Session::get('cartId');
			}
			else{
				$cartId = null;
			}
		@endphp
		<form action="{{ route('addToCart', ['productId' => $product->id])}}" method="post">
		<input type="hidden" name="_token" value="{{ Session::token() }}">
			<button type="submit" class="btn btn-primary">Add to Cart</button>
		</form>
		
	</div>
</div>
@endsection