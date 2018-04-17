<?php


include 'abastractConnect.php';

class Login extends abastractConnect {

    private $username;
    private $password;
//    private $db;       // database object
    
    function __construct($username, $password) {
        // set data
        $this->setData($username, $password);
        // connect DB
        $this->connectToDb();
        // get Data
        $this->getData();
    }
    private function setData($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }

    function getData() {        
         $sql = "SELECT * FROM `users` WHERE `username` = :username  AND `password` = :password";        
        try {
            $query = $this->db->conn->prepare($sql);
            $query->bindparam(':username', $this->username, PDO::PARAM_STR);
            $query->bindparam(':password', $this->password, PDO::PARAM_STR);
            $query->execute();
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
        
        $result = $query->fetch();
        if ($result !== FALSE) {
            return TRUE;
        } else {
            throw new Exception("Username or password is invalid, please try again.");
        }
    }
    
    function getrole($username){
      
        $sql = "SELECT * FROM `users` WHERE `username` = '$username' ";
        $query = $this->db->conn->prepare($sql);
        $query->execute();
        $userdata = $query->fetch();
        return $userdata;
    
        
    }

   
}

?>
