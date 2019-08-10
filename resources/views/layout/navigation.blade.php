<nav class="navbar navbar-expand-md justify-content-center">

	<button class="navbar-toggler" type="button" role="navigation" data-toggle="collapse" data-target=".overlay-menu "><i class="fa fa-bars"></i></button>

	<ul class=" mobile_hide nav navbar-nav nav-left">
		<li class="nav-item"><a href="{{ URL::Route('home') }}">HOME</a></li>
		<li class="nav-item"><a href="#">ABOUT</a></li>
		<li class="nav-item"><a href="#">STORE</a></li>
	</ul>

	<div class="navbar-logo order-first order-md-0 d-flex">
		<a class="nav-brand" href="{{ URL::Route('home') }}"><img src="images/rofa-logo.jpg"></a>
	</div>

	<ul class=" mobile_hide nav navbar-nav nav-right">
		<li class="nav-item"><a href="#">EVENTS</a></li>
		<li class="nav-item"><a href="#">ARTICLES</a></li>
		<li class="nav-item"><a href="#">FORUM</a></li>
	</ul>

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
			<li class="nav-item"><a href="#" class="nav-link">FORUM</a></li>
		</ul>
	</div>

</div>