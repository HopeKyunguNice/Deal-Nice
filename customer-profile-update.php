<?php require_once('header1.php'); ?>

<?php
// Check if the customer is logged in or not
if(!isset($_SESSION['customer'])) {
    header('location: '.BASE_URL.'logout.php');
    exit;
} else {
    // If customer is logged in, but admin make him inactive, then force logout this user.
    $statement = $pdo->prepare("SELECT * FROM tbl_customer WHERE cust_id=? AND cust_status=?");
    $statement->execute(array($_SESSION['customer']['cust_id'],0));
    $total = $statement->rowCount();
    if($total) {
        header('location: '.BASE_URL.'logout.php');
        exit;
    }
}
?>

<?php
if (isset($_POST['form1'])) {

    $valid = 1;

    if(empty($_POST['cust_name'])) {
        $valid = 0;
        $error_message .= LANG_VALUE_123."<br>";
    }

    if(empty($_POST['cust_phone'])) {
        $valid = 0;
        $error_message .= LANG_VALUE_124."<br>";
    }

    if(empty($_POST['cust_address'])) {
        $valid = 0;
        $error_message .= LANG_VALUE_125."<br>";
    }

    if(empty($_POST['cust_country'])) {
        $valid = 0;
        $error_message .= LANG_VALUE_126."<br>";
    }

    if(empty($_POST['cust_city'])) {
        $valid = 0;
        $error_message .= LANG_VALUE_127."<br>";
    }

    if(empty($_POST['cust_state'])) {
        $valid = 0;
        $error_message .= LANG_VALUE_128."<br>";
    }

    if(empty($_POST['cust_zip'])) {
        $valid = 0;
        $error_message .= LANG_VALUE_129."<br>";
    }

    if($valid == 1) {

        // update data into the database
        $statement = $pdo->prepare("UPDATE tbl_customer SET cust_name=?, cust_cname=?, cust_phone=?, cust_country=?, cust_address=?, cust_city=?, cust_state=?, cust_zip=? photo=? WHERE cust_id=?");
        $statement->execute(array(
                    strip_tags($_POST['cust_name']),
                    strip_tags($_POST['cust_cname']),
                    strip_tags($_POST['cust_phone']),
                    strip_tags($_POST['cust_country']),
                    strip_tags($_POST['cust_address']),
                    strip_tags($_POST['cust_city']),
                    strip_tags($_POST['cust_state']),
                    strip_tags($_POST['cust_zip']),
                    $_SESSION['customer']['cust_id']
                ));  
       
        $success_message = LANG_VALUE_130;

        $_SESSION['customer']['cust_name'] = $_POST['cust_name'];
        $_SESSION['customer']['cust_cname'] = $_POST['cust_cname'];
        $_SESSION['customer']['cust_phone'] = $_POST['cust_phone'];
        $_SESSION['customer']['cust_country'] = $_POST['cust_country'];
        $_SESSION['customer']['cust_address'] = $_POST['cust_address'];
        $_SESSION['customer']['cust_city'] = $_POST['cust_city'];
        $_SESSION['customer']['cust_state'] = $_POST['cust_state'];
        $_SESSION['customer']['cust_zip'] = $_POST['cust_zip'];
        $_SESSION['customer']['photo'] = $_POST['photo'];
    }
}

