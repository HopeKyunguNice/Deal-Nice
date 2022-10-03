<div class="col-lg-12">
    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
        <div
            class="iq-card-header d-flex justify-content-between align-items-center position-relative mb-0 trendy-detail">
            <div class="iq-header-title">
                <h4 class="card-title mb-0"><?php echo $featured_product_title; ?></h4>
            </div>
            <!-- <div class="iq-card-header-toolbar d-flex align-items-center">
                <a href="category.php" class="btn btn-sm btn-primary view-more">Voir plus</a>
            </div> -->
        </div>
        <div class="iq-card-body trendy-contens">
            <ul id="trendy-slider" class="list-inline p-0 mb-0 row">
                <?php
                                                    $statement = $pdo->prepare("SELECT * FROM tbl_product WHERE p_is_active=? ORDER BY p_total_view DESC LIMIT ".$total_popular_product_home);
                                                    $statement->execute(array(1));
                                                    $result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
                                                    foreach ($result as $row) {
                                                        ?>
                <li class="col-md-3">
                    <div class="d-flex align-items-center">
                        <div class="col-5 p-0 position-relative image-overlap-shadow">
                            <a href="product.php?id=<?php echo $row['p_id']; ?>"><img class="img-fluid rounded w-100"
                                    src="./assets/uploads/<?php echo $row['p_featured_photo']; ?>" alt=""></a>

                        </div>
                        <div class="col-7">
                            <div class="mb-2">
                                <h6 class="mb-1"><?php echo $row['p_name']; ?></h6>
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
                                <span class="pr-1 old-price"><?php echo $row['p_old_price']; ?>$</span>
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
                                <a href="product.php?id=<?php echo $row['p_id']; ?>" class="ml-2"><i
                                        class="ri-heart-fill text-danger"></i></a>
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