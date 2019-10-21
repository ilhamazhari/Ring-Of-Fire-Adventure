@extends('layout.main')

@section('title', 'Checkout order')

@section('style')

@endsection


@section('content')

@include('layout.navigation')

<div class="container page-padding-bottom">
	<h1>Checkout Products</h1>
	<hr>
	<form id="checkout" method="POST" action="">
		@csrf
		<h3>Enter your shipping address</h3>
		<div class="form-group">
			<div class="row">
				<div class="col"><input type="text" name="first_name" placeholder="First Name" class="form-control"></div>
				<div class="col"><input type="text" name="last_name" placeholder="Last Name" class="form-control"></div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col"><input type="email" name="email" placeholder="E-Mail" class="form-control"></div>
				<div class="col"><input type="text" name="phone" placeholder="Phone" class="form-control"></div>
				<div class="col"><select name="country_code" id="country" class="form-control"><option selected>-- Country --</option><option value="IDN">Indonesia</option><option value="AFG">Afghanistan</option><option value="ALA">Åland Islands</option><option value="ALB">Albania</option><option value="DZA">Algeria</option><option value="ASM">American Samoa</option><option value="AND">Andorra</option><option value="AGO">Angola</option><option value="AIA">Anguilla</option><option value="ATA">Antarctica</option><option value="ATG">Antigua and Barbuda</option><option value="ARG">Argentina</option><option value="ARM">Armenia</option><option value="ABW">Aruba</option><option value="AUS">Australia</option><option value="AUT">Austria</option><option value="AZE">Azerbaijan</option><option value="BHS">Bahamas</option><option value="BHR">Bahrain</option><option value="BGD">Bangladesh</option><option value="BRB">Barbados</option><option value="BLR">Belarus</option><option value="BEL">Belgium</option><option value="BLZ">Belize</option><option value="BEN">Benin</option><option value="BMU">Bermuda</option><option value="BTN">Bhutan</option><option value="BOL">Bolivia, Plurinational State of</option><option value="BES">Bonaire, Sint Eustatius and Saba</option><option value="BIH">Bosnia and Herzegovina</option><option value="BWA">Botswana</option><option value="BVT">Bouvet Island</option><option value="BRA">Brazil</option><option value="IOT">British Indian Ocean Territory</option><option value="BRN">Brunei Darussalam</option><option value="BGR">Bulgaria</option><option value="BFA">Burkina Faso</option><option value="BDI">Burundi</option><option value="KHM">Cambodia</option><option value="CMR">Cameroon</option><option value="CAN">Canada</option><option value="CPV">Cape Verde</option><option value="CYM">Cayman Islands</option><option value="CAF">Central African Republic</option><option value="TCD">Chad</option><option value="CHL">Chile</option><option value="CHN">China</option><option value="CXR">Christmas Island</option><option value="CCK">Cocos (Keeling) Islands</option><option value="COL">Colombia</option><option value="COM">Comoros</option><option value="COG">Congo</option><option value="COD">Congo, the Democratic Republic of the</option><option value="COK">Cook Islands</option><option value="CRI">Costa Rica</option><option value="CIV">Côte d'Ivoire</option><option value="HRV">Croatia</option><option value="CUB">Cuba</option><option value="CUW">Curaçao</option><option value="CYP">Cyprus</option><option value="CZE">Czech Republic</option><option value="DNK">Denmark</option><option value="DJI">Djibouti</option><option value="DMA">Dominica</option><option value="DOM">Dominican Republic</option>	<option value="ECU">Ecuador</option><option value="EGY">Egypt</option><option value="SLV">El Salvador</option><option value="GNQ">Equatorial Guinea</option><option value="ERI">Eritrea</option><option value="EST">Estonia</option><option value="ETH">Ethiopia</option><option value="FLK">Falkland Islands (Malvinas)</option><option value="FRO">Faroe Islands</option><option value="FJI">Fiji</option>	<option value="FIN">Finland</option><option value="FRA">France</option><option value="GUF">French Guiana</option>	<option value="PYF">French Polynesia</option><option value="ATF">French Southern Territories</option><option value="GAB">Gabon</option><option value="GMB">Gambia</option><option value="GEO">Georgia</option><option value="DEU">Germany</option><option value="GHA">Ghana</option><option value="GIB">Gibraltar</option><option value="GRC">Greece</option><option value="GRL">Greenland</option><option value="GRD">Grenada</option><option value="GLP">Guadeloupe</option><option value="GUM">Guam</option><option value="GTM">Guatemala</option><option value="GGY">Guernsey</option><option value="GIN">Guinea</option><option value="GNB">Guinea-Bissau</option><option value="GUY">Guyana</option><option value="HTI">Haiti</option><option value="HMD">Heard Island and McDonald Islands</option><option value="VAT">Holy See (Vatican City State)</option><option value="HND">Honduras</option><option value="HKG">Hong Kong</option><option value="HUN">Hungary</option><option value="ISL">Iceland</option><option value="IND">India</option><option value="IRN">Iran, Islamic Republic of</option><option value="IRQ">Iraq</option><option value="IRL">Ireland</option><option value="IMN">Isle of Man</option><option value="ISR">Israel</option><option value="ITA">Italy</option><option value="JAM">Jamaica</option><option value="JPN">Japan</option><option value="JEY">Jersey</option><option value="JOR">Jordan</option><option value="KAZ">Kazakhstan</option><option value="KEN">Kenya</option><option value="KIR">Kiribati</option><option value="PRK">Korea, Democratic People's Republic of</option><option value="KOR">Korea, Republic of</option><option value="KWT">Kuwait</option><option value="KGZ">Kyrgyzstan</option><option value="LAO">Lao People's Democratic Republic</option><option value="LVA">Latvia</option><option value="LBN">Lebanon</option><option value="LSO">Lesotho</option><option value="LBR">Liberia</option><option value="LBY">Libya</option><option value="LIE">Liechtenstein</option><option value="LTU">Lithuania</option><option value="LUX">Luxembourg</option><option value="MAC">Macao</option><option value="MKD">Macedonia, the former Yugoslav Republic of</option><option value="MDG">Madagascar</option><option value="MWI">Malawi</option><option value="MYS">Malaysia</option><option value="MDV">Maldives</option><option value="MLI">Mali</option><option value="MLT">Malta</option><option value="MHL">Marshall Islands</option><option value="MTQ">Martinique</option><option value="MRT">Mauritania</option><option value="MUS">Mauritius</option><option value="MYT">Mayotte</option><option value="MEX">Mexico</option><option value="FSM">Micronesia, Federated States of</option><option value="MDA">Moldova, Republic of</option><option value="MCO">Monaco</option><option value="MNG">Mongolia</option><option value="MNE">Montenegro</option><option value="MSR">Montserrat</option><option value="MAR">Morocco</option><option value="MOZ">Mozambique</option><option value="MMR">Myanmar</option><option value="NAM">Namibia</option><option value="NRU">Nauru</option><option value="NPL">Nepal</option><option value="NLD">Netherlands</option><option value="NCL">New Caledonia</option><option value="NZL">New Zealand</option><option value="NIC">Nicaragua</option><option value="NER">Niger</option><option value="NGA">Nigeria</option><option value="NIU">Niue</option><option value="NFK">Norfolk Island</option><option value="MNP">Northern Mariana Islands</option><option value="NOR">Norway</option><option value="OMN">Oman</option><option value="PAK">Pakistan</option><option value="PLW">Palau</option><option value="PSE">Palestinian Territory, Occupied</option><option value="PAN">Panama</option><option value="PNG">Papua New Guinea</option><option value="PRY">Paraguay</option><option value="PER">Peru</option><option value="PHL">Philippines</option><option value="PCN">Pitcairn</option><option value="POL">Poland</option><option value="PRT">Portugal</option><option value="PRI">Puerto Rico</option><option value="QAT">Qatar</option><option value="REU">Réunion</option><option value="ROU">Romania</option><option value="RUS">Russian Federation</option><option value="RWA">Rwanda</option><option value="BLM">Saint Barthélemy</option><option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option><option value="KNA">Saint Kitts and Nevis</option><option value="LCA">Saint Lucia</option><option value="MAF">Saint Martin (French part)</option><option value="SPM">Saint Pierre and Miquelon</option><option value="VCT">Saint Vincent and the Grenadines</option><option value="WSM">Samoa</option><option value="SMR">San Marino</option><option value="STP">Sao Tome and Principe</option><option value="SAU">Saudi Arabia</option><option value="SEN">Senegal</option><option value="SRB">Serbia</option><option value="SYC">Seychelles</option><option value="SLE">Sierra Leone</option><option value="SGP">Singapore</option><option value="SXM">Sint Maarten (Dutch part)</option><option value="SVK">Slovakia</option><option value="SVN">Slovenia</option><option value="SLB">Solomon Islands</option><option value="SOM">Somalia</option><option value="ZAF">South Africa</option><option value="SGS">South Georgia and the South Sandwich Islands</option><option value="SSD">South Sudan</option><option value="ESP">Spain</option><option value="LKA">Sri Lanka</option><option value="SDN">Sudan</option><option value="SUR">Suriname</option><option value="SJM">Svalbard and Jan Mayen</option><option value="SWZ">Swaziland</option><option value="SWE">Sweden</option><option value="CHE">Switzerland</option><option value="SYR">Syrian Arab Republic</option><option value="TWN">Taiwan, Province of China</option><option value="TJK">Tajikistan</option><option value="TZA">Tanzania, United Republic of</option><option value="THA">Thailand</option><option value="TLS">Timor-Leste</option><option value="TGO">Togo</option><option value="TKL">Tokelau</option><option value="TON">Tonga</option><option value="TTO">Trinidad and Tobago</option><option value="TUN">Tunisia</option><option value="TUR">Turkey</option><option value="TKM">Turkmenistan</option><option value="TCA">Turks and Caicos Islands</option><option value="TUV">Tuvalu</option><option value="UGA">Uganda</option><option value="UKR">Ukraine</option><option value="ARE">United Arab Emirates</option><option value="GBR">United Kingdom</option><option value="USA">United States</option><option value="UMI">United States Minor Outlying Islands</option><option value="URY">Uruguay</option><option value="UZB">Uzbekistan</option><option value="VUT">Vanuatu</option><option value="VEN">Venezuela, Bolivarian Republic of</option><option value="VNM">Viet Nam</option><option value="VGB">Virgin Islands, British</option><option value="VIR">Virgin Islands, U.S.</option><option value="WLF">Wallis and Futuna</option><option value="ESH">Western Sahara</option><option value="YEM">Yemen</option><option value="ZMB">Zambia</option><option value="ZWE">Zimbabwe</option></select></div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-md-4" id="provinceCol"></div>
				<div class="col-md-3" id="cityCol"></div>
        <div class="col-md-3" id="subdistrictCol"></div>
				<div class="col-md-2" id="postalcodeCol"><input type="text" name="postal_code" placeholder="Postal Code" class="form-control"></div>
			</div>
			
		</div>
		<div class="form-group">
			<textarea name="address" cols="32" rows="8" placeholder="Address" class="form-control"></textarea>
		</div>
		<div class="form-group row">
      <div class="col-md-4">
        <select name="courier" id="courier" class="form-control col-md-4">
          <option>-- Courier Option --</option>
          <option value="tiki">TIKI</option>
          <option value="jne">JNE</option>
          <option value="pos">POS Indonesia</option>
        </select></div>
      <div class="col-md-4">
        <select name="courierservice" id="courierservice" class="form-control col-md-4"><option>-- Service Option --</option></select>
      </div>
			
		</div>
		<hr>
		<table class="table">
			<thead>
				<tr>
					<th scope="col">No.</th>
					<th scope="col">Products</th>
					<th scope="col">Qty</th>
          <th scope="col">Weight</th>
					<th scope="col">Price</th>
					<th scope="col">Subtotal</th>
				</tr>
			</thead>
			<tbody>
				@php
				$no = 1;
				$sub = 0;
        $weightTotal = 0;
				$total = 0;
				@endphp
				@foreach(Session::get('cart') as $cart)
				
				@php
				$sub = $cart['quantity'] * $cart['price'];
				@endphp
				<tr>
					<td scope="row">{{ $no }}</td>
					<td>{{ $cart['name'] }}</td>
					<td>{{ $cart['quantity'] }}</td>
          <td>{{ $cart['weight'] }} gr</td>
					<td>{{ number_format($cart['price']) }}</td>
					<td>{{ number_format($sub) }}</td>
				</tr>
				@php
					$no++;
          $weightTotal += $cart['weight'];
					$total += $sub;
				@endphp
				@endforeach

				@php
					$tax = $total*.1;
					$totalAll = $total+$tax;
				@endphp
				<tr>
					<td colspan="5">Subtotal:</td>
					<td>{{ number_format($total) }}</td>
				</tr>
				<tr>
					<td colspan="5">Shipping cost:</td>
					<td id="shippingcost"></td>
				</tr>
				<tr>
					<td colspan="5">Tax:</td>
					<td>{{ number_format($tax) }}</td>
				</tr>
				<tr>
					<td colspan="3">Total:</td>
          <td>{{ $weightTotal }} gr</td>
          <td></td>
					<td id="totalall">{{ number_format($totalAll) }}</td>
				</tr>
			</tbody>
		</table>
		<input type="hidden" name="subtotal" value="{{ $total }}">
		<input type="hidden" name="tax" value="{{ $tax }}">
    <input type="hidden" name="courier_service" id="courier_service" value="">
		<input type="hidden" name="shipping_cost" id="shipping_cost" value="0">
    <input type="hidden" name="totalweight" value="{{$weightTotal}}">
		<input type="hidden" name="total" id="total_all" value="{{ $totalAll }}">
		<div class="form-group">
			<button type="submit" id="checkout-button">Checkout</button>
		</div>
	</form>
	
