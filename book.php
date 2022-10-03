<?php require_once('header.php'); ?>
<!doctype html>
<html lang="en">


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
                                <h2 class="mb-3">Les livres disponibles</h2>
                                <!-- <div class="w-100 iq-search-filter">
                                    <ul class="list-inline p-0 m-0 row justify-content-center search-menu-options">
                                        <li class="search-menu-opt">
                                            <div class="iq-dropdown">
                                                <div class="form-group mb-0">
                                                    <select class="form-control form-search-control bg-white border-0"
                                                        id="exampleFormControlSelect1">
                                                        <option selected="">All</option>
                                                        <option>A Books</option>
                                                        <option>the Sun</option>
                                                        <option>Harsh book</option>
                                                        <option>People book</option>
                                                        <option>the Fog</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="search-menu-opt">
                                            <div class="iq-dropdown">
                                                <div class="form-group mb-0">
                                                    <select class="form-control form-search-control bg-white border-0"
                                                        id="exampleFormControlSelect2">
                                                        <option selected="">Genres</option>
                                                        <option>General</option>
                                                        <option>History</option>
                                                        <option>Horror</option>
                                                        <option>Fantasy</option>
                                                        <option>Literary</option>
                                                        <option>Manga</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="search-menu-opt">
                                            <div class="iq-dropdown">
                                                <div class="form-group mb-0">
                                                    <select class="form-control form-search-control bg-white border-0"
                                                        id="exampleFormControlSelect3">
                                                        <option selected="">Year</option>
                                                        <option>2015</option>
                                                        <option>2016</option>
                                                        <option>2017</option>
                                                        <option>2018</option>
                                                        <option>2019</option>
                                                        <option>2020</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="search-menu-opt">
                                            <div class="iq-dropdown">
                                                <div class="form-group mb-0">
                                                    <select class="form-control form-search-control bg-white border-0"
                                                        id="exampleFormControlSelect4">
                                                        <option selected="">Author</option>
                                                        <option>Milesiy Yor</option>
                                                        <option>Ira Membrit</option>
                                                        <option>Anna Mull</option>
                                                        <option>John Smith</option>
                                                        <option>David King</option>
                                                        <option>Kusti Franti</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="search-menu-opt">
                                            <div class="iq-search-bar search-book d-flex align-items-center">
                                                <form action="#" class="searchbox">
                                                    <input type="text" class="text search-input"
                                                        placeholder="search here...">
                                                    <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                                                </form>
                                                <button type="submit"
                                                    class="btn btn-primary search-data ml-2">Search</button>
                                            </div>
                                        </li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                        <div class="iq-card">
                            <div class="iq-card-body">
                                <div class="row">
                                    <?php
                                        $sql = "SELECT * FROM tbl_product WHERE ecat_id IN ( SELECT ecat_id FROM tbl_end_category INNER JOIN tbl_mid_category ON tbl_mid_category.mcat_id = tbl_end_category.mcat_id AND tbl_mid_category.mcat_name LIKE ? ) LIMIT 12";
                                        $statement = $pdo->prepare($sql);
                                        $statement->execute(array('%livres%',));
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
                                                                src="images/search-book/01.jpg" alt=""></a>
                                                        <div class="view-book">
                                                            <a href="product.php?id=<?php echo $value['p_id']; ?>"
                                                                class="btn btn-sm btn-white">Voir le produit</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="mb-2">
                                                            <h6 class="mb-1"><?php echo $value['p_name']; ?></h6>
                                                            <p class="font-size-13 line-height mb-1">Auteur</p>
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
                                                            <h6><b><?php echo $value['p_current_price']; ?>$</b></h6>
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
                                class="iq-card-header d-flex justify-content-between align-items-center position-relative mb-0 similar-detail">
                                <div class="iq-header-title">
                                    <h4 class="card-title mb-0">Cours</h4>
                                </div>
                                <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <a href="product-category.php?id=60&type=mid-category"
                                        class="btn btn-sm btn-primary view-more">Voir plus</a>
                                </div>
                            </div>
                            <div class="iq-card-body similar-contens">
                                <ul id="similar-slider" class="list-inline p-0 mb-0 row">
                                    <?php
                                        $sql = "SELECT * FROM tbl_product WHERE ecat_id IN ( SELECT ecat_id FROM tbl_end_category INNER JOIN tbl_mid_category ON tbl_mid_category.mcat_id = tbl_end_category.mcat_id AND tbl_mid_category.mcat_name LIKE ? ) LIMIT 6";
                                        $statement = $pdo->prepare($sql);
                                        $statement->execute(array('%Cours%',));
                                        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                                        foreach ($result as $key=>$value) {  
                                        ?>
                                    <li class="col-md-3">
                                        <div class="d-flex align-items-center">
                                            <div class="col-5 p-0 position-relative image-overlap-shadow">
                                                <a href="product.php?id=<?php echo $value['p_id']; ?>"><img
                                                        class="img-fluid rounded w-100"
                                                        src="./assets/uploads/<?php echo $value['p_featured_photo']; ?>"
                                                        alt=""></a>
                                                <div class="view-book">
                                                    <a href="product.php?id=<?php echo $value['p_id']; ?>"
                                                        class="btn btn-sm btn-white">Voir le produit</a>
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="mb-2">
                                                    <h6 class="mb-1"><?php echo $value['p_old_price']; ?>$</h6>
                                                    <p class="font-size-13 line-height mb-1">Auteur</p>
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
                                                    <h6><b><?php echo $value['p_current_price']; ?>$</b></h6>
                                                    <?php endif; ?>
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
                    <div class="col-lg-12">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                            <div
                                class="iq-card-header d-flex justify-content-between align-items-center position-relative mb-0 trendy-detail">
                                <div class="iq-header-title">
                                    <h4 class="card-title mb-0">Romans</h4>
                                </div>
                                <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <a href="product-category.php?id=61&type=mid-category"
                                        class="btn btn-sm btn-primary view-more">Voir plus</a>
                                </div>
                            </div>
                            <div class="iq-card-body trendy-contens">
                                <ul id="trendy-slider" class="list-inline p-0 mb-0 row">
                                    <?php
                                        $sql = "SELECT * FROM tbl_product WHERE ecat_id IN ( SELECT ecat_id FROM tbl_end_category INNER JOIN tbl_mid_category ON tbl_mid_category.mcat_id = tbl_end_category.mcat_id AND tbl_mid_category.mcat_name LIKE ? ) LIMIT 20";
                                        $statement = $pdo->prepare($sql);
                                        $statement->execute(array('%Romans%',));
                                        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                                        foreach ($result as $key=>$value) {  
                                        ?>
                                    <li class="col-md-3">
                                        <div class="d-flex align-items-center">
                                            <div class="col-5 p-0 position-relative image-overlap-shadow">
                                                <a href="product.php?id=<?php echo $value['p_id']; ?>"><img
                                                        class="img-fluid rounded w-100"
                                                        src="./assets/uploads/<?php echo $value['p_featured_photo']; ?>"
                                                        alt=""></a>
                                                <div class="view-book">
                                                    <a href="product.php?id=<?php echo $value['p_id']; ?>"
                                                        class="btn btn-sm btn-white">Voir le produit</a>
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="mb-2">
                                                    <h6 class="mb-1"><?php echo $value['p_name']; ?></h6>
                                                    <p class="font-size-13 line-height mb-1">Auteur</p>
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
                                                    <h6><b><?php echo $value['p_current_price']; ?>$</b></h6>
                                                    <?php endif; ?>
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
                    <div class="col-lg-12">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                            <div
                                class="iq-card-header d-flex justify-content-between align-items-center position-relative">
                                <div class="iq-header-title">
                                    <h4 class="card-title mb-0">Proposition</h4>
                                </div>
                                <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <a href="product-category.php?id=10&type=top-category"
                                        class="btn btn-sm btn-primary view-more">Voir plus</a>
                                </div>
                            </div>
                            <div class="iq-card-body favorites-contens">
                                <ul id="favorites-slider" class="list-inline p-0 mb-0 row">
                                    <?php
                                        $sql = "SELECT * FROM tbl_product WHERE ecat_id IN ( SELECT ecat_id FROM tbl_end_category INNER JOIN tbl_mid_category ON tbl_mid_category.mcat_id = tbl_end_category.mcat_id AND tbl_mid_category.mcat_name LIKE ? ) LIMIT 20";
                                        $statement = $pdo->prepare($sql);
                                        $statement->execute(array('%telephone%',));
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
                                                    <span>Reading</span>
                                                    <span class="mr-4">78%</span>
                                                </div>
                                                <div class="iq-progress-bar-linear d-inline-block w-100">
                                                    <div class="iq-progress-bar iq-bg-primary">
                                                        <span class="bg-primary" data-percent="78"></span>
                                                    </div>
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

</html>