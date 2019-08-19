@extends('layout.main')

@section('title', 'Login')

@section('style')
<style type="text/css">
	.container {
		height: 100vh;
	}

	.container img {
		margin-bottom: 40px;
	}
</style>
@endsection

@section('content')

<div class="container d-flex align-items-center justify-content-center text-center">
	<form name="login" class="w-50" method="POST" action="">
		@csrf

		<img src="{{ url('/images') }}/rofa-logo.jpg">
		<div class="card">
			<h3 class="card-header">RoFA Login</h3>
			<div class="card-body">
				@if(session('error'))
				<div class="alert alert-danger">
					{{ session('error') }}
				</div>
				@endif

				@if(session('success'))
				<div class="alert alert-success">
					{{ session('success') }}
				</div>
				@endif
				<div class="form-group">
					<input type="text" name="username" class="form-control" placeholder="Username">
				</div>
				<div class="form-group">
					<input type="password" name="password" class="form-control" placeholder="Password">
				</div>
			</div>
			<div class="card-footer">
				<input type="hidden" name="credentials" value="superadmin">
				<button type="submit" class="btn btn-primary">Login</button>
			</div>
		</div>
	</form>
</div>

@endsection