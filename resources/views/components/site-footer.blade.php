

<footer class="main-footer">
    <strong>Copyright &copy; 2021 <a href="/"> RO Plants App </a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>

<!--- Site Footer  --->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script type="text/javascript">
	$('#btnmodal').click(function() {
		$('#exampleModal').modal('toggle')
	});
	$('#dismissbtn').click(function(){
		$('#exampleModal').modal('hide')
	});
	$('#dismissbtn2').click(function(){
		$('#exampleModal').modal('hide')
	});



</script>

<!-- jQuery UI 1.11.4 -->
<!-- <script src="{{ URL::asset('agencydashboard/plugins/jquery-ui/jquery-ui.min.js'); }}"></script> -->
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<!-- <script src="{{ URL::asset('agencydashboard/plugins/bootstrap/js/bootstrap.bundle.min.js'); }}"></script> -->
<!-- ChartJS -->
<script src="{{ URL::asset('agencydashboard/plugins/chart.js/Chart.min.js'); }}"></script>
<!-- Sparkline -->
<script src="{{ URL::asset('agencydashboard/plugins/sparklines/sparkline.js'); }}"></script>
<!-- JQVMap -->
<script src="{{ URL::asset('agencydashboard/plugins/jqvmap/jquery.vmap.min.js'); }}"></script>
<script src="{{ URL::asset('agencydashboard/plugins/jqvmap/maps/jquery.vmap.usa.js'); }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ URL::asset('agencydashboard/plugins/jquery-knob/jquery.knob.min.js'); }}"></script>
<!-- daterangepicker -->
<script src="{{ URL::asset('agencydashboard/plugins/moment/moment.min.js'); }}"></script>
<script src="{{ URL::asset('agencydashboard/plugins/daterangepicker/daterangepicker.js'); }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ URL::asset('agencydashboard/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'); }}"></script>
<!-- Summernote -->
<script src="{{ URL::asset('agencydashboard/plugins/summernote/summernote-bs4.min.js'); }}"></script>
<!-- overlayScrollbars -->
<script src="{{ URL::asset('agencydashboard/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'); }}"></script>
<!-- AdminLTE App -->
<script src="{{ URL::asset('agencydashboard/dist/js/adminlte.js'); }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ URL::asset('agencydashboard/dist/js/demo.js'); }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ URL::asset('agencydashboard/dist/js/pages/dashboard.js'); }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/script.js'); }}"></script>

</body>
</html>