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
            <div class="form-group">
              <textarea name="address" class="form-control" rows="8" placeholder="Address"></textarea>
              <input type="hidden" name="quantity" value="1">
              <input type="hidden" name="shipping_price" value="0">
              <input type="hidden" name="events_id" value="{{ $ev->id }}">
            </div>

            <hr>

            <div id="ridersData">
              <h5>Riders data</h5>
              <div class="form-group">
                <input type="text" name="riders_name" class="form-control" placeholder="Fullname">
              </div>
              <div class="form-group">
                <input type="email" name="riders_email" class="form-control" placeholder="E-Mail">
              </div>
              <div class="form-group">
                <input type="text" name="riders_phone" class="form-control" placeholder="Phone No.">
              </div>
              <div class="form-group">
                <textarea name="riders_address" class="form-control" rows="8" placeholder="Address"></textarea>
              </div>
              <div class="form-group">
                <select name="riders_blood" class="form-control">
                  <option>-- Blood Type --</option>
                  <option value="A">A</option>
                  <option value="B">B</option>
                  <option value="AB">AB</option>
                  <option value="O">O</option>
                </select>
              </div>
              <div class="form-group">
                <input type="text" name="riders_vehicle" class="form-control" placeholder="Vehicle">
              </div>
              <div class="form-group">
                <input type="text" name="riders_vehicleplate" class="form-control" placeholder="Plate No.">
              </div>
              
              <h5>Emergency Contact</h5>
              <div class="form-group">
                <input type="text" name="emergency_name" class="form-control" placeholder="Emergency Contact Name">
              </div>
              <div class="form-group">
                <select name="emergency_relation" class="form-control">
                  <option>-- Relation --</option>
                  <option value="Spouse">Spouse</option>
                  <option value="Parents">Parents</option>
                  <option value="Siblings">Siblings</option>
                  <option value="Friends">Friends</option>
                </select>
              </div>
              <div class="form-group">
                <input type="text" name="emergency_phone" class="form-control" placeholder="Phone">
              </div>

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