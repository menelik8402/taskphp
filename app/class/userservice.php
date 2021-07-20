<?php 
        require_once("user.php");
        require_once("/../dbRepository/database.php");
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
                            $stament->bind_param("sssss",$user->getId(),$user->getName(),$user->getLastname(),$user->getEmail(),$user->getPassword());
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