@extends('layouts.master')

@section('title')
    Shop
@endsection

@section('body')
	<div class="container">
		<div class="shop-header">
			<h2 class="pageheader text-center">Shop</h2>
		</div>
		<div class="shop-container">
			<div class="all-products">
				@foreach($products as $product)
					<div class="product">
				<a href="{{route('showProduct', ['productId' => $product->id])}}">
						<div class="image" style="height:200px; width:150px; margin: 10px; border: 2px solid black; background-color: grey"></div>
						<div class="product-info">
							<h4 class='text-center'>{{ $product->name }}</h4>
							<h4 class="text-center">${{ $product->price }}.00</h4>
						</div>
						</a>
					</div>
				@endforeach
			</div>
		</div>
	</div>
@endsection