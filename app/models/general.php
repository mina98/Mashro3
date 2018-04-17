<?php

include_once "abastractConnect.php";
class general extends abastractConnect {

    private $data;
    private $tablename;
 
    //private $cxn; 

    public function __construct() {
        
        $this->connectToDb();

       
    }

    
 function change($userid){
     echo $userid;
      $sql = "SELECT * FROM `users` WHERE `id` = '$userid' ";
        $query = $this->db->conn->prepare($sql);
       $statue = $query->execute();
       
        $userdata = $query->fetch();
       // print_r($userdata);
       // print_r($userdata); 
        $change;
       if ($userdata['active'] == 'active')
       { 
           $change ='pending';
           
       }
       else {
           $change ='active';
       }
      $sql = "UPDATE `users` SET `active` = '$change' WHERE `id` = '$userid' ";
        $query = $this->db->conn->prepare($sql);
        $query->execute();
       
        $this->close();
       // return $userdata;
    
        
    }
}

?>
