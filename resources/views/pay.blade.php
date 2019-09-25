@extends('layout.main')

@section('title', 'Payment')

@section('style')

@endsection

@section('content')

@include('layout.navigation')

<div class="container">
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
			@foreach($billing as $bill)
			<tr>
				<td scope="row"></td>
				<td>{{ $bill->subtotal }}</td>
				<td>{{ $bill->shipping_price }}</td>
				<td>{{ $bill->tax }}</td>
				<td>{{ $bill->total }}</td>
			</tr>
			<form id="payment-form" method="POST">
				@csrf
				<input type="hidden" id="shipping_price" name="shipping_price" value="{{ $bill->shipping_price }}">
				<input type="hidden" id="tax" name="tax" value="{{ $bill->tax }}">
				<input type="hidden" id="gross_amount" name="gross_amount"  value="{{ $bill->total }}">
				<input type="hidden" id="order_id" name="order_id" value="{{ $bill->transaction_code }}">
				<input type="hidden" name="result_type" id="result-type" value=""></div>
				<input type="hidden" name="result_data" id="result-data" value=""></div>
			</form>
			@endforeach
		</tbody>
	</table>
	<button class="btn btn-primary" id="pay-button">Pay Now!</button>
</div>

@include('layout.footer')

@endsection


@section('script')
<script type="text/javascript">
	$(document).ready(function(){
		$('#pay-button').click(function(event){
			//event.preventDefault();
			//$(this).attr("disabled", "disabled");

			$.post({
				_method: 'POST',
            	_token: '{{ csrf_token() }}',
				url: '{{ URL::to('/') }}/snaptoken',
				data: {gross_amount: $('#gross_amount').val(), order_id: $('#order_id').val()},

				success: function(data){
					console.log('token= '+data);
					var resultType = document.getElementById('result-type');
					var resultData = document.getElementById('result-data');

					function changeResult(type,data){
						$("#result-type").val(type);
						$("#result-data").val(JSON.stringify(data));
						//resultType.innerHTML = type;
						//resultData.innerHTML = JSON.stringify(data);
					}

					snap.pay(data,{
						onSuccess: function(result){
							changeResult('success', result);
							console.log(result.status_message);
							console.log(result);
							$('#payment-form').submit();
						},
						onPending: function(result){
							changeResult('pending', result);
							console.log(result.status_message);
							$('#payment-form').submit();
						},
						onError: function(result){
							changeResult('error', result);
							console.log(result.status_message);
							$('#payment-form').submit();
						},

					});
				},

				error: function(result){
					console.log(result);
				},
			});
		});
	});
	
</script>
<script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('app.midtrans.client_key') }}"></script>
@endsection