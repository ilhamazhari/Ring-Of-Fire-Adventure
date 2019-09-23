@extends('layout.main')

@section('title', 'Store')

@section('style')
<style type="text/css">
	.container-store {
		background-color: #fff;
		padding: 0 15%;
	}
	.carousel {
		width: 100%;
		margin: 0 auto;
	}
	.latest-products h1 {
		text-align: center;
	}

	@media screen and (max-width: 2560px) and (orientation: landscape){
		.container-store {
			padding: 0 25%;
		}
	}
	@media screen and (max-width: 1920px) and (orientation: landscape){
		.container-store {
			padding: 0 20%;
		}
	}
	@media screen and (max-width: 1440px) and (orientation: landscape){
		.container-store {
			padding: 0 15%;
		}
	}
</style>
@endsection

@section('content')

@include('layout.navigation')

<div class="container-store">
	<div id="storeCarousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#storeCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#storeCarousel" data-slide-to="1"></li>
			<li data-target="#storeCarousel" data-slide-to="2"></li>
		</ol>

		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="{{ url('/') }}/images/store/slide-1.jpg" class="d-block w-100">
			</div>
			<div class="carousel-item">
				<img src="{{ url('/') }}/images/store/slide-2.jpg" class="d-block w-100">
			</div>
			<div class="carousel-item">
				<img src="{{ url('/') }}/images/store/slide-3.jpg" class="d-block w-100">
			</div>
		</div>

		<a class="carousel-control-prev" href="#storeCarousel" data-slide="prev" role="button">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>

		<a class="carousel-control-next" href="#storeCarousel" data-slide="next" role="button">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>

	</div>

	<div class="latest-products">
		<h1 class="store-heading">Latest Products</h1>
		@php
			$p=1;
		@endphp

		<div class="row">
		@foreach($products->take(4) as $pro)
		<div class="col">
			<a href="{{ @URL::Route('store-products', str_replace(" ", "-", $pro->name) ) }}"> 
				@foreach($pro->productImage->take(1) as $img)
				<img width="100%" src="{{ url('/images/products') }}/{{ $img->filename }}"> 
				@endforeach
				<h3>{{ $pro->name }}</h3>
			</a>
			Rp {{ number_format($pro->price) }}<br>
			<a href="{{ URL::Route('add-to-cart', $pro->id) }}" class="btn btn-primary">Add to Cart <i class="fa fa-shopping-cart"></i></a>
		</div>
		@if($p % 4)
			
		@else
		</div>
		<div class="row">
		@endif

		@php
			$p++;
		@endphp
		
		@endforeach
		</div>
	</div>
</div>

@endsection