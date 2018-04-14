<?php
 include  "Database_2.php";

class abastractConnect {  
    
    //class attr
    protected $db;  // databse object => connection to Mysql
    
    
    //class methods or functions
    function connectToDb()
    {
      
        $this->db = new Database_2('localhost','root','project');
    }
    
    function close()
    {
        $this->db->close();
    }
    
}


