@extends('layout.webmanager-main')

@section('title', 'Products')

@section('content')

<h1>Products</h1>

<table class="table table-stripped table-sm">
	<thead>
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Category</th>
			<th>Price</th>
			<th>Discount</th>
			<th>Tags</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@php
			$i = 1;
		@endphp
		
		@foreach($products as $prd)
		<tr>
			<td>{{ $i }}</td>
			<td>{{ $prd->name }}</td>
			<td>{{ $prd->category }}</td>
			<td>{{ $prd->price }}</td>
			<td>{{ $prd->discount }}</td>
			<td>{{ $prd->tags }}</td>
			<td></td>
		</tr>
		@php
			$i++;
		@endphp
		@endforeach

	</tbody>
</table>


<button type="button" class="btn btn-primary" id="addProductsButton" data-toggle="modal" data-target="#productsModal"><i class="fa fa-plus fa-fw"></i> Add products</button>

<div class="modal fade" id="productsModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<form name="addproducts" method="POST" action="{{ URL::Route('manager.products.store') }}">
				@csrf

				<div class="modal-header">
					<h5 class="modal-title">Add products</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<div class="modal-body">

						<div class="form-group">
							<input type="text" name="name" class="form-control" placeholder="Product Name">
						</div>
						<div class="form-group">
						 <input type="text" name="category" class="form-control" placeholder="Product Category">
						</div>
						<div class="form-group">
							<textarea name="description" class="form-control" placeholder="Description"></textarea>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-8">
									<input type="text" name="price" class="form-control" placeholder="Price">
								</div>
								<div class="col">
									<input type="text" name="discount" class="form-control" placeholder="Discount">
								</div>
							</div>
						
						</div>
						<div class="form-group">
							<input type="text" name="tags" class="form-control" placeholder="Tags">
						</div>

				</div>

				<div class="modal-footer">
					<button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i> Save</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>				
				</div>

			</div>
		</form>
	</div>
</div>
@endsection

@section('script')

@endsection