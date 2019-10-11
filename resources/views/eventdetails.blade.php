@extends('layout.main')

@section('title', 'Events')

@section('style')

@endsection

@section('content')

@include('layout.navigation')

<div class="container">
  @foreach($events as $ev)

  <img src="{{ url('/') }}/images/events/{{ $ev->image }}" width="100%">
  <h1>{{ $ev->name }}</h1>

  <div class="description">
    {{ $ev->description }}
  </div>

  <button class="btn btn-primary" id="bookEventsButton" data-toggle="modal" data-target="#bookEventsModal">Book Events</button>

  <div class="modal fade" id="bookEventsModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <form name="bookEvents" method="POST" action="{{ route('event-booking', $ev->id) }}">
          @csrf
          <div class="modal-header">
            <h5 class="modal-title">Book Events</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <div class="form-group row">
              <div class="col"><input type="text" name="first_name" class="form-control" placeholder="First Name"></div>
              <div class="col"><input type="text" name="last_name" class="form-control" placeholder="Last Name"></div>
            </div>
            <div class="form-group row">
              <div class="col"><input type="email" name="email" class="form-control" placeholder="Email"></div>
              <div class="col"><input type="text" name="phone" class="form-control" placeholder="Phone"></div>
            </div>
            <div class="form-group row">
              <div class="col"><input type="text" name="country" class="form-control" placeholder="Country"></div>
              <div class="col"><input type="text" name="province" class="form-control" placeholder="State/Province"></div>
            </div>
            <div class="form-group row">
              <div class="col"><input type="text" name="city" class="form-control" placeholder="City"></div>
              <div class="col"><input type="text" name="postal_code" class="form-control" placeholder="Postal Code"></div>
            </div>
            <div class="form-group row">
              <textarea name="address" class="form-control" rows="8" cols="32" placeholder="Address"></textarea>
            </div>
            <div class="form-group">
              <select name="quantity">
                <option disabled selected>-- Quantity --</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
              <input type="hidden" name="shipping_price" value="0">
              <input type="hidden" name="events_id" value="{{ $ev->id }}">
            </div>
          </div>

          <div class="modal-footer">
            <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i> Book Now</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  @endforeach
</div>

@include('layout.footer')

@endsection

@section('script')

@endsection