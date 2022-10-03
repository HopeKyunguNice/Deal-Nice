<?php require_once('header.php'); ?>
<!doctype html>
<html lang="en">

<?php require_once('./assets/templete/head.php'); ?>

<body class="sidebar-main-active right-column-fixed">
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
                                    <h4 class="card-title">Equal-width multi-row</h4>
                                </div>
                            </div>
                            <div class="iq-card-body">
                                <p>Create equal-width columns that span multiple rows by inserting a <code>.w-100</code>
                                    where you want the columns to break to a new line. Make the breaks responsive by
                                    mixing the <code>.w-100</code> with some <a
                                        href="https://iqonic.design/docs/4.3/utilities/display/">responsive display
                                        utilities</a>.</p>
                                <div class="media">
                                    <img src="./assets/images/page-img/15.jpg" class="mr-3 avatar-80" alt="#">
                                    <div class="media-body">
                                        <h5 class="mt-0">Media heading</h5>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                        sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue
                                        felis in faucibus.
                                    </div>
                                </div>
                                <div class="media">
                                    <img src="./assets/images/page-img/16.jpg" class="mr-3 avatar-80" alt="#">
                                    <div class="media-body">
                                        <h5 class="mt-0">Media heading</h5>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                        sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue
                                        felis in faucibus.
                                        <div class="media mt-3">
                                            <a class="mr-3" href="#">
                                                <img src="./assets/images/page-img/17.jpg" class="avatar-80" alt="#">
                                            </a>
                                            <div class="media-body">
                                                <h5 class="mt-0">Media heading</h5>
                                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                                                ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus
                                                viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                                                Donec lacinia congue felis in faucibus.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="iq-card">
                            <div class="iq-card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                    <h4 class="card-title"> Youtube</h4>
                                </div>
                            </div>
                            <div class="iq-card-body">
                                <!-- <p>Wrap any embed like an <code class="highlighter-rouge">&lt;iframe&gt;</code> in a
                                    parent element with <code class="highlighter-rouge">.embed-responsive</code> and an
                                    aspect ratio. The <code class="highlighter-rouge">.embed-responsive-item</code>
                                    isn’t strictly required, but we encourage it.</p> -->
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item"
                                        src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <div class="iq-card">
                            <div class="iq-card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                    <h4 class="card-title">Vidéos</h4>
                                </div>
                            </div>
                            <div class="iq-card-body">
                                <!-- <p>Progress components are built with two HTML elements, some CSS to set the width, and
                                    a few attributes.</p> -->
                                <!-- 4:3 aspect ratio -->
                                <div class="embed-responsive embed-responsive-4by3">
                                    <iframe class="embed-responsive-item" src="./assets/images/videos/video.mp4"
                                        allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="iq-card">
                            <div class="iq-card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                    <h4 class="card-title">Media list</h4>
                                </div>
                            </div>
                            <div class="iq-card-body">
                                <p>Because the media object has so few structural requirements, you can also use these
                                    classes on list HTML elements. On your <code>&lt;ul&gt;</code> or
                                    <code>&lt;ol&gt;</code>, add the <code>.list-unstyled</code> to remove any browser
                                    default list styles, and then apply <code>.media</code> to your
                                    <code>&lt;li&gt;</code>s. As always, use spacing utilities wherever needed to fine
                                    tune.
                                </p>
                                <ul class="list-unstyled">
                                    <li class="media">
                                        <img src="./assets/images/page-img/24.jpg" class="mr-3 avatar-80" alt="#">
                                        <div class="media-body">
                                            <h5 class="mt-0 mb-1">List-based media object</h5>
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                                            ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus
                                            viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec
                                            lacinia congue felis in faucibus.
                                        </div>
                                    </li>
                                    <li class="media my-4">
                                        <img src="./assets/images/page-img/15.jpg" class="mr-3 avatar-80" alt="#">
                                        <div class="media-body">
                                            <h5 class="mt-0 mb-1">List-based media object</h5>
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                                            ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus
                                            viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec
                                            lacinia congue felis in faucibus.
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img src="./assets/images/page-img/16.jpg" class="mr-3 avatar-80" alt="#">
                                        <div class="media-body">
                                            <h5 class="mt-0 mb-1">List-based media object</h5>
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                                            ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus
                                            viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec
                                            lacinia congue felis in faucibus.
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <div class="iq-card">
                            <div class="iq-card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                    <h4 class="card-title">Publicités</h4>
                                </div>
                            </div>
                            <div class="iq-card-body">
                                <!-- <p>Here’s a carousel with slides only. Note the presence of the <code>.d-block</code>
                                    and <code>.img-fluid</code> on carousel images to prevent browser default image
                                    alignment.</p> -->
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                                        </li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="./assets/images/small/img-1.jpg" class="d-block w-100" alt="#">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./assets/images/small/img-1.jpg" class="d-block w-100" alt="#">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="./assets/images/small/h1.jpg" class="d-block w-100" alt="#">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                        data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                        data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <div class="iq-card">
                            <div class="iq-card-header d-flex justify-content-between">
                                <div class="iq-header-title">
                                    <h4 class="card-title">Publicités</h4>
                                </div>
                            </div>
                            <div class="iq-card-body">
                                <!-- <p>Here’s a carousel with slides only. Note the presence of the <code>.d-block</code>
                                    and <code>.img-fluid</code> on carousel images to prevent browser default image
                                    alignment.</p> -->
                                <div class="bd-example">
                                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active">
                                            </li>
                                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="./assets/images/small/img-1.jpg" class="d-block w-100"
                                                    alt="#">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h4 class="text-white">First slide label</h4>
                                                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./assets/images/small/img-1.jpg" class="d-block w-100"
                                                    alt="#">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h4 class="text-white">Second slide label</h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./assets/images/small/img-1.jpg" class="d-block w-100"
                                                    alt="#">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h4 class="text-white">Third slide label</h4>
                                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
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

</html>