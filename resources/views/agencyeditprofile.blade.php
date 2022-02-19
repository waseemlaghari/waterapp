<x-site-header componentName="Edit - Agency Dashboard | RO Plants App" />

<div class="mainagency_dashboard">


<div class="wrapper">

  <!-- Preloader -->
 

 
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">

@if(count($agency_edit_data)>0) 
      <span class="brand-text font-weight-light"> 
                   
      {{ $agency_edit_data[0]['ds_title']; }} 


      </span>
@endif
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        </div>
        <div class="info">
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="/Agency_Dashboard" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/agencyprofile" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Agency Profile
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/list_of_orders" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Orders
              </p>
            </a>
            
          </li>
          <li class="nav-item">
            <a href="/list_of_delivered_orders" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Delivered Orders
              </p>
            </a>
            
          </li>
          <li class="nav-item">
            <a href="/agencylogxout" class="nav-linka" >
                <i class="fas fa-angle-left right"></i>
              
                Logout
              
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Agency Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-md-1 col-6">
            <!-- small box -->
            
          </div>
          <!-- ./col -->
          <div class="col-md-10 col-6">
            <div class="agprofile_tab_dv">
@if(session('ag_edit_errs'))
                <div class="alert alert-danger" role="alert">
                 {{ session('ag_edit_errs') }}
                </div>
@endif
@if(session('ag_edit_succ'))
                <div class="alert alert-success" role="alert">
                 {{ session('ag_edit_succ') }}
                </div>
@endif
            	<form action="/proupdedit" method="POST">
                @csrf
                <div class="form-group row">
                  <label for="staticTitle" class="col-sm-2 col-form-label">Name: </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="ag_name" id="staticTitle" value="{{ $agency_edit_data[0]['ds_title']; }}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Email: </label>
                  <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $agency_edit_data[0]['ds_email']; }}">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPrice" class="col-sm-2 col-form-label">Price: </label>
                  <div class="col-sm-10">
                    <input type="number" id="inputPrice" name="ag_price" class="form-control" value="{{ $agency_edit_data[0]['ds_price']; }}">
                  </div>
                </div> 
                <div class="form-group row">
                  <label for="inputAddress" class="col-sm-2 col-form-label">Address: </label>
                  <div class="col-sm-10">
                    <input type="text" id="inputAddress" name="ag_location" class="form-control" value="{{ $agency_edit_data[0]['ds_location']; }}">
                  </div>
                </div>  
                <div class="form-group row">
                  <label for="inputPhone" class="col-sm-2 col-form-label">Number: </label>
                  <div class="col-sm-10">
                    <input type="tel" id="inputPhone" name="ag_phone" class="form-control" value="{{ $agency_edit_data[0]['ds_phone']; }}">
                  </div>
                </div>  
                <div class="form-group row">
                  
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Update Profile</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-md-1 col-6">
            <!-- small box -->
            
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- <footer class="main-footer">
    <strong>Copyright &copy; 2021 <a href="/"> WaterApp </a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer> -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


</div>

<x-site-footer />