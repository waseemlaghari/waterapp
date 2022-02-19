<x-admin-header componentName="Admin | RO Plants App" />

<div class="maindiv">
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="admnloginpg">
					<h2 class="display-5">Admin Login </h2>
					@if(session('ad_err'))
					<div class="alert alert-danger" role="alert">
					  {{ session('ad_err') }}
					</div>
					@endif

					<form action="ad_data" method="POST">
					   <div class="mb-3">
					   	@csrf
					    <label for="exampleInputEmail1" class="form-label">Email address</label>
					    <input type="email" name="ademail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
					    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
					  </div>
					  <div class="mb-3">
					    <label for="exampleInputPassword1" class="form-label">Password</label>
					    <input type="password" name="adpass" class="form-control" id="exampleInputPassword1">
					  </div>
					  <div class="mb-3 form-check">
					  </div>
					  <button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
</div>

<x-admin-footer />