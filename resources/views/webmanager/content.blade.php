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

<button class="btn btn-primary" id="addContentButton" data-toggle="modal" data-target="#addContentModal">Add Content</button>

<div class="modal fade" id="addContentModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <form name="addContent" method="POST" action="{{route('manager.content.store')}}" enctype="multipart/form-data">
        @csrf

        <div class="modal-header">
          <h5 class="modal-title">Add Content</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
        </div>

        <div class="modal-body">
          <div class="form-group">
            <input type="text" name="title" id="contentTitle" class="form-control" placeholder="Title">
          </div>
          <div class="form-group">
            <select name="type" id="contentType" class="form-control">
              <option>-- Type --</option><option value="articles">Articles</option><option value="news">News</option>
            </select>
          </div>
          <div class="form-group">
            <textarea name="content" id="contentBody" class="summernote" rows="16" cols="64"></textarea>
          </div>
          <div class="form-group">
            <input type="text" name="tags" id="contentTags" class="form-control" placeholder="Tags (Use comma to separate)">
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