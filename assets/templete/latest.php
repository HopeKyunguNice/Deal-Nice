<div class="col-lg-12">
    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
        <div class="iq-card-header d-flex justify-content-between align-items-center position-relative">
            <div class="iq-header-title">
                <h4 class="card-title mb-0"><?php echo $latest_product_title; ?></h4>
            </div>
            <!-- <div class="iq-card-header-toolbar d-flex align-items-center">
                                        <a href="category.php" class="btn btn-sm btn-primary view-more">Voir Plus</a>
                                    </div> -->
        </div>
        <div class="iq-card-body">
            <div class="row">
                <?php
                $statement = $pdo->prepare("SELECT * FROM tbl_product WHERE p_is_active=? ORDER BY p_id DESC LIMIT ".$total_latest_product_home);
                $statement->execute(array(1));
                $result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
                foreach ($result as $row) {
                    ?>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height browse-bookcontent">
                        <div class="iq-card-body p-0">
                            <div class="d-flex align-items-center">
                                <div class="col-6 p-0 position-relative image-overlap-shadow">
                                    <a href="product.php?id=<?php echo $row['p_id']; ?>">
                                        <img class="img-fluid rounded w-100"
                                            src="./assets/uploads/<?php echo $row['p_featured_photo']; ?>" alt="">
                                    </a>
                                    <div class="view-book">
                                        <a href="product.php?id=<?php echo $row['p_id']; ?>"
                                            class="btn btn-sm btn-white">Voir</a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-2">
                                        <h6 class="mb-1"><?php echo $row['p_name']; ?></h6>
                                        <p class="font-size-13 line-height mb-1">
                                            <?php echo $row['p_total_view']; ?> vues</p>
                                        <div class="d-block line-height">
                                            <span class="font-size-11 text-warning">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </div>
                                        <!-- <div class="d-block line-height">
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
                                                            </div> -->
                                    </div>
                                    <div class="price d-flex align-items-center">
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
                                        <a href="product.php?id=<?php echo $row['p_id']; ?>"><i
                                                class="ri-shopping-cart-2-fill text-primary"></i>
                                        </a>
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
            </div>
        </div>
    </div>
</div>