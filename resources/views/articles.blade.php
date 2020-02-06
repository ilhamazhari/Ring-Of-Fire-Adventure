@extends('layout.main')

@section('title', 'Articles')

@section('content')

@include('layout.navigation')

<div class="container">
  @if(!empty($news))
  <h1>NEWS</h1>
  <div class="row">
    @php
      $n = 1;
    @endphp
    @foreach($news as $nw)
    @php
      $linknews = str_replace(' ', '-', $nw->title);
    @endphp
    <div class="col-md-4">
      <a href="{{ route('news.details', $linknews) }}">
        <img src="{{ url('/images/content') }}/{{ $nw->imageheading }}" width="100%">
        <h3>{{$nw->title}}</h3>
      </a>
    </div>
    @if($n % 3 == 0)
  </div>
  <div class="row">
    @endif
    @php
      $n++;
    @endphp
    @endforeach
    @endif
  </div>
  <div class="page-padding-bottom"></div>
  @if(!empty($articles))
  <h1>ARTICLES</h1>
  @php
    $a = 1;
  @endphp
    @foreach($articles as $at)
    @php
      $linkarticles = str_replace(' ', '-', $at->title);
    @endphp
    <div class="col-md-4">
      <a href="{{ route('articles.details', $linkarticles) }}">
        <img src="{{url('/images/content')}}/{{$at->imageheading}}" width="100%">
        <h3>{{$at->title}}</h3>
      </a>
    </div>
    @if($a % 3 == 0)
  </div>
  <div class="row">
    @endif
    @endforeach
  @endif
  <div class="page-padding-bottom"></div>
</div>

@include('layout.footer')

@endsection