
   <?php   
    session_start();
    require './vendor/autoload.php';
    $fb=new Facebook\Facebook([
        'app_id'=>'206035577675902',
        'app_secret'=>'a70d535c0f5210a20e65cc08f64b6e46',
        // 'default_graph_version'=>'v5.7'
    ]);

    $helper=$fb->getRedirectLoginHelper();
    $login_url=$helper->getLoginUrl("http://localhost:8080/doan/login.php");

    try {
        $accessToken= $helper->getAccessToken();
        if(isset($accessToken)){
            $_SESSION['access_token']=(string)$accessToken;
            header("Location:index.php");
        }
    } catch (Exception $exc) {
        echo $exc->getTraceAsString();
    }


    if(isset($_SESSION['access_token'])){
        try {
            $fb->setDefaultAccessToken($_SESSION['access_token']);
            $res=$fb->get('/me?locale=en_US&fields=name,email');
            $user=$res->getGraphUser();
            
            echo 'Hi!',$user->getField('name');
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    ////////////////////////
    // $google_client  = new Google_Client();
    // $google_client->setClientId('250730536882-1o9g16t8k05239mmij66aq2u757c8t4j.apps.googleusercontent.com');
    // $google_client->setClientSecret('Y4vfzsR6OVEaB20Fur65v0nI');
    // $google_client->setRedirectUri('http://localhost:8080/doan/index.php');
    // $google_client->addScope('email');
    // $google_client->addScope('profile');
   ?>
