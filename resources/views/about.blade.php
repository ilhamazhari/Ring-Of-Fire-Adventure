@extends('layout.main')

@section('title', 'About us')

@section('style')
<style type="text/css"></style>
@endsection

@section('content')

@include('layout.navigation')

<!-- About Section -->
<section class="rofa-about">
  <div class="row">
    <div class="col-md-6 d-flex flex-column align-items-center justify-content-center">
      <img src="images/youk-rofa.jpg">
    </div>
    <div class="col-md-6 d-flex flex-column justify-content-center">
      <!-- -->
      <h1 class="about-title w-100">OUR AIM TO PROVIDE INDONESIA NATURE & CULTURE</h1><br>
      <p class="about-desc w-100">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum blandit orci in mollis consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum id leo id finibus. Aenean vel ante vulputate sapien congue mollis. Morbi risus urna, tincidunt eget lorem nec, lobortis consequat ligula. Vivamus lacinia ut diam id gravida. Nam et interdum neque, viverra ullamcorper nulla.</p>
      <a href="#"><button class="btn btn-orange">LEARN MORE</button></a>
    </div>
  </div>
</section>

@include('layout.footer')

@endsection

@section('script')

@endsection