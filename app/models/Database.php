<?php
// include '../includes/global.php';
class Database 
{
    private $host;
    private $user;
    private $password;
    private $database;
    public $conn;
            function __construct($filename)
    {
        if(is_file($filename))
            include $filename;
        else 
            throw new Exception("Error: Not connected!");
        
        $this->host = "localhost";
        $this->user = "root";
        $this->password = "";
        $this->database = "project"; 
        
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
