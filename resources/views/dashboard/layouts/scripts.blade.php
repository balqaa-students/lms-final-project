<!-- jQuery -->
<script src="{{ asset('dashboard/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('dashboard/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('dashboard/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('dashboard/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('dashboard/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('dashboard/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('dashboard/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('dashboard/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('dashboard/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('dashboard/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('dashboard/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('dashboard/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- SweetAlert2 -->
<script src="{{ asset('dashboard/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
<!-- Toastr -->
<script src="{{ asset('dashboard/plugins/toastr/toastr.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dashboard/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dashboard/dist/js/demo.js') }}"></script>
{{-- jquery confirm --}}
<script src="{{ asset('dashboard/assets/js/jquery-confirm.js') }}"></script>


<script>
    $(function() {
        @if ( Session::has('success') )
            toastr.success("{{ Session::get('success') }}")
        @endif

        @if ( Session::has('info') )
            toastr.info("{{ Session::get('info') }}")
        @endif

        @if ( Session::has('warning') )
            toastr.warning("{{ Session::get('warning') }}")
        @endif

        @if ( Session::has('danger') )
            toastr.error("{{ Session::get('danger') }}")
        @endif
    });
</script>