</div>

@include('layout.footer')

@endsection

@section('script')
<script src="https://cdn.rawgit.com/PascaleBeier/bootstrap-validate/v2.2.0/dist/bootstrap-validate.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
    $('#country').on('change', function(){
      var country = $('select[name=country_code]').val();
      console.log(country);
      if(country == 'IDN'){
        $('#provinceCol').empty();
        $('#cityCol').empty();
        $('#subdistrictCol').empty();
        $('#provinceCol').append('<select name="province" class="form-control" id="province"> <option>-- Select Province --</option> </select>');
        $('#cityCol').append('<select name="city" class="form-control" id="city" disabled> <option>-- Select City --</option> </select>');
        $('#subdistrictCol').append('<select name="subdistrict" class="form-control" id="subdistrict" disabled> <option>-- Select Subdistrict --</option> </select>');

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
      }else if(typeof country != 'IDN'){
        $('#provinceCol').empty();
        $('#cityCol').empty();
        $('#subdistrictCol').empty();
        $('#provinceCol').append('<input type="text" name="province" class="form-control" id="province" placeholder="State/Province" >');
        $('#cityCol').append('<input type="text" name="city" class="form-control" id="city" placeholder="City" >');
      }
    });

    $('#courier').change(function(){
      var destination = $('#city').val();
      $('#courierservice').find('option').remove().end().append('<option>-- Service Option --</option>');
      $.ajax({
        url: '{{ route('store-shipping-cost') }}',
        type: 'POST',
        data: {
          _token: '{{csrf_token()}}',
          origin: '153',
          destination: destination,
          weight: {{ $weightTotal }},
          courier: $(this).val()
        },
        success: function(data){
          var ongkir = JSON.parse(data);
          $.each(ongkir.rajaongkir.results[0].costs, function(index, item){
            $.each(item.cost, function(idx, itm){
              $('#courierservice').append('<option value="' + item.description + '" data-price="' + itm.value + '">' + item.service + ' ' + item.description + ' Est. ' + itm.etd + ' Days - Rp ' + itm.value + '</option>');
            });
          });
          console.log(ongkir.rajaongkir.results[0].costs);
        },
        error: function(err){ console.log('Error: ' + err); }
      });
    });

    $('#courierservice').change(function(){
      var service = $('option:selected','#courier').val() + ' - ' + $('option:selected',this).val();
      var serviceprice = parseInt($('option:selected',this).data('price'));
      var total = parseInt($('#total_all').val()) + serviceprice;
      console.log(serviceprice);
      $('#shippingcost').append(serviceprice);
      $('#shipping_cost').val(serviceprice);
      $('#courier_service').val(service);
      $('#totalall').empty().append(total);
      $('#total_all').val(total);
    });

  });
</script>
@endsection