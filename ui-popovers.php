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
                                        <h4 class="card-title">Popovers</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <button type="button" class="btn btn-lg btn-danger" data-toggle="popover"
                                        title="Popover title"
                                        data-content="And here's some amazing content. It's very engaging. Right?">Click
                                        to
                                        toggle popover</button>
                                </div>
                            </div>
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Dismiss on next click</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <p>Use the <code>focus</code> trigger to dismiss popovers on the user’s next click
                                        of a
                                        different element than the toggle element.</p>
                                    <a tabindex="0" class="btn btn-danger" role="button" data-toggle="popover"
                                        data-trigger="focus" title="Dismissible popover"
                                        data-content="And here's some amazing content. It's very engaging. Right?">Dismissible
                                        popover</a>
                                </div>
                            </div>
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Disabled elements</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <p>Elements with the <code>disabled</code> attribute aren’t interactive, meaning
                                        users
                                        cannot hover or click them to trigger a popover (or tooltip). As a workaround,
                                        you’ll want to trigger the popover from a wrapper <code>&lt;div&gt;</code> or
                                        <code>&lt;span&gt;</code> and override the <code>pointer-events</code> on the
                                        disabled element.
                                    </p>
                                    <span class="d-inline-block" data-toggle="popover" data-content="Disabled popover">
                                        <button class="btn btn-primary" style="pointer-events: none;" type="button"
                                            disabled>Disabled button</button>
                                    </span>
                                </div>
                            </div>
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Hover elements</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <p>For disabled popover triggers, you may also prefer
                                        <code>data-trigger="hover"</code>
                                        so that the popover appears as immediate visual feedback to your users as they
                                        may
                                        not expect to <em>click</em> on a disabled element.
                                    </p>
                                    <span class="d-inline-block" data-trigger="hover" data-toggle="popover"
                                        data-content="Disabled popover">
                                        <button class="btn btn-primary" style="pointer-events: none;" type="button"
                                            disabled>Disabled button</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Four directions</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <p>Four options are available: top, right, bottom, and left aligned.</p>
                                    <button type="button" class="btn btn-secondary" data-container="body"
                                        data-toggle="popover" data-placement="top"
                                        data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                        Popover on top
                                    </button>
                                    <button type="button" class="btn btn-secondary" data-container="body"
                                        data-toggle="popover" data-placement="right"
                                        data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                        Popover on right
                                    </button>
                                    <button type="button" class="btn btn-secondary rmt-5" data-container="body"
                                        data-toggle="popover" data-placement="bottom" data-content="Vivamus
                              sagittis lacus vel augue laoreet rutrum faucibus.">
                                        Popover on bottom
                                    </button>
                                    <button type="button" class="btn btn-secondary rmt-5" data-container="body"
                                        data-toggle="popover" data-placement="left"
                                        data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                        Popover on left
                                    </button>
                                </div>
                            </div>
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Popovers With Color</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <p>Four options are available: top, right, bottom, and left aligned.</p>
                                    <button type="button" class="btn btn-primary" data-container="body"
                                        data-toggle="popover" data-placement="top"
                                        data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                        Popover on top
                                    </button>
                                    <button type="button" class="btn btn-success" data-container="body"
                                        data-toggle="popover" data-placement="right"
                                        data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                        Popover on right
                                    </button>
                                    <button type="button" class="btn btn-danger rmt-5" data-container="body"
                                        data-toggle="popover" data-placement="bottom" data-content="Vivamus
                              sagittis lacus vel augue laoreet rutrum faucibus.">
                                        Popover on bottom
                                    </button>
                                    <button type="button" class="btn btn-info rmt-5" data-container="body"
                                        data-toggle="popover" data-placement="left"
                                        data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                        Popover on left
                                    </button>
                                </div>
                            </div>
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Popovers With Color</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <p>Four options are available: top, right, bottom, and left aligned.</p>
                                    <button type="button" class="btn iq-bg-primary" data-container="body"
                                        data-toggle="popover" data-placement="top"
                                        data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                        Popover on top
                                    </button>
                                    <button type="button" class="btn iq-bg-success" data-container="body"
                                        data-toggle="popover" data-placement="right"
                                        data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                        Popover on right
                                    </button>
                                    <button type="button" class="btn iq-bg-danger rmt-5" data-container="body"
                                        data-toggle="popover" data-placement="bottom" data-content="Vivamus
                              sagittis lacus vel augue laoreet rutrum faucibus.">
                                        Popover on bottom
                                    </button>
                                    <button type="button" class="btn iq-bg-info rmt-5" data-container="body"
                                        data-toggle="popover" data-placement="left"
                                        data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                                        Popover on left
                                    </button>
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

</php>