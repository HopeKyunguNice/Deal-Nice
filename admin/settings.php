<?php require_once('header.php'); ?>

<?php
//Change Logo
if(isset($_POST['form1'])) {
    $valid = 1;

    $path = $_FILES['photo_logo']['name'];
    $path_tmp = $_FILES['photo_logo']['tmp_name'];

    if($path == '') {
        $valid = 0;
        $error_message .= 'Vous devez obligatoirement sélectionner une photo<br>';
    } else {
        $ext = pathinfo( $path, PATHINFO_EXTENSION );
        $file_name = basename( $path, '.' . $ext );
        if( $ext!='jpg' && $ext!='png' && $ext!='jpeg' && $ext!='PNG' && $ext!='JPG' && $ext!='mp4' && $ext!='gif' ) {
            $valid = 0;
            $error_message .= 'Vous devez télécharger un fichier jpg, jpeg, gif ou png<br>';
        }
    }

    if($valid == 1) {
        // removing the Photo existante
        $statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
        foreach ($result as $row) {
            $logo = $row['logo'];
            unlink('../assets/uploads/'.$logo);
        }

        // updating the data
        $final_name = 'logo'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../assets/uploads/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("Update tbl_settings SET logo=? WHERE id=1");
        $statement->execute(array($final_name));

        $success_message = 'Le logo est mis à jour avec succès.';
        
    }
}
// Change Favicon
if(isset($_POST['form2'])) {
    $valid = 1;

    $path = $_FILES['photo_favicon']['name'];
    $path_tmp = $_FILES['photo_favicon']['tmp_name'];

    if($path == '') {
        $valid = 0;
        $error_message .= 'Vous devez obligatoirement sélectionner une photo<br>';
    } else {
        $ext = pathinfo( $path, PATHINFO_EXTENSION );
        $file_name = basename( $path, '.' . $ext );
        if( $ext!='jpg' && $ext!='png' && $ext!='PNG' && $ext!='JPG' && $ext!='mp4' && $ext!='jpeg' && $ext!='gif' ) {
            $valid = 0;
            $error_message .= 'Vous devez télécharger un fichier jpg, jpeg, gif ou png<br>';
        }
    }

    if($valid == 1) {
        // removing the Photo existante
        $statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
        foreach ($result as $row) {
            $favicon = $row['favicon'];
            unlink('../assets/uploads/'.$favicon);
        }

        // updating the data
        $final_name = 'favicon'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../assets/uploads/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("Update tbl_settings SET favicon=? WHERE id=1");
        $statement->execute(array($final_name));

        $success_message = 'Favicon est mis à jour avec succès.';
        
    }
}
//Footer & Contact us page
if(isset($_POST['form3'])) {
    
    // updating the database
    $statement = $pdo->prepare("Update tbl_settings SET newsletter_on_off=?, footer_copyright=?, contact_address=?, contact_email=?, contact_phone=?, contact_map_iframe=? WHERE id=1");
    $statement->execute(array($_POST['newsletter_on_off'],$_POST['footer_copyright'],$_POST['contact_address'],$_POST['contact_email'],$_POST['contact_phone'],$_POST['contact_map_iframe']));

    $success_message = 'Les paramètres de contenu généraux ont été mis à jour avec succès.';
    
}
//Email Settings
if(isset($_POST['form4'])) {
    // updating the database
    $statement = $pdo->prepare("Update tbl_settings SET receive_email=?, receive_email_subject=?,receive_email_thank_you_message=?, forget_password_message=? WHERE id=1");
    $statement->execute(array($_POST['receive_email'],$_POST['receive_email_subject'],$_POST['receive_email_thank_you_message'],$_POST['forget_password_message']));

    $success_message = 'Les informations sur les paramètres du formulaire de contact ont été mises à jour avec succès.';
}

//Can not finish this section, leave it
if(isset($_POST['form5'])) {
    // updating the database
    $statement = $pdo->prepare("Update tbl_settings SET total_featured_product_home=?, total_latest_product_home=?, total_popular_product_home=? WHERE id=1");
    $statement->execute(array($_POST['total_featured_product_home'],$_POST['total_latest_product_home'],$_POST['total_popular_product_home']));

    $success_message = 'Les paramètres de la barre latérale ont été mis à jour avec succès.';
}


if(isset($_POST['form6_0'])) {
    // updating the database
    $statement = $pdo->prepare("Update tbl_settings SET home_service_on_off=?, home_welcome_on_off=?, home_featured_product_on_off=?, home_latest_product_on_off=?, home_popular_product_on_off=? WHERE id=1");
    $statement->execute(array($_POST['home_service_on_off'],$_POST['home_welcome_on_off'],$_POST['home_featured_product_on_off'],$_POST['home_latest_product_on_off'],$_POST['home_popular_product_on_off']));

    $success_message = 'La section Paramètres On-Off est Update avec succès.';
}


if(isset($_POST['form6'])) {
    // updating the database
    $statement = $pdo->prepare("Update tbl_settings SET meta_title_home=?, meta_keyword_home=?, meta_description_home=? WHERE id=1");
    $statement->execute(array($_POST['meta_title_home'],$_POST['meta_keyword_home'],$_POST['meta_description_home']));

    $success_message = 'Les paramètres Home Meta ont été mis à jour avec succès.';
}

if(isset($_POST['form6_7'])) {

    $valid = 1;

    if(empty($_POST['cta_title'])) {
        $valid = 0;
        $error_message .= 'Le titre de l appel à l action ne peut pas être vide<br>';
    }

    if(empty($_POST['cta_content'])) {
        $valid = 0;
        $error_message .= 'Le contenu de l appel à l action ne peut pas être vide<br>';
    }

    if(empty($_POST['cta_read_more_text'])) {
        $valid = 0;
        $error_message .= 'Appel à l action Lire la suite Le texte ne peut pas être vide<br>';
    }

    if(empty($_POST['cta_read_more_url'])) {
        $valid = 0;
        $error_message .= 'URL de l appel à l action Lire la suite ne peut pas être vide<br>';
    }

    $path = $_FILES['cta_photo']['name'];
    $path_tmp = $_FILES['cta_photo']['tmp_name'];

    if($path != '') {
        $ext = pathinfo( $path, PATHINFO_EXTENSION );
        $file_name = basename( $path, '.' . $ext );
        if( $ext!='jpg' && $ext!='png' && $ext!='jpeg' && $ext!='gif' ) {
            $valid = 0;
            $error_message .= 'Vous devez télécharger un fichier jpg, jpeg, gif ou png<br>';
        }
    }

    if($valid == 1) {

        if($path != '') {
            // removing the Photo existante
            $statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
            foreach ($result as $row) {
                $cta_photo = $row['cta_photo'];
                unlink('../assets/uploads/'.$cta_photo);
            }

            // updating the data
            $final_name = 'cta'.'.'.$ext;
            move_uploaded_file( $path_tmp, '../assets/uploads/'.$final_name );

            // updating the database
            $statement = $pdo->prepare("Update tbl_settings SET cta_title=?,cta_content=?,cta_read_more_text=?,cta_read_more_url=?,cta_photo=? WHERE id=1");
            $statement->execute(array($_POST['cta_title'],$_POST['cta_content'],$_POST['cta_read_more_text'],$_POST['cta_read_more_url'],$final_name));
        } else {
            // updating the database
            $statement = $pdo->prepare("Update tbl_settings SET cta_title=?,cta_content=?,cta_read_more_text=?,cta_read_more_url=? WHERE id=1");
            $statement->execute(array($_POST['cta_title'],$_POST['cta_content'],$_POST['cta_read_more_text'],$_POST['cta_read_more_url']));
        }

        $success_message = 'Les données d appel à l action ont été mises à jour avec succès.';
        
    }
}

