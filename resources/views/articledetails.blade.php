@extends('layout.main')

@section('title', $content->title)

@section('content')

@include('layout.navigation')

<div class="container">
  <h1>{{$content->title}}</h1>
  <img src="{{ env('DO_CDN') . '/' . $content->imageheading}}" width="100%">
  {!! $content->content !!}
</div>

@include('layout.footer')

@endsection