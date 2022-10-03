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
                        <div class="col-sm-12 col-lg-6">
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Line Chart</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <div id="apex-basic"></div>
                                </div>
                            </div>
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Column Chart</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <div id="apex-column"></div>
                                </div>
                            </div>
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Mixes Chart</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <div id="apex-mixed-chart"></div>
                                </div>
                            </div>
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title"> Bubble Charts</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <div id="apex-bubble-chart"></div>
                                </div>
                            </div>
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title"> Pie Charts</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <div id="apex-pie-chart"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Line Area Chart</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <div id="apex-line-area"></div>
                                </div>
                            </div>
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Bar Chart</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <div id="apex-bar"></div>
                                </div>
                            </div>
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title"> Candlestick Charts</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <div id="apex-candlestick-chart"></div>
                                </div>
                            </div>
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title"> Scatter Charts</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <div id="apex-scatter-chart"></div>
                                </div>
                            </div>
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Radial Bar Charts</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <div id="apex-radialbar-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Wrapper END -->
        <!-- Footer -->
        <?php require_once('footer.php'); ?>
    </body>

    <!-- Mirrored from iqonic.design/themes/DealNice/php/chart-apex.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Mar 2021 03:55:53 GMT -->

</php>