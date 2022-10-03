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
                        <div class="col-lg-12">
                            <div class="iq-card-transparent mb-0">
                                <div class="d-block text-center">
                                    <h2 class="mb-3">Electronique</h2>
                                </div>
                            </div>
                            <div class="iq-card">
                                <div class="iq-card-body">
                                    <div class="row">
                                        <?php
                                        $sql = "SELECT * FROM tbl_product WHERE ecat_id IN ( SELECT ecat_id FROM tbl_end_category INNER JOIN tbl_mid_category ON tbl_mid_category.mcat_id = tbl_end_category.mcat_id AND tbl_mid_category.mcat_name LIKE ? ) LIMIT 20";
                                        $statement = $pdo->prepare($sql);
                                        $statement->execute(array('%Electronique%',));
                                        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                                        foreach ($result as $key=>$value) {  
                                        ?>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div
                                                class="iq-card iq-card-block iq-card-stretch iq-card-height search-bookcontent">
                                                <div class="iq-card-body p-0">
                                                    <div class="d-flex align-items-center">
                                                        <div class="col-6 p-0 position-relative image-overlap-shadow">
                                                            <a href="product.php?id=<?php echo $value['p_id']; ?>"><img
                                                                    class="img-fluid rounded w-100"
                                                                    src="./assets/uploads/<?php echo $value['p_featured_photo']; ?>"
                                                                    alt=""></a>
                                                            <div class="view-book">
                                                                <a href="product.php?id=<?php echo $value['p_id']; ?>"
                                                                    class="btn btn-sm btn-white">Voir l'article</a>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="mb-2">
                                                                <h6 class="mb-1"><?php echo $value['p_name']; ?></h6>

                                                                </p>
                                                                <div class="d-block">
                                                                    <span class="font-size-13 text-warning">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="price d-flex align-items-center">
                                                                <span
                                                                    class="pr-1 old-price"><?php echo $value['p_old_price']; ?>$</span>
                                                                <?php if($value['p_old_price'] != ''): ?>
                                                                <h6><b><?php echo $value['p_current_price']; ?>$</b>
                                                                </h6>
                                                                <?php endif; ?>
                                                            </div>
                                                            <div class="iq-product-action">
                                                                <a href="product.php?id=<?php echo $value['p_id']; ?>"><i
                                                                        class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                                <a href="product.php?id=<?php echo $value['p_id']; ?>"
                                                                    class="ml-2"><i
                                                                        class="ri-heart-fill text-danger"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                                <div
                                    class="iq-card-header d-flex justify-content-between align-items-center position-relative">
                                    <div class="iq-header-title">
                                        <h4 class="card-title mb-0">HeadPhones</h4>
                                    </div>
                                    <div class="iq-card-header-toolbar d-flex align-items-center">
                                        <a href="category.php" class="btn btn-sm btn-primary view-more">View
                                            More</a>
                                    </div>
                                </div>
                                <div class="iq-card-body favorites-contens">
                                    <ul id="favorites-slider" class="list-inline p-0 mb-0 row">
                                        <?php
                                        $sql = "SELECT * FROM tbl_product WHERE ecat_id IN ( SELECT ecat_id FROM tbl_end_category INNER JOIN tbl_mid_category ON tbl_mid_category.mcat_id = tbl_end_category.mcat_id AND tbl_mid_category.mcat_name LIKE ? ) LIMIT 4";
                                        $statement = $pdo->prepare($sql);
                                        $statement->execute(array('%ecouteur%',));
                                        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                                        foreach ($result as $key=>$value) {  
                                        ?>
                                        <li class="col-md-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="col-5 p-0 position-relative">
                                                    <a href="product.php?id=<?php echo $value['p_id']; ?>">
                                                        <img src="./assets/uploads/<?php echo $value['p_featured_photo']; ?>"
                                                            class="img-fluid rounded w-100" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-7">
                                                    <h5 class="mb-2"><?php echo $value['p_name']; ?></h5>

                                                    <div
                                                        class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                                        <span>Evaluation</span>
                                                        <span class="mr-4">90%</span>
                                                    </div>
                                                    <div class="iq-progress-bar-linear d-inline-block w-100">
                                                        <div class="iq-progress-bar iq-bg-primary">
                                                            <span class="bg-primary" data-percent="90"></span>
                                                        </div>
                                                    </div>
                                                    <a href="product.php?id=<?php echo $value['p_id']; ?>"
                                                        class="text-dark">Voir l'article<i
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
                        <div class="col-lg-12">
                            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                                <div
                                    class="iq-card-header d-flex justify-content-between align-items-center position-relative mb-0 similar-detail">
                                    <div class="iq-header-title">
                                        <h4 class="card-title mb-0">Laptops</h4>
                                    </div>
                                    <div class="iq-card-header-toolbar d-flex align-items-center">
                                        <a href="electronic.php" class="btn btn-sm btn-primary view-more">View More</a>
                                    </div>
                                </div>
                                <div class="iq-card-body similar-contens">
                                    <ul id="similar-slider" class="list-inline p-0 mb-0 row">
                                        <?php
                                        $sql = "SELECT * FROM tbl_product WHERE ecat_id IN ( SELECT ecat_id FROM tbl_end_category INNER JOIN tbl_mid_category ON tbl_mid_category.mcat_id = tbl_end_category.mcat_id AND tbl_mid_category.mcat_name LIKE ? ) LIMIT 4";
                                        $statement = $pdo->prepare($sql);
                                        $statement->execute(array('%ordinateur%',));
                                        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                                        ?>
                                        <li class="col-md-3">
                                            <?php
                                            foreach ($result as $key=>$value) {  
                                            ?>
                                            <div class="d-flex align-items-center">
                                                <div class="col-5 p-0 position-relative image-overlap-shadow">
                                                    <a href="product.php?id=<?php echo $value['p_id']; ?>"><img
                                                            class="img-fluid rounded w-100"
                                                            src="assets/uploads/<?php echo $value['p_featured_photo']; ?>"
                                                            alt=""></a>
                                                </div>
                                                <div class="col-7">
                                                    <div class="mb-2">
                                                        <h6 class="mb-1"><?php echo $value['p_name']; ?></h6>
                                                        <p class="font-size-13 line-height mb-1">
                                                            <?php echo $value['ecat_name']; ?></p>
                                                        <div class="d-block">
                                                            <span class="font-size-13 text-warning">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="price d-flex align-items-center">
                                                        <?php if($value['p_old_price'] != ''): ?>
                                                        <span
                                                            class="pr-1 old-price"><?php echo $value['p_old_price']; ?>$</span>
                                                        <?php endif; ?>
                                                        <h6><b><?php echo $value['p_current_price']; ?>$</b></h6>
                                                    </div>
                                                    <div class="iq-product-action">
                                                        <a href="product.php?id=<?php echo $value['p_id']; ?>"><i
                                                                class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                        <a href="product.php?id=<?php echo $value['p_id']; ?>"
                                                            class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                                    </div>
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
                        <div class=" col-lg-12">
                            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                                <div
                                    class="iq-card-header d-flex justify-content-between align-items-center position-relative mb-0 trendy-detail">
                                    <div class="iq-header-title">
                                        <h4 class="card-title mb-0">Téléphone</h4>
                                    </div>
                                </div>
                                <div class="iq-card-body trendy-contens">
                                    <ul id="trendy-slider" class="list-inline p-0 mb-0 row">
                                        <?php
                                        $sql = "SELECT * FROM tbl_product WHERE ecat_id IN ( SELECT ecat_id FROM tbl_end_category INNER JOIN tbl_mid_category ON tbl_mid_category.mcat_id = tbl_end_category.mcat_id AND tbl_mid_category.mcat_name LIKE ? ) LIMIT 20";
                                        $statement = $pdo->prepare($sql);
                                        $statement->execute(array('%telephone%',));
                                        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                                        ?>
                                        <li class="col-md-3">
                                            <?php
                                            foreach ($result as $key=>$value) {    
                                            ?>
                                            <div class="d-flex align-items-center">
                                                <div class="col-5 p-0 position-relative image-overlap-shadow">
                                                    <a href="product.php?id=<?php echo $value['p_id']; ?>"><img
                                                            class="img-fluid rounded w-100"
                                                            src="./assets/uploads/<?php echo $value['p_featured_photo']; ?>"
                                                            alt=""></a>
                                                    <div class="view-book">
                                                        <a href="product.php?id=<?php echo $value['p_id']; ?>"
                                                            class="btn btn-sm btn-white">Voir</a>
                                                    </div>
                                                </div>
                                                <div class="col-7">
                                                    <div class="mb-2">
                                                        <h6 class="mb-1"><?php echo $value['p_name']; ?></h6>

                                                        <div class="d-block">
                                                            <span class="font-size-13 text-warning">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="price d-flex align-items-center">
                                                        <span <?php if($value['p_old_price'] != ''): ?>
                                                            class="pr-1 old-price"><?php echo $value['p_old_price']; ?>$</span>
                                                        <?php endif; ?>
                                                        <h6><b><?php echo $value['p_current_price']; ?>$</b></h6>
                                                    </div>
                                                    <div class="iq-product-action">
                                                        <a href="product.php?id=<?php echo $value['p_id']; ?>"><i
                                                                class="ri-shopping-cart-2-fill text-primary"></i></a>
                                                        <a href="product.php?id=<?php echo $value['p_id']; ?>"
                                                            class="ml-2"><i class="ri-heart-fill text-danger"></i></a>
                                                    </div>
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
</php>