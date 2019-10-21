@extends('layout.webmanager-main')

@section('title', 'Transaction details')

@section('content')


<h3>{{ $transaction->transaction_code }}</h3>

<div class="row">
  <div class="col-md-3">Transaction date :</div><div class="col-md-8">{{ $transaction->created_at }}</div>
</div>
<div class="row">
  <div class="col-md-3">Type</div><div class="col-md-8">{{$transaction->type}} transaction</div>
</div>
@if($transaction->type == 'Store')
<div class="row">
  <div class="col-md-3">Courier :</div><div class="col-md-8">{{ $transaction->courier_service }}</div>
</div>
<div class="row">
  <div class="col-md-3">Resi :</div><div class="col-md-8">
    <form method="POST" action="{{ route('manager.transaction.submitresi') }}" class="row">@csrf<div class="col-md-4"><input type="hidden" name="id" value="{{$transaction->id}}"><input type="text" name="resi" id="resi" class="form-control" value="{{ $transaction->resi }}" placeholder="Resi"></div><div class="col-md-4"><button type="submit" class="btn btn-primary">Submit Resi</button></div></form>
  </div>
</div>
@endif


<h3>Item</h3>

@php
  $no =1;
@endphp

<table class="table stripped">
  <thead>
    <th>#</th>
    <th>Name</th>
    <th>Price</th>
  </thead>
  <tbody>
    @foreach($transaction_item as $ti)
    <tr>
      <td>{{$no}}</td>
      <td>{{$ti['name']}}</td>
      <td>{{$ti['price']}}</td>
    </tr>
    @php
      $no++;
    @endphp
    @endforeach
  </tbody>
</table>

@endsection