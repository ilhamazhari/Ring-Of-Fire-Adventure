@extends('layout.main')

@section('title', 'Events')

@section('style')

@endsection

@section('content')

@include('layout.navigation')

<div class="container page-padding-bottom">
  @php
  $i=1; 
  @endphp
  <div class="row">
    @foreach($events as $ev)
    
    @if($i % 3 == 0)
    <div class="col-md-4">
      <a href="{{ URL::Route('events') }}/{{ str_replace(' ' , '-', $ev->name) }}">
        <img src="{{ url('/') }}/images/events/{{ $ev->image }}" width="100%">
        <h3>{{ $ev->name }}</h3>
      </a>
    </div>
  </div>
  <div class="row">
    @else
    <div class="col-md-4">
      <a href="{{ URL::Route('events') }}/{{ str_replace(' ' , '-', $ev->name) }}">
        <img src="{{ url('/') }}/images/events/{{ $ev->image }}" width="100%">
        <h3>{{ $ev->name }}</h3>
      </a>
    </div>
    @endif

    @php
    $i++;
    @endphp
    @endforeach
  </div>
</div>

@include('layout.footer')

@endsection

@section('script')

@endsection