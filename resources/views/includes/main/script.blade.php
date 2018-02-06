<!-- Main  -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/detect.js')}}"></script>
<script src="{{asset('js/fastclick.js')}}"></script>
<script src="{{asset('js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('js/jquery.blockUI.js')}}"></script>
<script src="{{asset('js/waves.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<script src="{{asset('js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('js/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('js/plugins/switchery/switchery.min.js')}}"></script>

 <!-- Counter Up  -->
 <script src="{{asset('js/plugins/waypoints/lib/jquery.waypoints.js')}}"></script>
 <script src="{{asset('js/plugins/counterup/jquery.counterup.min.js')}}"></script>

 <!-- circliful Chart -->
 <script src="{{asset('js/plugins/jquery-circliful/js/jquery.circliful.min.js')}}"></script>
 <script src="{{asset('js/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

  <!-- skycons -->
<script src="{{asset('js/plugins/skyicons/skycons.min.js')}}" type="text/javascript"></script>


 <!-- Page js  -->
 <script src="{{asset('pages/jquery.dashboard.js')}}"></script>
<!-- Custom main Js -->
<script src="{{asset('js/jquery.core.js')}}"></script>
<script src="{{asset('js/jquery.app.js')}}"></script>
 <script>
        jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 100,
                time: 1200
            });
            $('.circliful-chart').circliful();
        });

        // BEGIN SVG WEATHER ICON
        if (typeof Skycons !== 'undefined'){
        var icons = new Skycons(
            {"color": "#3bafda"},
            {"resizeClear": true}
            ),
                list  = [
                    "clear-day", "clear-night", "partly-cloudy-day",
                    "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                    "fog"
                ],
                i;

            for(i = list.length; i--; )
            icons.set(list[i], list[i]);
            icons.play();
        };
 </script>
