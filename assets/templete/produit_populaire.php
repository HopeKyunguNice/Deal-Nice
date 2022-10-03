<div class="col-lg-6">
    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
        <div class="iq-card-header d-flex justify-content-between mb-0">
            <div class="iq-header-title">
                <h4 class="card-title"><?php echo $popular_product_title; ?></h4>
            </div>
        </div>
        <div class="iq-card-body">
            <ul class="list-inline row mb-0 align-items-center iq-scrollable-block">
                <?php
                                    $statement = $pdo->prepare("SELECT * FROM tbl_product WHERE p_is_active=? ORDER BY p_total_view DESC LIMIT ".$total_popular_product_home);
                                    $statement->execute(array(1));
                                    $result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
                                    foreach ($result as $row) {
                                        ?>
                <li class="col-sm-6 d-flex mb-3 align-items-center">
                    <div class="icon iq-icon-box mr-3">
                        <a href="product.php?id=<?php echo $row['p_id']; ?>"><img class="img-fluid avatar-60 rounded"
                                src="./assets/uploads/<?php echo $row['p_featured_photo']; ?>" alt=""></a>
                    </div>
                    <div class="mt-1">
                        <h6><?php echo $row['p_name']; ?></h6>
                    </div>
                </li>
                <?php
                                        }
                                        ?>
            </ul>
        </div>
    </div>
</div>