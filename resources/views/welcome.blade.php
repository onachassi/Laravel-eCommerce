@extends('layouts.master')

@section('title')
    Home
@endsection


@section('body')
@include('includes.carousel')
<section class="about-section">
  <div class='about'>
      <h1 class='text-center'>About</h1>
      <p class='text-center'>This is a sample site developed using PHP and the Laravel framework.</p>
  </div>
</section>
@endsection