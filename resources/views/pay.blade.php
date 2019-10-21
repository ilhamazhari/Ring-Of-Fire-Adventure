@extends('layout.main')

@section('title', 'Payment')

@section('style')

@endsection

@section('content')

@include('layout.navigation')

<div class="container page-padding-top-bottom">
	<table class="table">
		<thead>
			<tr>
				<th scope="col">No.</th>
				<th scope="col">Subtotal</th>
				<th scope="col">Shipping Cost</th>
				<th scope="col">Tax</th>
				<th scope="col">Total</th>
			</tr>
		</thead>
		<tbody>
			<form id="payment-form">
			@foreach($billing as $bill)
			<tr>
				<td scope="row"></td>
				<td>{{ $bill->subtotal }}</td>
				<td>{{ $bill->shipping_cost }}</td>
				<td>{{ $bill->tax }}</td>
				<td>{{ $bill->total }}</td>
			</tr>
				@csrf
				<input type="hidden" id="shipping_price" name="shipping_price" value="{{ $bill->shipping_cost }}">
				<input type="hidden" id="tax" name="tax" value="{{ $bill->tax }}">
				<input type="hidden" id="gross_amount" name="gross_amount"  value="{{ $bill->total }}">
				<input type="hidden" id="order_id" name="order_id" value="{{ $bill->transaction_code }}">
				<input type="hidden" name="result_type" id="result-type" value=""></div>
				<input type="hidden" name="result_data" id="result-data" value=""></div>
			@endforeach
			</form>
		</tbody>
	</table>
	<button type="submit" class="btn btn-primary" id="pay-button">Pay Now!</button>
</div>

@include('layout.footer')

@endsection


@section('script')
<script type="text/javascript">
	$(document).ready(function(){
		
		$('#pay-button').click(function(event){
			//event.preventDefault();
			//$(this).attr("disabled", "disabled");

			$.post('{{ route('snaptoken') }}', {
				_method: "POST",
				_token: "{{ csrf_token() }}",
				order_id: $('#order_id').val(),
				gross_amount: $('#gross_amount').val(),
				shipping_price: $('#shipping_price').val(),
				tax: $('#tax').val(),
			},
			function(data,status){
				snap.pay(data.snap_token, {
					onSuccess: function(result){
            $.post('{{ route('payment.changestatus') }}', {
              _method: "POST",
              _token: "{{csrf_token()}}",
              transaction_code: result.order_id,
              status: 'settlement',
            });
						console.log(result);
					},
					onPending: function(result){
						console.log(result);
					},
					onError: function(result){
						console.log(result);
					}
				});
			});
		});
	});
	
</script>
<script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('app.midtrans.client_key') }}"></script>
@endsection