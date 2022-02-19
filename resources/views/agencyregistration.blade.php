<x-site-header componentName="Agency Registration | RO Plants App" />


<div class="mainagencyregistration">
	<div class="container">
		<h2>
			Agency Registration
		</h2>
	</div>
</div>


<div class="agencyregmaindv">
	<div class="container">
		<div class="ckdjf">
			@if(session('agc_errs'))
			<div class="alert alert-danger" role="alert">
			  {{ session('agc_errs') }}
			</div>
			@endif

			@if(session('agency_err'))
			<div class="alert alert-danger" role="alert">
			  {{ session('agency_err') }}
			</div>
			@endif

			@if(session('agency_success'))
			<div class="alert alert-success" role="alert">
			  {{ session('agency_success') }}
			</div>
			@endif

			<form action="/agregisxt" method="POST">
				@csrf 
    			<div class="form-group">
    				<label class="col-sm-2 col-form-label"> Agency Name: <span class="imp_check">*</span> </label>
				    <div class="col-sm-10">
				      <input type="text" required name="agency_name" class="form-control" placeholder="Enter Agency Name">
				    </div>
  				</div>
			  <div class="form-group">
			    <label class="col-sm-2 col-form-label"> Email: <span class="imp_check">*</span> </label>
			    <div class="col-sm-10">
			      <input type="email" required class="form-control" name="agency_email" placeholder="Enter Your Email">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 col-form-label"> Password: <span class="imp_check">*</span> </label>
			    <div class="col-sm-10">
			      <input type="password" required name="agency_pass" class="form-control" placeholder="Enter Your Password">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 col-form-label"> Phone: <span class="imp_check">*</span> </label>
			    <div class="col-sm-10">
			      <input type="tel" name="agency_phone" required class="form-control" placeholder="Enter Your Phone Number">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 col-form-label"> City: <span class="imp_check">*</span> </label>
			    <div class="col-sm-10">
			    	<select name="agency_city" required class="form-control">
			    		<option value="">Please Select</option>

@foreach ($cities_data as $city)
			    		<option value="{{$city['cit_id']}}">{{ $city['cit_name']; }}</option>
@endforeach
			    	</select>
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 col-form-label"> Price Per PC: <span class="imp_check">*</span> </label>
			    <div class="col-sm-10">
			      <input type="number" name="agency_price" required class="form-control" placeholder="Enter Your Can Price">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 col-form-label"> Litre: <span class="imp_check">*</span> </label>
			    <div class="col-sm-10">
			      <input type="number" name="agency_litre" required class="form-control" placeholder="Enter Litre of a PC">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 col-form-label" for="exampleFormControlSelect1">Select Type of Can: <span class="imp_check">*</span> </label>
			    <div class="col-sm-10">
			    	<select name="agency_tycp" required class="form-control" id="exampleFormControlSelect1">
			    		<option value="">Please Select</option>
			    		<option value="1">Cans</option>
			    		<option value="2">PCs</option>
			    	</select>
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 col-form-label"> Address: <span class="imp_check">*</span> </label>
			    <div class="col-sm-10">
			      <input type="text" name="agency_addrs" required class="form-control" placeholder="Enter Your Address">
			    </div>
			  </div>
			  <div class="form-group">
			  	<br>
			    <div class="col-sm-10">
			      <button type="submit" class="btn btn-primary">Sign Up</button>
			    </div>
			  </div>
			</form>
		</div>
	</div>
</div>

<x-site-footer />