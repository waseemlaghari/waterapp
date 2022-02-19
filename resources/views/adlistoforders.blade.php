<x-admin-header componentName="Admin |RO Plants App" />



<div class="dxad_cit">
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<h2>List Of Orders</h2>
				<table class="table">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Customer Name</th>
				      <th scope="col">Number</th>
				      <th scope="col">Can's / PC's</th>
				      <th scope="col">Total Price</th>
				      <th scope="col">Agency</th>
				      <th scope="col">City</th>
				      <th scope="col">Full Address</th>
				      <th scope="col"> Order Status </th>
				    </tr>
				  </thead>
				  <tbody>
<?php $inc = 1; ?>
@if(count($adord_data) > 0)
@foreach($adord_data as $orders)
				    <tr>
				      <th scope="row"> {{ $inc++ }} </th>
				      <td style="text-transform: capitalize;">
				      	{{ $orders['ord_cusname'] }}
				      </td>
				      <td>
				      	{{ $orders['ord_cusnumb'] }}
				      </td>
				      <td>
				      	{{ $orders['ord_can_no'] }}
				      
				      </td>
				      <td>
				      	{{ ($orders['ds_price'] *  $orders['ord_can_no']) }} RS
				      </td>
				      <td>
				      	{{ $orders['ds_title'] }}
				      </td>
				      <td>
				      	{{ $orders['cit_name'] }}
				      </td>
				      <td>
				      	{{ $orders['ord_fulladdr'] }}
				      </td>
				      <td>
				      	@if($orders['ord_status'] == 1)
				      		<span style="font-weight: bold;">Active Order</span>
				      	@elseif($orders['ord_status'] == 2)
				      		<span>Delivered</span>
				      	@endif
				      </td>
				    </tr>
@endforeach
@endif
				  </tbody>
				</table>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</div>

<x-admin-footer />