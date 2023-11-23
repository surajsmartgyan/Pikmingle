<!-- Vendor JS -->
<script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
<script src="assets/js/vendor/popper.min.js"></script>
<script src="assets/js/vendor/bootstrap.min.js"></script>
<script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
<script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>

<!--Plugins JS-->
<script src="assets/js/plugins/swiper-bundle.min.js"></script>
<script src="assets/js/plugins/countdownTimer.min.js"></script>
<script src="assets/js/plugins/scrollup.js"></script>
<script src="assets/js/plugins/jquery.zoom.min.js"></script>
<script src="assets/js/plugins/slick.min.js"></script>
<script src="assets/js/plugins/infiniteslidev2.js"></script>
<script src="assets/js/plugins/click-to-call.js"></script>

<!-- Main Js -->
<script src="assets/js/vendor/index.js"></script>
<script src="assets/js/demo-6.js"></script>
    <!--<script src="include/common.818cc95bc25fc1e8c0e3.js" type="text/javascript"></script> 
	<script src="include/home_global.b5e638ee6bcf15a2d574.js" type="text/javascript"></script>
	<script src="include/home.9f7f337bba33dff4da7d.js" type="text/javascript"></script>-->
<script>
    function delet() {
        
        var a=$("#searchtxt").val();

        if(a.length>0) {
            $("#deletebtn").show();
        }
        else {
            $("#deletebtn").hide();
        }
        
    }

    $(document).ready(function(){
        $("#deletebtn").click(function(){

            $("#searchtxt").val("");

        });
    })

</script>
