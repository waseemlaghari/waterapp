<x-admin-header componentName="Admin | RO Plants App" />




<div>
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="">
					<h2>List of Cities</h2>
				</div>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
</div>

<div class="dxad_cit">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="tbcitxd">
					<table class="table">
						<tr>
							<th>ID</th>
							<th>City Name</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
 <?php $inc = 1; ?> 



@foreach ($cities_data as $city)

						<tr>
							
							<td> {{ $inc++ }} </td>

							<td>
								{{ $city['cit_name']; }}
							</td>
							<td>
								<a  class="btn btn-info" href={{"xbdedi/". $city['cit_id'] }}> Edit </a>
							</td>
							<td>
								<a class="btn btn-primary" href={{"xbddel/". $city['cit_id'] }}>Delete</a>
							</td>
						</tr>
@endforeach
					</table>

					<nav aria-label="Page navigation example">
					  <ul class="pagination">
					    <li class="page-item">
					    	{{ $cities_data->links() }}
					    </li>
					  </ul>
					</nav>
				</div>
			</div>
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>
		</div>
	</div>
</div>

<x-admin-footer />