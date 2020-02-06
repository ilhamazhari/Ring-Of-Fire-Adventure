@extends('layout.webmanager-main')

@section('title', 'Product Vendor')

@section('content')

<h1>Product Vendor</h1>

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
      <th>E-Mail</th>
      <th>City</th>
      <th>Shipping Address</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @php  $i = 1;  @endphp
    @foreach($vendor as $v)
    <tr>
      <td>{{$i}}</td>
      <td>{{$v->name}}</td>
      <td>{{$v->email}}</td>
      <td>{{$v->city_code}}</td>
      <td>{{$v->shipping_address}}</td>
      <td><a href="{{route('manager.vendor.destroy', $v->id)}}" class="btn btn-danger">Delete</a></td>
    </tr>
    @php $i++; @endphp
    @endforeach
  </tbody>
</table>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addVendorModal">Add New Vendor</button>

<div class="modal fade" role="dialog" id="addVendorModal">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <form name="addvendor" method="POST" action="{{route('manager.vendor.store')}}">
        @csrf

      <div class="modal-header">
        <h3 class="modal-title">Add New Vendor</h3>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body">
        <!-- -->
        <div class="form-group">
          <input type="text" name="name" class="form-control" placeholder="Vendor Name">
        </div>

        <div class="form-group">
          <input type="email" name="email" class="form-control" placeholder="Vendor E-Mail">
        </div>

        <div class="form-group row">
          <div class="col-md-4"><select name="province" class="form-control" id="province"> <option>-- Select Province --</option> </select></div>
          <div class="col-md-4"><select name="city_code" class="form-control" id="city" disabled> <option>-- Select City --</option> </select></div>
          <div class="col-md-4"><select name="subdistrict" class="form-control" id="subdistrict" disabled> <option>-- Select Subdistrict --</option> </select></div>
        </div>

        <div class="form-group">
          <textarea name="shipping_address" class="form-control" rows="8" placeholder="Address"></textarea>
        </div>

      </div>


      <div class="modal-footer">
        <!-- -->
        <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i> Save</button>
        <button type="button" class="btn btn-danger"><i class="fa fa-times"></i> Close</button>
      </div>
      </form>
    </div>
  </div>
</div>

@endsection

@section('script')
  $(document).ready(function(){
    // Load province data
    $.getJSON('{{ url('/') }}/json/province.json', function(province){
      $.each(province, function(index, item){
        $('#province').append('<option value="' + item['province_id'] + '">' + item['province'] + '</option>');
      });
    });

    // When province changed load city data
    $('#province').change(function(){
      var province = $(this).val();
      $.getJSON('{{ url('/') }}/json/city.json', function(city){
        $.each(city, function(index, item){
            
          // If city match with province
          if(item['province_id'] == province){
            $('#city').append('<option value="' + item['city_id'] + '">' + item['city_name'] + '</option>');
          }

        });
        $('#city').prop('disabled', false);
      });
    });

    // When city changed load subdistrict data
    $('#city').change(function(){
      var city = $(this).val();
      $.getJSON('{{ url('/') }}/json/subdistrict.json', function(subdistrict){
        $.each(subdistrict, function(index, item){

          // If subdistrict match with city
          if(item['city_id'] == city){
            $('#subdistrict').append('<option value="' + item['subdistrict_id'] + '">' + item['subdistrict_name'] + '</option>');
          }

        });
        $('#subdistrict').prop('disabled', false);
      });
    });
  });
@endsection