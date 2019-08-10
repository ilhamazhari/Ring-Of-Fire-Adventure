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
			<img src="images/youk-rofa.jpg">
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

<section class="rofa-newsarticles">
	<h1>NEWS & ARTICLES</h1>
	<div class="row">
		<div class="col-md-3 news">
			<a href="#">
				<div class="news-thumbnails">
					<img src="images/news.jpg">
					<div class="news-image-overlay"></div>
					<h3>NEWS TITLE</h3>
				</div>
			</a>
			<p>Consectetur adipiscing elit. Nulla vel efficitur lectus. Maecenas ut urna tincidunt, elementum enim eu, imperdiet nunc.</p>
		</div>
		<div class="col-md-3 news">
			<a href="#">
				<div class="news-thumbnails">
					<img src="images/news.jpg">
					<div class="news-image-overlay"></div>
					<h3>NEWS TITLE</h3>
				</div>
			</a>
			<p>Consectetur adipiscing elit. Nulla vel efficitur lectus. Maecenas ut urna tincidunt, elementum enim eu, imperdiet nunc.</p>
		</div>
		<div class="col-md-3 news">
			<a href="#">
				<div class="news-thumbnails">
					<img src="images/news.jpg">
					<div class="news-image-overlay"></div>
					<h3>NEWS TITLE</h3>
				</div>
			</a>
			<p>Consectetur adipiscing elit. Nulla vel efficitur lectus. Maecenas ut urna tincidunt, elementum enim eu, imperdiet nunc.</p>
		</div>
		<div class="col-md-3 news">
			<a href="#">
				<div class="news-thumbnails">
					<img src="images/news.jpg">
					<div class="news-image-overlay"></div>
					<h3>NEWS TITLE</h3>
				</div>
			</a>
			<p>Consectetur adipiscing elit. Nulla vel efficitur lectus. Maecenas ut urna tincidunt, elementum enim eu, imperdiet nunc.</p>
		</div>
	</div>
</section>

