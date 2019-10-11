<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>RoFA Web Manager | @yield('title')</title>
		<meta name="title" content="Ring of Fire Adventure Indonesia">
		<meta name="description" content="Explore Indonesia through our wonderful journey, we present Indonesia Nature, Culture and Heritage">

		<link rel="shortcut icon" href="{{ url('/images') }}/rofa-logo.jpg">

		<style type="text/css">
			main {
				padding-top: 71px;
				padding-left: 15px;
				padding-right: 15px;
				padding-bottom: 15px;
			}
			.wm-sidebar {
				position: fixed;
				top: 0;
				bottom: 0;
				left: 0;
				padding-top: 56px;
			}
			.wm-sticky-sidebar {
				height: calc(100vh - 56px);
			}
			@yield('style')
		</style>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<!-- Fontawesome -->
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	</head>
	<body>
		<div class="container-fluid">
			@include('layout.webmanager-navigation')
			<div class="row">
				<nav class="col-md-2 bg-light wm-sidebar">
					@include('layout.webmanager-sidebar')
				</nav>
				<div class="col-md-10">
					<main role="main">
						@yield('content')
					</main>
				</div>
			</div>
		</div>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    @yield('scriptlink')

		<script type="text/javascript">
			@yield('script')
		</script>
		
	</body>
</html>