if(isset($_POST['form6_4'])) {

    $valid = 1;

    if(empty($_POST['featured_product_title'])) {
        $valid = 0;
        $error_message .= 'Le titre du produit en vedette ne peut pas être vide<br>';
    }

    if(empty($_POST['featured_product_subtitle'])) {
        $valid = 0;
        $error_message .= 'Le sous-titre du produit en vedette ne peut pas être vide<br>';
    }

    if($valid == 1) {

        // updating the database
        $statement = $pdo->prepare("Update tbl_settings SET featured_product_title=?,featured_product_subtitle=? WHERE id=1");
        $statement->execute(array($_POST['featured_product_title'],$_POST['featured_product_subtitle']));

        $success_message = 'Les données produit en vedette ont été mises à jour avec succès.';
        
    }
}

if(isset($_POST['form6_5'])) {

    $valid = 1;

    if(empty($_POST['latest_product_title'])) {
        $valid = 0;
        $error_message .= 'Le dernier titre de produit ne peut pas être vide<br>';
    }

    if(empty($_POST['latest_product_subtitle'])) {
        $valid = 0;
        $error_message .= 'Le dernier sous-titre du produit ne peut pas être vide<br>';
    }

    if($valid == 1) {

        // updating the database
        $statement = $pdo->prepare("Update tbl_settings SET latest_product_title=?,latest_product_subtitle=? WHERE id=1");
        $statement->execute(array($_POST['latest_product_title'],$_POST['latest_product_subtitle']));

        $success_message = 'Les dernières données produit ont été mises à jour avec succès.';
        
    }
}

if(isset($_POST['form6_6'])) {

    $valid = 1;

    if(empty($_POST['popular_product_title'])) {
        $valid = 0;
        $error_message .= 'Le titre du produit populaire ne peut pas être vide<br>';
    }

    if(empty($_POST['popular_product_subtitle'])) {
        $valid = 0;
        $error_message .= 'Le sous-titre du produit populaire ne peut pas être vide<br>';
    }

    if($valid == 1) {

        // updating the database
        $statement = $pdo->prepare("Update tbl_settings SET popular_product_title=?,popular_product_subtitle=? WHERE id=1");
        $statement->execute(array($_POST['popular_product_title'],$_POST['popular_product_subtitle']));

        $success_message = 'Les données produit populaires ont été mises à jour avec succès.';
        
    }
}

if(isset($_POST['form6_1'])) {

    $valid = 1;

    if(empty($_POST['testimonial_title'])) {
        $valid = 0;
        $error_message .= 'Testimonial Title can not be empty<br>';
    }

    if(empty($_POST['testimonial_subtitle'])) {
        $valid = 0;
        $error_message .= 'Testimonial SubTitle can not be empty<br>';
    }

    $path = $_FILES['testimonial_photo']['name'];
    $path_tmp = $_FILES['testimonial_photo']['tmp_name'];

    if($path != '') {
        $ext = pathinfo( $path, PATHINFO_EXTENSION );
        $file_name = basename( $path, '.' . $ext );
        if( $ext!='jpg' && $ext!='png' && $ext!='jpeg' && $ext!='gif' ) {
            $valid = 0;
            $error_message .= 'Vous devez télécharger un fichier jpg, jpeg, gif ou png<br>';
        }
    }

    if($valid == 1) {


        if($path != '') {
            // removing the Photo existante
            $statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
            foreach ($result as $row) {
                $testimonial_photo = $row['testimonial_photo'];
                unlink('../assets/uploads/'.$testimonial_photo);
            }

            // updating the data
            $final_name = 'testimonial'.'.'.$ext;
            move_uploaded_file( $path_tmp, '../assets/uploads/'.$final_name );

            // updating the database
            $statement = $pdo->prepare("Update tbl_settings SET testimonial_title=?,testimonial_subtitle=?, testimonial_photo=? WHERE id=1");
            $statement->execute(array($_POST['testimonial_title'],$_POST['testimonial_subtitle'],$final_name));
        } else {
            // updating the database
            $statement = $pdo->prepare("Update tbl_settings SET testimonial_title=?,testimonial_subtitle=? WHERE id=1");
            $statement->execute(array($_POST['testimonial_title'],$_POST['testimonial_subtitle']));
        }

        $success_message = 'Testimonial Data is Updated successfully.';
        
    }
}


if(isset($_POST['form6_2'])) {

    $valid = 1;

    if(empty($_POST['blog_title'])) {
        $valid = 0;
        $error_message .= 'Blog Title can not be empty<br>';
    }

    if(empty($_POST['blog_subtitle'])) {
        $valid = 0;
        $error_message .= 'Blog SubTitle can not be empty<br>';
    }

    if($valid == 1) {

        // updating the database
        $statement = $pdo->prepare("Update tbl_settings SET blog_title=?,blog_subtitle=? WHERE id=1");
        $statement->execute(array($_POST['blog_title'],$_POST['blog_subtitle']));

        $success_message = 'Blog Data is Updated successfully.';
        
    }
}


if(isset($_POST['form6_3'])) {

        // updating the database
        $statement = $pdo->prepare("Update tbl_settings SET newsletter_text=? WHERE id=1");
        $statement->execute(array($_POST['newsletter_text']));
        
        $success_message = 'Le texte de la newsletter est mis à jour avec succès.';
 
}

