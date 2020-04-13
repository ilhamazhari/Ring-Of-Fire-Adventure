@extends('layout.main')

@section('title', $content->title)

@section('content')

@include('layout.navigation')

<div class="container">
  <h1>{{$content->title}}</h1>
  <img src="https://rofa.s3.ap-southeast-1.amazonaws.com/{{$content->imageheading}}" width="100%">
  {!! $content->content !!}
</div>

@include('layout.footer')

@endsection