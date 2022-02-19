<x-site-header componentName="Delivered Orders | RO Plants App" />

<div class="mainagency_dashboard">


<div class="wrapper">

  <!-- Preloader -->
 

 
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
@if($ords_count > 0)
 
      <span class="brand-text font-weight-light"> 
                   
      {{ $agency_ord_data[0]['ds_title']; }} 


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
            <h1 class="m-0">Delivered orders</h1>
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
            <div class="ord_tab_dv">
            	<table class="table">
				  <thead class="thead-dark">
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Name</th>
				      <th scope="col">Number</th>
				      <th scope="col">Can's</th>
				      <th scope="col">Total Price</th>
				      <th scope="col">Date</th>
				      <th scope="col">Address</th>
				      <th scope="col">Delivered on</th>
				    </tr>
				  </thead>
				  <tbody>
<?php $inc = 1; ?> 
@if($ords_count > 0)
@foreach ($agency_ord_data as $order)
				    <tr>
				      <th scope="row">
				      	{{ $inc++ }}
				      </th>
				      <td style="text-transform: capitalize;">
				      	{{ $order['ord_cusname'] }}
				      </td>
				      <td>
				      	{{ $order['ord_cusnumb'] }}
				      </td>
				      <td>
				      	{{ $order['ord_can_no'] }}
				      </td>
				      <td>
				      	{{ ($order['ds_price'] * $order['ord_can_no']). " RS" }}
				      </td>
				      <td>
				      	{{ $order['ord_date'] }}
				      </td>
				      <td>
				      	{{ $order['ord_fulladdr'] }}
				      </td>
				      <td>
                <?php echo $date = date('Y-m-d', strtotime($order['updated_at'])); ?>
                {{ $order['updated_at'] }}
				      </td>
				    </tr>
@endforeach
@else
<tr>
  <td colspan="10"><h2>No Data Found</h2></td>
</tr>

@endif
				  </tbody>
				</table>
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