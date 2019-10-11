@extends('layout.webmanager-main')

@section('title', 'Products')

@section('content')

<h1>Products</h1>

@if($errors->any())
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
			<th>Name</th>
			<th>Category</th>
			<th>Price</th>
      <th>Weight</th>
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
      <td>{{ $prd->weight }}</td>
			<td>{{ $prd->discount }}</td>
			<td>{{ $prd->tags }}</td>
			<td>
				<form method="POST" action="{{ route('manager.products.destroy', $prd->id) }}">
					<a href="#" class="edit-button btn btn-info" data-toggle="modal" data-target="#editProductsModal" data-id="{{ $prd->id }}" data-name="{{ $prd->name }}" data-category="{{ $prd->category }}" data-description="{{ $prd->description }}" data-price="{{ $prd->price }}" data-weight="{{ $prd->weight }}" data-discount="{{ $prd->discount }}" data-tags="{{ $prd->tags }}"><i class="fa fa-search fa-fw"></i> Details</a>
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger"><i class="fa fa-trash-o fa-fw"></i> Delete</button>
				</form>
			</td>
		</tr>
		@php
			$i++;
		@endphp
		@endforeach

	</tbody>
</table>


<button type="button" class="btn btn-primary" id="addProductsButton" data-toggle="modal" data-target="#productsModal"><i class="fa fa-plus fa-fw"></i> Add products</button>

<div class="modal fade" id="productsModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
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
							<input type="text" name="name" class="form-control" id="addName" placeholder="Product Name">
						</div>
						<div class="form-group">
						 <input type="text" name="category" class="form-control" id="addCategory" placeholder="Product Category">
						</div>
						<div class="form-group">
							<textarea name="description" class="form-control" id="addDescription" placeholder="Description"></textarea>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col input-group mb-3">
                  <div class="input-group-prepend"><span class="input-group-text">Rp</span></div>
									<input type="text" name="price" class="form-control" id="addPrice" placeholder="Price">
								</div>
                <div class="col input-group mb-3">
                  <input type="text" name="weight" class="form-control" id="addWeight" placeholder="Weight">
                  <div class="input-group-append"><span class="input-group-text">gr</span></div>
                </div>
								<div class="col input-group mb-3">
									<input type="text" name="discount" class="form-control" id="addDiscount" placeholder="Discount">
                  <div class="input-group-append"><span class="input-group-text">%</span></div>
								</div>
							</div>
						
						</div>
						<div class="form-group">
							<input type="text" name="tags" class="form-control" id="addTags" placeholder="Tags">
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

<div class="modal fade" id="editProductsModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<form name="editproducts" method="POST" action="">
				@csrf
				@method('PUT')

				<div class="modal-header">
					<h5 class="modal-title">Product Details</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<div class="modal-body">

						<div class="form-group">
							<input type="text" name="name" class="form-control" id="editName" placeholder="Product Name">
						</div>
						<div class="form-group">
						 <input type="text" name="category" class="form-control" id="editCategory" placeholder="Product Category">
						</div>
						<div class="form-group">
							<textarea name="description" class="form-control" id="editDescription" placeholder="Description"></textarea>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col input-group mb-3">
                  <div class="input-group-prepend"><span class="input-group-text">Rp</span></div>
									<input type="text" name="price" class="form-control" id="editPrice" placeholder="Price">
								</div>
                <div class="col input-group mb-3">
                  <input type="text" name="weight" class="form-control" id="editWeight" placeholder="Weight">
                  <div class="input-group-append"><span class="input-group-text">gr</span></div>
                </div>
								<div class="col input-group mb-3">
									<input type="text" name="discount" class="form-control" id="editDiscount" placeholder="Discount">
                  <div class="input-group-append"><span class="input-group-text">%</span></div>
								</div>
							</div>
						
						</div>
						<div class="form-group">
							<input type="text" name="tags" class="form-control" id="editTags" placeholder="Tags">
						</div>

						<a class="btn btn-primary" id="addImageButton"><i class="fa fa-file-image-o"></i> Add Image</a>

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
$('.edit-button').click(function(){
	$('form[name=editproducts]').attr('action', '{{ URL::Route('manager.products.index') }}/' + $(this).data('id'));
	$('#addImageButton').attr('href', '{{ URL::Route('manager.products.image.index') }}/' + $(this).data('id'));
	$('#editName').val($(this).data('name'));
	$('#editCategory').val($(this).data('category'));
	$('#editDescription').val($(this).data('description'));
	$('#editPrice').val($(this).data('price'));
  $('#editWeight').val($(this).data('weight'));
	$('#editDiscount').val($(this).data('discount'));
	$('#editTags').val($(this).data('tags'));
});
@endsection