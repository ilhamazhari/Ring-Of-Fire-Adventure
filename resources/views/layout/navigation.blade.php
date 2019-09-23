<nav class="navbar navbar-expand-md justify-content-center">

	<button class="navbar-toggler" type="button" role="navigation" data-toggle="collapse" data-target=".overlay-menu "><i class="fa fa-bars"></i></button>

	<ul class=" mobile_hide nav navbar-nav nav-left">
		<li class="nav-item"><a href="{{ URL::Route('home') }}">HOME</a></li>
		<li class="nav-item"><a href="#">ABOUT</a></li>
		<li class="nav-item"><a href="#">ARTICLES</a></li>
	</ul>

	<div class="navbar-logo order-first order-md-0 d-flex">
		<a class="nav-brand" href="{{ URL::Route('home') }}"><img src="{{ URL::to('/') }}/images/rofa-logo.jpg"></a>
	</div>

	<ul class=" mobile_hide nav navbar-nav nav-right">
		<li class="nav-item"><a href="#">EVENTS</a></li>
		<li class="nav-item"><a href="{{ URL::Route('store') }}">STORE</a></li>
		<li class="nav-item"><a href="#">TRIP</a></li>
	</ul>

	<div class="justify-content-end">
		<ul class="mobile_hide nav navbar-nav">
			<li class="nav-item dropdown">
				<a class="dropdown-toggle" id="dropdownCart" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><i class="fa fa-shopping-cart"></i></a>
				<div class="dropdown-menu dropdown-menu-right" aria-labeledby="dropdownCart">
					@if(Session::has('cart'))
						@foreach(Session::get('cart') as $id => $cart)
						<a class="dropdown-item" href="#">{{ $cart['name'] }} Qty {{ $cart['quantity'] }} Price {{ $cart['price'] }}</a>
						@endforeach
						<a class="dropdown-item" href="{{ URL::Route('store-checkout') }}">Checkout</a>
					@else
					You don't have products in cart
					@endif
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="dropdown-toggle" id="dropdownUser" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><i class="fa fa-user"></i></a>
				<div class="dropdown-menu dropdown-menu-right" aria-labeledby="dropdownUser">
					<a class="dropdown-item" href="#">Dropdown item 1</a>
					<a class="dropdown-item" href="#">Dropdown item 2</a>
				</div>
			</li>
		</ul>
	</div>

</nav>

<div class="overlay-menu ">

	<span class="close navbar-toggler" role="navigation" data-toggle="collapse" data-target=".overlay-menu">
		<i class="fa fa-times"></i>
	</span>

	<div class="overlay-content flex-center">
		<ul class="nav navbar-nav">
			<li class="nav-item"><a href="{{ URL::Route('home') }}" class="nav-link">HOME</a></li>
			<li class="nav-item"><a href="#" class="nav-link">ABOUT</a></li>
			<li class="nav-item"><a href="#" class="nav-link">STORE</a></li>
			<li class="nav-item"><a href="#" class="nav-link">EVENTS</a></li>
			<li class="nav-item"><a href="#" class="nav-link">ARTICLES</a></li>
			<li class="nav-item"><a href="#" class="nav-link">TRIP</a></li>
			<li class="nav-item"><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
		</ul>
	</div>

</div>