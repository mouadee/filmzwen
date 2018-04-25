<footer class="main-footer">
   
    <strong>Copyright &copy; 2018-2019 <a href="#">{{trans('admin.Filmzwen')}}</a>.</strong> {{trans('admin.All_rights_reserved')}}
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ url('/designe/adminlte/') }}/bower_components/jquery/dist/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script>
	$(document).ready(function() {
    $('.Film_language').select2();
});
</script>
<script src="{{ url('/designe/adminlte/') }}/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{ url('/designe/adminlte/') }}/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="{{ url('/designe/adminlte/') }}/bower_components/datatables.net-bs/js/dataTables.buttons.min.js"></script>

<script src="{{ url('') }}/vendor/datatables/buttons.server-side.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ url('/designe/adminlte/') }}/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ url('/designe/adminlte/') }}/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="{{ url('/designe/adminlte/') }}/bower_components/raphael/raphael.min.js"></script>
<script src="{{ url('/designe/adminlte/') }}/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="{{ url('/designe/adminlte/') }}/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="{{ url('/designe/adminlte/') }}/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{{ url('/designe/adminlte/') }}plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{ url('/designe/adminlte/') }}/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{ url('/designe/adminlte/') }}/bower_components/moment/min/moment.min.js"></script>
<script src="{{ url('/designe/adminlte/') }}/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="{{ url('/designe/adminlte/') }}/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ url('/designe/adminlte/') }}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="{{ url('/designe/adminlte/') }}/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="{{ url('/designe/adminlte/') }}/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="{{ url('/designe/adminlte/') }}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ url('/designe/adminlte/') }}/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('/designe/adminlte/') }}/dist/js/demo.js"></script>
@stack('js')
@stack('css')
</body>
</html>
