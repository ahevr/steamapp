<!-- JS
============================================ -->
<!--modernizr min js here-->
<script src="{{asset("app/data")}}/master/js/vendor/modernizr-3.7.1.min.js"></script>

<!-- Vendor JS -->
<script src="{{asset("app/data")}}/master/js/vendor/jquery-3.6.0.min.js"></script>
<script src="{{asset("app/data")}}/master/js/vendor/jquery-migrate-3.3.2.min.js"></script>
<script src="{{asset("app/data")}}/master/js/vendor/popper.js"></script>
<script src="{{asset("app/data")}}/master/js/vendor/bootstrap.min.js"></script>
<script src="{{asset("app/data")}}/master/js/slick.min.js"></script>
<script src="{{asset("app/data")}}/master/js/wow.min.js"></script>
<script src="{{asset("app/data")}}/master/js/jquery.nice-select.js"></script>
<script src="{{asset("app/data")}}/master/js/jquery.magnific-popup.min.js"></script>
<script src="{{asset("app/data")}}/master/js/jquery.counterup.min.js"></script>
<script src="{{asset("app/data")}}/master/js/jquery-waypoints.js"></script>

<!-- Main JS -->
<script src="{{asset("app/data")}}/master/js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/js/all.min.js" integrity="sha512-8pHNiqTlsrRjVD4A/3va++W1sMbUHwWxxRPWNyVlql3T+Hgfd81Qc6FC5WMXDC+tSauxxzp1tgiAvSKFu1qIlA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script>
    $("#btn").click( function() {
        var url = "/" + $("#text").val().split(' ').join('-');
        window.open(url);
    });
</script>





