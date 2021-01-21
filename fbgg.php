
<?php require './fbconfig.php';?>
<?php if(isset($_SESSION['access_token'])):?>
<a href="logout.php"> logout</a>
<?php else: ?>
<a href="<?php echo $login_url;?>">login fb </a>
<?php endif;?>


<?php

 $login_button='';
if(isset($_GET["code"])){
    $token=$google_client->fetchAccessTokenWithAuthCode($_GET["code"]);
    if(!isset($token['error'])){
        $google_client->setAccessToken($token['access_token']);
        $_SESSION['access_token']=$token['access_token'];
        $google_service=new Google_Service_Oauth2($google_client);
        $data=$google_service->userinfo->get();
        if(!empty($data['given_name'])){
            $_SESSION['user_first_name']=$data['given_name'];
        }
        if(!empty($data['family_name'])){
            $_SESSION['user_last_name']=$data['family_name'];
            
        }
        if(!empty($data['email'])){
            $_SESSION['user_email_address']=$data['email'];
            
        }
        if(!empty($data['gender'])){
            $_SESSION['user_gender']=$data['gender'];
            
        }
        if(!empty($data['picture'])){
            $_SESSION['user_image']=$data['picture'];
            
        }
    }
}
if(!isset($_SESSION['access_token'])){
    $login_button='<a href="'.$google_client->createAuthUrl().'"><img src="download.png"/>login gg</a>';
}
?>
<?php
 if($login_button==''){
    echo '<img src="'.$_SESSION["user_image"].'"/>';
    echo '<h3 '.$_SESSION["user_first_name"].''.$_SESSION['user_last_name'].'</h3>';
    echo '<h3>'.$_SESSION['user_email_address'].'</h3>';
    echo '<a href="logout.php"> logout</a>';
}
else{
    echo '<div>'.$login_button.'</div>';
}
?>