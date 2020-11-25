@extends('layout.webmanager-main')

@section('title', 'Content')

@section('content')

<form name="addContent" method="POST" action="{{route('manager.content.store')}}" enctype="multipart/form-data">
    @csrf
    
    <h5 class="modal-title">Add Content</h5>
    
    

    <div class="form-group">
        <input type="text" name="title" id="contentTitle" class="form-control" placeholder="Title">
    </div>
    <div class="form-group">
        <select name="type" id="contentType" class="form-control">
            <option>-- Type --</option><option value="articles">Articles</option><option value="news">News</option>
        </select>
    </div>
    <div class="form-group">
        <input type="file" name="imageheading" id="imageheading" class="form-control">
    </div>
    <div class="form-group">
        <textarea name="content" id="contentBody" class="summernote" rows="16" cols="64"></textarea>
    </div>
    <div class="form-group">
        <input type="text" name="tags" id="contentTags" class="form-control" placeholder="Tags (Use comma to separate)">
    </div>

    <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i> Save</button>
    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>

</form>

@endsection

@section('scriptlink')
<!-- include summernote css/js-->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script> 

@endsection

@section('script')
$(document).ready(function() {
  $('.summernote').summernote({
  height: 480,
  disableResizeEditor: true,
});
});
@endsection