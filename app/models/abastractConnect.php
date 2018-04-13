<?php


class abastractConnect {  
    
    //class attr
    protected $db;  // databse object => connection to Mysql
    
    
    //class methods or functions
    function connectToDb()
    {
       include  "Database_2.php";
        $this->db = new Database_2('localhost','root','project');
    }
    
    function close()
    {
        $this->db->close();
    }
    
}


