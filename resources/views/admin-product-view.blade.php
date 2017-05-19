@extends('layouts.admin')

@section('title')
    Products
@endsection

@section('body')
<h2>Products</h2>
<table class='table table-hover table-responsive'>
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Description</th>
			<th>Price</th>
			<th>Stock</th>
			<th>Edit | Delete</th>
		</tr>	
	</thead>
	<tbody>
	@foreach($products as $product)
		<tr>
			<td>{{$product['id']}}</td>
			<td>{{$product['name']}}</td>
			<td>{{$product['description']}}</td>
			<td>{{$product['price']}}</td>
			<td>{{$product['stock']}}</td>
			<td>Edit | Delete</td>
		</tr>
	@endforeach
	</tbody>
</table>
@endsection