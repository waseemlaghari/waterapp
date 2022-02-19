<x-admin-header componentName="Admin | RO Plants App" />

<div class="dxad_cit">
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<h2>List Of Messages</h2>
				<table class="table">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Name</th>
				      <th scope="col">Email</th>
				      <th scope="col">Subject</th>
				      <th scope="col"> View </th>
				    </tr>
				  </thead>
				  <tbody>
<?php $inc = 1; ?>
@if(count($contact_data) > 0)
@foreach($contact_data as $message)
				    <tr>
				      <th scope="row"> {{ $inc++ }} </th>
				      <td style="text-transform: capitalize;">
				      	{{ $message['cn_name'] }}
				      </td>
				      <td>
				      	{{ $message['cn_email'] }}
				      </td>
				      <td>
				      	{{ $message['cn_subject'] }}
				      </td>
				      <td>
				      	<a href="/detailmessage/{{Crypt::encryptString($message['cn_id'])}}" class="btn btn-success"> View </a>
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