if(isset($_POST['form7_1'])) {
    $valid = 1;

    $path = $_FILES['photo']['name'];
    $path_tmp = $_FILES['photo']['tmp_name'];

    if($path == '') {
        $valid = 0;
        $error_message .= 'Vous devez obligatoirement sélectionner une photo<br>';
    } else {
        $ext = pathinfo( $path, PATHINFO_EXTENSION );
        $file_name = basename( $path, '.' . $ext );
        if( $ext!='jpg' && $ext!='png' && $ext!='PNG' && $ext!='JPG' && $ext!='mp4' && $ext!='jpeg' && $ext!='gif' ) {
            $valid = 0;
            $error_message .= 'Vous devez télécharger un fichier jpg, jpeg, gif ou png<br>';
        }
    }

    if($valid == 1) {
        // removing the Photo existante
        $statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
        foreach ($result as $row) {
            $banner_login = $row['banner_login'];
            unlink('../assets/uploads/'.$banner_login);
        }

        // updating the data
        $final_name = 'banner_login'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../assets/uploads/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("Update tbl_settings SET banner_login=? WHERE id=1");
        $statement->execute(array($final_name));

        $success_message = 'La bannière de la page de connexion est Update avec succès.';
        
    }
}

if(isset($_POST['form7_2'])) {
    $valid = 1;

    $path = $_FILES['photo']['name'];
    $path_tmp = $_FILES['photo']['tmp_name'];

    if($path == '') {
        $valid = 0;
        $error_message .= 'Vous devez obligatoirement sélectionner une photo<br>';
    } else {
        $ext = pathinfo( $path, PATHINFO_EXTENSION );
        $file_name = basename( $path, '.' . $ext );
        if( $ext!='jpg' && $ext!='png' && $ext!='PNG' && $ext!='JPG' && $ext!='mp4' && $ext!='jpeg' && $ext!='gif' ) {
            $valid = 0;
            $error_message .= 'Vous devez télécharger un fichier jpg, jpeg, gif ou png<br>';
        }
    }

    if($valid == 1) {
        // removing the Photo existante
        $statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
        foreach ($result as $row) {
            $banner_registration = $row['banner_registration'];
            unlink('../assets/uploads/'.$banner_registration);
        }

        // updating the data
        $final_name = 'banner_registration'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../assets/uploads/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("Update tbl_settings SET banner_registration=? WHERE id=1");
        $statement->execute(array($final_name));

        $success_message = 'La bannière de la page d inscription est Update avec succès.';
        
    }
}

if(isset($_POST['form7_3'])) {
    $valid = 1;

    $path = $_FILES['photo']['name'];
    $path_tmp = $_FILES['photo']['tmp_name'];

    if($path == '') {
        $valid = 0;
        $error_message .= 'Vous devez obligatoirement sélectionner une photo<br>';
    } else {
        $ext = pathinfo( $path, PATHINFO_EXTENSION );
        $file_name = basename( $path, '.' . $ext );
        if( $ext!='jpg' && $ext!='png' && $ext!='jpeg' && $ext!='gif' ) {
            $valid = 0;
            $error_message .= 'Vous devez télécharger un fichier jpg, jpeg, gif ou png<br>';
        }
    }

    if($valid == 1) {
        // removing the Photo existante
        $statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
        foreach ($result as $row) {
            $banner_forget_password = $row['banner_forget_password'];
            unlink('../assets/uploads/'.$banner_forget_password);
        }

        // updating the data
        $final_name = 'banner_forget_password'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../assets/uploads/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("Update tbl_settings SET banner_forget_password=? WHERE id=1");
        $statement->execute(array($final_name));

        $success_message = 'La bannière de la page Oublier le mot de passe a été Update avec succès.';
        
    }
}

if(isset($_POST['form7_4'])) {
    $valid = 1;

    $path = $_FILES['photo']['name'];
    $path_tmp = $_FILES['photo']['tmp_name'];

    if($path == '') {
        $valid = 0;
        $error_message .= 'Vous devez obligatoirement sélectionner une photo<br>';
    } else {
        $ext = pathinfo( $path, PATHINFO_EXTENSION );
        $file_name = basename( $path, '.' . $ext );
        if( $ext!='jpg' && $ext!='png' && $ext!='PNG' && $ext!='JPG' && $ext!='mp4' && $ext!='jpeg' && $ext!='gif' ) {
            $valid = 0;
            $error_message .= 'Vous devez télécharger un fichier jpg, jpeg, gif ou png<br>';
        }
    }

    if($valid == 1) {
        // removing the Photo existante
        $statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
        foreach ($result as $row) {
            $banner_reset_password = $row['banner_reset_password'];
            unlink('../assets/uploads/'.$banner_reset_password);
        }

        // updating the data
        $final_name = 'banner_reset_password'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../assets/uploads/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("Update tbl_settings SET banner_reset_password=? WHERE id=1");
        $statement->execute(array($final_name));

        $success_message = 'La bannière de page de réinitialisation du mot de passe est Update avec succès.';
        
    }
}


if(isset($_POST['form7_6'])) {
    $valid = 1;

    $path = $_FILES['photo']['name'];
    $path_tmp = $_FILES['photo']['tmp_name'];

    if($path == '') {
        $valid = 0;
        $error_message .= 'Vous devez obligatoirement sélectionner une photo<br>';
    } else {
        $ext = pathinfo( $path, PATHINFO_EXTENSION );
        $file_name = basename( $path, '.' . $ext );
        if( $ext!='jpg' && $ext!='png' && $ext!='jpeg' && $ext!='gif' ) {
            $valid = 0;
            $error_message .= 'Vous devez télécharger un fichier jpg, jpeg, gif ou png<br>';
        }
    }

    if($valid == 1) {
        // removing the Photo existante
        $statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
        foreach ($result as $row) {
            $banner_search = $row['banner_search'];
            unlink('../assets/uploads/'.$banner_search);
        }

        // updating the data
        $final_name = 'banner_search'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../assets/uploads/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("Update tbl_settings SET banner_search=? WHERE id=1");
        $statement->execute(array($final_name));

        $success_message = 'La bannière de la page de recherche a été Update avec succès.';
        
    }
}

if(isset($_POST['form7_7'])) {
    $valid = 1;

    $path = $_FILES['photo']['name'];
    $path_tmp = $_FILES['photo']['tmp_name'];

    if($path == '') {
        $valid = 0;
        $error_message .= 'Vous devez obligatoirement sélectionner une photo<br>';
    } else {
        $ext = pathinfo( $path, PATHINFO_EXTENSION );
        $file_name = basename( $path, '.' . $ext );
        if( $ext!='jpg' && $ext!='png' && $ext!='PNG' && $ext!='JPG' && $ext!='mp4' && $ext!='jpeg' && $ext!='gif' ) {
            $valid = 0;
            $error_message .= 'Vous devez télécharger un fichier jpg, jpeg, gif ou png<br>';
        }
    }

    if($valid == 1) {
        // removing the Photo existante
        $statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
        foreach ($result as $row) {
            $banner_cart = $row['banner_cart'];
            unlink('../assets/uploads/'.$banner_cart);
        }

        // updating the data
        $final_name = 'banner_cart'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../assets/uploads/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("Update tbl_settings SET banner_cart=? WHERE id=1");
        $statement->execute(array($final_name));

        $success_message = 'La bannière de la page du panier est Update avec succès.';
        
    }
}

