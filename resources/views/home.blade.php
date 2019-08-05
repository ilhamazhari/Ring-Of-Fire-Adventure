@extends('layout.main')

@section('title', 'Home')

@section('content')

@include('layout.navigation')

<!-- Home Section -->
<section class="rofa-home">
	<div class="video-bg">
		<video loop autoplay muted>
			<source src="video/rofa-video-bg.mp4" type="video/mp4">
		</video>
	</div>

	<div class="home-title">
		<h1>EXPLORE INDONESIA THROUGH OUR WONDERFUL JOURNEY</h1>
		<h3>WE PRESENT INDONESIAN NATURE CULTURE & HERITAGE</h3>
	</div>
</section>

<!-- About Section -->
<section class="rofa-about">
	<div class="row">
		<div class="col-md-6 d-flex flex-column align-items-center justify-content-center">
			<img src="images/youk-rofa.jpg" style="height: 320px;">
		</div>
		<div class="col-md-6 d-flex flex-column justify-content-center">
			<!-- -->
			<h1 class="about-title w-100">OUR AIM TO PROVIDE INDONESIA NATURE & CULTURE</h1><br>
			<p class="about-desc w-100">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum blandit orci in mollis consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum id leo id finibus. Aenean vel ante vulputate sapien congue mollis. Morbi risus urna, tincidunt eget lorem nec, lobortis consequat ligula. Vivamus lacinia ut diam id gravida. Nam et interdum neque, viverra ullamcorper nulla.</p>
			<a href="#"><button class="btn btn-orange">LEARN MORE</button></a>
		</div>
	</div>
</section>

<section class="rofa-forum d-flex flex-column justify-content-center">
	<h1>RING OF FIRE ADVENTURE FORUM</h1>
	<a href="#"><button class="btn btn-orange">JOIN NOW</button></a>
</section>

<section class="rofa-newsarticles d-flex justify-content-center align-items-center">
	<h1>NEWS & ARTICLES</h1>
	<div class="row">
		<div class="col-md-3 news"></div>
		<div class="col-md-3 news"></div>
		<div class="col-md-3 news"></div>
		<div class="col-md-3 news"></div>
	</div>
</section>

<section class="rofa-discoverjourney d-flex">
	<h1>DISCOVER OUR JOURNEY</h1>
	<ul>
		<li>STAGE 1</li>
		<li>STAGE 2</li>
		<li>STAGE 3</li>
		<li>STAGE 4</li>
		<li>STAGE 5</li>
	</ul>
	<div class="stage-content"></div>
</section>

@endsection

@section('script')



@endsection