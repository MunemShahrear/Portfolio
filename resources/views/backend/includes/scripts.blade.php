

    <!-- latest jquery-->
    <script src="{{ asset('backend/assets/js/jquery-3.5.1.min.js') }}"></script>
    <!-- feather icon js-->
    <script src="{{ asset('backend/assets/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/icons/feather-icon/feather-icon.js') }}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ asset('backend/assets/js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('backend/assets/js/config.js') }}"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset('backend/assets/js/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/bootstrap/bootstrap.min.js') }}"></script>
    <!-- Plugins JS start-->
    {{-- <script src="{{ asset('backend/assets/js/chart/chartist/chartist.js') }}"></script>
    <script src="{{ asset('backend/assets/js/chart/chartist/chartist-plugin-tooltip.js') }}"></script>
    <script src="{{ asset('backend/assets/js/chart/knob/knob.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/chart/knob/knob-chart.js') }}"></script>
    <script src="{{ asset('backend/assets/js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ asset('backend/assets/js/chart/apex-chart/stock-prices.js') }}"></script> --}}

    <script src="{{ asset('backend/assets/js/prism/prism.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/clipboard/clipboard.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/counter/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/counter/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/counter/counter-custom.js') }}"></script>
    <script src="{{ asset('backend/assets/js/custom-card/custom-card.js') }}"></script>
    {{-- <script src="{{ asset('backend/assets/js/notify/bootstrap-notify.min.js') }}"></script>
     --}}
    <script src="{{ asset('backend/assets/js/vector-map/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vector-map/map/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vector-map/map/jquery-jvectormap-us-aea-en.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vector-map/map/jquery-jvectormap-uk-mill-en.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vector-map/map/jquery-jvectormap-au-mill.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vector-map/map/jquery-jvectormap-chicago-mill-en.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vector-map/map/jquery-jvectormap-in-mill.js') }}"></script>
    <script src="{{ asset('backend/assets/js/vector-map/map/jquery-jvectormap-asia-mill.js') }}"></script>
    <script src="{{ asset('backend/assets/js/dashboard/default.js') }}"></script>
    {{-- <script src="{{ asset('backend/assets/js/notify/index.js') }}"></script>
     --}}

     {{-- <script src="{{ asset('backend/assets/js/notify/notify.js') }}"></script> --}}
<script src="{{ asset('backend/assets/js/notify/bootstrap-notify.js') }}"></script>
{{-- <script src="{{ asset('backend/assets/js/notify/bootstrap-notify.min.js') }}"></script> --}}
{{-- <script src="{{ asset('backend/assets/js/notify/notify-script.js') }}"></script> --}}
<script src="{{ asset('backend/assets/js/tooltip-init.js') }}"></script>

    <script src="{{ asset('backend/assets/js/datepicker/date-picker/datepicker.js') }}"></script>
    <script src="{{ asset('backend/assets/js/datepicker/date-picker/datepicker.en.js') }}"></script>
    <script src="{{ asset('backend/assets/js/datepicker/date-picker/datepicker.custom.js') }}"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{ asset('backend/assets/js/script.js') }}"></script>
    {{-- <script src="{{ asset('backend/assets/js/theme-customizer/customizer.js') }}"></script> --}}
    <!-- login js-->
    <!-- Plugin used-->

    @if (isset($successMessage))
    <script>
        $(document).ready(function() {
            $.notify({
                // options
                message: '{{ $successMessage }}'
            },{
                // settings
                type: 'success'
            });
        });
    </script>
    @endif


        @yield('script')
        <script>
  function togglePasswordVisibility() {
    var passwordInput = document.querySelector('input[name="password"]');
    var toggleButton = document.querySelector('.toggle');

    if (passwordInput.type === 'password') {
      passwordInput.type = 'text';
      toggleButton.innerHTML = '<i class="fa fa-eye-slash" aria-hidden="true"></i>';
    } else {
      passwordInput.type = 'password';
      toggleButton.innerHTML = '<i class="fa fa-eye" aria-hidden="true"></i>';
    }
  }
</script>