@extends('layouts.master')

@section('title')
    Shop
@endsection

@section('body')
	<div class="container">
		<header class="header">
			<h2 class="pageheader">Shop</h2>
		</header>
		<div class="shop-container">
			<div class="all-products">
				@foreach($products as $product)
					<div class="product">
						<div class="image" style="height:200px; width:150px; margin: 10px; border: 2px solid black; background-color: grey"></div>
						<div class="product-info">
							<h4>{{ $product['name'] }}</h4>
							<h4>{{ $product['price'] }}</h4>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
@endsection