if(isset($_POST['form7_8'])) {
    $valid = 1;

    $path = $_FILES['photo']['name'];
    $path_tmp = $_FILES['photo']['tmp_name'];

    if($path == '') {
        $valid = 0;
        $error_message .= 'Vous devez obligatoirement sélectionner une photo<br>';
    } else {
        $ext = pathinfo( $path, PATHINFO_EXTENSION );
        $file_name = basename( $path, '.' . $ext );
        if( $ext!='jpg' && $ext!='png' && $ext!='jpeg' && $ext!='PNG' && $ext!='JPG' && $ext!='mp4' && $ext!='gif' ) {
            $valid = 0;
            $error_message .= 'Vous devez télécharger un fichier jpg, jpeg, gif ou png<br>';
        }
    }

    if($valid == 1) {
        // removing the Photo existante
        $statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
        foreach ($result as $row) {
            $banner_checkout = $row['banner_checkout'];
            unlink('../assets/uploads/'.$banner_checkout);
        }

        // updating the data
        $final_name = 'banner_checkout'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../assets/uploads/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("Update tbl_settings SET banner_checkout=? WHERE id=1");
        $statement->execute(array($final_name));

        $success_message = 'La bannière de la page de paiement a été Update avec succès.';
        
    }
}

if(isset($_POST['form7_9'])) {
    $valid = 1;

    $path = $_FILES['photo']['name'];
    $path_tmp = $_FILES['photo']['tmp_name'];

    if($path == '') {
        $valid = 0;
        $error_message .= 'Vous devez obligatoirement sélectionner une photo<br>';
    } else {
        $ext = pathinfo( $path, PATHINFO_EXTENSION );
        $file_name = basename( $path, '.' . $ext );
        if( $ext!='jpg' && $ext!='png' && $ext!='jpeg' && $ext!='PNG' && $ext!='JPG' && $ext!='mp4' && $ext!='gif' ) {
            $valid = 0;
            $error_message .= 'Vous devez télécharger un fichier jpg, jpeg, gif ou png<br>';
        }
    }

    if($valid == 1) {
        // removing the Photo existante
        $statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
        foreach ($result as $row) {
            $banner_product_category = $row['banner_product_category'];
            unlink('../assets/uploads/'.$banner_product_category);
        }

        // updating the data
        $final_name = 'banner_product_category'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../assets/uploads/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("Update tbl_settings SET banner_product_category=? WHERE id=1");
        $statement->execute(array($final_name));

        $success_message = 'La bannière de la page de catégorie de produit a été Update avec succès.';
        
    }
}

if(isset($_POST['form7_10'])) {
    $valid = 1;

    $path = $_FILES['photo']['name'];
    $path_tmp = $_FILES['photo']['tmp_name'];

    if($path == '') {
        $valid = 0;
        $error_message .= 'Vous devez obligatoirement sélectionner une photo<br>';
    } else {
        $ext = pathinfo( $path, PATHINFO_EXTENSION );
        $file_name = basename( $path, '.' . $ext );
        if( $ext!='jpg' && $ext!='png' && $ext!='jpeg' && $ext!='PNG' && $ext!='JPG' && $ext!='mp4' && $ext!='gif' ) {
            $valid = 0;
            $error_message .= 'Vous devez télécharger un fichier jpg, jpeg, gif ou png<br>';
        }
    }

    if($valid == 1) {
        // removing the Photo existante
        $statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
        foreach ($result as $row) {
            $banner_blog = $row['banner_blog'];
            unlink('../assets/uploads/'.$banner_blog);
        }

        // updating the data
        $final_name = 'banner_blog'.'.'.$ext;
        move_uploaded_file( $path_tmp, '../assets/uploads/'.$final_name );

        // updating the database
        $statement = $pdo->prepare("Update tbl_settings SET banner_blog=? WHERE id=1");
        $statement->execute(array($final_name));

        $success_message = 'Blog Page Banner is Updated successfully.';
        
    } 
}

if(isset($_POST['form9'])) {
    // updating the database
    $statement = $pdo->prepare("Update tbl_settings SET paypal_email=?, bank_detail=? WHERE id=1");
    $statement->execute(array($_POST['paypal_email'],$_POST['bank_detail']));

    $success_message = 'Les paramètres de paiement ont été mis à jour avec succès.';
}

if(isset($_POST['form10'])) {
    // updating the database
    $statement = $pdo->prepare("Update tbl_settings SET before_head=?, after_body=?, before_body=? WHERE id=1");
    $statement->execute(array($_POST['before_head'],$_POST['after_body'],$_POST['before_body']));

    $success_message = 'Head and Body Script est mis à jour avec succès.';
}


