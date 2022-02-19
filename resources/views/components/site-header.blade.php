<!DOCTYPE html>
<html>
<head>
	<title> {{$title}} </title>

 <link href="{{ URL::asset('fontawesome/css/all.css'); }}" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css'); }}">
<!-- The Main site's css file is in public folder public/css/style.css  --->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">


<!-- These links are for agency dashboard  --->

<!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ URL::asset('agencydashboard/plugins/fontawesome-free/css/all.min.css'); }}">
  
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ URL::asset('agencydashboard/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'); }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ URL::asset('agencydashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ URL::asset('agencydashboard/plugins/jqvmap/jqvmap.min.css'); }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ URL::asset('agencydashboard/dist/css/adminlte.min.css'); }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ URL::asset('agencydashboard/plugins/overlayScrollbars/css/OverlayScrollbars.min.css'); }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ URL::asset('agencydashboard/plugins/daterangepicker/daterangepicker.css'); }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ URL::asset('agencydashboard/plugins/summernote/summernote-bs4.min.css'); }}">

<!--- Agency Dashboard Ends here  -->
</head>
<body>
<!--- Site Header  --->

<!--- Navbar --->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
  	<a class="navbar-brand" href="/">RO Plants</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/aboutus">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/RegisterAgency">Register Agency</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/LoginAgency">Login Agency</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/contactus">Contact Us</a>
      </li>
    </ul>
  </div>
  <form class="form-inline mycuscls" method="get" action="/searchbycity">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" name="agency_search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
  </div>
</nav>

<!-- 
<div class="mainnavbar">
	<div class="container">
		<div class="navibar">
			<ul class="nav justify-content-end">
			  <li class="nav-item">
			    <a class="nav-link active" href="/">Home</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="#">About Us</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="#">Contact Us</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="/RegisterAgency">Register Agency</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="#">Login Agency</a>
			  </li>
			</ul>
		</div>
	</div>
</div> -->