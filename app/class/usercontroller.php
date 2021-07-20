<?php 
      require_once("user.php");
      require_once("userservice.php");
      class userController
      {
          private  $userService;

          function __construct()
          {
              $this->userService=new UserService();
          }
          public function setUser(UserService $_userservice){
                $this->user=$_userservice;
          }

          public function getUser(){
              return $this->userService;
          }

          public function userControlRegister(User $user){
              $this->userService->registerUser($user);
          }
      }

?>