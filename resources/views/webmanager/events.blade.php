@extends('layout.webmanager-main')

@section('title','Events')

@section('content')

@if(session('errors'))
<div class="alert alert-danger">
	<strong>There's problem with your input!</strong>
	<ul>
		@foreach($errors->all() as $err)
		<li>{{ $err }}</li>
		@endforeach
	</ul>
</div>
@elseif(session('success'))
<div class="alert alert-success">
	{{ session('success') }}
</div>
@endif

<table class="table table-stripped table-sm">
	<thead>
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Start Date</th>
			<th>End Date</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@php
			$i = 1;
		@endphp

		@foreach($events as $ev)
		<tr>
			<td>{{ $i }}</td>
			<td>{{ $ev->name }}</td>
			<td>{{ $ev->start_date }}</td>
			<td>{{ $ev->end_date }}</td>
			<td>
				<form action="" method="POST">
					<a href="btn btn-info"></a>
				</form>
			</td>
		</tr>
		@php
			$i++
		@endphp
		@endforeach
	</tbody>
</table>

<button class="btn btn-primary" id="addEventsButton" data-toggle="modal" data-target="#eventsModal">Add Events</button>

<div class="modal fade" id="eventsModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<form name="addevents" method="POST" action="{{ URL::Route('manager.events.store') }}" enctype="multipart/form-data">
				@csrf
				<div class="modal-header">
					<h5 class="modal-title">Add Events</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<div class="modal-body">
					<div class="form-group">
						<input type="text" name="name" id="eventName" class="form-control" placeholder="Event Name">
					</div>
					<div class="form-group row">
						<label for="eventImage" class="col-sm-4 col-form-label">Image</label>
						<div class="col-sm-8">
							<input type="file" name="image" id="eventImage" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<label for="eventStart" class="col-sm-4 col-form-label">Start Date</label>
						<div class="col-sm-8">
							<input type="date" name="start_date" id="eventStart" class="form-control">
						</div>
					</div>
					<div class="form-group row">
						<label for="eventEnd" class="col-sm-4 col-form-label">End Date</label>
						<div class="col-sm-8">
							<input type="date" name="end_date" id="eventEnd" class="form-control">
						</div>
					</div>
					<div class="form-group row">
            <div class="col">
              <input type="number" name="price" id="eventPrice" class="form-control" placeholder="Price">
            </div>
						<div class="col">
              <input type="number" name="quantity" id="eventQuantity" class="form-control" placeholder="Quantity">
            </div>
					</div>
					<div class="form-group">
						<textarea name="description" id="eventDescription" class="form-control" rows="8" cols="32" placeholder="Description"></textarea>
					</div>
				</div>

				<div class="modal-footer">
					<button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i> Save</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection

@section('script')

@endsection