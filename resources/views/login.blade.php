@extends('layouts.master')

@section('title')
Login
@endsection

@section('body')
<div class="row">
    <div class="col-md-5">
        <h2 class='text-center'>Log In</h2>
        <form action="{{route('login')}}" method="post">
        <input type="hidden" name="_token" value="{{ Session::token() }}">
            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                <label for="email">Email:</label>
                <input class='form-control' type="text" name="email" placeholder="Email" id="email-input" value="{{ Request::old('email') }}">
            </div>
            <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                <label for="password">Password:</label>
                <input class='form-control' type="password" name="password" placeholder="Password" id="password-input">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
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