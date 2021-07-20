<?php

//require_once("/xampp/htdocs/Task/app/class/usercontroller.php");
require_once("../app/class/usercontroller.php");

$action=isset($_POST['action']);

switch ($action) {
        case "register_user":
        $userControler=new userController();
        $userControler->userControlRegister(new User($_POST['name'],$_POST['lastname'],$_POST['id'],$_POST['email'],password_hash($_POST['password'], PASSWORD_DEFAULT)));
        
        break;
        case "change_password":
            print "i es igual a 1";
        break;
        
  }

?>