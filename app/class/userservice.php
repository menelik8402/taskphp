<?php 
        require_once("user.php");
        require_once("../app/dbRepository/database.php");
         class UserService{
                 private $dbrepository;

                 function __construct()
                 {
                         $this->dbrepository=new DBrepository();
                 }

                 public function registerUser(User $user){

                        try{
                            $connex=$this->dbrepository->getConnetion();
                            $query="INSERT INTO USER VALUES (?,?,?,?,?)";
                            $stament=$connex->prepare($query);
                            $id=$user->getId();
                            $name=$user->getName();
                            $lastname=$user->getLastname();
                            $email=$user->getEmail();
                            $pasword=$user->getPassword();
                            $stament->bind_param("sssss",$id,$name,$lastname,$email,$pasword);
                            $stament->execute();


                        }
                        catch(Exception $exp){
                                throw $exp;

                        }
                        finally{
                                $stament->close();  
                               $this->dbrepository->closeConnetion();
                        }
                 }



            



         }
    

?>