@extends('layout.webmanager-main')

@section('title', 'Product Images')

@section('style')
.product-image-column img {
	max-width: 100%;
}
#addImageButton {
	position: absolute;
	bottom: 20px;
	left: 20px;
}
@endsection

@section('content')

<a href="{{ URL::Route('manager.products.index') }}"><< Back</a>

<h1>Product Image for {{ $productName }}</h1>

<div class="row">
	@foreach($images as $img)
	<div class="col-md-3 product-image-column">
		<img src="{{ URL::Route('home') }}/images/products/{{ $img->filename }}">
	</div>
	@endforeach
</div>

<button type="button" class="btn btn-primary" id="addImageButton" data-toggle="modal" data-target="#addImageModal"><i class="fa fa-plus"></i>Add New Image</button>

<div class="modal fade" id="addImageModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<form name="addImageForm" action="{{ URL::Route('manager.products.image.store') }}" method="POST" enctype="multipart/form-data">
				@csrf
				@method('POST')

				<div class="modal-header">
					<h5 class="modal-title">Add Image</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<div class="modal-body">
					<input type="hidden" name="products_id" value="{{ $productId }}">
					<div class="form-group">
						<input type="file" name="filename" class="form-control">
					</div>
					<div class="form-group">
						<input type="text" name="alt" class="form-control">
					</div>
				</div>

				<div class="modal-footer">
					<button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i> Save</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
				</div>

			</form>
		</div>
	</div>
</div>

@endsection