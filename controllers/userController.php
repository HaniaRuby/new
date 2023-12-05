<?php
include_once "DBController.php";

class UserController{


    protected $db;


    public function login(User $user){

        $this->db=new DBControllers;
        if($this->db->connectDB()){
            $ip=$user->getip();
            $pass=$user->getpass();
            $query="SELECT * FROM users WHERE ip='$ip' and pass='$pass'";
            $result=$this->db->selec($query);
            $row = $result->fetch_assoc();
            if($result->num_rows ==0){
                 // session_start();
                    $_SESSION["errmsg"]= "wrong user or password!";
                    return false;
            }
            else {

                //session_start();
                $_SESSION["ip"]=$row["ip"];
                
                
                    return true;
              } 
              
        

        
        }
        else{
            return false;
        }
    }

    public function signup(User $user) {
        $this->db = new DBControllers;
        
        if ($this->db->connectDB()) {
            $ip = $user->getip();
            $query = "SELECT * FROM users WHERE ip='$ip'";
            $result = $this->db->selec($query);
            
            if ($result) {
                $row = $result->fetch_assoc();
                if ($result->num_rows == 1) {
                    session_start();
                    $_SESSION["ip"] = $row["ip"]; 
                    return false; // User already exists, returning false
                }
            }

            $insertQuery = "INSERT INTO users (ip) VALUES ('$ip')";
            $insertResult = $this->db->inser($insertQuery);

            if ($insertResult) {
                session_start();
                $_SESSION["ip"] = $ip;
                return true; // User inserted successfully, returning true
            } else {
                return false; // Insertion failed, returning false
            }
        } else {
            return false; // Database connection failed, returning false
        }
    }

}
?>