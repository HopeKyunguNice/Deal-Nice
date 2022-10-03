<?php
$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row)
{
	$footer_about = $row['footer_about'];
	$contact_email = $row['contact_email'];
	$contact_phone = $row['contact_phone'];
	$contact_address = $row['contact_address'];
	$footer_copyright = $row['footer_copyright'];
	$total_recent_post_footer = $row['total_recent_post_footer'];
    $total_popular_post_footer = $row['total_popular_post_footer'];
    $newsletter_on_off = $row['newsletter_on_off'];
    $before_body = $row['before_body'];
}
?>



<footer class="bg-white iq-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><a href="privacy-policy.php">Privacy Policy</a></li>
                    <li class="list-inline-item"><a href="terms-of-service.php">Terms of Use</a></li>
                </ul>
            </div>
            <div class="col-lg-6 text-right">
                Copyright © 2022 <a href="index.php">DealNice</a> All Rights Reserved.
            </div>
        </div>
    </div>
</footer>
<!-- Footer END -->
<!-- color-customizer -->
<div class="iq-colorbox color-fix">
    <div class="buy-button"> <a class="color-full" href="#"><i class="fa fa-spinner fa-spin"></i></a> </div>
    <div class="clearfix color-picker">
        <h3 class="iq-font-black">DealNice Awesome Color</h3>
        <p>This color combo available inside whole template. You can change on your wish, Even you can create
            your
            own with limitless possibilities! </p>
        <ul class="iq-colorselect clearfix">
            <li class="color-1 " data-style="color-1"></li>
            <li class="color-2" data-style="iq-color-2"></li>
            <li class="color-3" data-style="iq-color-3"></li>
            <li class="color-4" data-style="iq-color-4"></li>
            <li class="color-5" data-style="iq-color-5"></li>
            <li class="color-6" data-style="iq-color-6"></li>
            <li class="color-7" data-style="iq-color-7"></li>
            <li class="color-8" data-style="iq-color-8"></li>
            <li class="color-9" data-style="iq-color-9"></li>
            <li class="color-10" data-style="iq-color-10"></li>
            <li class="color-11" data-style="iq-color-11"></li>
            <li class="color-12" data-style="iq-color-12"></li>
            <li class="color-13" data-style="iq-color-13"></li>
            <li class="color-14 iq-colormark" data-style="iq-color-14"></li>
            <li class="color-15" data-style="iq-color-15"></li>
            <li class="color-16" data-style="iq-color-16"></li>
            <li class="color-17" data-style="iq-color-17"></li>
            <li class="color-18" data-style="iq-color-18"></li>
            <li class="color-19" data-style="iq-color-19"></li>
            <li class="color-20" data-style="iq-color-20"></li>
        </ul>
        <a target="_blank" class="btn btn-primary d-block mt-3" href="#">Purchase Now</a>
    </div>
</div>
<!-- color-customizer END -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="./assets/js/jquery.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<!-- Appear JavaScript -->
<script src="./assets/js/jquery.appear.js"></script>
<!-- Countdown JavaScript -->
<script src="./assets/js/countdown.min.js"></script>
<!-- Counterup JavaScript -->
<script src="./assets/js/waypoints.min.js"></script>
<script src="./assets/js/jquery.counterup.min.js"></script>
<!-- Wow JavaScript -->
<script src="./assets/js/wow.min.js"></script>
<!-- Apexcharts JavaScript -->
<script src="./assets/js/apexcharts.js"></script>
<!-- Slick JavaScript -->
<script src="./assets/js/slick.min.js"></script>
<!-- Select2 JavaScript -->
<script src="./assets/js/select2.min.js"></script>
<!-- Owl Carousel JavaScript -->
<script src="./assets/js/owl.carousel.min.js"></script>
<!-- Magnific Popup JavaScript -->
<script src="./assets/js/jquery.magnific-popup.min.js"></script>
<!-- Smooth Scrollbar JavaScript -->
<script src="./assets/js/smooth-scrollbar.js"></script>
<!-- lottie JavaScript -->
<script src="./assets/js/lottie.js"></script>
<!-- am core JavaScript -->
<script src="./assets/js/core.js"></script>
<!-- am charts JavaScript -->
<script src="./assets/js/charts.js"></script>
<!-- am animated JavaScript -->
<script src="./assets/js/animated.js"></script>
<!-- am kelly JavaScript -->
<script src="./assets/js/kelly.js"></script>
<!-- am maps JavaScript -->
<script src="./assets/js/maps.js"></script>
<!-- am worldLow JavaScript -->
<script src="./assets/js/worldLow.js"></script>
<!-- Style Customizer -->
<script src="./assets/js/style-customizer.js"></script>
<!-- Chart Custom JavaScript -->
<script src="./assets/js/chart-custom.js"></script>
<!-- Custom JavaScript -->
<script src="./assets/js/custom.js"></script>
<?php echo $before_body; ?>
</body>

</html>