<?php


//include "../includes/global.php";
include "abastractConnect.php";
class Register extends abastractConnect
{  //`id`, `name`, `username`, `password`, `adress`, `email`, `image`, `type`
    
    // Register attributes
    private $name;
    private $email;
    private $username;
    private $password;
    private $adress;
   // private $image;
   // private $type = 3;
   // private $db;   // Database Object
    
    function __construct($data)
    {
        // is_array validation
        if(is_array($data))        
            $this->setData($data);        
        else        
            throw new Exception("Error: Data must be in an array.");        
        
        // Connect to database
        $this->connectToDb();
        // insert user data
        $this->rgisterUser();
        
    }
    
    private function setData($data)
    {
        $this->name     = $data['name'];
        $this->username = $data['username']; 
        $this->password = $data['password'];
        $this->adress    =$data['adress'];
        $this->email    = $data['email'];
        //$this->image = $data['image'];
        //$this->type = $data['type'];
    
        
    }
    
  
    
    function rgisterUser()
    {
         //`id`, `name`, `username`, `password`, `adress`, `email`, `image`, `type`
        $sql = "INSERT INTO `users` (`id`, `name`, `username`, `password`, `adress` ,`email` ,`image`,`type`)
          VALUES 
            ('','$this->name','$this->username','$this->password','$this->adress','$this->email','','5')";
        
        $this->db->conn->exec($sql);
        
        if($sql) {  header("location:../views/loginview.php"); 
                 echo"<div style='width:100%; height:50px; background:#008600; z_index:3; color:#fff;'>Registered successfuly now you can login</div>";
               
                 
                 
                  die();
        }
        else        throw new Exception("Error: not registerd");
        
    }
   
}

?>
