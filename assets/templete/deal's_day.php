<div class="col-lg-12">
    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
        <div class="iq-card-body favorites-contens">
            <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">L'affaire du jour</h4>
                </div>
            </div>
            <ul id="favorites-slider" class="list-inline p-0 mb-0 row">
                <?php
                        $statement = $pdo->prepare("SELECT * FROM tbl_product WHERE p_is_active=? ORDER BY p_id DESC LIMIT 7");
                        $statement->execute(array(1));
                        $result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
                        foreach ($result as $row) {
                        ?>
                <li class="col-md-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="col-5 p-0 position-relative">
                            <a href="product.php?id=<?php echo $row['p_id']; ?>">
                                <img src="./assets/uploads/<?php echo $row['p_featured_photo']; ?>"
                                    class="img-fluid rounded w-100" alt="">
                            </a>
                        </div>
                        <div class="col-7">
                            <h5 class="mb-2"><?php echo $row['p_name']; ?></h5>
                            <P>Promotions du jour</P>
                            <div class="d-flex justify-content-between align-items-center text-dark font-size-13">
                                <span>Reading</span>
                                <span class="mr-4">90%</span>
                            </div>
                            <div class="iq-progress-bar-linear d-inline-block w-100">
                                <div class="iq-progress-bar iq-bg-primary">
                                    <span class="bg-primary" data-percent="90"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <?php  } ?>
            </ul>
        </div>
    </div>
</div>