if(isset($_POST['form11'])) {
    // updating the database
    $statement = $pdo->prepare("Update tbl_settings 
    						SET 
    						ads_above_welcome_on_off=?, 
    						ads_above_featured_product_on_off=?, 
    						ads_above_latest_product_on_off=?, 
    						ads_above_popular_product_on_off=?, 
    						ads_above_testimonial_on_off=?, 
    						ads_category_sidebar_on_off=? 

    						WHERE id=1");
    $statement->execute(array(
    						$_POST['ads_above_welcome_on_off'],
    						$_POST['ads_above_featured_product_on_off'],
    						$_POST['ads_above_latest_product_on_off'],
    						$_POST['ads_above_popular_product_on_off'],
    						$_POST['ads_above_testimonial_on_off'],
    						$_POST['ads_category_sidebar_on_off']
    					));

    $success_message = 'Advertisement On-Off Section is Updated successfully.';
}
?>

<section class="content-header">
    <div class="content-header-left">
        <h1>Paramètres du site Web</h1>
    </div>
</section>

<?php
$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
foreach ($result as $row) {
    $logo                            = $row['logo'];
    $favicon                         = $row['favicon'];
    $footer_about                    = $row['footer_about'];
    $footer_copyright                = $row['footer_copyright'];
    $contact_address                 = $row['contact_address'];
    $contact_email                   = $row['contact_email'];
    $contact_phone                   = $row['contact_phone'];
   $contact_fax                     = $row['contact_fax'];
    $contact_map_iframe              = $row['contact_map_iframe'];
    $receive_email                   = $row['receive_email'];
    $receive_email_subject           = $row['receive_email_subject'];
    $receive_email_thank_you_message = $row['receive_email_thank_you_message'];
    $forget_password_message         = $row['forget_password_message'];
   $total_recent_post_footer        = $row['total_recent_post_footer'];
   $total_popular_post_footer       = $row['total_popular_post_footer'];
   $total_recent_post_sidebar       = $row['total_recent_post_sidebar'];
   $total_popular_post_sidebar      = $row['total_popular_post_sidebar'];
    $total_featured_product_home     = $row['total_featured_product_home'];
    $total_latest_product_home       = $row['total_latest_product_home'];
    $total_popular_product_home      = $row['total_popular_product_home'];
    $meta_title_home                 = $row['meta_title_home'];
    $meta_keyword_home               = $row['meta_keyword_home'];
    $meta_description_home           = $row['meta_description_home'];
    $banner_login                    = $row['banner_login'];
    $banner_registration             = $row['banner_registration'];
    $banner_forget_password          = $row['banner_forget_password'];
    $banner_reset_password           = $row['banner_reset_password'];
    $banner_search                   = $row['banner_search'];
    $banner_cart                     = $row['banner_cart'];
    $banner_checkout                 = $row['banner_checkout'];
    $banner_product_category         = $row['banner_product_category'];
   $banner_blog                     = $row['banner_blog'];
   $cta_title                       = $row['cta_title'];
   $cta_content                     = $row['cta_content'];
   $cta_read_more_text              = $row['cta_read_more_text'];
   $cta_read_more_url               = $row['cta_read_more_url'];
   $cta_photo                       = $row['cta_photo'];
    $featured_product_title          = $row['featured_product_title'];
    $featured_product_subtitle       = $row['featured_product_subtitle'];
    $latest_product_title            = $row['latest_product_title'];
    $latest_product_subtitle         = $row['latest_product_subtitle'];
    $popular_product_title           = $row['popular_product_title'];
    $popular_product_subtitle        = $row['popular_product_subtitle'];
   $testimonial_title               = $row['testimonial_title'];
   $testimonial_subtitle            = $row['testimonial_subtitle'];
   $testimonial_photo               = $row['testimonial_photo'];
   $blog_title                      = $row['blog_title'];
   $blog_subtitle                   = $row['blog_subtitle'];
    $newsletter_text                 = $row['newsletter_text'];
    $paypal_email                    = $row['paypal_email'];
   $stripe_public_key               = $row['stripe_public_key'];
   $stripe_secret_key               = $row['stripe_secret_key'];
    $bank_detail                     = $row['bank_detail'];
    $before_head                     = $row['before_head'];
    $after_body                      = $row['after_body'];
    $before_body                     = $row['before_body'];
    $home_service_on_off             = $row['home_service_on_off'];
    $home_welcome_on_off             = $row['home_welcome_on_off'];
    $home_featured_product_on_off    = $row['home_featured_product_on_off'];
    $home_latest_product_on_off      = $row['home_latest_product_on_off'];
    $home_popular_product_on_off     = $row['home_popular_product_on_off'];
   $home_testimonial_on_off         = $row['home_testimonial_on_off'];
   $home_blog_on_off                = $row['home_blog_on_off'];
    $newsletter_on_off               = $row['newsletter_on_off'];
   $ads_above_welcome_on_off           = $row['ads_above_welcome_on_off'];
   $ads_above_featured_product_on_off  = $row['ads_above_featured_product_on_off'];
   $ads_above_latest_product_on_off    = $row['ads_above_latest_product_on_off'];
   $ads_above_popular_product_on_off   = $row['ads_above_popular_product_on_off'];
   $ads_above_testimonial_on_off       = $row['ads_above_testimonial_on_off'];
   $ads_category_sidebar_on_off        = $row['ads_category_sidebar_on_off'];
}
?>


<section class="content" style="min-height:auto;margin-bottom: -30px;">
    <div class="row">
        <div class="col-md-12">
            <?php if($error_message): ?>
            <div class="callout callout-danger">

                <p>
                    <?php echo $error_message; ?>
                </p>
            </div>
            <?php endif; ?>

            <?php if($success_message): ?>
            <div class="callout callout-success">

                <p><?php echo $success_message; ?></p>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="content">

    <div class="row">
        <div class="col-md-12">

            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab_1" data-toggle="tab">Logo</a></li>
                    <li><a href="#tab_2" data-toggle="tab">Favicon</a></li>
                    <li><a href="#tab_3" data-toggle="tab">Footer & Contact</a></li>
                    <li><a href="#tab_4" data-toggle="tab">Message Settings</a></li>
                    <li><a href="#tab_5" data-toggle="tab">Products</a></li>
                    <li><a href="#tab_6" data-toggle="tab">Home Settings</a></li>
                    <li><a href="#tab_7" data-toggle="tab">Banner Settings</a></li>
                    <li><a href="#tab_9" data-toggle="tab">Payment Settings</a></li>
                    <li><a href="#tab_10" data-toggle="tab">Head & Body Scripts</a></li>
                    <li><a href="#tab_11" data-toggle="tab">Ads</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1">


                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <div class="box box-info">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Photo existante</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <img src="../assets/uploads/<?php echo $logo; ?>" class="existing-photo"
                                                style="height:80px;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Nouvelle photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <input type="file" name="photo_logo">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left" name="form1">Mettre
                                                à jour le logo</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>




                    </div>
                    <div class="tab-pane" id="tab_2">

                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <div class="box box-info">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Photo existante</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <img src="../assets/uploads/<?php echo $favicon; ?>" class="existing-photo"
                                                style="height:40px;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Nouvelle photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <input type="file" name="photo_favicon">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left" name="form2">Mettre
                                                à jour le favicon</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>


                    </div>
                    <div class="tab-pane" id="tab_3">

                        <form class="form-horizontal" action="" method="post">
                            <div class="box box-info">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Newsletter Section </label>
                                        <div class="col-sm-3">
                                            <select name="newsletter_on_off" class="form-control" style="width:auto;">
                                                <option value="1"
                                                    <?php if($newsletter_on_off == 1) {echo 'selected';} ?>>On</option>
                                                <option value="0"
                                                    <?php if($newsletter_on_off == 0) {echo 'selected';} ?>>Off</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Footer - Copyright </label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="footer_copyright"
                                                value="<?php echo $footer_copyright; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Adresse de contact</label>
                                        <div class="col-sm-6">
                                            <textarea class="form-control" name="contact_address"
                                                style="height:140px;"><?php echo $contact_address; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Email du contact</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="contact_email"
                                                value="<?php echo $contact_email; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">numéro de téléphone de contact
                                        </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="contact_phone"
                                                value="<?php echo $contact_phone; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Contact Fax Number </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="contact_fax"
                                                value="<?php echo $contact_fax; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Carte de contact iFrame </label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="contact_map_iframe"
                                                style="height:200px;"><?php echo $contact_map_iframe; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left"
                                                name="form3">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>


                    </div>

                    <div class="tab-pane" id="tab_4">

                        <form class="form-horizontal" action="" method="post">
                            <div class="box box-info">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Adresse e-mail de contact</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="receive_email"
                                                value="<?php echo $receive_email; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Objet de l'e-mail de
                                            contact</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="receive_email_subject"
                                                value="<?php echo $receive_email_subject; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Contact E-mail Message de
                                            remerciement</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control"
                                                name="receive_email_thank_you_message"><?php echo $receive_email_thank_you_message; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Mot de passe oublié Message</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control"
                                                name="forget_password_message"><?php echo $forget_password_message; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-5">
                                            <button type="submit" class="btn btn-success pull-left"
                                                name="form4">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>


                    </div>

                    <div class="tab-pane" id="tab_5">

                        <form class="form-horizontal" action="" method="post">
                            <div class="box box-info">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="" class="col-sm-4 control-label">Footer (How many recent
                                            posts?)<span>*</span></label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" name="total_recent_post_footer"
                                                value="<?php echo $total_recent_post_footer; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-4 control-label">Footer (How many popular
                                            posts?)<span>*</span></label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" name="total_popular_post_footer"
                                                value="<?php echo $total_popular_post_footer; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-4 control-label">Sidebar (How many recent
                                            posts?)<span>*</span></label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" name="total_recent_post_sidebar"
                                                value="<?php echo $total_recent_post_sidebar; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-4 control-label">Sidebar (How many popular
                                            posts?)<span>*</span></label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" name="total_popular_post_sidebar"
                                                value="<?php echo $total_popular_post_sidebar; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-4 control-label">Page D'acceuil (Combien de produits
                                            vedettes?)<span>*</span></label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" name="total_featured_product_home"
                                                value="<?php echo $total_featured_product_home; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-4 control-label">Page D'acceuil (Combien de dernier
                                            produit?)<span>*</span></label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" name="total_latest_product_home"
                                                value="<?php echo $total_latest_product_home; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-4 control-label">Page D'acceuil (Combien de produit
                                            populaire?)<span>*</span></label>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" name="total_popular_product_home"
                                                value="<?php echo $total_popular_product_home; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-4 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left"
                                                name="form5">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>


                    </div>




                    <div class="tab-pane" id="tab_6">


                        <h3>Sections On and Off</h3>
                        <form class="form-horizontal" action="" method="post">
                            <div class="box box-info">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Service Section </label>
                                        <div class="col-sm-4">
                                            <select name="home_service_on_off" class="form-control" style="width:auto;">
                                                <option value="1"
                                                    <?php if($home_service_on_off == 1) {echo 'selected';} ?>>On
                                                </option>
                                                <option value="0"
                                                    <?php if($home_service_on_off == 0) {echo 'selected';} ?>>Off
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Welcome Section </label>
                                        <div class="col-sm-4">
                                            <select name="home_welcome_on_off" class="form-control" style="width:auto;">
                                                <option value="1"
                                                    <?php if($home_welcome_on_off == 1) {echo 'selected';} ?>>On
                                                </option>
                                                <option value="0"
                                                    <?php if($home_welcome_on_off == 0) {echo 'selected';} ?>>Off
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Produit en vedette Section </label>
                                        <div class="col-sm-4">
                                            <select name="home_featured_product_on_off" class="form-control"
                                                style="width:auto;">
                                                <option value="1"
                                                    <?php if($home_featured_product_on_off == 1) {echo 'selected';} ?>>
                                                    On</option>
                                                <option value="0"
                                                    <?php if($home_featured_product_on_off == 0) {echo 'selected';} ?>>
                                                    Off</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Dernier produit Section </label>
                                        <div class="col-sm-4">
                                            <select name="home_latest_product_on_off" class="form-control"
                                                style="width:auto;">
                                                <option value="1"
                                                    <?php if($home_latest_product_on_off == 1) {echo 'selected';} ?>>On
                                                </option>
                                                <option value="0"
                                                    <?php if($home_latest_product_on_off == 0) {echo 'selected';} ?>>Off
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Produit populaire Section </label>
                                        <div class="col-sm-4">
                                            <select name="home_popular_product_on_off" class="form-control"
                                                style="width:auto;">
                                                <option value="1"
                                                    <?php if($home_popular_product_on_off == 1) {echo 'selected';} ?>>On
                                                </option>
                                                <option value="0"
                                                    <?php if($home_popular_product_on_off == 0) {echo 'selected';} ?>>
                                                    Off</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Testimonial Section </label>
                                        <div class="col-sm-4">
                                            <select name="home_testimonial_on_off" class="form-control"
                                                style="width:auto;">
                                                <option value="1"
                                                    <?php if($home_testimonial_on_off == 1) {echo 'selected';} ?>>On
                                                </option>
                                                <option value="0"
                                                    <?php if($home_testimonial_on_off == 0) {echo 'selected';} ?>>Off
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Blog Section </label>
                                        <div class="col-sm-4">
                                            <select name="home_blog_on_off" class="form-control" style="width:auto;">
                                                <option value="1"
                                                    <?php if($home_blog_on_off == 1) {echo 'selected';} ?>>On</option>
                                                <option value="0"
                                                    <?php if($home_blog_on_off == 0) {echo 'selected';} ?>>Off</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left"
                                                name="form6_0">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>


                        <h3>Meta Section</h3>
                        <form class="form-horizontal" action="" method="post">
                            <div class="box box-info">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Title </label>
                                        <div class="col-sm-8">
                                            <input type="text" name="meta_title_home" class="form-control"
                                                value="<?php echo $meta_title_home ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Keyword </label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="meta_keyword_home"
                                                style="height:100px;"><?php echo $meta_keyword_home ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Description </label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="meta_description_home"
                                                style="height:200px;"><?php echo $meta_description_home ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left"
                                                name="form6">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>



                        <h3>Call to Action Section</h3>
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <div class="box box-info">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Title<span>*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="cta_title"
                                                value="<?php echo $cta_title; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Content<span>*</span></label>
                                        <div class="col-sm-8">
                                            <textarea name="cta_content" class="form-control" cols="30" rows="10"
                                                style="height:120px;"><?php echo $cta_content; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Read More
                                            Text<span>*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="cta_read_more_text"
                                                value="<?php echo $cta_read_more_text; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Read More URL<span>*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="cta_read_more_url"
                                                value="<?php echo $cta_read_more_url; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Existing Call to Action
                                            Background</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <img src="../assets/uploads/<?php echo $cta_photo; ?>"
                                                class="existing-photo" style="height:80px;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">New Background</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <input type="file" name="cta_photo">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left"
                                                name="form6_7">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>





                        <h3>Featured Product Section</h3>
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <div class="box box-info">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Titre du produit en
                                            vedette<span>*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="featured_product_title"
                                                value="<?php echo $featured_product_title; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Sous-titre du produit en
                                            vedette<span>*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="featured_product_subtitle"
                                                value="<?php echo $featured_product_subtitle; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left"
                                                name="form6_4">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>


                        <h3>dernier produit Section</h3>
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <div class="box box-info">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Titre du dernier
                                            produit<span>*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="latest_product_title"
                                                value="<?php echo $latest_product_title; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Sous-titre du dernier
                                            produit<span>*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="latest_product_subtitle"
                                                value="<?php echo $latest_product_subtitle; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left"
                                                name="form6_5">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>


                        <h3>Produit populaire Section</h3>
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <div class="box box-info">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Titre du produit
                                            populaire<span>*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="popular_product_title"
                                                value="<?php echo $popular_product_title; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Sous-titre du produit
                                            populaire<span>*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="popular_product_subtitle"
                                                value="<?php echo $popular_product_subtitle; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left"
                                                name="form6_6">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>



                        <h3>Testimonial Section</h3>
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <div class="box box-info">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Testimonial Section
                                            Title<span>*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="testimonial_title"
                                                value="<?php echo $testimonial_title; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Testimonial Section
                                            SubTitle<span>*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="testimonial_subtitle"
                                                value="<?php echo $testimonial_subtitle; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Existing Testimonial
                                            Background</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <img src="../assets/uploads/<?php echo $testimonial_photo; ?>"
                                                class="existing-photo" style="height:80px;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">New Background</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <input type="file" name="testimonial_photo">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left"
                                                name="form6_1">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>


                        <h3>Blog Section</h3>
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <div class="box box-info">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Blog Section
                                            Title<span>*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="blog_title"
                                                value="<?php echo $blog_title; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Blog Section
                                            SubTitle<span>*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="blog_subtitle"
                                                value="<?php echo $blog_subtitle; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left"
                                                name="form6_2">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>




                        <h3>Newsletter Section</h3>
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <div class="box box-info">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Newsletter Text</label>
                                        <div class="col-sm-8">
                                            <textarea name="newsletter_text" class="form-control" cols="30" rows="10"
                                                style="height: 120px;"><?php echo $newsletter_text; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left"
                                                name="form6_3">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>


                    </div>



                    <div class="tab-pane" id="tab_7">

                        <table class="table table-bordered">
                            <tr>
                                <form action="" method="post" enctype="multipart/form-data">
                                    <td style="width:50%">
                                        <h4>Bannière de page de connexion existante</h4>
                                        <p>
                                            <img src="<?php echo '../assets/uploads/'.$banner_login; ?>" alt=""
                                                style="width: 100%;height:auto;">
                                        </p>
                                    </td>
                                    <td style="width:50%">
                                        <h4>Modifier la bannière de la page de connexion</h4>
                                        Sélectionnez une photo<input type="file" name="photo">
                                        <input type="submit" class="btn btn-primary btn-xs" value="Change"
                                            style="margin-top:10px;" name="form7_1">
                                    </td>
                                </form>
                            </tr>
                            <tr>
                                <form action="" method="post" enctype="multipart/form-data">
                                    <td style="width:50%">
                                        <h4>Bannière de la page d'inscription existante</h4>
                                        <p>
                                            <img src="<?php echo '../assets/uploads/'.$banner_registration; ?>" alt=""
                                                style="width: 100%;height:auto;">
                                        </p>
                                    </td>
                                    <td style="width:50%">
                                        <h4>Modifier la bannière de la page d'inscription</h4>
                                        Sélectionnez une photo<input type="file" name="photo">
                                        <input type="submit" class="btn btn-primary btn-xs" value="Change"
                                            style="margin-top:10px;" name="form7_2">
                                    </td>
                                </form>
                            </tr>
                            <tr>
                                <form action="" method="post" enctype="multipart/form-data">
                                    <td style="width:50%">
                                        <h4>Bannière de page Oubli de mot de passe existante</h4>
                                        <p>
                                            <img src="<?php echo '../assets/uploads/'.$banner_forget_password; ?>"
                                                alt="" style="width: 100%;height:auto;">
                                        </p>
                                    </td>
                                    <td style="width:50%">
                                        <h4>Modifier la bannière de la page Mot de passe oublié</h4>
                                        Sélectionnez une photo<input type="file" name="photo">
                                        <input type="submit" class="btn btn-primary btn-xs" value="Change"
                                            style="margin-top:10px;" name="form7_3">
                                    </td>
                                </form>
                            </tr>
                            <tr>
                                <form action="" method="post" enctype="multipart/form-data">
                                    <td style="width:50%">
                                        <h4>Bannière de la page de réinitialisation du mot de passe existante</h4>
                                        <p>
                                            <img src="<?php echo '../assets/uploads/'.$banner_reset_password; ?>" alt=""
                                                style="width: 100%;height:auto;">
                                        </p>
                                    </td>
                                    <td style="width:50%">
                                        <h4>Modifier la bannière de la page de réinitialisation du mot de passe</h4>
                                        Sélectionnez une photo<input type="file" name="photo">
                                        <input type="submit" class="btn btn-primary btn-xs" value="Change"
                                            style="margin-top:10px;" name="form7_4">
                                    </td>
                                </form>
                            </tr>

                            <tr>
                                <form action="" method="post" enctype="multipart/form-data">
                                    <td style="width:50%">
                                        <h4>Bannière de page de recherche existante</h4>
                                        <p>
                                            <img src="<?php echo '../assets/uploads/'.$banner_search; ?>" alt=""
                                                style="width: 100%;height:auto;">
                                        </p>
                                    </td>
                                    <td style="width:50%">
                                        <h4>Modifier la bannière de la page de recherche</h4>
                                        Sélectionnez une photo<input type="file" name="photo">
                                        <input type="submit" class="btn btn-primary btn-xs" value="Change"
                                            style="margin-top:10px;" name="form7_6">
                                    </td>
                                </form>
                            </tr>


                            <tr>
                                <form action="" method="post" enctype="multipart/form-data">
                                    <td style="width:50%">
                                        <h4>Bannière de page de panier existante</h4>
                                        <p>
                                            <img src="<?php echo '../assets/uploads/'.$banner_cart; ?>" alt=""
                                                style="width: 100%;height:auto;">
                                        </p>
                                    </td>
                                    <td style="width:50%">
                                        <h4>Modifier la bannière de la page du panier</h4>
                                        Sélectionnez une photo<input type="file" name="photo">
                                        <input type="submit" class="btn btn-primary btn-xs" value="Change"
                                            style="margin-top:10px;" name="form7_7">
                                    </td>
                                </form>
                            </tr>


                            <tr>
                                <form action="" method="post" enctype="multipart/form-data">
                                    <td style="width:50%">
                                        <h4>Bannière de page de paiement existante</h4>
                                        <p>
                                            <img src="<?php echo '../assets/uploads/'.$banner_checkout; ?>" alt=""
                                                style="width: 100%;height:auto;">
                                        </p>
                                    </td>
                                    <td style="width:50%">
                                        <h4>Modifier la bannière de la page de paiement</h4>
                                        Sélectionnez une photo<input type="file" name="photo">
                                        <input type="submit" class="btn btn-primary btn-xs" value="Change"
                                            style="margin-top:10px;" name="form7_8">
                                    </td>
                                </form>
                            </tr>

                            <tr>
                                <form action="" method="post" enctype="multipart/form-data">
                                    <td style="width:50%">
                                        <h4>Bannière de page de catégorie de produit existante</h4>
                                        <p>
                                            <img src="<?php echo '../assets/uploads/'.$banner_product_category; ?>"
                                                alt="" style="width: 100%;height:auto;">
                                        </p>
                                    </td>
                                    <td style="width:50%">
                                        <h4>Modifier la bannière de la page de catégorie de produit</h4>
                                        Sélectionnez une photo<input type="file" name="photo">
                                        <input type="submit" class="btn btn-primary btn-xs" value="Change"
                                            style="margin-top:10px;" name="form7_9">
                                    </td>
                                </form>
                            </tr>

                            <tr>
                                <form action="" method="post" enctype="multipart/form-data">
                                    <td style="width:50%">
                                        <h4>Existing Blog Page Banner</h4>
                                        <p>
                                            <img src="<?php echo '../assets/uploads/'.$banner_blog; ?>" alt=""
                                                style="width: 100%;height:auto;">
                                        </p>
                                    </td>
                                    <td style="width:50%">
                                        <h4>Change Blog Page Banner</h4>
                                        Sélectionnez une photo<input type="file" name="photo">
                                        <input type="submit" class="btn btn-primary btn-xs" value="Change"
                                            style="margin-top:10px;" name="form7_10">
                                    </td>
                                </form>
                            </tr>
                        </table>

                    </div>




                    <!-- PAYMENT METHODS TAB -->



                    <div class="tab-pane" id="tab_9">
                        <form class="form-horizontal" action="" method="post">
                            <div class="box box-info">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">PayPal - Business Email </label>
                                        <div class="col-sm-5">
                                            <input type="text" name="paypal_email" class="form-control"
                                                value="<?php echo $paypal_email; ?>">
                                        </div>
                                    </div>
                                    <!-- <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Stripe - Public Key </label>
                                            <div class="col-sm-5">
                                                <input type="text" name="stripe_public_key" class="form-control" value="<?php echo $stripe_public_key; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="col-sm-2 control-label">Stripe - Secret Key </label>
                                            <div class="col-sm-5">
                                                <input type="text" name="stripe_secret_key" class="form-control" value="<?php echo $stripe_secret_key; ?>">
                                            </div>
                                        </div> -->
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Informations bancaires</label>
                                        <div class="col-sm-5">
                                            <textarea name="bank_detail" class="form-control" cols="30"
                                                rows="10"><?php echo $bank_detail; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left" name="form9">Mise à
                                                jour</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>


                    <div class="tab-pane" id="tab_10">
                        <form class="form-horizontal" action="" method="post">
                            <div class="box box-info">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Code before &lt;/head&gt; tag
                                        </label>
                                        <div class="col-sm-8">
                                            <textarea name="before_head" class="form-control" cols="30"
                                                rows="10"><?php echo $before_head; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Code after &lt;body&gt; tag
                                        </label>
                                        <div class="col-sm-8">
                                            <textarea name="after_body" class="form-control" cols="30"
                                                rows="10"><?php echo $after_body; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label">Code before &lt;/body&gt; tag
                                        </label>
                                        <div class="col-sm-8">
                                            <textarea name="before_body" class="form-control" cols="30"
                                                rows="10"><?php echo $before_body; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left"
                                                name="form10">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>



                    <div class="tab-pane" id="tab_11">
                        <h3>Advertisements On and Off</h3>
                        <form class="form-horizontal" action="" method="post">
                            <div class="box box-info">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Above Welcome </label>
                                        <div class="col-sm-4">
                                            <select name="ads_above_welcome_on_off" class="form-control"
                                                style="width:auto;">
                                                <option value="1"
                                                    <?php if($ads_above_welcome_on_off == 1) {echo 'selected';} ?>>On
                                                </option>
                                                <option value="0"
                                                    <?php if($ads_above_welcome_on_off == 0) {echo 'selected';} ?>>Off
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Above Featured Product </label>
                                        <div class="col-sm-4">
                                            <select name="ads_above_featured_product_on_off" class="form-control"
                                                style="width:auto;">
                                                <option value="1"
                                                    <?php if($ads_above_featured_product_on_off == 1) {echo 'selected';} ?>>
                                                    On</option>
                                                <option value="0"
                                                    <?php if($ads_above_featured_product_on_off == 0) {echo 'selected';} ?>>
                                                    Off</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Above Latest Product </label>
                                        <div class="col-sm-4">
                                            <select name="ads_above_latest_product_on_off" class="form-control"
                                                style="width:auto;">
                                                <option value="1"
                                                    <?php if($ads_above_latest_product_on_off == 1) {echo 'selected';} ?>>
                                                    On</option>
                                                <option value="0"
                                                    <?php if($ads_above_latest_product_on_off == 0) {echo 'selected';} ?>>
                                                    Off</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Above Popular Product </label>
                                        <div class="col-sm-4">
                                            <select name="ads_above_popular_product_on_off" class="form-control"
                                                style="width:auto;">
                                                <option value="1"
                                                    <?php if($ads_above_popular_product_on_off == 1) {echo 'selected';} ?>>
                                                    On</option>
                                                <option value="0"
                                                    <?php if($ads_above_popular_product_on_off == 0) {echo 'selected';} ?>>
                                                    Off</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Above Testimonial </label>
                                        <div class="col-sm-4">
                                            <select name="ads_above_testimonial_on_off" class="form-control"
                                                style="width:auto;">
                                                <option value="1"
                                                    <?php if($ads_above_testimonial_on_off == 1) {echo 'selected';} ?>>
                                                    On</option>
                                                <option value="0"
                                                    <?php if($ads_above_testimonial_on_off == 0) {echo 'selected';} ?>>
                                                    Off</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Category Page Sidebar </label>
                                        <div class="col-sm-4">
                                            <select name="ads_category_sidebar_on_off" class="form-control"
                                                style="width:auto;">
                                                <option value="1"
                                                    <?php if($ads_category_sidebar_on_off == 1) {echo 'selected';} ?>>On
                                                </option>
                                                <option value="0"
                                                    <?php if($ads_category_sidebar_on_off == 0) {echo 'selected';} ?>>
                                                    Off</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left"
                                                name="form11">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>



                </div>
            </div>



            </form>
        </div>
    </div>

</section>

<?php require_once('footer.php'); ?>