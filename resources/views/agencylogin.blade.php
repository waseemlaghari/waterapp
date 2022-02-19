<x-site-header componentName="Agency Login | RO Plants App" />

<div class="mainagencylog">
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="agloghead">
					<h2>Agency Login</h2>
				</div>
				<div class="mainerrora">
					@if(session('agencylog_err'))
					<div class="alert alert-danger" role="alert">
					  {{ session('agencylog_err') }}
					</div>
					@endif
				</div>
			</div>
			<div class="col-md-4"></div>
		</div>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="aglogbody">
					<form action="/agencylogxx" method="POST">
						@csrf
					  <div class="form-group">
					    <label for="exampleInputEmail1">Email address</label>
					    <input type="email" class="form-control" name="email" id="exampleInputEmaila" aria-describedby="emailHelp" placeholder="Enter email">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Password</label>
					    <input type="password" class="form-control" id="exampleInputPassword1a" name="password" placeholder="Password">
					  </div>
					  <button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
</div>


<x-site-footer />