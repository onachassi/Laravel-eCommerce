@extends('layouts.master')

@section('title')
    Sign Up
@endsection

@section('body')
    <div class="row">

        <div class="col-md-5">
            <h2 class='text-center'>Sign up</h2>
            <form action="{{ route('signup') }}" method="post" >
            <input type="hidden" name="_token" value="{{ Session::token() }}">
                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    <label for="Full Name">Full Name:</label>
                    <input class='form-control' type="text" name="name" placeholder="Name" id="name-input" value="{{ Request::old('name') }}" />
                </div>
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label for="email">Email:</label>
                    <input class='form-control' type="text" name="email" placeholder="Email" id="email-input" value="{{ Request::old('email') }}">
                </div>
                <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
                    <label for="Address">Address:</label>
                    <input class='form-control' type="text" name="address" placeholder="Address" id="email-input" value="{{ Request::old('address') }}">
                </div>
                <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                    <label for="phonenumber">Phone Number:</label>
                    <input class='form-control' type="text" name="phone" placeholder="Phone Number" id="phone-input" value="{{ Request::old('phone') }}">
                </div>
                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                    <label for="password">Password:</label>
                    <input class='form-control' type="password" name="password" placeholder="Password" id="password-input">
                </div>
                <button type="submit" class="btn btn-primary">Sign Up</button>
                
            </form>
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
</div>
@endsection