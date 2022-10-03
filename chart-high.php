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
                                        <h4 class="card-title">Basic line Chart</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <div id="high-basicline-chart"></div>
                                </div>
                            </div>
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Column and Bar Chart</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <div id="high-columnndbar-chart"></div>
                                </div>
                            </div>
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Pie Chart</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <div id="high-pie-chart"></div>
                                </div>
                            </div>
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Dynamic Chart</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <div id="high-dynamic-chart"></div>
                                </div>
                            </div>
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Gauges Chart</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <div id="high-gauges-chart"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Area Chart</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <div id="high-area-chart"></div>
                                </div>
                            </div>
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Scatter plot Chart</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <div id="high-scatterplot-chart"></div>
                                </div>
                            </div>
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Dual axes, line and column Chart</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <div id="high-linendcolumn-chart"></div>
                                </div>
                            </div>
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">3D Chart</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <div id="high-3d-chart"></div>
                                </div>
                            </div>
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Bar With Nagative Chart</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <div id="high-barwithnagative-chart"></div>
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

    <!-- Mirrored from iqonic.design/themes/DealNice/php/chart-high.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Mar 2021 03:55:52 GMT -->

</php>