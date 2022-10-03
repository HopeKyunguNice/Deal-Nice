<div class="col-lg-6">
    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
        <div class="iq-card-header d-flex justify-content-between mb-0">
            <div class="iq-header-title">
                <h4 class="card-title">Deal Market</h4>
            </div>
            <div class="iq-card-header-toolbar d-flex align-items-center">
                <a href="super_marché" class="btn btn-sm btn-primary view-more">Voir plus</a>
            </div>
        </div>
        <div class="iq-card-body">
            <ul class="list-inline row mb-0 align-items-center iq-scrollable-block">
                <?php
                $sql = "SELECT * FROM tbl_product WHERE ecat_id IN ( SELECT ecat_id FROM tbl_end_category INNER JOIN tbl_mid_category ON tbl_mid_category.mcat_id = tbl_end_category.mcat_id AND tbl_mid_category.mcat_name LIKE ? ) LIMIT 14";
                $statement = $pdo->prepare($sql);
                $statement->execute(array('%super marché%',));
                $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                foreach ($result as $key=>$value) {  
                ?>
                <li class="col-sm-6 d-flex mb-3 align-items-center">
                    <div class="icon iq-icon-box mr-3">
                        <a href="product.php?id=<?php echo $row['p_id']; ?>"><img class="img-fluid avatar-60 rounded"
                                src="./assets/uploads/<?php echo $value['p_featured_photo']; ?>" alt=""></a>
                    </div>
                    <div class="mt-1">
                        <h6><?php echo $value['p_name']; ?></h6>
                    </div>
                </li>
                <?php
                                        }
                                        ?>
            </ul>
        </div>
    </div>
</div>