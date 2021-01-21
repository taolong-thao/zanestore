<?php

require_once './vendor/autoload.php';
$google_client  = new Google_Client();
$google_client->setClientId('250730536882-1o9g16t8k05239mmij66aq2u757c8t4j.apps.googleusercontent.com');
$google_client->setClientSecret('Y4vfzsR6OVEaB20Fur65v0nI');
$google_client->setRedirectUri('http://localhost:8080/doan/index.php');
$google_client->addScope('email');
$google_client->addScope('profile');

?>
