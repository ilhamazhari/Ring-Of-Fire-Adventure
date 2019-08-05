<nav class="navbar navbar-expand-md justify-content-center">
	<ul class="nav navbar-nav d-flex nav-left">
		<li class="nav-item"><a href="{{ URL::Route('home') }}">HOME</a></li>
		<li class="nav-item"><a href="#">ABOUT</a></li>
		<li class="nav-item"><a href="#">STORE</a></li>
	</ul>

	<div class="navbar-logo order-first order-md-0 d-flex">
		<a class="nav-brand" href="{{ URL::Route('home') }}"><img src="images/rofa-logo.jpg"></a>
	</div>

	<ul class="nav navbar-nav d-flex nav-right">
		<li class="nav-item"><a href="#">EVENTS</a></li>
		<li class="nav-item"><a href="#">ARTICLES</a></li>
		<li class="nav-item"><a href="#">FORUM</a></li>
	</ul>
</nav>