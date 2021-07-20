<?php

require_once("/xampp/htdocs/Task/app/class/usercontroller.php");

$action=isset($_POST['action']);

switch ($action) {
        case "register_user":
        $userControler=new userController();
        $userControler->userControlRegister(new User($_POST['name'],$_POST['lastname'],$_POST['id'],$_POST['email'],$_POST['password']));
        case "change_password":
            print "i es igual a 1";
        
  }

?>