@extends('layouts.admin')

@section('title')
Product Form
@endsection

@section('body')
<div class="row">
    <div class="col-md-5">
        <h2 class='text-center'>Create a Product</h2>
        <form action="#" method="post">
        <input type="hidden" name="_token" value="{{ Session::token() }}">
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">Product Name:</label>
                <input class='form-control' type="text" name="name" placeholder="Product Name" id="name-input" value="{{ Request::old('name') }}">
            </div>
            <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                <label for="description">Product Description:</label>
                <textarea class='form-control' type="text" name="description" placeholder="Product Description" id="description-input" value="{{ Request::old('description') }}"></textarea>
            </div>
            <div class="form-group {{ $errors->has('price') ? 'has-error' : '' }}">
                <label for="price">Product Price:</label>
                <input class='form-control' type="number" name="price" placeholder="Price" id="price-input">
            </div>
            <div class="form-group {{ $errors->has('stock') ? 'has-error' : '' }}">
                <label for="price">Available Stock:</label>
                <input class='form-control' type="number" name="stock" placeholder="Stock" id="stock-input">
            </div>
            <button type="submit" class="btn btn-primary">Create Product</button>
        </form>
    </div>
</div>

    @if(count($errors) > 0)
            <div class="col-md-5">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    @endif
@endsection