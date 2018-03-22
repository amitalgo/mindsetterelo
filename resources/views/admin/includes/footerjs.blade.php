<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script><!-- Popper for Bootstrap -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/detect.js')}}"></script>
<script src="{{asset('js/fastclick.js')}}"></script>
<script src="{{asset('js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('js/jquery.blockUI.js')}}"></script>
<script src="{{asset('js/waves.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<script src="{{asset('js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('js/jquery.scrollTo.min.js')}}"></script>

<script src="{{asset('plugins/peity/jquery.peity.min.js')}}"></script>

<!-- jQuery  -->
<script src="{{asset('plugins/waypoints/lib/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('plugins/counterup/jquery.counterup.min.js')}}"></script>

<script src="{{asset('plugins/morris/morris.min.js')}}"></script>
<script src="{{asset('plugins/raphael/raphael-min.js')}}"></script>

<script src="{{asset('plugins/jquery-knob/jquery.knob.js')}}"></script>

<script src="{{asset('pages/jquery.dashboard.js')}}"></script>

<script src="{{asset('js/jquery.core.js')}}"></script>
<script src="{{asset('js/jquery.app.js')}}"></script>

<script type="text/javascript">
    jQuery(document).ready(function($) {
        $('.counter').counterUp({
            delay: 100,
            time: 1200
        });

        $(".knob").knob();

    });
</script>