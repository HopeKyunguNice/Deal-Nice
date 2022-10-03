<div class="col-lg-12">
    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
        <div class="iq-card-body similar-contens">
            <ul id="similar-slider" class="list-inline p-0 mb-0 row">
                <?php
                $sql = "SELECT * FROM tbl_product WHERE ecat_id IN ( SELECT ecat_id FROM tbl_end_category INNER JOIN tbl_mid_category ON tbl_mid_category.mcat_id = tbl_end_category.mcat_id AND tbl_mid_category.mcat_name LIKE ? ) LIMIT 12";
                $statement = $pdo->prepare($sql);
                $statement->execute(array('%accessoires%',));
                $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                foreach ($result as $key=>$value) {  
                ?>
                <li class="col-md-3">
                    <div class="d-flex align-items-center">
                        <div class="col-5 p-0 position-relative image-overlap-shadow">
                            <a href="product.php?id=<?php echo $row['p_id']; ?>"><img class="img-fluid rounded w-100"
                                    src="./assets/uploads/<?php echo $value['p_featured_photo']; ?>" alt=""></a>
                            <div class="view-book">
                                <a href="book-page.html" class="btn btn-sm btn-white">View Book</a>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="mb-2">
                                <h6 class="mb-1">
                                    <h6><?php echo $value['p_name']; ?></h6>
                                    <p class="font-size-13 line-height mb-1">Tara Zona</p>
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
                                <span class="pr-1 old-price">$102</span>
                                <h6><b>$95</b></h6>
                            </div>
                            <div class="iq-product-action">
                                <a href="product.php?id=<?php echo $row['p_id']; ?>"><i
                                        class="ri-shopping-cart-2-fill text-primary"></i></a>
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