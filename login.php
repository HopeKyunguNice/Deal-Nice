<?php require_once('header1.php'); ?>
<!-- fetching row banner login -->
<?php
$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
foreach ($result as $row) {
    $banner_login = $row['banner_login'];
}
?>
<!-- login form -->
<?php
if(isset($_POST['form1'])) {
        
    if(empty($_POST['cust_email']) || empty($_POST['cust_password'])) {
        $error_message = LANG_VALUE_132.'<br>';
    } else {
        
        $cust_email = strip_tags($_POST['cust_email']);
        $cust_password = strip_tags($_POST['cust_password']);

        $statement = $pdo->prepare("SELECT * FROM tbl_customer WHERE cust_email=?");
        $statement->execute(array($cust_email));
        $total = $statement->rowCount();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach($result as $row) {
            $cust_status = $row['cust_status'];
            $row_password = $row['cust_password'];
        }

        if($total==0) {
            $error_message .= LANG_VALUE_133.'<br>';
        } else {
            //using MD5 form
            if( $row_password != md5($cust_password) ) {
                $error_message .= LANG_VALUE_139.'<br>';
            } else {
                if($cust_status == 0) {
                    $error_message .= LANG_VALUE_148.'<br>';
                } else {
                    $_SESSION['customer'] = $row;
                    header("location: ".BASE_URL."dashboard.php");
                }
            }
            
        }
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
</head>

<body>
    <div class="page-banner"
        style="background-color:#444;background-image: url(assets/uploads/<?php echo $banner_login; ?>);">
        <div class="inner">
            <h1><?php echo LANG_VALUE_10; ?></h1>
        </div>
    </div>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="user-content">


                        <form action="" method="post">
                            <?php $csrf->echoInputField(); ?>
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <?php
                                if($error_message != '') {
                                    echo "<div class='error' style='padding: 10px;background:#f1f1f1;margin-bottom:20px;'>".$error_message."</div>";
                                }
                                if($success_message != '') {
                                    echo "<div class='success' style='padding: 10px;background:#f1f1f1;margin-bottom:20px;'>".$success_message."</div>";
                                }
                                ?>
                                    <div class="form-group">
                                        <label for=""><?php echo LANG_VALUE_94; ?> *</label>
                                        <input type="email" class="form-control" name="cust_email">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><?php echo LANG_VALUE_96; ?> *</label>
                                        <input type="password" class="form-control" name="cust_password">
                                    </div>
                                    <div class="form-group">
                                        <label for=""></label>
                                        <input type="submit" class="btn btn-success" value="<?php echo LANG_VALUE_4; ?>"
                                            name="form1">
                                    </div>
                                    <a href="forget-password.php"
                                        style="color:#e4144d;"><?php echo LANG_VALUE_97; ?>?</a>
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