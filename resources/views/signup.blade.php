@extends('layouts.master')

@section('title')
    Home
@endsection

@section('body')
    <div class="row">
        <div class="col-md-5">
            <h2 class='text-center'>Sign up</h2>
            <form action="{{ route('signup') }}" method="post">
                <div class="form-group">
                    <label for="Full Name">Full Name:</label>
                    <input class='form-control' type="text" name="name" placeholder="Name" id="name-input" />
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input class='form-control' type="text" name="email" placeholder="Email" id="email-input">
                </div>
                <div class="form-group">
                    <label for="Address">Address:</label>
                    <input class='form-control' type="text" name="address" placeholder="Address" id="email-input">
                </div>
                <div class="form-group">
                    <label for="phonenumber">Phone Number:</label>
                    <input class='form-control' type="text" name="phone" placeholder="Phone Number" id="phone-input">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input class='form-control' type="password" name="password" placeholder="Password" id="password-input">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
</div>
@endsection