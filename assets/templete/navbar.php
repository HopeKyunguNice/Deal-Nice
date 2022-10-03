<div class="iq-top-navbar">
    <div class="iq-navbar-custom">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <div class="iq-menu-bt d-flex align-items-center">
                <div class="wrapper-menu">
                    <div class="main-circle"><i class="las la-bars"></i></div>
                </div>
                <div class="iq-navbar-logo d-flex justify-content-between">
                    <a href="index.php" class="header-logo">
                        <img src="./assets/uploads/<?php echo $logo; ?>" class="img-fluid rounded-normal" alt="">
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
                    <input type="text" class="text search-input" name="search_text" placeholder="Search Here...">
                    <a class="search-link" href=""><i class="ri-search-line"></i></a>
                </form>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
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
                            <img src="./assets/images/youtube.svg" style="width: 18px;" alt="">
                            <span class="bg-primary dots"></span>
                        </a>

                    </li>
                    <li class="nav-item nav-icon dropdown">
                        <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                            <img src="./assets/images/tiktok.svg" style="width: 18px;" alt="">
                            <span class="bg-primary dots"></span>
                        </a>
                    </li>
                    <li class="nav-item nav-icon dropdown">
                        <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                            <img src="./assets/images/facebook.svg" style="width: 18px;" alt="">
                            <span class="bg-primary dots"></span>
                        </a>
                    </li>

                    <li class="nav-item nav-icon dropdown">
                        <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                            <i class="ri-shopping-cart-2-line"></i>
                            <span class="badge badge-danger count-cart rounded-circle">4</span>
                        </a>
                        <div class="iq-sub-dropdown">
                            <div class="iq-card shadow-none m-0">
                                <div class="iq-card-body p-0 toggle-cart-info">
                                    <div class="bg-primary p-3">
                                        <h5 class="mb-0 text-white">Panier<small
                                                class="badge  badge-light float-right pt-1">4</small></h5>
                                    </div>
                                    <?php if(!isset($_SESSION['cart_p_id'])): ?>
                                    <?php echo '<h4 class="text-center">Le panier vide!!</h4></br>'; ?>
                                    <?php else: ?>
                                    <form action="" method="post">
                                        <?php
                                                        $table_total_price = 0;

                                                        $i=0;
                                                        foreach($_SESSION['cart_p_id'] as $key => $value) 
                                                        {
                                                            $i++;
                                                            $arr_cart_p_id[$i] = $value;
                                                        }

                                                        $i=0;
                                                        foreach($_SESSION['cart_size_id'] as $key => $value) 
                                                        {
                                                            $i++;
                                                            $arr_cart_size_id[$i] = $value;
                                                        }

                                                        $i=0;
                                                        foreach($_SESSION['cart_size_name'] as $key => $value) 
                                                        {
                                                            $i++;
                                                            $arr_cart_size_name[$i] = $value;
                                                        }

                                                        $i=0;
                                                        foreach($_SESSION['cart_color_id'] as $key => $value) 
                                                        {
                                                            $i++;
                                                            $arr_cart_color_id[$i] = $value;
                                                        }

                                                        $i=0;
                                                        foreach($_SESSION['cart_color_name'] as $key => $value) 
                                                        {
                                                            $i++;
                                                            $arr_cart_color_name[$i] = $value;
                                                        }

                                                        $i=0;
                                                        foreach($_SESSION['cart_p_qty'] as $key => $value) 
                                                        {
                                                            $i++;
                                                            $arr_cart_p_qty[$i] = $value;
                                                        }

                                                        $i=0;
                                                        foreach($_SESSION['cart_p_current_price'] as $key => $value) 
                                                        {
                                                            $i++;
                                                            $arr_cart_p_current_price[$i] = $value;
                                                        }

                                                        $i=0;
                                                        foreach($_SESSION['cart_p_name'] as $key => $value) 
                                                        {
                                                            $i++;
                                                            $arr_cart_p_name[$i] = $value;
                                                        }

                                                        $i=0;
                                                        foreach($_SESSION['cart_p_featured_photo'] as $key => $value) 
                                                        {
                                                            $i++;
                                                            $arr_cart_p_featured_photo[$i] = $value;
                                                        }
                                                        ?>
                                        <a href="#" class="iq-sub-card">
                                            <?php for($i=1;$i<=count($arr_cart_p_id);$i++): ?>
                                            <div class="media align-items-center">

                                                <div class="">
                                                    <img class="rounded"
                                                        src="./assets/uploads/<?php echo $arr_cart_p_featured_photo[$i]; ?>"
                                                        alt="">
                                                </div>
                                                <div class="media-body ml-3">
                                                    <h6 class="mb-0 "><?php echo $arr_cart_p_name[$i]; ?>
                                                    </h6>
                                                    <p class="mb-0">
                                                        <?php echo $arr_cart_p_current_price[$i]; ?>$</p>
                                                </div>

                                            </div>
                                            <?php endfor; ?>
                                        </a>
                                        <div class="d-flex align-items-center text-center p-3">
                                            <a class="btn btn-primary mr-2 iq-sign-btn" href="cart.php"
                                                role="button">Panier</a>
                                            <a class="btn btn-primary iq-sign-btn" href="index.php"
                                                role="button">Continuer vos achats</a>
                                        </div>
                                    </form>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </li>


                    <li class="line-height pt-3">
                        <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                            <img src="../uploads/Customer/customer-17.png" class="img-fluid rounded-circle mr-3"
                                alt="user">

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