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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DealNice</title>

    <!--
    - favicon
  -->
    <link rel="shortcut icon" href="./assetss/images/favicon.ico" type="image/x-icon">

    <!--
    - custom css link
  -->
    <link rel="stylesheet" href="./assetss/css/style.css">

    <!--
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body class="light-theme">

    <!--
    - #HEADER
  -->

    <header>

        <div class="container">

            <nav class="navbar">

                <a href="index.php">
                    <img src="./assets/images/logo/Blue Clair.png" alt=" logo" width="150" class="logo-light">
                    <img src="./assets/images/logo/Noir.png" alt=" logo" width="150" class="logo-dark">
                </a>

                <div class="btn-group">

                    <button class="theme-btn theme-btn-mobile light">
                        <ion-icon name="moon" class="moon"></ion-icon>
                        <ion-icon name="sunny" class="sun"></ion-icon>
                    </button>

                    <button class="nav-menu-btn">
                        <ion-icon name="menu-outline"></ion-icon>
                    </button>

                </div>

                <div class="flex-wrapper">

                    <ul class="desktop-nav">

                        <li>
                            <a href="index.php" class="nav-link">Home</a>
                        </li>

                        <li>
                            <a href="about.php" class="nav-link">About Us</a>
                        </li>

                        <li>
                            <a href="contact.php" class="nav-link">Contact</a>
                        </li>

                    </ul>

                    <button class="theme-btn theme-btn-desktop light">
                        <ion-icon name="moon" class="moon"></ion-icon>
                        <ion-icon name="sunny" class="sun"></ion-icon>
                    </button>

                </div>

                <div class="mobile-nav">

                    <button class="nav-close-btn">
                        <ion-icon name="close-outline"></ion-icon>
                    </button>

                    <div class="wrapper">

                        <p class="h3 nav-title">Main Menu</p>

                        <ul>
                            <li class="nav-item">
                                <a href="index.php" class="nav-link">Home</a>
                            </li>

                            <li class="nav-item">
                                <a href="about.php" class="nav-link">About Us</a>
                            </li>

                            <li class="nav-item">
                                <a href="contact.php" class="nav-link">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a href="blog.php" class="nav-link">Blog</a>
                            </li>
                        </ul>

                    </div>

                    <div>

                        <p class="h3 nav-title">Topics</p>

                        <ul>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Partenaire</a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">Fournisseur</a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link"></a>
                            </li>
                        </ul>

                    </div>

                </div>

            </nav>

        </div>

    </header>

    <main>

        <!--
      - #HERO SECTION
    -->

        <div class="hero">

            <div class="container">

                <div class="left">

                    <h1 class="h1">
                        Bienvenue, chez <b>DealNice&nbsp;</b>.
                        <br>Site E-commerce
                    </h1>

                    <p class="h3">
                        Les intérêts de nos clients sont toujours <abbr title="Accessibility">la priorité</abbr> absolue
                        pour nous.
                    </p>

                    <div class="btn-group">
                        <a href="contact.php" class="btn btn-primary">Contact Us</a>
                        <a href="blog.php" class="btn btn-secondary">Blog</a>
                    </div>

                </div>

                <div class="right">

                    <div class="pattern-bg"></div>
                    <div class="img-box">
                        <img src="./assets/images/Logo/Blue Clair.png" alt="" class="hero-img">
                        <div class="shape shape-1"></div>
                        <div class="shape shape-2"></div>
                    </div>

                </div>

            </div>

        </div>





        <div class="main">

            <div class="container">

                <!-- - BLOG SECTION -->

                <div class="blog">

                    <h2 class="h2">Nos Partenaires</h2>

                    <div class="blog-card-group">
                        <div class="service bg-gray">
                            <div class="container">
                                <div class="row">
                                    <?php
                                        $sql = "SELECT * FROM tbl_service WHERE ecat_id IN ( SELECT ecat_id FROM tbl_end_category INNER JOIN tbl_mid_category ON tbl_mid_category.mcat_id = tbl_end_category.mcat_id AND tbl_mid_category.mcat_name LIKE ? ) LIMIT 20";
                                        $statement = $pdo->prepare($sql);
                                        $statement->execute(array('%Partenaire%',));
                                        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                                        foreach ($result as $key=>$value) {  
                                        ?>
                                    <div class="blog-card">
                                        <div class="blog-card-banner">
                                            <img src="./assets/images/partenaire/<?php echo $value['p_featured_photo']; ?>"
                                                alt="" width="50" class="blog-banner-img">
                                        </div>
                                        <div class="blog-content-wrapper">
                                            <button
                                                class="blog-topic text-tiny"><?php echo $value['p_short_description']; ?></button>

                                            <h3>
                                                <a
                                                    href="partenaires.php?id=<?php echo $value['p_id']; ?>"></a><?php echo $value['p_name']; ?>
                                            </h3>
                                            <p class="blog-text">
                                                <?php echo $value['p_description']; ?>
                                            </p>
                                            <div class="wrapper-flex">
                                                <a href="partenaires.php?id=<?php echo $value['p_id']; ?>"><button
                                                        class="btn load-more">Voir les détails</button></a>

                                            </div>
                                        </div>

                                    </div>
                                    <?php
                                       }
                                   ?>
                                </div>
                                <!-- partenaires.php?id=<?php echo $value['p_id']; ?> -->
                                <!-- <button class="btn load-more">Load More</button> -->
                            </div>
                        </div>
                    </div>
                </div>

                <!--- ASIDE -->

                <div class="aside">

                    <div class="topics">

                        <h2 class="h2">Topics</h2>

                        <a href="#" class="topic-btn">
                            <div class="icon-box">
                                <ion-icon name="server-outline"></ion-icon>
                            </div>

                            <p>Partenaire</p>
                        </a>

                        <a href="#" class="topic-btn">
                            <div class="icon-box">
                                <ion-icon name="accessibility-outline"></ion-icon>
                            </div>

                            <p>Fournisseur</p>
                        </a>

                        <a href="#" class="topic-btn">
                            <div class="icon-box">
                                <ion-icon name="rocket-outline"></ion-icon>
                            </div>

                            <p>Accessibilité</p>
                        </a>

                    </div>

                    <div class="tags">

                        <h2 class="h2">Tags</h2>

                        <div class="wrapper">

                            <button class="hashtag">#mongodb</button>
                            <button class="hashtag">#nodejs</button>
                            <button class="hashtag">#a11y</button>
                            <button class="hashtag">#mobility</button>
                            <button class="hashtag">#inclusion</button>
                            <button class="hashtag">#webperf</button>
                            <button class="hashtag">#optimize</button>
                            <button class="hashtag">#performance</button>

                        </div>

                    </div>

                    <div class="contact">

                        <h2 class="h2">Let's Talk</h2>

                        <div class="wrapper">

                            <p>
                                Do you want to learn more about how I can help your company overcome problems? Let us
                                have a
                                conversation.
                            </p>

                            <ul class="social-link">

                                <li>
                                    <a href="#" class="icon-box discord">
                                        <ion-icon name="logo-discord"></ion-icon>
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="icon-box twitter">
                                        <ion-icon name="logo-twitter"></ion-icon>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="icon-box facebook">
                                        <ion-icon name="logo-facebook"></ion-icon>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <?php if($newsletter_on_off == 1): ?>
                    <div class="newsletter">

                        <h2 class="h2">Newsletter</h2>

                        <div class="wrapper">
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
                                <input type="email" placeholder="<?php echo LANG_VALUE_95; ?>" name="email_subscribe"
                                    required>

                                <button type="submit" class="btn btn-primary"
                                    name="form_subscribe"><?php echo LANG_VALUE_92; ?></button>
                            </form>

                        </div>

                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </main>








    <!--
    - #FOOTER
  -->

    <footer>
        <div class="container">
            <div class="wrapper">
                <a href="#" class="footer-logo">
                    <img src="./assets/images/Logo/Blue Clair.png" alt=" Logo" width="150" class="logo-light">
                    <img src="./assets/images/logo/Noir.png" alt="Logo" width="150" class="logo-dark">
                </a>
                <p class="footer-text">
                    Les intérêts de nos clients sont toujours la priorité absolue pour nous.
                </p>
            </div>
            <div class="wrapper">
                <p class="footer-title">Quick Links</p>
                <ul>
                    <li>
                        <a href="blog.php" class="footer-link">Advertise with us</a>
                    </li>
                    <li>
                        <a href="about.php" class="footer-link">About Us</a>
                    </li>
                    <li>
                        <a href="contact.php" class="footer-link">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="wrapper">
                <p class="footer-title">Legal Stuff</p>
                <ul>

                    <li>
                        <a href="#" class="footer-link">Privacy Notice</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Cookie Policy</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Terms Of Use</a>
                    </li>

                </ul>

            </div>

        </div>

        <p class="copyright">
            &copy; Copyright 2022 <a href="index.php">DealNice</a>
        </p>

    </footer>





    <!--
    - custom js link
  -->
    <script src="./assetss/js/script.js"></script>

    <!--
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>