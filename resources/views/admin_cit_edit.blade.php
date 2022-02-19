<x-admin-header componentName="Admin | RO Plants App" />



<div class="dxad_cit">
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form class="form" action="/cit_editform" method="post" >
					@csrf
					<input type="hidden" name="cit_id" value="{{ $admin_cit_data[0]['cit_id'] }}">
					<div class="form-group">
					    <label for="formGroupExampleInput"> Name: </label>
					    <input type="text" class="form-control" id="formGroupExampleInput" name="cit_name" value="{{ $admin_cit_data[0]['cit_name'] }}">
					  </div>
					  <div class="form-group">
					    <label for="formGroupExampleInput2"> Status: </label>
					    <input type="text" class="form-control" id="formGroupExampleInput2" name="cit_status" value="{{ $admin_cit_data[0]['cit_status'] }}">
					  </div>
					  <div class="form-group">
					  	<input class="btn btn-primary" type="submit" value="Submit">
					  </div>
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
</div>

<x-admin-footer />