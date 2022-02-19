<x-site-header componentName="Search Plants | RO Plants App" />

<div class="mainsearchdata">
	<div class="container">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<table class="table table-striped">
  					<thead>
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">Agency Name</th>
					      <th scope="col">Price</th>
					      <th scope="col">Type</th>
					      <th scope="col">Litre</th>
					      <th scope="col">City</th>
					      <th scope="col">Full Location</th>
					      <th scope="col">Email</th>
					      <th scope="col">Number</th>
					      <th scope="col">View</th>
					    </tr>
  					</thead>
  					<tbody>
<?php $ic = 1; ?>
@if(count($agency_data) > 0)
@foreach ($agency_data as $agency)
				  
				    <tr>
				      <th> <?php echo $ic++ ?> </th>
				      <td>{{ $agency['ds_title'] }}</td>
				      <td>{{ $agency['ds_price'] }}</td>
				      <td>
				      	@if($agency['ds_type'] == 1)
				      		Can's
				      	@else
				      		PC's
				      	@endif
				      </td>
				      <td>{{ $agency['ag_litre'] }}</td>
				      <td>{{ $agency['cit_name'] }}</td>
				      <td>{{ $agency['ds_location'] }}</td>
				      <td>{{ $agency['ds_email'] }}</td>
				      <td>{{ $agency['ds_phone'] }}</td>
				      <td><a href="/profile/{{ $agency['ds_title'] }}" class="btn btn-info"> View </a></td>
				    </tr>
				  
@endforeach

@else

<tr>
<td colspan="8">
	<h2>No Data Found.. </h2>
</td>				    
</tr>


@endif
</tbody>
				</table>
			</div>
			<div class="col-md-1"></div>
		</div> <!-- row -->
	</div>
</div>



<x-site-footer />