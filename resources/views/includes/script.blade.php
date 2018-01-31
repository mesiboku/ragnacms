<script>
    var resizefunc = [];
</script>

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
<script src="{{asset('js/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('js/landing/jquery.counterup.min.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{asset('js/landing/jquery.magnific-popup.min.js')}}"></script>
<!-- Jquery stellar for Parallax -->                                                      
<script type="text/javascript" src="{{asset('js/landing/jquery.stellar.min.js')}}"></script>
<!--sticky header-->
<script type="text/javascript" src="{{asset('js/landing/jquery.sticky.js')}}"></script>
<!-- Custom main Js -->
<script src="{{asset('js/jquery.core.js')}}"></script>
<script src="{{asset('js/jquery.app.js')}}"></script>
<script src="{{asset('js/landing/jquery.app.js')}}"></script>
<script>
    $(function(){
        $('.counter').counterUp({
            delay: 100,
            time: 1200
        });
        $('#datepicker').datepicker({
            autoclose: true,
            todayHighlight: true
        });
    });
</script>