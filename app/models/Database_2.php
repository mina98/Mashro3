<?php
// include '../includes/global.php';

class Database_2 
{
    private $host;
    private $user;
    private $password;
    private $database;
    public $conn;
            function __construct($host,$user,$db)
    {   
        $this->host = $host;
        $this->user = $user;
        $this->password = "";
        $this->database = $db;
        $this->connect();
    }
    
    private function connect()
    {  
        //connect to the server
        
        $this->conn = new PDO("mysql:host=$this->host;dbname=$this->database", $this->user, $this->password, 
                array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        
    }
    
    function close()
    {
        unset($this->conn);
        $this->conn = null;
    }
}

?>
