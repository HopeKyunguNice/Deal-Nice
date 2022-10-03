<?php require_once('header1.php'); ?>
<?php
$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
foreach ($result as $row) {
    $banner_registration = $row['banner_registration'];
}
?>

<?php
if (isset($_POST['form1'])) {

    $valid = 1;
    if(empty($_POST['cust_name'])) {
        $valid = 0;
        $error_message .= LANG_VALUE_123."<br>";
    }

    if(empty($_POST['cust_email'])) {
        $valid = 0;
        $error_message .= LANG_VALUE_131."<br>";
    } else {
        if (filter_var($_POST['cust_email'], FILTER_VALIDATE_EMAIL) === false) {
            $valid = 0;
            $error_message .= LANG_VALUE_134."<br>";
        } else {
            $statement = $pdo->prepare("SELECT * FROM tbl_customer WHERE cust_email=?");
            $statement->execute(array($_POST['cust_email']));
            $total = $statement->rowCount();                            
            if($total) {
                $valid = 0;
                $error_message .= LANG_VALUE_147."<br>";
            }
        }
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

    if( empty($_POST['cust_password']) || empty($_POST['cust_re_password']) ) {
        $valid = 0;
        $error_message .= LANG_VALUE_138."<br>";
    }

    if( !empty($_POST['cust_password']) && !empty($_POST['cust_re_password']) ) {
        if($_POST['cust_password'] != $_POST['cust_re_password']) {
            $valid = 0;
            $error_message .= LANG_VALUE_139."<br>";
        }
    }

    if($valid == 1) {

        $token = md5(time());
        $cust_datetime = date('Y-m-d h:i:s');
        $cust_timestamp = time();

        // saving into the database
        $statement = $pdo->prepare("INSERT INTO tbl_customer (
                                        cust_name,
                                        cust_cname,
                                        cust_email,
                                        cust_phone,
                                        cust_country,
                                        cust_address,
                                        cust_city,
                                        cust_state,
                                        cust_zip,
                                        cust_b_name,
                                        cust_b_cname,
                                        cust_b_phone,
                                        cust_b_country,
                                        cust_b_address,
                                        cust_b_city,
                                        cust_b_state,
                                        cust_b_zip,
                                        cust_s_name,
                                        cust_s_cname,
                                        cust_s_phone,
                                        cust_s_country,
                                        cust_s_address,
                                        cust_s_city,
                                        cust_s_state,
                                        cust_s_zip,
                                        cust_password,
                                        cust_token,
                                        cust_datetime,
                                        cust_timestamp,
                                        cust_status
                                    ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $statement->execute(array(
                                        strip_tags($_POST['cust_name']),
                                        strip_tags($_POST['cust_cname']),
                                        strip_tags($_POST['cust_email']),
                                        strip_tags($_POST['cust_phone']),
                                        strip_tags($_POST['cust_country']),
                                        strip_tags($_POST['cust_address']),
                                        strip_tags($_POST['cust_city']),
                                        strip_tags($_POST['cust_state']),
                                        strip_tags($_POST['cust_zip']),
                                        '',
                                        '',
                                        '',
                                        '',
                                        '',
                                        '',
                                        '',
                                        '',
                                        '',
                                        '',
                                        '',
                                        '',
                                        '',
                                        '',
                                        '',
                                        '',
                                        md5($_POST['cust_password']),
                                        $token,
                                        $cust_datetime,
                                        $cust_timestamp,
                                        0
                                    ));

        // Send email for confirmation of the account
        $to = $_POST['cust_email'];
        
        $subject = LANG_VALUE_150;
        $verify_link = BASE_URL.'verify.php?email='.$to.'&token='.$token;
        $message = '
'.LANG_VALUE_151.'<br><br>

<a href="'.$verify_link.'">'.$verify_link.'</a>';

        $headers = "From: noreply@" . BASE_URL . "\r\n" .
                   "Reply-To: noreply@" . BASE_URL . "\r\n" .
                   "X-Mailer: PHP/" . phpversion() . "\r\n" . 
                   "MIME-Version: 1.0\r\n" . 
                   "Content-Type: text/html; charset=ISO-8859-1\r\n";
        
        // Sending Email
        mail($to, $subject, $message, $headers);

        unset($_POST['cust_name']);
        unset($_POST['cust_cname']);
        unset($_POST['cust_email']);
        unset($_POST['cust_phone']);
        unset($_POST['cust_address']);
        unset($_POST['cust_city']);
        unset($_POST['cust_state']);
        unset($_POST['cust_zip']);

        $success_message = LANG_VALUE_152;
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
    <div class="page-banner"
        style="background-color:#444;background-image: url(assets/uploads/<?php echo $banner_registration; ?>);">
        <div class="inner">
            <h1><?php echo LANG_VALUE_16; ?></h1>
        </div>
    </div>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="user-content">

                        <form action="" method="post" enctype="multipart/form-data">
                            <?php $csrf->echoInputField(); ?>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-8">

                                    <?php
                                if($error_message != '') {
                                    echo "<div class='error' style='padding: 10px;background:#f1f1f1;margin-bottom:20px;'>".$error_message."</div>";
                                }
                                if($success_message != '') {
                                    echo "<div class='success' style='padding: 10px;background:#f1f1f1;margin-bottom:20px;'>".$success_message."</div>";
                                }
                                ?>

                                    <div class="col-md-6 form-group">
                                        <label for=""><?php echo LANG_VALUE_102; ?> *</label>
                                        <input type="text" class="form-control" name="cust_name"
                                            value="<?php if(isset($_POST['cust_name'])){echo $_POST['cust_name'];} ?>">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for=""><?php echo LANG_VALUE_103; ?></label>
                                        <input type="text" class="form-control" name="cust_cname"
                                            value="<?php if(isset($_POST['cust_cname'])){echo $_POST['cust_cname'];} ?>">
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label for=""><?php echo LANG_VALUE_94; ?> *</label>
                                        <input type="email" class="form-control" name="cust_email"
                                            value="<?php if(isset($_POST['cust_email'])){echo $_POST['cust_email'];} ?>">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for=""><?php echo LANG_VALUE_104; ?> *</label>
                                        <input type="text" class="form-control" name="cust_phone"
                                            value="<?php if(isset($_POST['cust_phone'])){echo $_POST['cust_phone'];} ?>">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for=""><?php echo LANG_VALUE_105; ?> *</label>
                                        <textarea name="cust_address" class="form-control" cols="30" rows="10"
                                            style="height:70px;"><?php if(isset($_POST['cust_address'])){echo $_POST['cust_address'];} ?></textarea>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for=""><?php echo LANG_VALUE_106; ?> *</label>
                                        <select name="cust_country" class="form-control select2">
                                            <option value="">Selectionnez la ville</option>
                                            <?php
                                    $statement = $pdo->prepare("SELECT * FROM tbl_country ORDER BY country_name ASC");
                                    $statement->execute();
                                    $result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
                                    foreach ($result as $row) {
                                        ?>
                                            <option value="<?php echo $row['country_id']; ?>">
                                                <?php echo $row['country_name']; ?></option>
                                            <?php
                                    }
                                    ?>
                                        </select>
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label for="">Citation favorite *</label>
                                        <input type="text" class="form-control" name="cust_city"
                                            value="<?php if(isset($_POST['cust_city'])){echo $_POST['cust_city'];} ?>">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for=""><?php echo LANG_VALUE_108; ?> *</label>
                                        <input type="text" class="form-control" name="cust_state"
                                            value="<?php if(isset($_POST['cust_state'])){echo $_POST['cust_state'];} ?>">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for=""><?php echo LANG_VALUE_109; ?> *</label>
                                        <input type="text" class="form-control" name="cust_zip"
                                            value="<?php if(isset($_POST['cust_zip'])){echo $_POST['cust_zip'];} ?>">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for=""><?php echo LANG_VALUE_96; ?> *</label>
                                        <input type="password" class="form-control" name="cust_password">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for=""><?php echo LANG_VALUE_98; ?> *</label>
                                        <input type="password" class="form-control" name="cust_re_password">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for=""></label>
                                        <input type="submit" class="btn btn-danger" value="<?php echo LANG_VALUE_15; ?>"
                                            name="form1">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row)
{
	$footer_about = $row['footer_about'];
	$contact_email = $row['contact_email'];
	$contact_phone = $row['contact_phone'];
	$contact_address = $row['contact_address'];
	$footer_copyright = $row['footer_copyright'];
	$total_recent_post_footer = $row['total_recent_post_footer'];
    $total_popular_post_footer = $row['total_popular_post_footer'];
    $newsletter_on_off = $row['newsletter_on_off'];
    $before_body = $row['before_body'];
}
?>


<section class="home-newsletter">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="single">
                    <?php
			if(isset($_POST['form_subscribe']))
			{

				if(empty($_POST['email_subscribe'])) 
			    {
			        $valid = 0;
			        $error_message1 .= LANG_VALUE_131;
			    }
			    else
			    {
			    	if (filter_var($_POST['email_subscribe'], FILTER_VALIDATE_EMAIL) === false)
				    {
				        $valid = 0;
				        $error_message1 .= LANG_VALUE_134;
				    }
				    else
				    {
				    	$statement = $pdo->prepare("SELECT * FROM tbl_subscriber WHERE subs_email=?");
				    	$statement->execute(array($_POST['email_subscribe']));
				    	$total = $statement->rowCount();							
				    	if($total)
				    	{
				    		$valid = 0;
				        	$error_message1 .= LANG_VALUE_147;
				    	}
				    	else
				    	{
				    		// Sending email to the requested subscriber for email confirmation
				    		// Getting activation key to send via email. also it will be saved to database until user click on the activation link.
				    		$key = md5(uniqid(rand(), true));

				    		// Getting current date
				    		$current_date = date('Y-m-d');

				    		// Getting current date and time
				    		$current_date_time = date('Y-m-d H:i:s');

				    		// Inserting data into the database
				    		$statement = $pdo->prepare("INSERT INTO tbl_subscriber (subs_email,subs_date,subs_date_time,subs_hash,subs_active) VALUES (?,?,?,?,?)");
				    		$statement->execute(array($_POST['email_subscribe'],$current_date,$current_date_time,$key,0));

				    		// Sending Confirmation Email
				    		$to = $_POST['email_subscribe'];
							$subject = 'Subscriber Email Confirmation';
							
							// Getting the url of the verification link
							$verification_url = BASE_URL.'verify.php?email='.$to.'&key='.$key;

							$message = '
Thanks for your interest to subscribe our newsletter!<br><br>
Please click this link to confirm your subscription:
					'.$verification_url.'<br><br>
This link will be active only for 24 hours.
					';

							$headers = 'From: ' . $contact_email . "\r\n" .
								   'Reply-To: ' . $contact_email . "\r\n" .
								   'X-Mailer: PHP/' . phpversion() . "\r\n" . 
								   "MIME-Version: 1.0\r\n" . 
								   "Content-Type: text/html; charset=ISO-8859-1\r\n";

							// Sending the email
							mail($to, $subject, $message, $headers);

							$success_message1 = LANG_VALUE_136;
				    	}
				    }
			    }
			}
			if($error_message1 != '') {
				echo "<script>alert('".$error_message1."')</script>";
			}
			if($success_message1 != '') {
				echo "<script>alert('".$success_message1."')</script>";
			}
			?>
                    <form action="" method="post">
                        <?php $csrf->echoInputField(); ?>
                        <h2><?php echo LANG_VALUE_93; ?></h2>
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="<?php echo LANG_VALUE_95; ?>"
                                name="email_subscribe">
                            <span class="input-group-btn">
                                <button class="btn btn-theme" type="submit"
                                    name="form_subscribe"><?php echo LANG_VALUE_92; ?></button>
                            </span>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>





<div class="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-12 copyright">
                <?php echo $footer_copyright; ?>
            </div>
        </div>
    </div>
</div>


<a href="#" class="scrollup">
    <i class="fa fa-angle-up"></i>
</a>

<?php
$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
foreach ($result as $row) {
    $stripe_public_key = $row['stripe_public_key'];
    $stripe_secret_key = $row['stripe_secret_key'];
}
?>

<script src="./log/js/jquery-2.2.4.min.js"></script>
<script src="./log/js/bootstrap.min.js"></script>
<script src="https://js.stripe.com/v2/"></script>
<script src="./log/js/megamenu.js"></script>
<script src="./log/js/owl.carousel.min.js"></script>
<script src="./log/js/owl.animate.js"></script>
<script src="./log/js/jquery.bxslider.min.js"></script>
<script src="./log/js/jquery.magnific-popup.min.js"></script>
<script src="./log/js/rating.js"></script>
<script src="./log/js/jquery.touchSwipe.min.js"></script>
<script src="./log/js/bootstrap-touch-slider.js"></script>
<script src="./log/js/select2.full.min.js"></script>
<script src="./log/js/custom.js"></script>
<script>
function confirmDelete() {
    return confirm("Sure you want to delete this data?");
}
$(document).ready(function() {
    advFieldsStatus = $('#advFieldsStatus').val();

    $('#paypal_form').hide();
    $('#stripe_form').hide();
    $('#bank_form').hide();

    $('#advFieldsStatus').on('change', function() {
        advFieldsStatus = $('#advFieldsStatus').val();
        if (advFieldsStatus == '') {
            $('#paypal_form').hide();
            $('#stripe_form').hide();
            $('#bank_form').hide();
        } else if (advFieldsStatus == 'PayPal') {
            $('#paypal_form').show();
            $('#stripe_form').hide();
            $('#bank_form').hide();
        } else if (advFieldsStatus == 'Stripe') {
            $('#paypal_form').hide();
            $('#stripe_form').show();
            $('#bank_form').hide();
        } else if (advFieldsStatus == 'Bank Deposit') {
            $('#paypal_form').hide();
            $('#stripe_form').hide();
            $('#bank_form').show();
        }
    });
});


$(document).on('submit', '#stripe_form', function() {
    // createToken returns immediately - the supplied callback submits the form if there are no errors
    $('#submit-button').prop("disabled", true);
    $("#msg-container").hide();
    Stripe.card.createToken({
        number: $('.card-number').val(),
        cvc: $('.card-cvc').val(),
        exp_month: $('.card-expiry-month').val(),
        exp_year: $('.card-expiry-year').val()
        // name: $('.card-holder-name').val()
    }, stripeResponseHandler);
    return false;
});
Stripe.setPublishableKey('<?php echo $stripe_public_key; ?>');

function stripeResponseHandler(status, response) {
    if (response.error) {
        $('#submit-button').prop("disabled", false);
        $("#msg-container").html(
            '<div style="color: red;border: 1px solid;margin: 10px 0px;padding: 5px;"><strong>Error:</strong> ' +
            response.error.message + '</div>');
        $("#msg-container").show();
    } else {
        var form$ = $("#stripe_form");
        var token = response['id'];
        form$.append("<input type='hidden' name='stripeToken' value='" + token + "' />");
        form$.get(0).submit();
    }
}
</script>
<?php echo $before_body; ?>

</html>