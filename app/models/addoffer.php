<?php
include "Database_2.php";
class addd
{   
    
    //  id 	itemId 	unitPrice 	description 	vendorId 
    //private $id            ;
    private $itemId        ;
    private $unitPrice     ;
    private $vaendorId     ;
    private $description    ;
    
    private $db            ;   // Database Object
    
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
        $this->addoffer();
        
    }
      private function connectToDb()
    {
        $this->db=new Database_2("localhost","root","project");
    }
        
    private function setData($data)
    {
        $this->itemId        = $data['itemId']     ; 
        $this->unitPrice     = $data['unitPrice']  ;
        $this->description   = date("description") ;
       
    }
    
    function addoffer()
    {      
           $vendorun = $_SESSION['username'];
           $sprice = "SELECT `vendorID` FROM `users`  WHERE `username` = $vendorun  " ;
           $querry = $this->db->conn->prepare($sprice);
           $querry->execute();
         
            $sql = "INSERT INTO `users` (`id`, `itemId`, `unitPrice`, `description`, `vendorId` )
                    VALUES 
                    ('','$this->itemId','$this->unitPrice','$this->description','$this->vaendorId')";
            $this->db->conn->exec($sql);
            //$nw = $this->newexistMount[0] - $this->amount;
            //$ol  = $this->newsoldMount[0]  + $this->amount;
         //   $sql1 ="UPDATE `items`
       //             SET `existMount` = $nw  , `soldMount` = $ol 
     //               WHERE `id`=$this->itemId"; 
   //         $this->db->conn->exec($sql1);
            echo '<h1>Done</h1>';
    }
    
    

    function close()
    {
        $this->db->close();
    }
    
}

?>