@php
  header('Set-Cookie: cross-site-cookie=name; SameSite=None; Secure');
@endphp
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>Ring of Fire Adventure | @yield('title')</title>
		<meta name="title" content="Ring of Fire Adventure Indonesia">
		<meta name="description" content="Explore Indonesia through our wonderful journey, we present Indonesia Nature, Culture and Heritage">
    <meta name="csrf-token" content="{{ csrf_token() }}">

		<link rel="shortcut icon" href="{{ URL::to('/') }}/images/rofa-logo.jpg">

		<link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/css/style.css">
		<style type="text/css">
			@font-face{
				font-family: "Avenir Medium";
				src: url('{{ URL::to('/') }}/fonts/Avenir-Medium.ttf');
				font-display: swap;
			}
			@font-face{
				font-family: "Bebas Neue Book";
				src: url('{{ URL::to('/') }}/fonts/BebasNeueBook.otf');
				font-display: swap;
			}
			@font-face{
				font-family: "Bebas Neue Regular";
				src: url('{{ URL::to('/') }}/fonts/BebasNeueRegular.otf');
				font-display: swap;
			}
			@font-face{
				font-family: "Bebas Neue Bold";
				src: url('{{ URL::to('/') }}/fonts/BebasNeueBold.otf');
				font-display: swap;
			}
			@font-face{
				font-family: "Panton Light Caps";
				src: url('{{ URL::to('/') }}/fonts/PANTON-LIGHTCAPS.OTF');
				font-display: swap;
			}
			@font-face{
				font-family: "Panton Black Caps";
				src: url('{{ URL::to('/') }}/fonts/PANTON-BLACKCAPS.OTF');
				font-display: swap;
			}
			@font-face{
				font-family: "Panton Black Italic Caps";
				src: url('{{ URL::to('/') }}/fonts/PANTON-BLACKITALICCAPS.OTF');
				font-display: swap;
			}
		</style>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<!-- Fontawesome -->
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

		@yield('style')
	</head>
	<body>
		<div class="container-fluid">
			@yield('content')
		</div>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

		@yield('script')
	</body>
</html>