<?php require_once('header.php'); ?>
<!doctype php>
<php lang="en">

    <?php require_once('./assets/templete/head.php'); ?>

    <body>
        <!-- loader Start -->
        <div id="loading">
            <div id="loading-center">
            </div>
        </div>
        <!-- loader END -->
        <!-- Wrapper Start -->
        <div class="wrapper">
            <!-- Sidebar  -->
            <?php require_once('./assets/templete/sidebar.php'); ?>
            <!-- TOP Nav Bar -->
            <?php require_once('./assets/templete/navbar.php'); ?>

            <!-- TOP Nav Bar END -->

            <!-- Page Content  -->
            <div id="content-page" class="content-page">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Display headings</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <p>Traditional heading elements are designed to work best in the meat of your page
                                        content. When you need a heading to stand out, consider using a <strong>display
                                            heading</strong>—a larger, slightly more opinionated heading style. Keep in
                                        mind
                                        these headings are not responsive by default, but it’s possible to enable <a
                                            href="https://getbootstrap.com/" target="_blank">responsive font sizes</a>.
                                    </p>
                                    <h1 class="display-1">Display headings</h1>
                                    <h1 class="display-2">Display headings</h1>
                                    <h1 class="display-3">Display headings</h1>
                                    <h1 class="display-4">Display headings</h1>
                                    <h1 class="display-5">Display headings</h1>
                                    <h1 class="display-6 mb-0">Display headings</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Typography</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <p>All php headings, <code>&lt;h1&gt;</code> through <code>&lt;h6&gt;</code>, are
                                        available.</p>
                                    <h1>h1. Bootstrap heading</h1>
                                    <h2>h2. Bootstrap heading</h2>
                                    <h3>h3. Bootstrap heading</h3>
                                    <h4>h4. Bootstrap heading</h4>
                                    <h5>h5. Bootstrap heading</h5>
                                    <h6 class="mb-0">h6. Bootstrap heading</h6>
                                </div>
                            </div>
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Inline text elements</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <p>Styling for common inline php5 elements.</p>
                                    <p>You can use the mark tag to <mark>highlight</mark> text.</p>
                                    <p><del>This line of text is meant to be treated as deleted text.</del></p>
                                    <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
                                    <p><ins>This line of text is meant to be treated as an addition to the
                                            document.</ins>
                                    </p>
                                    <p><u>This line of text will render as underlined</u></p>
                                    <p><small>This line of text is meant to be treated as fine print.</small></p>
                                    <p><strong>This line rendered as bold text.</strong></p>
                                    <p><em>This line rendered as italicized text.</em></p>
                                </div>
                            </div>
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Lists Inline</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <p>Remove a list’s bullets and apply some light <code>margin</code> with a
                                        combination
                                        of two classes, <code>.list-inline</code> and <code>.list-inline-item</code>.
                                    </p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">Lorem ipsum</li>
                                        <li class="list-inline-item">Phasellus iaculis</li>
                                        <li class="list-inline-item">Nulla volutpat</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Headings</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <p><code>.h1</code> through <code>.h6</code> classes are also available, for when
                                        you
                                        want to match the font styling of a heading but cannot use the associated php
                                        element.</p>
                                    <p class="h1 mb-3">h1. Bootstrap heading</p>
                                    <p class="h2 mb-3">h2. Bootstrap heading</p>
                                    <p class="h3 mb-3">h3. Bootstrap heading</p>
                                    <p class="h4 mb-3">h4. Bootstrap heading</p>
                                    <p class="h5 mb-3">h5. Bootstrap heading</p>
                                    <p class="h6 mb-0">h6. Bootstrap heading</p>
                                </div>
                            </div>
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Lists Unstyled</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <p>Remove the default <code>list-style</code> and left margin on list items
                                        (immediate
                                        children only). <strong>This only applies to immediate children list
                                            items</strong>,
                                        meaning you will need to add the class for any nested lists as well.</p>
                                    <ul class="list-unstyled">
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Consectetur adipiscing elit</li>
                                        <li>Integer molestie lorem at massa</li>
                                        <li>Facilisis in pretium nisl aliquet</li>
                                        <li>
                                            Nulla volutpat aliquam velit
                                            <ul>
                                                <li>Phasellus iaculis neque</li>
                                                <li>Purus sodales ultricies</li>
                                                <li>Vestibulum laoreet porttitor sem</li>
                                                <li>Ac tristique libero volutpat at</li>
                                            </ul>
                                        </li>
                                        <li>Faucibus porta lacus fringilla vel</li>
                                        <li>Aenean sit amet erat nunc</li>
                                        <li>Eget porttitor lorem</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Blockquotes</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <p>For quoting blocks of content from another source within your document. Wrap
                                        <code>&lt;blockquote class="blockquote"&gt;</code> around any <abbr
                                            title="HyperText Markup Language">php</abbr> as the quote.
                                    </p>
                                    <blockquote class="blockquote">
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                            posuere erat a ante.</p>
                                        <footer class="blockquote-footer">Someone famous in <cite
                                                title="Source Title">Source Title</cite></footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Description list alignment</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <p>Align terms and descriptions horizontally by using our grid system’s predefined
                                        classes (or semantic mixins). For longer terms, you can optionally add a
                                        <code>.text-truncate</code> class to truncate the text with an ellipsis.
                                    </p>
                                    <dl class="row">
                                        <dt class="col-sm-3">Description lists</dt>
                                        <dd class="col-sm-9">A description list is perfect for defining terms.</dd>
                                        <dt class="col-sm-3">Euismod</dt>
                                        <dd class="col-sm-9">
                                            <p>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec
                                                elit.</p>
                                            <p>Donec id elit non mi porta gravida at eget metus.</p>
                                        </dd>
                                        <dt class="col-sm-3">Malesuada porta</dt>
                                        <dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>
                                        <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
                                        <dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris
                                            condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
                                        <dt class="col-sm-3">Nesting</dt>
                                        <dd class="col-sm-9">
                                            <dl class="row">
                                                <dt class="col-sm-4">Nested definition list</dt>
                                                <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc
                                                    augue
                                                    blandit nunc.</dd>
                                            </dl>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Wrapper END -->
        <!-- Footer -->
        <footer class="iq-footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item"><a href="privacy-policy.php">Privacy Policy</a></li>
                            <li class="list-inline-item"><a href="terms-of-service.php">Terms of Use</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 text-right">
                        Copyright 2020 <a href="#">DealNice</a> All Rights Reserved.
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
                    <li class="color-1 iq-colormark" data-style="color-1"></li>
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
                    <li class="color-14" data-style="iq-color-14"></li>
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
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Appear JavaScript -->
        <script src="js/jquery.appear.js"></script>
        <!-- Countdown JavaScript -->
        <script src="js/countdown.min.js"></script>
        <!-- Counterup JavaScript -->
        <script src="js/waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <!-- Wow JavaScript -->
        <script src="js/wow.min.js"></script>
        <!-- Apexcharts JavaScript -->
        <script src="js/apexcharts.js"></script>
        <!-- Slick JavaScript -->
        <script src="js/slick.min.js"></script>
        <!-- Select2 JavaScript -->
        <script src="js/select2.min.js"></script>
        <!-- Owl Carousel JavaScript -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- Magnific Popup JavaScript -->
        <script src="js/jquery.magnific-popup.min.js"></script>
        <!-- Smooth Scrollbar JavaScript -->
        <script src="js/smooth-scrollbar.js"></script>
        <!-- lottie JavaScript -->
        <script src="js/lottie.js"></script>
        <!-- am core JavaScript -->
        <script src="js/core.js"></script>
        <!-- am charts JavaScript -->
        <script src="js/charts.js"></script>
        <!-- am animated JavaScript -->
        <script src="js/animated.js"></script>
        <!-- am kelly JavaScript -->
        <script src="js/kelly.js"></script>
        <!-- am maps JavaScript -->
        <script src="js/maps.js"></script>
        <!-- am worldLow JavaScript -->
        <script src="js/worldLow.js"></script>
        <!-- Style Customizer -->
        <script src="js/style-customizer.js"></script>
        <!-- Chart Custom JavaScript -->
        <script src="js/chart-custom.js"></script>
        <!-- Custom JavaScript -->
        <script src="js/custom.js"></script>
    </body>

    <!-- Mirrored from iqonic.design/themes/DealNice/php/ui-typography.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Mar 2021 03:55:23 GMT -->

</php>