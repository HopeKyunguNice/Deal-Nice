<?php require_once('header.php'); ?>
<?php
$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
foreach ($result as $row) {
    $banner_checkout = $row['banner_checkout'];
}
?>

<?php
if(!isset($_SESSION['cart_p_id'])) {
    header('location: ');
    exit;
}
?>

<?php
// Check if the customer is logged in or not
if(!isset($_SESSION['customer'])) {
    header('location: '.BASE_URL.'');
    exit;
} else {
    // If customer is logged in, but admin make him inactive, then force logout this user.
    $statement = $pdo->prepare("SELECT * FROM tbl_customer WHERE cust_id=? AND cust_status=?");
    $statement->execute(array($_SESSION['customer']['cust_id'],0));
    $total = $statement->rowCount();
    if($total) {
        header('location: '.BASE_URL.'');
        exit;
    }
}
?>
<!doctype html>
<html lang="en">

<?php require_once('./assets/templete/head.php'); ?>


<body>

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
                <div class="row profile-content">
                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="iq-card">
                            <div class="iq-card-body profile-page">
                                <div class="profile-header">
                                    <div class="cover-container text-center">
                                        <img src="./assets/images/user/1.jpg" alt="profile-bg"
                                            class="rounded-circle img-fluid">
                                        <div class="profile-detail mt-3">
                                            <h3><?php echo $_SESSION['customer']['cust_b_cname']; ?></h3>
                                            <p class="text-primary">Client Actif</p>
                                            <p><?php echo $_SESSION['customer']['cust_b_city']; ?>.</p>
                                        </div>
                                        <div class="iq-social d-inline-block align-items-center">
                                            <ul class="list-inline d-flex p-0 mb-0 align-items-center">
                                                <li>
                                                    <a href="#"
                                                        class="avatar-40 rounded-circle bg-primary mr-2 facebook"><i
                                                            class="fa fa-facebook" aria-hidden="true"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        class="avatar-40 rounded-circle bg-primary mr-2 twitter"><i
                                                            class="fa fa-twitter" aria-hidden="true"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        class="avatar-40 rounded-circle bg-primary mr-2 youtube"><i
                                                            class="fa fa-youtube-play" aria-hidden="true"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="avatar-40 rounded-circle bg-primary pinterest"><i
                                                            class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="iq-card">
                            <div class="iq-card-header d-flex justify-content-between align-items-center mb-0">
                                <div class="iq-header-title">
                                    <h4 class="card-title mb-0">Les Détails Personnel</h4>
                                </div>
                            </div>
                            <div class="iq-card-body">
                                <ul class="list-inline p-0 mb-2">
                                    <li>
                                        <div class="row align-items-center justify-content-between mb-3">
                                            <div class="col-sm-6">
                                                <h6 class="text-primary">Prénom</h6>
                                            </div>
                                            <div class="col-sm-6">
                                                <p class="mb-0"><?php echo $_SESSION['customer']['cust_b_name']; ?></p>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="row align-items-center justify-content-between mb-3">
                                            <div class="col-sm-6">
                                                <h6 class="text-primary">Ville:</h6>
                                            </div>
                                            <div class="col-sm-6">
                                                <p class="mb-0"><?php
                                        $statement = $pdo->prepare("SELECT * FROM tbl_country WHERE country_id=?");
                                        $statement->execute(array($_SESSION['customer']['cust_b_country']));
                                        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                                        foreach ($result as $row) {
                                            echo $row['country_name'];
                                        }
                                        ?></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row align-items-center justify-content-between mb-3">
                                            <div class="col-sm-6">
                                                <h6 class="text-primary">Adresse:</h6>
                                            </div>
                                            <div class="col-sm-6">
                                                <p class="mb-0">
                                                    <?php echo nl2br($_SESSION['customer']['cust_b_address']); ?>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row align-items-center justify-content-between mb-3">
                                            <div class="col-sm-6">
                                                <h6 class="text-primary">Téléphone:</h6>
                                            </div>
                                            <div class="col-sm-6">
                                                <p class="mb-0"><?php echo $_SESSION['customer']['cust_b_phone']; ?></p>
                                            </div>
                                        </div>
                                    </li>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-8">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                                    <div class="iq-card-header d-flex justify-content-between align-items-center mb-0">
                                        <div class="iq-header-title">
                                            <h4 class="card-title mb-0">Historique des commandes</h4>
                                        </div>
                                    </div>
                                    <div class="iq-card-body">
                                        <ul class="list-inline p-0 mb-0">

                                            <div class="table-responsive">
                                                <table class="table table-bordered table-striped table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th><?php echo '#' ?></th>
                                                            <th><?php echo LANG_VALUE_48; ?></th>
                                                            <th><?php echo LANG_VALUE_27; ?></th>

                                                            <th><?php echo LANG_VALUE_29; ?></th>
                                                            <th><?php echo LANG_VALUE_30; ?></th>
                                                            <th><?php echo LANG_VALUE_31; ?></th>
                                                            <th><?php echo LANG_VALUE_32; ?></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>


                                                        <?php
                                    /* ===================== Pagination Code Starts ================== */
                                    $adjacents = 5;

                                    $statement = $pdo->prepare("SELECT * FROM tbl_payment WHERE customer_email=? ORDER BY id DESC");
                                    $statement->execute(array($_SESSION['customer']['cust_email']));
                                    $total_pages = $statement->rowCount();

                                    $targetpage = BASE_URL.'customer-order.php';
                                    $limit = 10;
                                    $page = @$_GET['page'];
                                    if($page) 
                                        $start = ($page - 1) * $limit;
                                    else
                                        $start = 0;
                                    
                                    
                                    $statement = $pdo->prepare("SELECT * FROM tbl_payment WHERE customer_email=? ORDER BY id DESC LIMIT $start, $limit");
                                    $statement->execute(array($_SESSION['customer']['cust_email']));
                                    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                                
                                    
                                    if ($page == 0) $page = 1;
                                    $prev = $page - 1;
                                    $next = $page + 1;
                                    $lastpage = ceil($total_pages/$limit);
                                    $lpm1 = $lastpage - 1;   
                                    $pagination = "";
                                    if($lastpage > 1)
                                    {   
                                        $pagination .= "<div class=\"pagination\">";
                                        if ($page > 1) 
                                            $pagination.= "<a href=\"$targetpage?page=$prev\">&#171; previous</a>";
                                        else
                                            $pagination.= "<span class=\"disabled\">&#171; previous</span>";    
                                        if ($lastpage < 7 + ($adjacents * 2))
                                        {   
                                            for ($counter = 1; $counter <= $lastpage; $counter++)
                                            {
                                                if ($counter == $page)
                                                    $pagination.= "<span class=\"current\">$counter</span>";
                                                else
                                                    $pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";                 
                                            }
                                        }
                                        elseif($lastpage > 5 + ($adjacents * 2))
                                        {
                                            if($page < 1 + ($adjacents * 2))        
                                            {
                                                for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
                                                {
                                                    if ($counter == $page)
                                                        $pagination.= "<span class=\"current\">$counter</span>";
                                                    else
                                                        $pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";                 
                                                }
                                                $pagination.= "...";
                                                $pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
                                                $pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";       
                                            }
                                            elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
                                            {
                                                $pagination.= "<a href=\"$targetpage?page=1\">1</a>";
                                                $pagination.= "<a href=\"$targetpage?page=2\">2</a>";
                                                $pagination.= "...";
                                                for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
                                                {
                                                    if ($counter == $page)
                                                        $pagination.= "<span class=\"current\">$counter</span>";
                                                    else
                                                        $pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";                 
                                                }
                                                $pagination.= "...";
                                                $pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
                                                $pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";       
                                               }
                                               else
                                              {
                                                $pagination.= "<a href=\"$targetpage?page=1\">1</a>";
                                                $pagination.= "<a href=\"$targetpage?page=2\">2</a>";
                                                $pagination.= "...";
                                                for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
                                                {
                                                    if ($counter == $page)
                                                        $pagination.= "<span class=\"current\">$counter</span>";
                                                    else
                                                        $pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";                 
                                                 }
                                               }
                                              }
                                              if ($page < $counter - 1) 
                                                  $pagination.= "<a href=\"$targetpage?page=$next\">next &#187;</a>";
                                            else
                                            $pagination.= "<span class=\"disabled\">next &#187;</span>";
                                              $pagination.= "</div>\n";       
                                                   } 
                                           /* ===================== Pagination Code Ends ================== */
                                              ?>


                                                        <?php
                                             $tip = $page*10-10;
                                             foreach ($result as $row) {
                                                   $tip++;
                                                   ?>
                                                        <tr>
                                                            <td><?php echo $tip; ?></td>
                                                            <td>
                                                                <?php
                                            $statement1 = $pdo->prepare("SELECT * FROM tbl_order WHERE payment_id=?");
                                            $statement1->execute(array($row['payment_id']));
                                            $result1 = $statement1->fetchAll(PDO::FETCH_ASSOC);
                                            foreach ($result1 as $row1) {
                                                echo 'Product Name: '.$row1['product_name'];
                                                echo '<br>Size: '.$row1['size'];
                                                echo '<br>Color: '.$row1['color'];
                                                echo '<br>Quantity: '.$row1['quantity'];
                                                echo '<br>Unit Price: $'.$row1['unit_price'];
                                                echo '<br><br>';
                                            }
                                            ?>
                                                            </td>
                                                            <td><?php echo $row['payment_date']; ?></td>

                                                            <td><?php echo '$'.$row['paid_amount']; ?></td>
                                                            <td><?php echo $row['payment_status']; ?></td>
                                                            <td><?php echo $row['payment_method']; ?></td>
                                                            <td><?php echo $row['payment_id']; ?></td>
                                                        </tr>
                                                        <?php
                                                   } 
                                                   ?>

                                                    </tbody>
                                                </table>
                                                <div class="pagination" style="overflow: hidden;">
                                                    <?php 
                                                   echo $pagination; 
                                                ?>
                                                </div>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                                    <div class="iq-card-header d-flex justify-content-between align-items-center mb-0">
                                        <div class="iq-header-title">
                                            <h4 class="card-title mb-0">Top Books</h4>
                                        </div>
                                    </div>
                                    <div class="iq-card-body">
                                        <ul class="list-inline p-0 mb-0">
                                            <li>
                                                <div class="iq-details mb-2">
                                                    <span class="title">Adventure</span>
                                                    <div class="percentage float-right text-primary">95 <span>%</span>
                                                    </div>
                                                    <div class="iq-progress-bar-linear d-inline-block w-100">
                                                        <div class="iq-progress-bar">
                                                            <span class="bg-primary" data-percent="95"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="iq-details mb-2">
                                                    <span class="title">Horror</span>
                                                    <div class="percentage float-right text-warning">72 <span>%</span>
                                                    </div>
                                                    <div class="iq-progress-bar-linear d-inline-block w-100">
                                                        <div class="iq-progress-bar">
                                                            <span class="bg-warning" data-percent="72"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="iq-details mb-2">
                                                    <span class="title">Comic Book</span>
                                                    <div class="percentage float-right text-info">75 <span>%</span>
                                                    </div>
                                                    <div class="iq-progress-bar-linear d-inline-block w-100">
                                                        <div class="iq-progress-bar">
                                                            <span class="bg-info" data-percent="75"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="iq-details mb-2">
                                                    <span class="title">Biography</span>
                                                    <div class="percentage float-right text-danger">70 <span>%</span>
                                                    </div>
                                                    <div class="iq-progress-bar-linear d-inline-block w-100">
                                                        <div class="iq-progress-bar">
                                                            <span class="bg-danger" data-percent="70"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="iq-details">
                                                    <span class="title">Mystery</span>
                                                    <div class="percentage float-right text-success">80 <span>%</span>
                                                    </div>
                                                    <div class="iq-progress-bar-linear d-inline-block w-100">
                                                        <div class="iq-progress-bar">
                                                            <span class="bg-success" data-percent="80"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
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