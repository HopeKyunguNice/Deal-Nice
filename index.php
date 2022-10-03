<?php require_once('header.php'); ?>
<?php
$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
foreach ($result as $row) {
    $banner_cart = $row['banner_cart'];
}
?>

<?php
$error_message = '';
if(isset($_POST['form1'])) {

    $i = 0;
    $statement = $pdo->prepare("SELECT * FROM tbl_product");
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    foreach ($result as $row) {
        $i++;
        $table_product_id[$i] = $row['p_id'];
        $table_quantity[$i] = $row['p_qty'];
    }

    $i=0;
    foreach($_POST['product_id'] as $val) {
        $i++;
        $arr1[$i] = $val;
    }
    $i=0;
    foreach($_POST['quantity'] as $val) {
        $i++;
        $arr2[$i] = $val;
    }
    $i=0;
    foreach($_POST['product_name'] as $val) {
        $i++;
        $arr3[$i] = $val;
    }
    
    $allow_update = 1;
    for($i=1;$i<=count($arr1);$i++) {
        for($j=1;$j<=count($table_product_id);$j++) {
            if($arr1[$i] == $table_product_id[$j]) {
                $temp_index = $j;
                break;
            }
        }
        if($table_quantity[$temp_index] < $arr2[$i]) {
        	$allow_update = 0;
            $error_message .= '"'.$arr2[$i].'" items are not available for "'.$arr3[$i].'"\n';
        } else {
            $_SESSION['cart_p_qty'][$i] = $arr2[$i];
        }
    }
    $error_message .= '\nOther items quantity are updated successfully!';
    ?>

<?php if($allow_update == 0): ?>
<script>
alert('<?php echo $error_message; ?>');
</script>
<?php else: ?>
<script>
alert('All Items Quantity Update is Successful!');
</script>
<?php endif; ?>
<?php

}
?>

<?php
$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row)
{
    $cta_title = $row['cta_title'];
    $cta_content = $row['cta_content'];
    $cta_read_more_text = $row['cta_read_more_text'];
    $cta_read_more_url = $row['cta_read_more_url'];
    $cta_photo = $row['cta_photo'];
    $featured_product_title = $row['featured_product_title'];
    $featured_product_subtitle = $row['featured_product_subtitle'];
    $latest_product_title = $row['latest_product_title'];
    $latest_product_subtitle = $row['latest_product_subtitle'];
    $popular_product_title = $row['popular_product_title'];
    $popular_product_subtitle = $row['popular_product_subtitle'];
    $total_featured_product_home = $row['total_featured_product_home'];
    $total_latest_product_home = $row['total_latest_product_home'];
    $total_popular_product_home = $row['total_popular_product_home'];
    $home_service_on_off = $row['home_service_on_off'];
    $home_welcome_on_off = $row['home_welcome_on_off'];
    $home_featured_product_on_off = $row['home_featured_product_on_off'];
    $home_latest_product_on_off = $row['home_latest_product_on_off'];
    $home_popular_product_on_off = $row['home_popular_product_on_off'];

}
?>
<?php require_once('./assets/templete/head.php'); ?>
<!doctype php>
<php lang="en">

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
                        <!-- DEBUT SLIDER -->
                        <?php require_once('./assets/templete/slider.php'); ?>
                        <!-- FIN SLIDER -->

                        <!-- DEBUT THIS WEEK -->
                        <?php require_once('./assets/templete/this_week.php'); ?>
                        <!-- FIN THIS WEEK -->

                        <!-- DEBUT PRODUIT VEDETTE -->
                        <?php if($home_featured_product_on_off == 1): ?>
                        <?php require_once('./assets/templete/produit_vedette.php'); ?>
                        <?php endif; ?>
                        <!-- FIN PRODUIT VEDETTE -->

                        <!-- DEBUT latest_product -->
                        <?php if($home_latest_product_on_off == 1): ?>
                        <?php require_once('./assets/templete/latest.php'); ?>
                        <?php endif; ?>
                        <!-- fin latest_product -->

                        <!-- DEBUT AFFAIRE DU JOUR -->
                        <?php require_once("./assets/templete/deal's_day.php"); ?>
                        <!-- FIN AFFAIRE DU JOUR -->

                        <!-- DEBUT PRODUIT POPULAIRE -->
                        <?php if($home_popular_product_on_off == 1): ?>
                        <?php require_once('./assets/templete/produit_populaire.php'); ?>
                        <?php endif; ?>
                        <!-- FIN PRODUIT POPULAIRE -->

                        <!-- DEBUT PRODUIT SUPER MACHE -->
                        <?php if($home_popular_product_on_off == 1): ?>
                        <?php require_once('./assets/templete/super-marche.php'); ?>
                        <?php endif; ?>
                        <!-- FIN PRODUIT SUPER MACHE-->

                        <!-- DEBUT CHAUSSURES -->
                        <?php require_once('./assets/templete/chaussure.php'); ?>
                        <!-- FIN CHAUSSURES -->

                        <!-- DEBUT ACCESSOIRE -->
                        <?php require_once('./assets/templete/accessoires.php'); ?>
                        <!-- FIN ACCESSOIRE -->

                    </div>
                </div>
            </div>
        </div>
        <!-- Wrapper END -->
        <!-- DEBUT PAGINATION -->
        <?php require_once('./assets/templete/pagination.php'); ?>
        <!-- FIN PAGINATION -->
        <!-- Footer -->
        <?php require_once('footer.php'); ?>
    </body>

</php>
<!-- copyright 2022 Hope Kyungu & Bienfait ShOmari -->