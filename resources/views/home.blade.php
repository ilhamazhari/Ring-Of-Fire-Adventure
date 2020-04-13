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
			<source src="video/rofa-opening.mp4" type="video/mp4">
		</video>
	</div>

	<div class="home-title">
		<h1>{{ __('home.explore') }}</h1>
		<h3>{{ __('home.present') }}</h3>
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
		<li class="nav-item"><a href="#tab4" data-toggle="tab" class="nav-link">STAGE 3</a></li>
	</ul>
	<div class="stage-content tab-content">
		<div id="tab1" class="tab-pane fade in active show">
			<div class="row">
				<div class="col">
					<a href="#" class="video-thumb" data-toggle="modal" data-src="https://drive.google.com/file/d/1BfLTQcpt9prQJw9BXpZaqEk5QlWY-Qap/preview?authuser=0" data-target="#modalVideo">
						<img src="https://drive.google.com/thumbnail?authuser=0&sz=w360&id=1BfLTQcpt9prQJw9BXpZaqEk5QlWY-Qap" width="100%"/>
						<p><b>Kompilasi 1</b><br>Ring of Fire Adventure Kompilasi</p>
					</a>
				</div>
				<div class="col">
					<a href="#" class="video-thumb" data-toggle="modal" data-src="https://drive.google.com/file/d/1W2-kX58uzoI7JNy8vDaHJVwxFgJJAA4q/preview?authuser=0" data-target="#modalVideo">
						<img src="https://drive.google.com/thumbnail?authuser=0&sz=w360&id=1W2-kX58uzoI7JNy8vDaHJVwxFgJJAA4q" width="100%"/>
						<p><b>Kompilasi 2</b><br>Ring of Fire Adventure Kompilasi</p>
					</a>
				</div>
				<div class="col">
					<a href="#" class="video-thumb" data-toggle="modal" data-src="https://drive.google.com/file/d/1GYKNQYGvKgkFv3JAZk5zgb-gvs7wTsLa/preview?authuser=0" data-target="#modalVideo">
						<img src="https://drive.google.com/thumbnail?authuser=0&sz=w360&id=1GYKNQYGvKgkFv3JAZk5zgb-gvs7wTsLa" width="100%"/>
						<p><b>Kompilasi 3</b><br>Ring of Fire Adventure Kompilasi</p>
					</a>
				</div>
				<div class="col">
					<a href="#" class="video-thumb" data-toggle="modal" data-src="https://drive.google.com/file/d/159Q338CVT6PbOvjDt8fKKVOaxNxW9mMG/preview?authuser=0" data-target="#modalVideo">
						<img src="https://drive.google.com/thumbnail?authuser=0&sz=w360&id=159Q338CVT6PbOvjDt8fKKVOaxNxW9mMG" width="100%"/>
						<p><b>Kompilasi 4</b><br>Ring of Fire Adventure Kompilasi</p>
					</a>
				</div>
			</div>
		</div>
		<div id="tab2" class="tab-pane fade">
			<div class="row">
				<div class="col">
					<a href="#" class="video-thumb" data-toggle="modal" data-src="https://drive.google.com/file/d/1VNj1-2zu7KADHXnp9JHsOEp4l8F4cDBk/preview?authuser=0" data-target="#modalVideo">
						<img src="https://drive.google.com/thumbnail?authuser=0&sz=w360&id=1VNj1-2zu7KADHXnp9JHsOEp4l8F4cDBk" width="100%">
						<p><b>Ring of Fire Adventure Stage 1 Episode 1</b></p>
					</a>
				</div>
				<div class="col">
					<a href="#" class="video-thumb" data-toggle="modal" data-src="https://drive.google.com/file/d/1sEnasnqr4p25NP1rA3leprL4RENqOmDU/preview?authuser=0" data-target="#modalVideo">
						<img src="https://drive.google.com/thumbnail?authuser=0&sz=w360&id=1sEnasnqr4p25NP1rA3leprL4RENqOmDU" width="100%">
						<p><b>Ring of Fire Adventure Stage 1 Episode 2</b></p>
					</a>
				</div>
				<div class="col">
					<a href="#" class="video-thumb" data-toggle="modal" data-src="https://drive.google.com/file/d/1PdnC-dIJZXHwm0X9bU1wRC3cvI3HfeC9/preview?authuser=0" data-target="#modalVideo">
						<img src="https://drive.google.com/thumbnail?authuser=0&sz=w360&id=1PdnC-dIJZXHwm0X9bU1wRC3cvI3HfeC9" width="100%">
						<p><b>Ring of Fire Adventure Stage 1 Episode 4</b></p>
					</a>
				</div>
				<div class="col">
					<a href="#" class="video-thumb" data-toggle="modal" data-src="https://drive.google.com/file/d/1ihaxwbairYWqbs4gZxbZueBAysqjGEts/preview?authuser=0" data-target="#modalVideo">
            <img src="https://drive.google.com/thumbnail?authuser=0&sz=w360&id=1ihaxwbairYWqbs4gZxbZueBAysqjGEts" width="100%">
						<p><b>Ring of Fire Adventure Stage 1 Episode 5</b></p>
					</a>
				</div>
			</div>
      <div class="row">
        <div class="col">
          <a href="#" class="video-thumb" data-toggle="modal" data-src="https://drive.google.com/file/d/1BlWQ92l7trqblWaksAV3qkpsHAEOpmzZ/preview?authuser=0" data-target="#modalVideo">
            <img src="https://drive.google.com/thumbnail?authuser=0&sz=w360&id=1BlWQ92l7trqblWaksAV3qkpsHAEOpmzZ" width="100%">
            <p><b>Ring of Fire Adventure Stage 1 Episode 6</b></p>
          </a>
        </div>
        <div class="col">
          <a href="#" class="video-thumb" data-toggle="modal" data-src="https://drive.google.com/file/d/1mBM5W2Lv-F-lOaNPeTlbFDGLk2QWtNlS/preview?authuser=0" data-target="#modalVideo">
            <img src="https://drive.google.com/thumbnail?authuser=0&sz=w360&id=1mBM5W2Lv-F-lOaNPeTlbFDGLk2QWtNlS" width="100%">
            <p><b>Ring of Fire Adventure Stage 1 Episode 7</b></p>
          </a>
        </div>
        <div class="col">
          <a href="#" class="video-thumb" data-toggle="modal" data-src="https://drive.google.com/file/d/1Ww6blGX3-E_pOaO8IUXSCHcFCI1zzWg9/preview?authuser=0" data-target="#modalVideo">
            <img src="https://drive.google.com/thumbnail?authuser=0&sz=w360&id=1Ww6blGX3-E_pOaO8IUXSCHcFCI1zzWg9" width="100%">
            <p><b>Ring of Fire Adventure Stage 1 Episode 8</b></p>
          </a>
        </div>
        <div class="col">
          <a href="#" class="video-thumb" data-toggle="modal" data-src="https://drive.google.com/file/d/1j6Fz2BEsnE4ZBvbRTamUDrw4XLPaaWTX/preview?authuser=0" data-target="#modalVideo">
            <img src="https://drive.google.com/thumbnail?authuser=0&sz=w360&id=1j6Fz2BEsnE4ZBvbRTamUDrw4XLPaaWTX" width="100%">
            <p><b>Ring of Fire Adventure Stage 1 Episode 9</b></p>
          </a>
        </div>
      </div>
		</div>
		<div id="tab3" class="tab-pane fade">
			<div class="row">
				<div class="col">
					<a href="#" class="video-thumb" data-toggle="modal" data-src="https://drive.google.com/file/d/1VZ2PjFJJzQ0V5GgHTsQEINW0iNWxTzZW/preview?authuser=0" data-target="#modalVideo">
            <img src="https://drive.google.com/thumbnail?authuser=0&sz=w360&id=1VZ2PjFJJzQ0V5GgHTsQEINW0iNWxTzZW" width="100%">
						<p><b>Ring Of Fire Adventure Stage 2 Episode 1</b></p>
					</a>
				</div>
				<div class="col">
					<a href="#" class="video-thumb" data-toggle="modal" data-src="https://drive.google.com/file/d/1RXO3AVkJbHnSHseOx2Gm44gI5ZiciaGr/preview?authuser=0" data-target="#modalVideo">
            <img src="https://drive.google.com/thumbnail?authuser=0&sz=w360&id=1RXO3AVkJbHnSHseOx2Gm44gI5ZiciaGr" width="100%">
						<p><b>Ring Of Fire Adventure Stage 2 Episode 2</b></p>
					</a>
				</div>
				<div class="col">
					<a href="#" class="video-thumb" data-toggle="modal" data-src="https://drive.google.com/file/d/15vrRkFkPs27EygpqLdBbOTOT5YEZdu05/preview?authuser=0" data-target="#modalVideo">
            <img src="https://drive.google.com/thumbnail?authuser=0&sz=w360&id=15vrRkFkPs27EygpqLdBbOTOT5YEZdu05" width="100%">
						<p><b>Ring Of Fire Adventure Stage 2 Episode 3</b></p>
					</a>
				</div>
				<div class="col">
					<a href="#" class="video-thumb" data-toggle="modal" data-src="https://drive.google.com/file/d/17ZQi5LcETxjcF3MazDOmjAsZzy9pcPtt/preview?authuser=0" data-target="#modalVideo">
            <img src="https://drive.google.com/thumbnail?authuser=0&sz=w360&id=17ZQi5LcETxjcF3MazDOmjAsZzy9pcPtt" width="100%">
						<p><b>Ring Of Fire Adventure Stage 2 Episode 4</b></p>
					</a>
				</div>
			</div>

      <div class="row">
        <div class="col">
          <a href="#" class="video-thumb" data-toggle="modal" data-src="https://drive.google.com/file/d/1PLmjOr-o-lg9bDqgAvbITiEyG4sqM7hY/preview?authuser=0" data-target="#modalVideo">
            <img src="https://drive.google.com/thumbnail?authuser=0&sz=w360&id=1PLmjOr-o-lg9bDqgAvbITiEyG4sqM7hY" width="100%">
            <p><b>Ring Of Fire Adventure Stage 2 Episode 5</b></p>
          </a>
        </div>
        <div class="col">
          <a href="#" class="video-thumb" data-toggle="modal" data-src="https://drive.google.com/file/d/1JuJAIZcTKn7FQmlWiF-kVUto35k22hro/preview?authuser=0" data-target="#modalVideo">
            <img src="https://drive.google.com/thumbnail?authuser=0&sz=w360&id=1JuJAIZcTKn7FQmlWiF-kVUto35k22hro" width="100%">
            <p><b>Ring Of Fire Adventure Stage 2 Episode 6</b></p>
          </a>
        </div>
        <div class="col">
          <a href="#" class="video-thumb" data-toggle="modal" data-src="https://drive.google.com/file/d/18IxXd-Q44Vjaf9-m5LpeBIeJ-XknEjnp/preview?authuser=0" data-target="#modalVideo">
            <img src="https://drive.google.com/thumbnail?authuser=0&sz=w360&id=18IxXd-Q44Vjaf9-m5LpeBIeJ-XknEjnp" width="100%">
            <p><b>Ring Of Fire Adventure Stage 2 Episode 7</b></p>
          </a>
        </div>
        <div class="col">
          <a href="#" class="video-thumb" data-toggle="modal" data-src="https://drive.google.com/file/d/16uN9oh4TRrncGBVaLucSOZIL9jU1SGCW/preview?authuser=0" data-target="#modalVideo">
            <img src="https://drive.google.com/thumbnail?authuser=0&sz=w360&id=16uN9oh4TRrncGBVaLucSOZIL9jU1SGCW" width="100%">
            <p><b>Ring Of Fire Adventure Stage 2 Episode 8</b></p>
          </a>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <a href="#" class="video-thumb" data-toggle="modal" data-src="https://drive.google.com/file/d/1D4AvqhoACfp7eLBF3vdIv4GrsNVmx5n-/preview?authuser=0" data-target="#modalVideo">
            <img src="https://drive.google.com/thumbnail?authuser=0&sz=w360&id=1D4AvqhoACfp7eLBF3vdIv4GrsNVmx5n-" width="100%">
            <p><b>Ring Of Fire Adventure Stage 2 Episode 9</b></p>
          </a>
        </div>
        <div class="col">
          <a href="#" class="video-thumb" data-toggle="modal" data-src="https://drive.google.com/file/d/1CTga_NG3Qg0JmK1OR9991xmMnmv1Xett/preview?authuser=0" data-target="#modalVideo">
            <img src="https://drive.google.com/thumbnail?authuser=0&sz=w360&id=1CTga_NG3Qg0JmK1OR9991xmMnmv1Xett" width="100%">
            <p><b>Ring Of Fire Adventure Stage 2 Episode 10</b></p>
          </a>
        </div>
        <div class="col">
          <a href="#" class="video-thumb" data-toggle="modal" data-src="https://drive.google.com/file/d/1wqzmbCZzTUzopktZ97gXsRBuX6mO8IY1/preview?authuser=0" data-target="#modalVideo">
            <img src="https://drive.google.com/thumbnail?authuser=0&sz=w360&id=1wqzmbCZzTUzopktZ97gXsRBuX6mO8IY1" width="100%">
            <p><b>Ring Of Fire Adventure Stage 2 Episode 11</b></p>
          </a>
        </div>
        <div class="col">
          <a href="#" class="video-thumb" data-toggle="modal" data-src="https://drive.google.com/file/d/1DMSaTxmK4FP-1c7vcYwNleGj89Je4h7S/preview?authuser=0" data-target="#modalVideo">
            <img src="https://drive.google.com/thumbnail?authuser=0&sz=w360&id=1DMSaTxmK4FP-1c7vcYwNleGj89Je4h7S" width="100%">
            <p><b>Ring Of Fire Adventure Stage 2 Episode 12</b></p>
          </a>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <a href="#" class="video-thumb" data-toggle="modal" data-src="https://drive.google.com/file/d/17TVg6mphu3YTsZuxC3cDwCj7gWru7Vgh/preview?authuser=0" data-target="#modalVideo">
            <img src="https://drive.google.com/thumbnail?authuser=0&sz=w360&id=17TVg6mphu3YTsZuxC3cDwCj7gWru7Vgh" width="100%">
            <p><b>Ring Of Fire Adventure Stage 2 Episode 13</b></p>
          </a>
        </div>
        <div class="col">
          <a href="#" class="video-thumb" data-toggle="modal" data-src="https://drive.google.com/file/d/12HvpHZeQatUSMuR_V9boZz_r9wpYX_wU/preview?authuser=0" data-target="#modalVideo">
            <img src="https://drive.google.com/thumbnail?authuser=0&sz=w360&id=12HvpHZeQatUSMuR_V9boZz_r9wpYX_wU" width="100%">
            <p><b>Ring Of Fire Adventure Stage 2 Episode 14</b></p>
          </a>
        </div>
        <div class="col">
          <a href="#" class="video-thumb" data-toggle="modal" data-src="https://drive.google.com/file/d/1uXDaY3IxE-mOXmUx404EqtgM1EhZxj3s/preview?authuser=0" data-target="#modalVideo">
            <img src="https://drive.google.com/thumbnail?authuser=0&sz=w360&id=1uXDaY3IxE-mOXmUx404EqtgM1EhZxj3s" width="100%">
            <p><b>Ring Of Fire Adventure Stage 2 Episode 15</b></p>
          </a>
        </div>
        <div class="col">
        </div>
      </div>

		</div>
		<div id="tab4" class="tab-pane fade">
			<div class="row">
				<div class="col">
					<a href="#" class="video-thumb" data-toggle="modal" data-src="https://drive.google.com/file/d/1u52PKrZDf9qt-9eaCHh0F0hiDWLIiie8/preview?authuser=0" data-target="#modalVideo">
            <img src="https://drive.google.com/thumbnail?authuser=0&sz=w360&id=1u52PKrZDf9qt-9eaCHh0F0hiDWLIiie8" width="100%">
            <p><b>Ring Of Fire Adventure Stage 3 Episode 1</b></p>
          </a>
				</div>
				<div class="col">
					<a href="#" class="video-thumb" data-toggle="modal" data-src="https://drive.google.com/file/d/1AES_XNSufUJl3RwF_7i3hsPxNPJYtmi_/preview?authuser=0" data-target="#modalVideo">
            <img src="https://drive.google.com/thumbnail?authuser=0&sz=w360&id=1AES_XNSufUJl3RwF_7i3hsPxNPJYtmi_" width="100%">
            <p><b>Ring Of Fire Adventure Stage 3 Episode 2</b></p>
          </a>
				</div>
				<div class="col">
					<a href="#" class="video-thumb" data-toggle="modal" data-src="https://drive.google.com/file/d/1il0GRSgveJs32xaHB37APN6ybDJ-6NrB/preview?authuser=0" data-target="#modalVideo">
            <img src="https://drive.google.com/thumbnail?authuser=0&sz=w360&id=1il0GRSgveJs32xaHB37APN6ybDJ-6NrB" width="100%">
            <p><b>Ring Of Fire Adventure Stage 3 Episode 3</b></p>
          </a>
				</div>
				<div class="col">
					<a href="#" class="video-thumb" data-toggle="modal" data-src="https://drive.google.com/file/d/1aQR7e-r9tUS3-RTNIQtX_3ktBUNi54z3/preview?authuser=0" data-target="#modalVideo">
            <img src="https://drive.google.com/thumbnail?authuser=0&sz=w360&id=1aQR7e-r9tUS3-RTNIQtX_3ktBUNi54z3" width="100%">
            <p><b>Ring Of Fire Adventure Stage 3 Episode 4</b></p>
          </a>
				</div>
			</div>

      <div class="row">
        <div class="col">
          <a href="#" class="video-thumb" data-toggle="modal" data-src="https://drive.google.com/file/d/1_tI_kgqjNVz1FJGkNtHuHhHUZTIf7Xh5/preview?authuser=0" data-target="#modalVideo">
            <img src="https://drive.google.com/thumbnail?authuser=0&sz=w360&id=1_tI_kgqjNVz1FJGkNtHuHhHUZTIf7Xh5" width="100%">
            <p><b>Ring Of Fire Adventure Stage 3 Episode 5</b></p>
          </a>
        </div>
        <div class="col">
          <a href="#" class="video-thumb" data-toggle="modal" data-src="https://drive.google.com/file/d/1JACcwCyiRMZ23yF0xLOSoamnDbOgC-fB/preview?authuser=0" data-target="#modalVideo">
            <img src="https://drive.google.com/thumbnail?authuser=0&sz=w360&id=1JACcwCyiRMZ23yF0xLOSoamnDbOgC-fB" width="100%">
            <p><b>Ring Of Fire Adventure Stage 3 Episode 6</b></p>
          </a>
        </div>
        <div class="col">
          <a href="#" class="video-thumb" data-toggle="modal" data-src="https://drive.google.com/file/d/1tS8I6Lm7sxzGBxfeia9LHCdXA4TYKfRR/preview?authuser=0" data-target="#modalVideo">
            <img src="https://drive.google.com/thumbnail?authuser=0&sz=w360&id=1tS8I6Lm7sxzGBxfeia9LHCdXA4TYKfRR" width="100%">
            <p><b>Ring Of Fire Adventure Stage 3 Episode 7</b></p>
          </a>
        </div>
        <div class="col">
          <a href="#" class="video-thumb" data-toggle="modal" data-src="https://drive.google.com/file/d/1I92LkeKjMW7kq7iQ_9aMbIrihcaXjTzh/preview?authuser=0" data-target="#modalVideo">
            <img src="https://drive.google.com/thumbnail?authuser=0&sz=w360&id=1I92LkeKjMW7kq7iQ_9aMbIrihcaXjTzh" width="100%">
            <p><b>Ring Of Fire Adventure Stage 3 Episode 8</b></p>
          </a>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <a href="#" class="video-thumb" data-toggle="modal" data-src="https://drive.google.com/file/d/1Q4Az96UCWyjrK_Xhdsn6SVq0D4pBHeHx/preview?authuser=0" data-target="#modalVideo">
            <img src="https://drive.google.com/thumbnail?authuser=0&sz=w360&id=1Q4Az96UCWyjrK_Xhdsn6SVq0D4pBHeHx" width="100%">
            <p><b>Ring Of Fire Adventure Stage 3 Episode 9</b></p>
          </a>
        </div>
        <div class="col">
          <a href="#" class="video-thumb" data-toggle="modal" data-src="https://drive.google.com/file/d/1Xw7B0zQp_V2_orJLHKWXNkkflJEboiRU/preview?authuser=0" data-target="#modalVideo">
            <img src="https://drive.google.com/thumbnail?authuser=0&sz=w360&id=1Xw7B0zQp_V2_orJLHKWXNkkflJEboiRU" width="100%">
            <p><b>Ring Of Fire Adventure Stage 3 Episode 10</b></p>
          </a>
        </div>
        <div class="col">
          <a href="#" class="video-thumb" data-toggle="modal" data-src="https://drive.google.com/file/d/1U4Us-PvGScsCI3LjmReLVkFYkQY1mSB7/preview?authuser=0" data-target="#modalVideo">
            <img src="https://drive.google.com/thumbnail?authuser=0&sz=w360&id=1U4Us-PvGScsCI3LjmReLVkFYkQY1mSB7" width="100%">
            <p><b>Ring Of Fire Adventure Stage 3 Episode 11</b></p>
          </a>
        </div>
        <div class="col">
          <a href="#" class="video-thumb" data-toggle="modal" data-src="https://drive.google.com/file/d/1GSn-flh1qn6rXzqizp2KXI19TaDg6bSm/preview?authuser=0" data-target="#modalVideo">
            <img src="https://drive.google.com/thumbnail?authuser=0&sz=w360&id=1GSn-flh1qn6rXzqizp2KXI19TaDg6bSm" width="100%">
            <p><b>Ring Of Fire Adventure Stage 3 Episode 12</b></p>
          </a>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <a href="#" class="video-thumb" data-toggle="modal" data-src="https://drive.google.com/file/d/1YEc4O2CtaAs1ILcu2QHDXVdwoDxCPUK-/preview?authuser=0" data-target="#modalVideo">
            <img src="https://drive.google.com/thumbnail?authuser=0&sz=w360&id=1YEc4O2CtaAs1ILcu2QHDXVdwoDxCPUK-" width="100%">
            <p><b>Ring Of Fire Adventure Stage 3 Episode 13</b></p>
          </a>
        </div>
        <div class="col">
          <a href="#" class="video-thumb" data-toggle="modal" data-src="https://drive.google.com/file/d/1eQ_0GbSIAFJ6LMKvbrDUYw4KGVdXvDzb/preview?authuser=0" data-target="#modalVideo">
            <img src="https://drive.google.com/thumbnail?authuser=0&sz=w360&id=1eQ_0GbSIAFJ6LMKvbrDUYw4KGVdXvDzb" width="100%">
            <p><b>Ring Of Fire Adventure Stage 3 Episode 14</b></p>
          </a>
        </div>
        <div class="col">
        </div>
        <div class="col">
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

        @auth
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always" allow="autoplay" frameborder="0" allowfullscreen></iframe>
        </div>
        @endauth
        @guest
        <div class="embed-responsive embed-responsive-16by9">
          <h3 class="align-middle">Login or Register to watch this video</h3>
        </div>
        @endguest
        
      </div>

    </div>
  </div>
</div>

<!-- Register Modal -->

<div class="modal fade" id="modalRegister" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="{{ route('member.register') }}" method="POST">
        @csrf

      <div class="modal-header">
        <h3>Member Registration</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
      </div>
      
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" name="firstname" class="form-control" placeholder="First Name">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" name="lastname" class="form-control" placeholder="Last Name">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" name="email" class="form-control" placeholder="E-Mail">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="number" name="phone" class="form-control" placeholder="Phone/Mobile">
            </div>
          </div>
        </div>
      </div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Register</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>

      </form>
    </div>
  </div>
</div>


<!-- Alert Modal -->

@if(session('success') || session('error'))
<div class="modal" id="modalAlert" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      @if(session('error'))
      <div class="alert alert-danger">
        {{ session('error') }}
      </div>
      @elseif(session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
      @endif
    </div>
  </div>
</div>
@endif

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