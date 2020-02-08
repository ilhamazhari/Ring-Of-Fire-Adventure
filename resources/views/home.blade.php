@extends('layout.main')

@section('title', 'Home')

@section('style')
<style type="text/css">
.modal-dialog {
  max-width: 50vw;
  margin: 10vh auto;
}
.modal-body {
  position:relative;
  padding:0px;
}
.close {
  position:absolute;
  right:-30px;
  top:0;
  z-index:999;
  font-size:2rem;
  font-weight: normal;
  color:#fff;
  opacity:1;
}

@media screen and (max-width: 425px) and (orientation: portrait) {
  .modal-dialog {
    max-width: 100vw;
    margin: 25vh auto;
  }

  .close {
    top: -30px;
    right: 0;
  }
}
</style>
@endsection

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

<section class="rofa-discoverjourney">
	<h1>DISCOVER OUR JOURNEY</h1>
	<div class="space-100"></div>
	<ul class="nav">
		<li class="nav-item right-border-white"><a href="#tab1" data-toggle="tab" class="nav-link active">Kompilasi</a></li>
		<li class="nav-item right-border-white"><a href="#tab2" data-toggle="tab" class="nav-link">STAGE 1</a></li>
		<li class="nav-item right-border-white"><a href="#tab3" data-toggle="tab" class="nav-link">STAGE 2</a></li>
		<li class="nav-item right-border-white"><a href="#tab4" data-toggle="tab" class="nav-link">STAGE 3</a></li>
		<li class="nav-item"><a href="#tab5" data-toggle="tab" class="nav-link">STAGE 4</a></li>
	</ul>
	<div class="stage-content tab-content">
		<div id="tab1" class="tab-pane fade in active show">
			<div class="row">
				<div class="col">
					<a href="#" class="video-thumb" data-toggle="modal" data-src="https://drive.google.com/file/d/1BfLTQcpt9prQJw9BXpZaqEk5QlWY-Qap/preview?usp=sharing" data-target="#modalVideo">
						<img src="https://drive.google.com/thumbnail?authuser=0&sz=w360&id=1BfLTQcpt9prQJw9BXpZaqEk5QlWY-Qap" width="100%"/>
						<p><b>Kompilasi 1</b><br>Ring of Fire Adventure Kompilasi</p>
					</a>
				</div>
				<div class="col">
					<a href="#" class="video-thumb" data-toggle="modal" data-src="https://drive.google.com/file/d/1W2-kX58uzoI7JNy8vDaHJVwxFgJJAA4q/preview?usp=sharing" data-target="#modalVideo">
						<img src="https://drive.google.com/thumbnail?authuser=0&sz=w360&id=1W2-kX58uzoI7JNy8vDaHJVwxFgJJAA4q" width="100%"/>
						<p><b>Kompilasi 2</b><br>Ring of Fire Adventure Kompilasi</p>
					</a>
				</div>
				<div class="col">
					<a href="#" class="video-thumb" data-toggle="modal" data-src="https://drive.google.com/file/d/1GYKNQYGvKgkFv3JAZk5zgb-gvs7wTsLa/preview?usp=sharing" data-target="#modalVideo">
						<img src="https://drive.google.com/thumbnail?authuser=0&sz=w360&id=1GYKNQYGvKgkFv3JAZk5zgb-gvs7wTsLa" width="100%"/>
						<p><b>Kompilasi 3</b><br>Ring of Fire Adventure Kompilasi</p>
					</a>
				</div>
				<div class="col">
					<a href="#" class="video-thumb" data-toggle="modal" data-src="https://drive.google.com/file/d/159Q338CVT6PbOvjDt8fKKVOaxNxW9mMG/preview?usp=sharing" data-target="#modalVideo">
						<img src="https://drive.google.com/thumbnail?authuser=0&sz=w360&id=159Q338CVT6PbOvjDt8fKKVOaxNxW9mMG" width="100%"/>
						<p><b>Kompilasi 4</b><br>Ring of Fire Adventure Kompilasi</p>
					</a>
				</div>
			</div>
		</div>
		<div id="tab2" class="tab-pane fade">
			<div class="row">
				<div class="col">
					<a href="#" class="video-thumb" data-toggle="modal" data-src="https://drive.google.com/file/d/1VNj1-2zu7KADHXnp9JHsOEp4l8F4cDBk/preview?usp=sharing" data-target="#modalVideo">
						<img src="https://drive.google.com/thumbnail?authuser=0&sz=w360&id=1VNj1-2zu7KADHXnp9JHsOEp4l8F4cDBk" width="100%">
						<p><b>Ring of Fire Adventure Stage 1 Episode 1</b></p>
					</a>
				</div>
				<div class="col">
					<a href="#" class="video-thumb" data-toggle="modal" data-src="https://drive.google.com/file/d/1sEnasnqr4p25NP1rA3leprL4RENqOmDU/preview?usp=sharing" data-target="#modalVideo">
						<img src="https://drive.google.com/thumbnail?authuser=0&sz=w360&id=1sEnasnqr4p25NP1rA3leprL4RENqOmDU" width="100%">
						<p><b>Ring of Fire Adventure Stage 1 Episode 2</b></p>
					</a>
				</div>
				<div class="col">
					<a href="#" class="video-thumb" data-toggle="modal" data-src="https://drive.google.com/file/d/1PdnC-dIJZXHwm0X9bU1wRC3cvI3HfeC9/preview?usp=sharing" data-target="#modalVideo">
						<img src="https://drive.google.com/thumbnail?authuser=0&sz=w360&id=1PdnC-dIJZXHwm0X9bU1wRC3cvI3HfeC9" width="100%">
						<p><b>Ring of Fire Adventure Stage 1 Episode 4</b></p>
					</a>
				</div>
				<div class="col">
					<a href="#" class="video-thumb" data-toggle="modal" data-src="https://drive.google.com/file/d/1ihaxwbairYWqbs4gZxbZueBAysqjGEts/preview?usp=sharing" data-target="#modalVideo">
            <img src="https://drive.google.com/thumbnail?authuser=0&sz=w360&id=1ihaxwbairYWqbs4gZxbZueBAysqjGEts" width="100%">
						<p><b>Ring of Fire Adventure Stage 1 Episode 5</b></p>
					</a>
				</div>
			</div>
      <div class="row">
        <div class="col">
          <a href="#" class="video-thumb" data-toggle="modal" data-src="https://drive.google.com/file/d/1BlWQ92l7trqblWaksAV3qkpsHAEOpmzZ/preview?usp=sharing" data-target="#modalVideo">
            <img src="https://drive.google.com/thumbnail?authuser=0&sz=w360&id=1BlWQ92l7trqblWaksAV3qkpsHAEOpmzZ" width="100%">
            <p><b>Ring of Fire Adventure Stage 1 Episode 6</b></p>
          </a>
        </div>
        <div class="col">
          <a href="#" class="video-thumb" data-toggle="modal" data-src="https://drive.google.com/file/d/1mBM5W2Lv-F-lOaNPeTlbFDGLk2QWtNlS/preview?usp=sharing" data-target="#modalVideo">
            <img src="https://drive.google.com/thumbnail?authuser=0&sz=w360&id=1mBM5W2Lv-F-lOaNPeTlbFDGLk2QWtNlS" width="100%">
            <p><b>Ring of Fire Adventure Stage 1 Episode 7</b></p>
          </a>
        </div>
        <div class="col">
          <a href="#" class="video-thumb" data-toggle="modal" data-src="https://drive.google.com/file/d/1Ww6blGX3-E_pOaO8IUXSCHcFCI1zzWg9/preview?usp=sharing" data-target="#modalVideo">
            <img src="https://drive.google.com/thumbnail?authuser=0&sz=w360&id=1Ww6blGX3-E_pOaO8IUXSCHcFCI1zzWg9" width="100%">
            <p><b>Ring of Fire Adventure Stage 1 Episode 8</b></p>
          </a>
        </div>
        <div class="col">
          <a href="#" class="video-thumb" data-toggle="modal" data-src="https://drive.google.com/file/d/1j6Fz2BEsnE4ZBvbRTamUDrw4XLPaaWTX/preview?usp=sharing" data-target="#modalVideo">
            <img src="https://drive.google.com/thumbnail?authuser=0&sz=w360&id=1j6Fz2BEsnE4ZBvbRTamUDrw4XLPaaWTX" width="100%">
            <p><b>Ring of Fire Adventure Stage 1 Episode 9</b></p>
          </a>
        </div>
      </div>
		</div>
		<div id="tab3" class="tab-pane fade">
			<div class="row">
				<div class="col">
					<a href="#" class="video-thumb" data-toggle="modal" data-src="" data-target="#modalVideo">
            <img src="https://lh3.google.com/u/2/d/=w360-h240-p-k-nu-iv1" width="100%">
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
		<div id="tab4" class="tab-pane fade">
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
		<div id="tab5" class="tab-pane fade">
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

<section class="rofa-forum d-flex flex-column justify-content-center">
	<h1>RING OF FIRE ADVENTURE MEMBERSHIP PROGRAM</h1>
	<a href="#"><button class="btn btn-orange">SIGN UP NOW</button></a>
</section>


<!-- Video Modal -->
<div class="modal fade" id="modalVideo" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>

        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always" allow="autoplay" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>

    </div>
  </div>
</div>


@include('layout.footer')

@endsection

@section('script')

<script type="text/javascript">
  $(document).ready(function(){
    $('.video-thumb').click(function(){
      $('#video').attr('src', $(this).data('src') + "?usp=drivesdk&modestbranding=1&showinfo=0");
    });

    $("#modalVideo").on("hidden.bs.modal", function () {
      $('#video').attr('src', '');
    });
  });
</script>

@endsection