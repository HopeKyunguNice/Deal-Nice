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
                                        <h4 class="card-title">Modal components</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <p>Below is a <em>static</em> modal example (meaning its <code>position</code> and
                                        <code>display</code> have been overridden). Included are the modal header, modal
                                        body (required for <code>padding</code>), and modal footer (optional). We ask
                                        that
                                        you include modal headers with dismiss actions whenever possible, or provide
                                        another
                                        explicit dismiss action.
                                    </p>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#exampleModal">
                                        Launch demo modal
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    ...
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Modal Scrolling </h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <p>When modals become too long for the user’s viewport or device, they scroll
                                        independent of the page itself. Try the demo below to see what we mean.</p>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#exampleModalScrollable">
                                        Launch demo modal
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo
                                                        odio,
                                                        dapibus ac facilisis in, egestas eget quam. Morbi leo risus,
                                                        porta
                                                        ac consectetur ac, vestibulum at eros.</p>
                                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur
                                                        et.
                                                        Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                                                        auctor.</p>
                                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                                        cursus magna, vel scelerisque nisl consectetur et. Donec sed
                                                        odio
                                                        dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo
                                                        odio,
                                                        dapibus ac facilisis in, egestas eget quam. Morbi leo risus,
                                                        porta
                                                        ac consectetur ac, vestibulum at eros.</p>
                                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur
                                                        et.
                                                        Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                                                        auctor.</p>
                                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                                        cursus magna, vel scelerisque nisl consectetur et. Donec sed
                                                        odio
                                                        dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo
                                                        odio,
                                                        dapibus ac facilisis in, egestas eget quam. Morbi leo risus,
                                                        porta
                                                        ac consectetur ac, vestibulum at eros.</p>
                                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur
                                                        et.
                                                        Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                                                        auctor.</p>
                                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                                        cursus magna, vel scelerisque nisl consectetur et. Donec sed
                                                        odio
                                                        dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo
                                                        odio,
                                                        dapibus ac facilisis in, egestas eget quam. Morbi leo risus,
                                                        porta
                                                        ac consectetur ac, vestibulum at eros.</p>
                                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur
                                                        et.
                                                        Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                                                        auctor.</p>
                                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                                        cursus magna, vel scelerisque nisl consectetur et. Donec sed
                                                        odio
                                                        dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo
                                                        odio,
                                                        dapibus ac facilisis in, egestas eget quam. Morbi leo risus,
                                                        porta
                                                        ac consectetur ac, vestibulum at eros.</p>
                                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur
                                                        et.
                                                        Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                                                        auctor.</p>
                                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                                        cursus magna, vel scelerisque nisl consectetur et. Donec sed
                                                        odio
                                                        dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo
                                                        odio,
                                                        dapibus ac facilisis in, egestas eget quam. Morbi leo risus,
                                                        porta
                                                        ac consectetur ac, vestibulum at eros.</p>
                                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur
                                                        et.
                                                        Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                                                        auctor.</p>
                                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                                        cursus magna, vel scelerisque nisl consectetur et. Donec sed
                                                        odio
                                                        dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Optional sizes</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <p>Modals have three optional sizes, available via modifier classes to be placed on
                                        a
                                        .modal-dialog. These sizes kick in at certain breakpoints to avoid horizontal
                                        scrollbars on narrower viewports.</p>
                                    <!-- Extra large modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target=".bd-example-modal-xl">Extra large modal</button>
                                    <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Modal body text goes here.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Large modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target=".bd-example-modal-lg">Large modal</button>
                                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Modal body text goes here.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Small modal -->
                                    <button type="button" class="btn btn-primary rmt-5" data-toggle="modal"
                                        data-target=".bd-example-modal-sm">Small modal</button>
                                    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Modal body text goes here.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Scrolling long content</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <p>When modals become too long for the user’s viewport or device, they scroll
                                        independent of the page itself. Try the demo below to see what we mean.</p>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#exampleModalLong">
                                        Launch demo modal
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo
                                                        odio,
                                                        dapibus ac facilisis in, egestas eget quam. Morbi leo risus,
                                                        porta
                                                        ac consectetur ac, vestibulum at eros.</p>
                                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur
                                                        et.
                                                        Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                                                        auctor.</p>
                                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                                        cursus magna, vel scelerisque nisl consectetur et. Donec sed
                                                        odio
                                                        dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo
                                                        odio,
                                                        dapibus ac facilisis in, egestas eget quam. Morbi leo risus,
                                                        porta
                                                        ac consectetur ac, vestibulum at eros.</p>
                                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur
                                                        et.
                                                        Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                                                        auctor.</p>
                                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                                        cursus magna, vel scelerisque nisl consectetur et. Donec sed
                                                        odio
                                                        dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo
                                                        odio,
                                                        dapibus ac facilisis in, egestas eget quam. Morbi leo risus,
                                                        porta
                                                        ac consectetur ac, vestibulum at eros.</p>
                                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur
                                                        et.
                                                        Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                                                        auctor.</p>
                                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                                        cursus magna, vel scelerisque nisl consectetur et. Donec sed
                                                        odio
                                                        dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo
                                                        odio,
                                                        dapibus ac facilisis in, egestas eget quam. Morbi leo risus,
                                                        porta
                                                        ac consectetur ac, vestibulum at eros.</p>
                                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur
                                                        et.
                                                        Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                                                        auctor.</p>
                                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                                        cursus magna, vel scelerisque nisl consectetur et. Donec sed
                                                        odio
                                                        dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo
                                                        odio,
                                                        dapibus ac facilisis in, egestas eget quam. Morbi leo risus,
                                                        porta
                                                        ac consectetur ac, vestibulum at eros.</p>
                                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur
                                                        et.
                                                        Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                                                        auctor.</p>
                                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                                        cursus magna, vel scelerisque nisl consectetur et. Donec sed
                                                        odio
                                                        dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo
                                                        odio,
                                                        dapibus ac facilisis in, egestas eget quam. Morbi leo risus,
                                                        porta
                                                        ac consectetur ac, vestibulum at eros.</p>
                                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur
                                                        et.
                                                        Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                                                        auctor.</p>
                                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                                        cursus magna, vel scelerisque nisl consectetur et. Donec sed
                                                        odio
                                                        dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Vertically centered</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <p>Add <code class="highlighter-rouge">.modal-dialog-centered</code> to <code
                                            class="highlighter-rouge">.modal-dialog</code> to vertically center the
                                        modal.
                                    </p>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#exampleModalCenter">
                                        Launch demo modal
                                    </button>
                                    <button type="button" class="btn btn-primary rmt-5" data-toggle="modal"
                                        data-target="#exampleModalCenteredScrollable">
                                        Vertically centered scrollable modal
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenterTitle">Modal title
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    ...
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="exampleModalCenteredScrollable" class="modal fade" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalCenteredScrollableTitle"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered"
                                            role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">
                                                        Modal
                                                        title</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo
                                                        odio,
                                                        dapibus ac facilisis in, egestas eget quam. Morbi leo risus,
                                                        porta
                                                        ac consectetur ac, vestibulum at eros.</p>
                                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur
                                                        et.
                                                        Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                                                        auctor.</p>
                                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                                        cursus magna, vel scelerisque nisl consectetur et. Donec sed
                                                        odio
                                                        dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo
                                                        odio,
                                                        dapibus ac facilisis in, egestas eget quam. Morbi leo risus,
                                                        porta
                                                        ac consectetur ac, vestibulum at eros.</p>
                                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur
                                                        et.
                                                        Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                                                        auctor.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Using the grid</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body">
                                    <p>Utilize the Bootstrap grid system within a modal by nesting
                                        <code>.container-fluid</code> within the <code>.modal-body</code>. Then, use the
                                        normal grid system classes as you would anywhere else.
                                    </p>
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#gridSystemModal">
                                        Launch demo modal
                                    </button>
                                    <div id="gridSystemModal" class="modal fade" tabindex="-1" role="dialog"
                                        aria-labelledby="gridModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="gridModalLabel">Grids in modals</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="iq-example-row">
                                                        <div class="container-fluid">
                                                            <div class="row mb-3">
                                                                <div class="col-md-4">.col-md-4</div>
                                                                <div class="col-md-4 ml-auto">.col-md-4 .ml-auto</div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <div class="col-md-3 ml-auto">.col-md-3 .ml-auto</div>
                                                                <div class="col-md-2 ml-auto">.col-md-2 .ml-auto</div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <div class="col-md-6 ml-auto">.col-md-6 .ml-auto</div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-9">
                                                                    Level 1: .col-sm-9
                                                                    <div class="row">
                                                                        <div class="col-8 col-sm-6">
                                                                            Level 2: .col-8 .col-sm-6
                                                                        </div>
                                                                        <div class="col-4 col-sm-6">
                                                                            Level 2: .col-4 .col-sm-6
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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

    <!-- Mirrored from iqonic.design/themes/DealNice/php/ui-modal.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Mar 2021 03:55:46 GMT -->

</php>