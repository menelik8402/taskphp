<?php 
       require_once('vendor/autoload.php');
       require_once('app/class/google_auth.php');
       require_once('app/init.php');

       $googleClient = new Google_Client();
       $auth =new GoogleAuth($googleClient);
       if($auth->checkRediretCode()){
          // die($_GET['code']);
          header('location: index.php');
       }

  
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
      <?php if(!$auth->isLoggedIn()): ?>
            <a href="<?php echo $auth->getAuthUri();  ?>">Start width Google</a>
            <br>
            <a href="enter.php">Another Login </a>
            <br>
            <a href="register.php">Register </a>
      <?php else: ?>   
        <a href="logout.php">Close Session</a>
      <?php endif ?>   
 </body>
 </html>