<section class="rofa-discoverjourney">
	<h1>DISCOVER OUR JOURNEY</h1>
	<div class="space-100"></div>
	<ul class="nav">
		<li class="nav-item right-border-white"><a href="#stage1" data-toggle="tab" class="nav-link active">STAGE 1</a></li>
		<li class="nav-item right-border-white"><a href="#stage2" data-toggle="tab" class="nav-link">STAGE 2</a></li>
		<li class="nav-item right-border-white"><a href="#stage3" data-toggle="tab" class="nav-link">STAGE 3</a></li>
		<li class="nav-item right-border-white"><a href="#stage4" data-toggle="tab" class="nav-link">STAGE 4</a></li>
		<li class="nav-item"><a href="#stage5" data-toggle="tab" class="nav-link">STAGE 5</a></li>
	</ul>
	<div class="stage-content tab-content">
		<div id="stage1" class="tab-pane fade in active show">
			<div class="row">
				<div class="col">
					<a href="https://www.youtube.com/watch?v=b9-bBMR9wx4" target="blank">
						<img src="http://img.youtube.com/vi/b9-bBMR9wx4/0.jpg" width="100%"/>
						<p><b>Episode 1</b><br>Ring of Fire Adventure Legend Land Jawa Barat</p>
					</a>
				</div>
				<div class="col">
					<a href="https://www.youtube.com/watch?v=dJqEMf9oeok" target="_blank">
						<img src="http://img.youtube.com/vi/dJqEMf9oeok/0.jpg" width="100%"/>
						<p><b>Episode 2</b><br>Ring of Fire Adventure Legend Land Jawa Barat</p>
					</a>
				</div>
				<div class="col">
					<a href="https://www.youtube.com/watch?v=Kg_XJr_La0w" target="_blank">
						<img src="http://img.youtube.com/vi/Kg_XJr_La0w/0.jpg" width="100%"/>
						<p><b>Episode 3</b><br>Ring of Fire Adventure Legend Land Jawa Barat</p>
					</a>
				</div>
				<div class="col">
					<a href="https://www.youtube.com/watch?v=Ta2Swcari3s" target="_blank">
						<img src="http://img.youtube.com/vi/Ta2Swcari3s/0.jpg" width="100%"/>
						<p><b>Episode 4</b><br>Ring of Fire Adventure Legend Land Jawa Barat</p>
					</a>
				</div>
			</div>
		</div>
		<div id="stage2" class="tab-pane fade">
			<div class="row">
				<div class="col">
					<a href="https://www.youtube.com/watch?v=E6WyQkYqGac" target="_blank">
						<img src="http://img.youtube.com/vi/E6WyQkYqGac/0.jpg" width="100%">
						<p><b>Ring of Fire and Friends At Indonesian Moto Adventure Safari</b></p>
					</a>
				</div>
				<div class="col">
					<a href="https://www.youtube.com/watch?v=E6WyQkYqGac" target="_blank">
						<img src="http://img.youtube.com/vi/E6WyQkYqGac/0.jpg" width="100%">
						<p><b>Ring of Fire and Friends At Indonesian Moto Adventure Safari</b></p>
					</a>
				</div>
				<div class="col">
					<a href="https://www.youtube.com/watch?v=E6WyQkYqGac" target="_blank">
						<img src="http://img.youtube.com/vi/E6WyQkYqGac/0.jpg" width="100%">
						<p><b>Ring of Fire and Friends At Indonesian Moto Adventure Safari</b></p>
					</a>
				</div>
				<div class="col">
					<a href="https://www.youtube.com/watch?v=E6WyQkYqGac" target="_blank">
						<img src="http://img.youtube.com/vi/E6WyQkYqGac/0.jpg" width="100%">
						<p><b>Ring of Fire and Friends At Indonesian Moto Adventure Safari</b></p>
					</a>
				</div>
			</div>
		</div>
		<div id="stage3" class="tab-pane fade">
			<div class="row">
				<div class="col">
					<a href="https://www.youtube.com/watch?v=5pvFHVcM7wM" target="_blank">
						<img src="http://img.youtube.com/vi/5pvFHVcM7wM/0.jpg" width="100%">
						<p><b>MXGP RoFA Palangkaraya 2017</b></p>
					</a>
				</div>
				<div class="col">
					<a href="https://www.youtube.com/watch?v=5pvFHVcM7wM" target="_blank">
						<img src="http://img.youtube.com/vi/5pvFHVcM7wM/0.jpg" width="100%">
						<p><b>MXGP RoFA Palangkaraya 2017</b></p>
					</a>
				</div>
				<div class="col">
					<a href="https://www.youtube.com/watch?v=5pvFHVcM7wM" target="_blank">
						<img src="http://img.youtube.com/vi/5pvFHVcM7wM/0.jpg" width="100%">
						<p><b>MXGP RoFA Palangkaraya 2017</b></p>
					</a>
				</div>
				<div class="col">
					<a href="https://www.youtube.com/watch?v=5pvFHVcM7wM" target="_blank">
						<img src="http://img.youtube.com/vi/5pvFHVcM7wM/0.jpg" width="100%">
						<p><b>MXGP RoFA Palangkaraya 2017</b></p>
					</a>
				</div>
			</div>
		</div>
		<div id="stage4" class="tab-pane fade">
			<div class="row">
				<div class="col">
					<a href="https://www.youtube.com/watch?v=nEYm8oJrKoU" target="_blank">
						<img src="http://img.youtube.com/vi/nEYm8oJrKoU/0.jpg" width="100%">
						<p><b>Jamnas Ring of Fire Adventure 2017</b></p>
					</a>
				</div>
				<div class="col">
					<a href="https://www.youtube.com/watch?v=nEYm8oJrKoU" target="_blank">
						<img src="http://img.youtube.com/vi/nEYm8oJrKoU/0.jpg" width="100%">
						<p><b>Jamnas Ring of Fire Adventure 2017</b></p>
					</a>
				</div>
				<div class="col">
					<a href="https://www.youtube.com/watch?v=nEYm8oJrKoU" target="_blank">
						<img src="http://img.youtube.com/vi/nEYm8oJrKoU/0.jpg" width="100%">
						<p><b>Jamnas Ring of Fire Adventure 2017</b></p>
					</a>
				</div>
				<div class="col">
					<a href="https://www.youtube.com/watch?v=nEYm8oJrKoU" target="_blank">
						<img src="http://img.youtube.com/vi/nEYm8oJrKoU/0.jpg" width="100%">
						<p><b>Jamnas Ring of Fire Adventure 2017</b></p>
					</a>
				</div>
			</div>
		</div>
		<div id="stage5" class="tab-pane fade">
			<div class="row">
				<div class="col">
					<a href="https://www.youtube.com/watch?v=uEp9RrGPAZ4" target="_blank">
						<img src="http://img.youtube.com/vi/uEp9RrGPAZ4/0.jpg" width="100%">
						<p><b>Papua in Solitary</b></p>
					</a>
				</div>
				<div class="col">
					<a href="https://www.youtube.com/watch?v=uEp9RrGPAZ4" target="_blank">
						<img src="http://img.youtube.com/vi/uEp9RrGPAZ4/0.jpg" width="100%">
						<p><b>Papua in Solitary</b></p>
					</a>
				</div>
				<div class="col">
					<a href="https://www.youtube.com/watch?v=uEp9RrGPAZ4" target="_blank">
						<img src="http://img.youtube.com/vi/uEp9RrGPAZ4/0.jpg" width="100%">
						<p><b>Papua in Solitary</b></p>
					</a>
				</div>
				<div class="col">
					<a href="https://www.youtube.com/watch?v=uEp9RrGPAZ4" target="_blank">
						<img src="http://img.youtube.com/vi/uEp9RrGPAZ4/0.jpg" width="100%">
						<p><b>Papua in Solitary</b></p>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

@include('layout.footer')

@endsection

@section('script')



@endsection