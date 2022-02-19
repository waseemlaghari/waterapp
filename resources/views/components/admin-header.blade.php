<!DOCTYPE html>
<html>
<head>
	<title> {{$title}} </title>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/admin/style.css'); }}">
<!-- The css file is in public folder public/css/admin/style.css  --->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</head>
<body>
<!--- Admin Header  --->

<div class="xxd_dashboard">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h1>Admin Dashboard</h1>
			</div>
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<a href="/ddxlogxxd" class="btn btn-danger">
					Logout
				</a>
			</div>
		</div>
	</div>
</div>
<div class="listoflinks">
	<div class="container">
		<ul class="nav justify-content-center">
	  		<li class="nav-item">
	    		<a class="nav-link active" href="/Admin">Admin Dashboad</a>
	  		</li>
	  		<li class="nav-item">
	    		<a class="nav-link" href="/lstmessages">Contact Message</a>
	  		</li>
	  		<li class="nav-item">
	    		<a class="nav-link" href="/lstacptagency">Accept Agencies </a>
	  		</li>
	  		<li class="nav-item">
	    		<a class="nav-link" href="/lstcities">Cities</a>
	  		</li>
	  		<li class="nav-item">
	    		<a class="nav-link" href="/adlstofagencies">List of RO Plants</a>
	  		</li>
	  		<li class="nav-item">
	    		<a class="nav-link" href="/adlstofblkagencies">List of Blocked RO Plants</a>
	  		</li>
	  		<li class="nav-item">
	    		<a class="nav-link" href="/adlstoforders">List of Orders</a>
	  		</li>
		</ul>
	</div> <!--- Container --->
</div> <!--- listoflinks --->
