<!--   Core JS Files and PerfectScrollbar library inside jquery.ui   -->
<script src="{{ asset('assets/js/jquery.min.js') }}" defer></script>
<script src="{{ asset('assets/js/jquery-ui.min.js') }}" defer></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}" defer></script>


<!--  Forms Validations Plugin -->
<script src="{{ asset('assets/js/jquery.validate.min.js') }}" defer></script>

<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="{{ asset('assets/js/moment.min.js') }}" defer></script>

  <!--  Date Time Picker Plugin is included in this js file -->
<script src="{{ asset('assets/js/bootstrap-datetimepicker.js') }}" defer></script>

  <!--  Select Picker Plugin -->
<script src="{{ asset('assets/js/bootstrap-selectpicker.js') }}" defer></script>

<!--  Checkbox, Radio, Switch and Tags Input Plugins -->
<script src="{{ asset('assets/js/bootstrap-checkbox-radio-switch-tags.js') }}" defer></script>

<!--  Charts Plugin -->
<script src="{{ asset('assets/js/chartist.min.js') }}" defer></script>

  <!--  Notifications Plugin    -->
<script src="{{ asset('assets/js/bootstrap-notify.js') }}" defer></script>

  <!-- Sweet Alert 2 plugin -->
<script src="{{ asset('assets/js/sweetalert2.js') }}" defer></script>

  <!-- Vector Map plugin -->
<script src="{{ asset('assets/js/jquery-jvectormap.js') }}" defer></script>

  <!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Wizard Plugin    -->
<script src="{{ asset('assets/js/jquery.bootstrap.wizard.min.js') }}" defer></script>

  <!--  Full Calendar Plugin    -->
<script src="{{ asset('assets/js/fullcalendar.min.js') }}" defer></script>

  <!-- Light Bootstrap Dashboard Core javascript and methods -->
<script src="{{ asset('assets/js/light-bootstrap-dashboard.js') }}" defer></script>

<!--   Sharrre Library    -->
<script src="{{ asset('assets/js/jquery.sharrre.js') }}" defer></script>

<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ asset('assets/js/demo.js') }}" defer></script>

<script type="text/javascript">
    $(document).ready(function(){

        demo.initDashboardPageCharts();
        demo.initVectorMap();

        $.notify({
            icon: 'pe-7s-bell',
            message: "<b>Light Bootstrap Dashboard PRO</b> - forget about boring dashboards."

          },{
              type: 'warning',
              timer: 4000
          });

    });
</script>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-46172202-1', 'auto');
    ga('send', 'pageview');

  </script>
@yield('script')
