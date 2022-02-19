<x-admin-header componentName="Admin | RO Plants App" />



<div class="dxad_cit">
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<h2>List Of Agencies</h2>
				<table class="table">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Name</th>
				      <th scope="col">Price</th>
				      <th scope="col">Type</th>
				      <th scope="col">Email</th>
				      <th scope="col">City</th>
				      <th scope="col">Phone</th>
				      <th scope="col">Full Address</th>
				      <th scope="col"> Accept Agency </th>
				    </tr>
				  </thead>
				  <tbody>
<?php $inc = 1; ?>
@if(count($agcnacpt_data) > 0)
@foreach($agcnacpt_data as $agency)
				    <tr>
				      <th scope="row"> {{ $inc++ }} </th>
				      <td style="text-transform: capitalize;">
				      	{{ $agency['ds_title'] }}
				      </td>
				      <td>
				      	{{ $agency['ds_price'] }}
				      </td>
				      <td>
				      	@if($agency['ds_type'] == 1)
				      		Can
				      	@else
				      		PC
				      	@endif
				      </td>
				      <td>
				      	{{ $agency['ds_email'] }}
				      </td>
				      <td>
				      	{{ $agency['cit_name'] }}
				      </td>
				      <td>
				      	{{ $agency['ds_phone'] }}
				      </td>
				      <td>
				      	{{ $agency['ds_location'] }}
				      </td>
				      <td>
				      	<a href="/acptagent/{{Crypt::encryptString($agency['ds_id'])}}" class="btn btn-success"> 
				      		Accept 
				      	</a>
				      </td>
				    </tr>
@endforeach
@else
<tr>
	<td colspan="10">
		<h2>No Data Found</h2>
	</td>
</tr>
@endif
				  </tbody>
				</table>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</div>

<x-admin-footer />