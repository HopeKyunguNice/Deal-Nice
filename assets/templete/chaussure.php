<div class="col-lg-12">

    <div class="iq-card">
        <div class="iq-card-body">
            <div class="row">
                <?php
                $sql = "SELECT * FROM tbl_product WHERE ecat_id IN ( SELECT ecat_id FROM tbl_end_category INNER JOIN tbl_mid_category ON tbl_mid_category.mcat_id = tbl_end_category.mcat_id AND tbl_mid_category.mcat_name LIKE ? ) LIMIT 16";
                $statement = $pdo->prepare($sql);
                $statement->execute(array('%chaussures%',));
                $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                foreach ($result as $key=>$value) {  
                ?>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height search-bookcontent">
                        <div class="iq-card-body p-0">
                            <div class="d-flex align-items-center">
                                <div class="col-6 p-0 position-relative image-overlap-shadow">
                                    <a href="product.php?id=<?php echo $value['p_id']; ?>"><img
                                            class="img-fluid rounded w-100"
                                            src="./assets/uploads/<?php echo $value['p_featured_photo']; ?>" alt=""></a>
                                    <div class="view-book">
                                        <a href="book-page.html" class="btn btn-sm btn-white">Voir l'article</a>
                                    </div>
                                </div>
                                <div class="col-6">
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
                                        <span class="pr-1 old-price"><?php echo $value['p_old_price']; ?>$</span>
                                        <h6><b><?php echo $value['p_current_price']; ?>$</b>
                                        </h6>
                                    </div>
                                    <div class="iq-product-action">
                                        <a href="product.php?id=<?php echo $value['p_id']; ?>"><i
                                                class="ri-shopping-cart-2-fill text-primary"></i></a>
                                        <a href="product.php?id=<?php echo $value['p_id']; ?>" class="ml-2"><i
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