@extends('layouts.master')

@section('title')
    Home
@endsection


@section('body')
    <div>
        <h2>Here is a Body</h2>
        <p>Here is a paragraph</p>
    </div>
<!-- sign up form -->

        <!-- Signup form end -->
        <!-- Login form -->
        <div class="col-md-5">
            <h2>Log In</h2>
            <form action="#" method="post" style="margin-left: 25px;">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input class='form-control' type="text" name="email" placeholder="Email" id="email-input">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input class='form-control' type="password" name="password" placeholder="Password" id="password-input">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <!-- login form end -->
    </div>
@endsection