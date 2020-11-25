@extends('layout.webmanager-main')

@section('title', 'Content')

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
      <th>Title</th>
      <th>Tags</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @php
      $i = 1;
    @endphp

    @foreach($content as $c)
    <tr>
      <td>{{$i}}</td>
      <td>{{$c->title}}</td>
      <td>{{$c->tags}}</td>
      <td></td>
    </tr>
    @php
      $i++;
    @endphp

    @endforeach
  </tbody>
</table>

<a href="{{ route('manager.content.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add Content</a>



@endsection
