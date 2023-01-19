<style>footer{text-align:center;background-color: #233342;padding-top:90px;}footer .footermenu{display:flex;justify-content:center;padding:10px 0;}footer .footermenu li{padding:0;border-right:1px solid lime;padding-right:10px;margin-right:10px;list-style-type:none}footer .footermenu li a{text-decoration:none;color:white}footer .footermenu li:last-child{border-right:0;padding-right:0px;margin-right:0px}footer p{padding:10px 0;color:white;}</style>
<footer>
<div class="container">
<ul class="footermenu">
<li><a href="/privacy">Privacy Policy</a></li>
<li><a href="/tos">Terms Of Service</a></li>
<li><a href="/help">Contact Us</a></li>
<li><a href="/proofs">Payment Proof</a></li>
</ul>
<p>By accessing to use or navigating this site you accept that we will use certain browser cookies to improve your experience with us. we only uses cookies which will improve your experience with us and will not interfere with your privacy. Please refer to our Privacy Policy for further information on our use of cookies and how you can disable or manage their use should you wish</p>
<p class="copyright">Copyright © 2022 All rights reserved</p>
</div>
</footer>
<script src="assets/global/js/jquery-3.6.0.min.js"></script>
<script src="assets/templates/basic/js/bootstrap.min.js"></script>
<script src="assets/templates/basic/js/slick.min.js"></script>
<script src="assets/templates/basic/js/nice-select.js"></script>
<script src="assets/templates/basic/js/nicEdit.js"></script>
<script src="assets/templates/basic/js/odometer.min.js"></script>
<script src="assets/templates/basic/js/viewport.jquery.js"></script>
<script src="assets/templates/basic/js/jquery.datepicker2.min.js"></script>
<script src="assets/templates/basic/js/main.js"></script>
<link rel="stylesheet" href="assets/global/css/iziToast.min.css">
<script src="assets/global/js/iziToast.min.js"></script>
<script>
    "use strict";
    function notify(status,message) {
        iziToast[status]({
            message: message,
            position: "topRight"
        });
    }
</script>
<script>
        (function ($) {
            "use strict";
            $(".langSel").on("change", function() {
                window.location.href = "https://pennyearners.com/change/"+$(this).val() ;
            });
            $('.policy').on('click',function(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.get('https://pennyearners.com/cookie/accept', function(response){
                    $('.cookie__wrapper').addClass('d-none');
                    iziToast.success({message: response, position: "topRight"});
                });
            });
        })(jQuery);
    </script>
<script>
        "use strict";
        bkLib.onDomLoaded(function() {
            $( ".nicEdit" ).each(function( index ) {
                $(this).attr("id","nicEditor"+index);
                new nicEditor({fullPanel : true}).panelInstance('nicEditor'+index,{hasPanel : true});
            });
        });
    </script>
</body>

</html>