<?php require_once('header.php'); ?>
<?php
if(!isset($_REQUEST['search_text'])) {
    header('location: index.php');
    exit;
} else {
	if($_REQUEST['search_text']=='') {
		header('location: index.php');
    	exit;
	}
}
?>
<?php
$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
foreach ($result as $row) {
    $banner_search = $row['banner_search'];
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DealNice</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="./assets/uploads/<?php echo $favicon; ?>" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="css/typography.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Sidebar  -->
        <div class="iq-sidebar">
            <div class="iq-sidebar-logo d-flex justify-content-between">
                <a href="index.php" class="header-logo">
                    <img src="./assets/uploads/<?php echo $logo; ?>" class="img-fluid rounded-normal" alt="">
                    <div class="logo-title">
                        <span class="text-primary text-uppercase">DealNice</span>
                    </div>
                </a>
                <div class="iq-menu-bt-sidebar">
                    <div class="iq-menu-bt align-self-center">
                        <div class="wrapper-menu">
                            <div class="main-circle"><i class="las la-bars"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sidebar-scrollbar">
                <nav class="iq-sidebar-menu">
                    <ul id="iq-sidebar-toggle" class="iq-menu">
                        <li class="active active-menu">
                            <a href="#dashboard" class="iq-waves-effect" data-toggle="collapse"
                                aria-expanded="true"><span class="ripple rippleEffect"></span><i
                                    class="las la-home iq-arrow-left"></i><span>Shop</span><i
                                    class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                            <ul id="dashboard" class="iq-submenu collapse show" data-parent="#iq-sidebar-toggle">
                                <li class="active"><a href="index.php"><i class="las la-house-damage"></i>Home
                                        Page</a></li>

                                <li><a href="electronic.php"><i class="ri-tablet-fill"></i>Électronique</a></li>
                                <li><a href="super_marché.php"><i class="ri-shopping-cart-2-line"></i>Super-Marché</a>
                                </li>
                                <li><a href="seconde_main.php"><i class="las la-location-arrow"></i>Seconde
                                        main</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#menu-level" class="iq-waves-effect collapsed" data-toggle="collapse"
                                aria-expanded="false"><i class="ri-function-line"></i><span>Category</span><i
                                    class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                            <ul id="menu-level" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li><a href="categories.php"><i class="ri-function-line"></i>Category Page</a>
                                </li>
                                <li><a href="categorie_femme.php"><i class="ri-record-circle-line"></i>Femme</a>
                                </li>
                                <li><a href="categorie_enfant.php"><i class="ri-record-circle-line"></i>Enfant</a>
                                </li>
                                <li><a href="categorie_homme.php"><i class="ri-record-circle-line"></i>Homme</a>
                                </li>
                                <li><a href="categorie_bijoux.php"><i class="ri-record-circle-line"></i>Bijoux &
                                        Montre</a></li>
                                <li><a href="categorie_gateaux.php"><i class="ri-record-circle-line"></i>Gateaux</a>
                                </li>
                                <li><a href="categorie_fourniture.php"><i class="ri-record-circle-line"></i>Founiture
                                        scolaire</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#userinfo" class="iq-waves-effect" data-toggle="collapse"
                                aria-expanded="false"><span class="ripple rippleEffect"></span><i
                                    class="las la-user-tie iq-arrow-left"></i><span>Utilisateur</span><i
                                    class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                            <ul id="userinfo" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle" style="">
                                <li><a href="profile.php"><i class="las la-id-card-alt"></i>Mon Profil</a></li>
                                <li><a href="customer-profile-update.php"><i class="las la-edit"></i>Modifier le
                                        profil</a></li>
                                <li><a href="registration.php"><i class="las la-plus-circle"></i>S'inscrire</a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="#ui-elements" class="iq-waves-effect collapsed" data-toggle="collapse"
                                aria-expanded="false"><i
                                    class="lab la-elementor iq-arrow-left"></i><span>Librairies</span><i
                                    class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                            <ul id="ui-elements" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li class="elements">
                                    <a href="#sub-menu" class="iq-waves-effect collapsed" data-toggle="collapse"
                                        aria-expanded="false"><i class="ri-play-circle-line"></i><span>UI
                                            Kit</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                    <ul id="sub-menu" class="iq-submenu collapse" data-parent="#ui-elements">
                                        <li><a href="ui-colors.php"><i class="las la-palette"></i>colors</a></li>
                                        <li><a href="ui-typography.php"><i class="las la-keyboard"></i>Typography</a>
                                        </li>
                                        <li><a href="ui-alerts.php"><i class="las la-tag"></i>Alerts</a></li>
                                        <li><a href="ui-badges.php"><i class="lab la-atlassian"></i>Badges</a></li>
                                        <li><a href="ui-breadcrumb.php"><i class="las la-bars"></i>Breadcrumb</a>
                                        </li>
                                        <li><a href="ui-buttons.php"><i class="las la-tablet"></i>Buttons</a></li>
                                        <li><a href="ui-cards.php"><i class="las la-credit-card"></i>Cards</a></li>
                                        <li><a href="ui-carousel.php"><i class="las la-film"></i>Carousel</a></li>
                                        <li><a href="ui-embed-video.php"><i class="las la-video"></i>Video</a></li>
                                        <li><a href="ui-grid.php"><i class="las la-border-all"></i>Grid</a></li>
                                        <li><a href="ui-images.php"><i class="las la-images"></i>Images</a></li>
                                        <li><a href="ui-list-group.php"><i class="las la-list"></i>list Group</a>
                                        </li>
                                        <li><a href="ui-media-object.php"><i class="las la-ad"></i>Media</a></li>
                                        <li><a href="ui-modal.php"><i class="las la-columns"></i>Modal</a></li>
                                        <li><a href="ui-notifications.php"><i class="las la-bell"></i>Notifications</a>
                                        </li>
                                        <li><a href="ui-pagination.php"><i class="las la-ellipsis-h"></i>Pagination</a>
                                        </li>
                                        <li><a href="ui-popovers.php"><i class="las la-eraser"></i>Popovers</a></li>
                                        <li><a href="ui-progressbars.php"><i class="las la-hdd"></i>Progressbars</a>
                                        </li>
                                        <li><a href="ui-tabs.php"><i class="las la-database"></i>Tabs</a></li>
                                        <li><a href="ui-tooltips.php"><i class="las la-magnet"></i>Tooltips</a></li>
                                    </ul>
                                </li>
                                <li class="form">
                                    <a href="#forms" class="iq-waves-effect collapsed" data-toggle="collapse"
                                        aria-expanded="false"><i class="lab la-wpforms"></i><span>Forms</span><i
                                            class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                    <ul id="forms" class="iq-submenu collapse" data-parent="#ui-elements">
                                        <li><a href="form-layout.php"><i class="las la-book"></i>Form Elements</a>
                                        </li>
                                        <li><a href="form-validation.php"><i class="las la-edit"></i>Form
                                                Validation</a></li>
                                        <li><a href="form-switch.php"><i class="las la-toggle-off"></i>Form
                                                Switch</a>
                                        </li>
                                        <li><a href="form-chechbox.php"><i class="las la-check-square"></i>Form
                                                Checkbox</a></li>
                                        <li><a href="form-radio.php"><i class="ri-radio-button-line"></i>Form
                                                Radio</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#wizard-form" class="iq-waves-effect collapsed" data-toggle="collapse"
                                        aria-expanded="false"><i class="ri-archive-drawer-line"></i><span>Forms
                                            Wizard</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                    <ul id="wizard-form" class="iq-submenu collapse" data-parent="#ui-elements">
                                        <li><a href="form-wizard.php"><i class="ri-clockwise-line"></i>Simple
                                                Wizard</a></li>
                                        <li><a href="form-wizard-validate.php"><i
                                                    class="ri-clockwise-2-line"></i>Validate Wizard</a></li>
                                        <li><a href="form-wizard-vertical.php"><i
                                                    class="ri-anticlockwise-line"></i>Vertical Wizard</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#tables" class="iq-waves-effect collapsed" data-toggle="collapse"
                                        aria-expanded="false"><i class="ri-table-line"></i><span>Table</span><i
                                            class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                    <ul id="tables" class="iq-submenu collapse" data-parent="#ui-elements">
                                        <li><a href="tables-basic.php"><i class="ri-table-line"></i>Basic Tables</a>
                                        </li>
                                        <li><a href="data-table.php"><i class="ri-database-line"></i>Data Table</a>
                                        </li>
                                        <li><a href="table-editable.php"><i class="ri-refund-line"></i>Editable
                                                Table</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#charts" class="iq-waves-effect collapsed" data-toggle="collapse"
                                        aria-expanded="false"><i class="ri-pie-chart-box-line"></i><span>Charts</span><i
                                            class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                    <ul id="charts" class="iq-submenu collapse" data-parent="#ui-elements">
                                        <li><a href="chart-morris.php"><i class="ri-file-chart-line"></i>Morris
                                                Chart</a></li>
                                        <li><a href="chart-high.php"><i class="ri-bar-chart-line"></i>High
                                                Charts</a>
                                        </li>
                                        <li><a href="chart-am.php"><i class="ri-folder-chart-line"></i>Am Charts</a>
                                        </li>
                                        <li><a href="chart-apex.php"><i class="ri-folder-chart-2-line"></i>Apex
                                                Chart</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#icons" class="iq-waves-effect collapsed" data-toggle="collapse"
                                        aria-expanded="false"><i class="ri-list-check"></i><span>Icons</span><i
                                            class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                                    <ul id="icons" class="iq-submenu collapse" data-parent="#ui-elements">
                                        <li><a href="icon-dripicons.php"><i class="ri-stack-line"></i>Dripicons</a>
                                        </li>
                                        <li><a href="icon-fontawesome-5.php"><i class="ri-facebook-fill"></i>Font
                                                Awesome 5</a></li>
                                        <li><a href="icon-lineawesome.php"><i class="ri-keynote-line"></i>line
                                                Awesome</a></li>
                                        <li><a href="icon-remixicon.php"><i class="ri-remixicon-line"></i>Remixicon</a>
                                        </li>
                                        <li><a href="icon-unicons.php"><i class="ri-underline"></i>unicons</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#pages" class="iq-waves-effect collapsed" data-toggle="collapse"
                                aria-expanded="false"><i class="ion-information-circled"></i><span>A
                                    Propos</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                            <ul id="pages" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li><a href="about.php"><i class="ion-information"></i>About Us</a>
                                <li><a href="blog.php"><i class="ion-archive"></i>Blog</a>
                                </li>
                                <li><a href="pages-timeline.php"><i class="ri-map-pin-time-line"></i>Timeline</a>
                                </li>
                                <li><a href="contact.php"><i class="ri-question-answer-line"></i>Contact</a>
                                </li>
                        </li>
                        </li>
                        <li><a href="pages-maintenance.php"><i class="ri-archive-line"></i>Maintenance</a>
                        </li>
                        <li><a href="pages-comingsoon.php"><i class="ri-mastercard-line"></i>Coming
                                Soon</a></li>
                        <li><a href="faq.php"><i class="ri-compasses-line"></i>Faq</a></li>

                    </ul>
                    </li>
                    </ul>
                </nav>
                <div id="sidebar-bottom" class="p-3 position-relative">
                    <div class="iq-card">
                        <div class="iq-card-body">
                            <div class="sidebarbottom-content">
                                <div class="image"><img src="./assets/images/20220503_095601.png"
                                        style="width: 120px; heidgt: 120px;" alt=""></div>
                                <button type="submit" class="btn w-100 btn-primary mt-4 view-more">Devenir
                                    partenaire</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- TOP Nav Bar -->
        <div class="iq-top-navbar">
            <div class="iq-navbar-custom">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <div class="iq-menu-bt d-flex align-items-center">
                        <div class="wrapper-menu">
                            <div class="main-circle"><i class="las la-bars"></i></div>
                        </div>
                        <div class="iq-navbar-logo d-flex justify-content-between">
                            <a href="index.php" class="header-logo">
                                <img src="./assets/images/<?php echo $logo; ?>" class="img-fluid rounded-normal" alt="">
                                <div class="logo-title">
                                    <span class="text-primary text-uppercase">DealNice</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="navbar-breadcrumb">
                        <h5 class="mb-0">Shop</h5>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Home Page</li>
                            </ul>
                        </nav>
                    </div>
                    <div class="iq-search-bar">
                        <form action="search.php" class="searchbox" method="get" role="search">
                            <?php $csrf->echoInputField(); ?>
                            <input type="text" class="text search-input" name="search_text"
                                placeholder="Search Here...">
                            <a class="search-link" href=""><i class="ri-search-line"></i></a>
                        </form>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-label="Toggle navigation">
                        <i class="ri-menu-3-line"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto navbar-list">
                            <li class="nav-item nav-icon search-content">
                                <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                                    <i class="ri-search-line"></i>
                                </a>
                                <form action="search.php" class="search-box p-0" method="get" role="search">
                                    <?php $csrf->echoInputField(); ?>
                                    <input type="text" class="text search-input" placeholder="Type here to search..."
                                        name="search_text">
                                    <a class="search-link" href="search.php"><i class="ri-search-line"></i></a>
                                </form>
                            </li>
                            <li class="nav-item nav-icon">
                                <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                                    <i class="ri-notification-2-line"></i>
                                    <span class="bg-primary dots"></span>
                                </a>
                                <div class="iq-sub-dropdown">
                                    <div class="iq-card shadow-none m-0">
                                        <div class="iq-card-body p-0">
                                            <div class="bg-primary p-3">
                                                <h5 class="mb-0 text-white">All Notifications<small
                                                        class="badge  badge-light float-right pt-1">4</small></h5>
                                            </div>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center">
                                                    <div class="">
                                                        <img class="avatar-40 rounded" src="./assets/images/user/01.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">Emma Watson Barry</h6>
                                                        <small class="float-right font-size-12">Just Now</small>
                                                        <p class="mb-0">95 MB</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center">
                                                    <div class="">
                                                        <img class="avatar-40 rounded" src="./assets/images/user/02.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">New customer is join</h6>
                                                        <small class="float-right font-size-12">5 days ago</small>
                                                        <p class="mb-0">Cyst Barry</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center">
                                                    <div class="">
                                                        <img class="avatar-40 rounded" src="./assets/images/user/03.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">Two customer is left</h6>
                                                        <small class="float-right font-size-12">2 days ago</small>
                                                        <p class="mb-0">Cyst Barry</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center">
                                                    <div class="">
                                                        <img class="avatar-40 rounded" src="./assets/images/user/04.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">New Mail from Fenny</h6>
                                                        <small class="float-right font-size-12">3 days ago</small>
                                                        <p class="mb-0">Cyst Barry</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item nav-icon dropdown">
                                <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                                    <i class="ri-mail-line"></i>
                                    <span class="bg-primary dots"></span>
                                </a>
                                <div class="iq-sub-dropdown">
                                    <div class="iq-card shadow-none m-0">
                                        <div class="iq-card-body p-0 ">
                                            <div class="bg-primary p-3">
                                                <h5 class="mb-0 text-white">All Messages<small
                                                        class="badge  badge-light float-right pt-1">5</small></h5>
                                            </div>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center">
                                                    <div class="">
                                                        <img class="avatar-40 rounded" src="./assets/images/user/01.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">Barry Emma Watson</h6>
                                                        <small class="float-left font-size-12">13 Jun</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center">
                                                    <div class="">
                                                        <img class="avatar-40 rounded" src="./assets/images/user/02.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                                                        <small class="float-left font-size-12">20 Apr</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center">
                                                    <div class="">
                                                        <img class="avatar-40 rounded" src="./assets/images/user/03.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">Why do we use it?</h6>
                                                        <small class="float-left font-size-12">30 Jun</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center">
                                                    <div class="">
                                                        <img class="avatar-40 rounded" src="./assets/images/user/04.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">Variations Passages</h6>
                                                        <small class="float-left font-size-12">12 Sep</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center">
                                                    <div class="">
                                                        <img class="avatar-40 rounded" src="./assets/images/user/05.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                                                        <small class="float-left font-size-12">5 Dec</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item nav-icon dropdown">
                                <a href="Checkout.php" class="search-toggle iq-waves-effect text-gray rounded">
                                    <i class="ri-shopping-cart-2-line"></i>
                                    <span class="badge badge-danger count-cart ">
                                        12
                                    </span>
                                </a>

                                <div class="iq-sub-dropdown">
                                    <div class="iq-card shadow-none m-0">
                                        <div class="iq-card-body p-0 toggle-cart-info">
                                            <div class="bg-primary p-3">
                                                <h5 class="mb-0 text-white">All Carts<small
                                                        class="badge  badge-light float-right pt-1">4</small></h5>
                                            </div>

                                            <a href="#" class="iq-sub-card">
                                                <div class="media align-items-center">
                                                    <div class="">
                                                        <img class="rounded" src="./assets/images/cart/01.jpg" alt="">
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">Night People book</h6>
                                                        <p class="mb-0">$32</p>
                                                    </div>
                                                    <div class="float-right font-size-24 text-danger"><i
                                                            class="ri-close-fill"></i></div>
                                                </div>
                                            </a>

                                            <div class="d-flex align-items-center text-center p-3">
                                                <a class="btn btn-primary mr-2 iq-sign-btn" href="Checkout.php"
                                                    role="button">View
                                                    Cart</a>
                                                <a class="btn btn-primary iq-sign-btn" href="index.php"
                                                    role="button">Shop
                                                    now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="line-height pt-3">
                                <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                                    <?php
                                            $statement = $pdo->prepare("SELECT * FROM tbl_customer limit 1");
                                            $statement->execute();
                                            $result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
                                            foreach ($result as $value) {
                                                ?>
                                    <img src="./assets/uploads/customer/<?php echo $value['photo']; ?>"
                                        class="img-fluid rounded-circle mr-3" alt="user">
                                    <?php
                                                    }
                                                ?>
                                    <div class="caption">

                                        <h6 class="mb-1 line-height">
                                            <?php
					if(isset($_SESSION['customer'])) {
						?><?php echo $_SESSION['customer']['cust_name']; ?> <?php
                    } else {
                                            ?><?php	
                                        }
                                        ?>
                                        </h6>
                                        <p class="mb-0 text-primary">
                                            <?php
                                                    if(isset($_SESSION['cart_p_id'])) {
                                                        $table_total_price = 0;
                                                        $i=0;
                                                        foreach($_SESSION['cart_p_qty'] as $key => $value) 
                                                        {
                                                            $i++;
                                                            $arr_cart_p_qty[$i] = $value;
                                                        }                    $i=0;
                                                        foreach($_SESSION['cart_p_current_price'] as $key => $value) 
                                                        {
                                                            $i++;
                                                            $arr_cart_p_current_price[$i] = $value;
                                                        }
                                                        for($i=1;$i<=count($arr_cart_p_qty);$i++) {
                                                            $row_total_price = $arr_cart_p_current_price[$i]*$arr_cart_p_qty[$i];
                                                            $table_total_price = $table_total_price + $row_total_price;
                                                        }
                                                        echo $table_total_price;
                                                    } else {
                                                        echo '0.00';
                                                    }
                                                    ?>$</p>
                                    </div>
                                </a>
                                <div class="iq-sub-dropdown iq-user-dropdown">
                                    <div class="iq-card shadow-none m-0">
                                        <div class="iq-card-body p-0 ">
                                            <?php
					if(isset($_SESSION['customer'])) {
						?>
                                            <div class="bg-primary p-3">
                                                <h5 class="mb-0 text-white line-height">
                                                    Hello! <?php echo $_SESSION['customer']['cust_name']; ?></h5>
                                                <span class="text-white font-size-12">En Ligne</span>
                                            </div>
                                            <a href="profile.php" class="iq-sub-card iq-bg-primary-hover">
                                                <div class="media align-items-center">
                                                    <div class="rounded iq-card-icon iq-bg-primary">
                                                        <i class="ri-file-user-line"></i>
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">Mon Profil</h6>
                                                        <p class="mb-0 font-size-12">View personal profile details.
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="customer-billing-shipping-update.php"
                                                class="iq-sub-card iq-bg-primary-hover">
                                                <div class="media align-items-center">
                                                    <div class="rounded iq-card-icon iq-bg-primary">
                                                        <i class="ri-profile-line"></i>
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">Livraison</h6>
                                                        <p class="mb-0 font-size-12">Mettrez à jour l'adresse de
                                                            livraison.
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="cart.php" class="iq-sub-card iq-bg-primary-hover">
                                                <div class="media align-items-center">
                                                    <div class="rounded iq-card-icon iq-bg-primary">
                                                        <i class="ri-shopping-cart-2-line"></i>
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="mb-0 ">Panier</h6>
                                                        <p class="mb-0 font-size-12">Voir les détails panier.
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="d-inline-block w-100 text-center p-3">
                                                <a class="bg-primary iq-sign-btn" href="logout.php" name="form1"
                                                    role="button">Se
                                                    Déconnecter<i class="ri-logout-box-line ml-2"></i></a>
                                            </div><?php
                                                } 
                                                else {
                                                    ?>

                                            <div class="d-inline-block w-100 text-center p-3">
                                                <a class="bg-primary iq-sign-btn" href="registration.php"
                                                    role="button">S'inscrire<i class="ri-login-circle-line"></i></a>
                                            </div>

                                            <div class="d-inline-block w-100 text-center p-3">
                                                <a class="bg-primary iq-sign-btn" href="login.php" role="button">Se
                                                    connecter<i class="ri-login-box-line ml-2"></i></a>
                                            </div>
                                            <?php	
                                                }
                                                ?>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- TOP Nav Bar END -->
        <!-- Page Content  -->
        <div id="content-page" class="content-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="iq-card-transparent mb-0">
                            <div class="d-block text-center">
                                <h2 class="mb-3">Resultat(s) de recherche:
                                    <?php 
                                    $search_text = strip_tags($_REQUEST['search_text']); 
                                    echo $search_text; 
                                    ?>
                                </h2>
                            </div>
                        </div>


                        <div class="iq-card">
                            <div class="iq-card-body">
                                <div class="row">
                                    <?php
                $search_text = '%'.$search_text.'%';
            ?>

                                    <?php
            /* ===================== Pagination Code Starts ================== */
            $adjacents = 5;
            $statement = $pdo->prepare("SELECT * FROM tbl_product WHERE p_is_active=? AND p_name LIKE ?");
            $statement->execute(array(1,$search_text));
            $total_pages = $statement->rowCount();

            $targetpage = BASE_URL.'search-result.php?search_text='.$_REQUEST['search_text'];   //your file name  (the name of this file)
            $limit = 12;                                 //how many items to show per page
            $page = @$_GET['page'];
            if($page) 
                $start = ($page - 1) * $limit;          //first item to display on this page
            else
                $start = 0;
            

            $statement = $pdo->prepare("SELECT * FROM tbl_product WHERE p_is_active=? AND p_name LIKE ? LIMIT $start, $limit");
            $statement->execute(array(1,$search_text));
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
           
            
            if ($page == 0) $page = 1;                  //if no page var is given, default to 1.
            $prev = $page - 1;                          //previous page is page - 1
            $next = $page + 1;                          //next page is page + 1
            $lastpage = ceil($total_pages/$limit);      //lastpage is = total pages / items per page, rounded up.
            $lpm1 = $lastpage - 1;   
            $pagination = "";
            if($lastpage > 1)
            {   
                $pagination .= "<div class=\"pagination\">";
                if ($page > 1) 
                    $pagination.= "<a href=\"$targetpage&page=$prev\">&#171; previous</a>";
                else
                    $pagination.= "<span class=\"disabled\">&#171; previous</span>";    
                if ($lastpage < 7 + ($adjacents * 2))   //not enough pages to bother breaking it up
                {   
                    for ($counter = 1; $counter <= $lastpage; $counter++)
                    {
                        if ($counter == $page)
                            $pagination.= "<span class=\"current\">$counter</span>";
                        else
                            $pagination.= "<a href=\"$targetpage&page=$counter\">$counter</a>";                 
                    }
                }
                elseif($lastpage > 5 + ($adjacents * 2))    //enough pages to hide some
                {
                    if($page < 1 + ($adjacents * 2))        
                    {
                        for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
                        {
                            if ($counter == $page)
                                $pagination.= "<span class=\"current\">$counter</span>";
                            else
                                $pagination.= "<a href=\"$targetpage&page=$counter\">$counter</a>";                 
                        }
                        $pagination.= "...";
                        $pagination.= "<a href=\"$targetpage&page=$lpm1\">$lpm1</a>";
                        $pagination.= "<a href=\"$targetpage&page=$lastpage\">$lastpage</a>";       
                    }
                    elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
                    {
                        $pagination.= "<a href=\"$targetpage&page=1\">1</a>";
                        $pagination.= "<a href=\"$targetpage&page=2\">2</a>";
                        $pagination.= "...";
                        for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
                        {
                            if ($counter == $page)
                                $pagination.= "<span class=\"current\">$counter</span>";
                            else
                                $pagination.= "<a href=\"$targetpage&page=$counter\">$counter</a>";                 
                        }
                        $pagination.= "...";
                        $pagination.= "<a href=\"$targetpage&page=$lpm1\">$lpm1</a>";
                        $pagination.= "<a href=\"$targetpage&page=$lastpage\">$lastpage</a>";       
                    }
                    else
                    {
                        $pagination.= "<a href=\"$targetpage&page=1\">1</a>";
                        $pagination.= "<a href=\"$targetpage&page=2\">2</a>";
                        $pagination.= "...";
                        for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
                        {
                            if ($counter == $page)
                                $pagination.= "<span class=\"current\">$counter</span>";
                            else
                                $pagination.= "<a href=\"$targetpage&page=$counter\">$counter</a>";                 
                        }
                    }
                }
                if ($page < $counter - 1) 
                    $pagination.= "<a href=\"$targetpage&page=$next\">next &#187;</a>";
                else
                    $pagination.= "<span class=\"disabled\">next &#187;</span>";
                $pagination.= "</div>\n";       
            }
            /* ===================== Pagination Code Ends ================== */
            ?>

                                    <?php
                            
                            if(!$total_pages):
                                echo '<span style="color:red;font-size:18px;">Aucun resultat trouvé. Sorry!!</span>';
                            else:
                            foreach ($result as $row) {
                                ?>
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <div class="iq-card iq-card-block iq-card-stretch
                                             iq-card-height search-bookcontent">
                                            <div class="iq-card-body p-0">
                                                <div class="d-flex align-items-center">
                                                    <div class="col-6 p-0 position-relative image-overlap-shadow">
                                                        <a href="book-page.php?id=<?php echo $row['p_id']; ?>"><img
                                                                class="img-fluid rounded w-100"
                                                                src="assets/uploads/<?php echo $row['p_featured_photo']; ?>"
                                                                alt=""></a>
                                                        <div class="view-book">
                                                            <a href="book-page.html" class="btn btn-sm btn-white">View
                                                                Book</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="mb-2">
                                                            <h6 class="mb-1"><?php echo $row['p_name']; ?></h6>
                                                            <p class="font-size-13 line-height mb-1">Anna Mull</p>
                                                            <div class="d-block">
                                                                <span class="font-size-13 text-warning">
                                                                    <?php
                                                                     $t_rating = 0;
                                                                     $statement1 = $pdo->prepare("SELECT * FROM tbl_rating WHERE p_id=?");
                                                                     $statement1->execute(array($row['p_id']));
                                                                     $tot_rating = $statement1->rowCount();
                                                                     if($tot_rating == 0) {
                                                                        $avg_rating = 0;
                                                                     } else {
                                                                        $result1 = $statement1->fetchAll(PDO::FETCH_ASSOC);
                                                                        foreach ($result1 as $row1) {
                                                                           $t_rating = $t_rating + $row1['rating'];
                                                                        }
                                                                        $avg_rating = $t_rating / $tot_rating;
                                                                     }
                                                                     ?>
                                                                    <?php
                                                                     if($avg_rating == 0) {
                                                                        echo '';
                                                                     }
                                                                     elseif($avg_rating == 1.5) {
                                                                        echo '
                                                                           <i class="fa fa-star"></i>
                                                                           <i class="fa fa-star-half-o"></i>
                                                                           <i class="fa fa-star-o"></i>
                                                                           <i class="fa fa-star-o"></i>
                                                                           <i class="fa fa-star-o"></i>
                                                                        ';
                                                                     } 
                                                                     elseif($avg_rating == 2.5) {
                                                                        echo '
                                                                           <i class="fa fa-star"></i>
                                                                           <i class="fa fa-star"></i>
                                                                           <i class="fa fa-star-half-o"></i>
                                                                           <i class="fa fa-star-o"></i>
                                                                           <i class="fa fa-star-o"></i>
                                                                        ';
                                                                     }
                                                                     elseif($avg_rating == 3.5) {
                                                                        echo '
                                                                           <i class="fa fa-star"></i>
                                                                           <i class="fa fa-star"></i>
                                                                           <i class="fa fa-star"></i>
                                                                           <i class="fa fa-star-half-o"></i>
                                                                           <i class="fa fa-star-o"></i>
                                                                        ';
                                                                     }
                                                                     elseif($avg_rating == 4.5) {
                                                                        echo '
                                                                           <i class="fa fa-star"></i>
                                                                           <i class="fa fa-star"></i>
                                                                           <i class="fa fa-star"></i>
                                                                           <i class="fa fa-star"></i>
                                                                           <i class="fa fa-star-half-o"></i>
                                                                        ';
                                                                     }
                                                                     else {
                                                                        for($i=1;$i<=5;$i++) {
                                                                           ?>
                                                                    <?php if($i>$avg_rating): ?>
                                                                    <i class="fa fa-star-o"></i>
                                                                    <?php else: ?>
                                                                    <i class="fa fa-star"></i>
                                                                    <?php endif; ?>
                                                                    <?php
                                                                        }
                                                                     }
                                                                     ?>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="price d-flex align-items-center">
                                                            <span
                                                                class="pr-1 old-price"><?php if($row['p_old_price'] != ''): ?>
                                                                <del>
                                                                    <?php echo $row['p_old_price']; ?>
                                                                </del>
                                                                <?php endif; ?>$</span>
                                                            <h6><b><?php echo $row['p_current_price']; ?>$</b></h6>
                                                        </div>

                                                        <div class="iq-product-action">
                                                            <?php if($row['p_qty'] == 0): ?>
                                                            <div class="out-of-stock">
                                                                <div class="inner">
                                                                    Out Of Stock
                                                                </div>
                                                            </div>
                                                            <?php else: ?>
                                                            <a href="book-page?id=<?php echo $row['p_id']; ?>"><i
                                                                    class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                            <a href="book-page?id=<?php echo $row['p_id']; ?>"
                                                                class="ml-2"><i
                                                                    class="ri-heart-fill text-danger"></i></a>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                            }
                            ?>
                                    <div class="clear"></div>
                                    <div class="pagination">
                                        <?php 
                                echo $pagination; 
                            ?>
                                    </div>
                                    <?php
                            endif;
                        ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                                <div
                                    class="iq-card-header d-flex justify-content-between align-items-center position-relative">
                                    <div class="iq-header-title">
                                        <h4 class="card-title mb-0">Proposition</h4>
                                    </div>
                                    <div class="iq-card-header-toolbar d-flex align-items-center">
                                        <a href="category.html" class="btn btn-sm btn-primary view-more">View More</a>
                                    </div>
                                </div>
                                <div class="iq-card-body favorites-contens">
                                    <ul id="favorites-slider" class="list-inline p-0 mb-0 row">
                                        <?php
                        $sql = "SELECT * FROM tbl_product WHERE ecat_id IN ( SELECT ecat_id FROM tbl_end_category INNER JOIN tbl_mid_category ON tbl_mid_category.mcat_id = tbl_end_category.mcat_id AND tbl_mid_category.mcat_name LIKE ? ) LIMIT 4";
                        $statement = $pdo->prepare($sql);
                        $statement->execute(array('%phone%',));
                        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                        ?>

                                        <?php
                        foreach ($result as $key=>$value) {
                        ?>
                                        <li class="col-md-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="col-5 p-0 position-relative">
                                                    <a href="book-page?id=<?php echo $row['p_id']; ?>">
                                                        <img src="./assets/images/favorite/05.jpg"
                                                            class="img-fluid rounded w-100" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-7">
                                                    <h5 class="mb-2">Every Book is a new Wonderful Travel..</h5>
                                                    <p class="mb-2">Author : Pedro Araez</p>
                                                    <div
                                                        class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                                        <span>Reading</span>
                                                        <span class="mr-4">78%</span>
                                                    </div>
                                                    <div class="iq-progress-bar-linear d-inline-block w-100">
                                                        <div class="iq-progress-bar iq-bg-primary">
                                                            <span class="bg-primary" data-percent="78"></span>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="text-dark">Read Now<i
                                                            class="ri-arrow-right-s-line"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <?php
                                             }
                                             ?>
                                    </ul>
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