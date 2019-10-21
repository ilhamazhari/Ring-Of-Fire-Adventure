@extends('layout.webmanager-main')

@section('title', 'Transaction')

@section('content')

<table class="table table-stripped table-md">
  <thead>
    <th>#</th>
    <th>Transaction Code</th>
    <th>Type</th>
    <th>Courier Service</th>
    <th>Shipping Status</th>
    <th>Payment Status</th>
    <th>Subtotal</th>
    <th>Tax</th>
    <th>Shipping Cost</th>
    <th>Total</th>
    <th>Action</th>
  </thead>
  <tbody>
    @php
      $i = 1;
    @endphp
    @foreach($transaction as $trans)
    <tr>
      <td>{{$i}}</td>
      <td>{{$trans->transaction_code}}</td>
      <td>{{$trans->type}}</td>
      <td>{{$trans->courier_service}}</td>
      <td>{{$trans->shipping_status}}</td>
      <td>{{$trans->status}}</td>
      <td>{{$trans->subtotal}}</td>
      <td>{{$trans->tax}}</td>
      <td>{{$trans->shipping_cost}}</td>
      <td>{{$trans->total}}</td>
      <td><a href="{{ route('manager.transaction.show', $trans->id) }}" class="btn btn-primary"><i class="fa fa-pencil-square-o"></a></button></td>
    </tr>
    @php
      $i++;
    @endphp
    @endforeach
  </tbody>
</table>

@endsection
