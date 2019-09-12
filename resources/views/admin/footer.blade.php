
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Template: Copyright &copy; 2014-2018 <a href="http://AdmiLte.io">AdmiLte.io</a>.</strong>
    All rights reserved.  
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.0-beta.1
	 
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{url('public/')}}/AdmiLte/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{url('public/')}}/AdmiLte/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{url('public/')}}/AdmiLte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{url('public/')}}/AdmiLte/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{url('public/')}}/AdmiLte/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{url('public/')}}/AdmiLte/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{url('public/')}}/AdmiLte/plugins/jqvmap/maps/jquery.vmap.world.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{url('public/')}}/AdmiLte/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{url('public/')}}/AdmiLte/plugins/moment/moment.min.js"></script>
<script src="{{url('public/')}}/AdmiLte/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{url('public/')}}/AdmiLte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{url('public/')}}/AdmiLte/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{url('public/')}}/AdmiLte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- FastClick -->
<script src="{{url('public/')}}/AdmiLte/plugins/fastclick/fastclick.js"></script>
<!-- AdmiLte App -->
<script src="{{url('public/')}}/AdmiLte/dist/js/adminlte.js"></script>
<!-- AdmiLte dashboard demo (This is only for demo purposes) -->
<script src="{{url('public/')}}/AdmiLte/dist/js/pages/dashboard.js"></script>
<!-- AdmiLte for demo purposes -->
<script src="{{url('public/')}}/AdmiLte/dist/js/demo.js"></script>
@stack('scripts')
</body>
</html>
