<?php 
       require_once('vendor/autoload.php');
       require_once('app/class/google_auth.php');
       require_once('app/init.php');

       $googleClient = new Google_Client();
       $auth =new GoogleAuth($googleClient);

  
?>