if(isset($_POST['form2'])) {

	$valid = 1;

	$path = $_FILES['photo']['name'];
    $path_tmp = $_FILES['photo']['tmp_name'];

    if($path!='') {
        $ext = pathinfo( $path, PATHINFO_EXTENSION );
        $file_name = basename( $path, '.' . $ext );
        if( $ext!='jpg' && $ext!='JPG' && $ext!='png' && $ext!='jpeg' && $ext!='gif' ) {
            $valid = 0;
            $error_message .= 'You must have to upload jpg, jpeg, gif or png file<br>';
        }
    }

    if($valid == 1) {

    	// removing the existing photo
    	if($_SESSION['customer']['photo']!='') {
    		unlink('./assets/uploads/'.$_SESSION['customer']['photo']);	
    	}

    	// updating the data
    	$final_name = 'customer-'.$_SESSION['customer']['id'].'.'.$ext;
        move_uploaded_file( $path_tmp, './assets/uploads/'.$final_name );
        $_SESSION['customer']['photo'] = $final_name;

        // updating the database
		$statement = $pdo->prepare("UPDATE tbl_customer SET photo=? WHERE id=?");
		$statement->execute(array($final_name,$_SESSION['customer']['id']));

        $success_message = 'User Photo is updated successfully.';
    	
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Stylesheets -->
    <link rel="stylesheet" href="./log/css/bootstrap.min.css">
    <link rel="stylesheet" href="./log/css/font-awesome.min.css">
    <link rel="stylesheet" href="./log/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./log/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="./log/css/jquery.bxslider.min.css">
    <link rel="stylesheet" href="./log/css/magnific-popup.css">
    <link rel="stylesheet" href="./log/css/rating.css">
    <link rel="stylesheet" href="./log/css/spacing.css">
    <link rel="stylesheet" href="./log/css/bootstrap-touch-slider.css">
    <link rel="stylesheet" href="./log/css/animate.min.css">
    <link rel="stylesheet" href="./log/css/tree-menu.css">
    <link rel="stylesheet" href="./log/css/select2.min.css">
    <link rel="stylesheet" href="./log/css/main.css">
    <link rel="stylesheet" href="./log/css/responsive.css">
</head>

<body>
    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php require_once('customer-sidebar.php'); ?>
                </div>
                <div class="col-md-12">
                    <div class="user-content">
                        <h3>
                            <?php echo LANG_VALUE_117; ?>
                        </h3>
                        <?php
                    if($error_message != '') {
                        echo "<div class='error' style='padding: 10px;background:#f1f1f1;margin-bottom:20px;'>".$error_message."</div>";
                    }
                    if($success_message != '') {
                        echo "<div class='success' style='padding: 10px;background:#f1f1f1;margin-bottom:20px;'>".$success_message."</div>";
                    }
                    ?>
                        <form action="" method="post">
                            <?php $csrf->echoInputField(); ?>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for=""><?php echo LANG_VALUE_102; ?> *</label>
                                    <input type="text" class="form-control" name="cust_name"
                                        value="<?php echo $_SESSION['customer']['cust_name']; ?>">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for=""><?php echo LANG_VALUE_103; ?></label>
                                    <input type="text" class="form-control" name="cust_cname"
                                        value="<?php echo $_SESSION['customer']['cust_cname']; ?>">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for=""><?php echo LANG_VALUE_94; ?> *</label>
                                    <input type="text" class="form-control" name=""
                                        value="<?php echo $_SESSION['customer']['cust_email']; ?>" disabled>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for=""><?php echo LANG_VALUE_104; ?> *</label>
                                    <input type="text" class="form-control" name="cust_phone"
                                        value="<?php echo $_SESSION['customer']['cust_phone']; ?>">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for=""><?php echo LANG_VALUE_105; ?> *</label>
                                    <textarea name="cust_address" class="form-control" cols="30" rows="10"
                                        style="height:70px;"><?php echo $_SESSION['customer']['cust_address']; ?></textarea>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for=""><?php echo LANG_VALUE_106; ?> *</label>
                                    <select name="cust_country" class="form-control">
                                        <?php
                                $statement = $pdo->prepare("SELECT * FROM tbl_country ORDER BY country_name ASC");
                                $statement->execute();
                                $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                                foreach ($result as $row) {
                                    ?>
                                        <option value="<?php echo $row['country_id']; ?>"
                                            <?php if($row['country_id'] == $_SESSION['customer']['cust_country']) {echo 'selected';} ?>>
                                            <?php echo $row['country_name']; ?></option>
                                        <?php
                                }
                                ?>
                                    </select>
                                </div>

                                <div class="col-md-6 form-group">
                                    <label for="">Citation favorite*</label>
                                    <input type="text" class="form-control" name="cust_city"
                                        value="<?php echo $_SESSION['customer']['cust_city']; ?>">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for=""><?php echo LANG_VALUE_108; ?> *</label>
                                    <input type="text" class="form-control" name="cust_state"
                                        value="<?php echo $_SESSION['customer']['cust_state']; ?>">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for=""><?php echo LANG_VALUE_109; ?> *</label>
                                    <input type="text" class="form-control" name="cust_zip"
                                        value="<?php echo $_SESSION['customer']['cust_zip']; ?>">
                                </div>
                            </div>
                            <input type="submit" class="btn btn-primary" value="<?php echo LANG_VALUE_5; ?>"
                                name="form1">
                        </form>

                        <div class="tab-pane" id="tab_2">
                            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                <div class="box box-info">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">New Photo</label>
                                            <div class="col-sm-6" style="padding-top:6px;">
                                                <input type="file" name="photo">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success pull-left"
                                                    name="form2">Update Photo</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>