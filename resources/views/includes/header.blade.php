<header>
	<nav class='navbar navbar-default navbar-fixed-top'>
		<div class="container">
			<div class="login-signup">
			@if (Auth::check())
				<a href="#">{{ ucfirst(Auth::user()->name) }} </a><span>|</span><a href="{{ route('getLogout') }}"> Log Out</a>
		  @else 
				<a href="{{ route('getLogin') }}">Login </a><span>|</span><a href="{{ route('getSignup') }}"> Sign-Up</a>
			@endif
			</div>
			<div class="nav-bar">
				<h1 class="header">OriCommerce</h1>
				<a href="{{ route('root') }}">Home</a>
				<a href="{{ route('getShop') }}">Shop</a>
				<a href="{{ route('cart') }}">Cart</a>
				<a href="{{ route('contact') }}">Contact</a>
			</div>
		</div>
	</nav>
</header>