<?php
include_once "Database_2.php";
class addd
{   
    private $it            ;
    private $itemName      ;
    private $itemId      ;
    private $id            ;
    private $amount        ;
    private $price         ;
    private $totalprice    ;
    private $datee         ;
    private $db            ;   // Database Object
    private $newexistMount ;
    private $newsoldMount  ;
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
        $this->addinvoice();
        
    }
      private function connectToDb()
    {
        $this->db=new Database_2("localhost","root","project");
    }
        
    private function setData($data)
    {
        $this->itemName     =$data['itemName']     ; 
        $this->amount     = $data['amount']     ;
        $this->datee      = date("Y/m/d")       ;
       
    }
    
    function addinvoice()
    {      $itemId="SELECT `id` FROM `items` WHERE `name` LIKE '$this->itemName'";
           $querry = $this->db->conn->prepare($itemId);
           $querry->execute();
           $t = $querry->fetch();
           $this->itemId=$t[0];
           $its  = "SELECT MAX(`id`) FROM `invoices` ";
           $querry = $this->db->conn->prepare($its);
           $querry->execute();
           $this->it = $querry->fetch();
           $aaa = $this->it[0] + 1;
           $sprice = "SELECT `unitPrice` FROM `items`  WHERE `id` = $this->itemId" ;
           $querry = $this->db->conn->prepare($sprice);
           $querry->execute();
           $this->price = $querry->fetch();
           $aa = $this->price[0];
           $this->totalprice = $this->price[0] * $this->amount   ;
           $snewexistMount = "SELECT `existMount` FROM `items` WHERE `id`= $this->itemId";
           $quersy = $this->db->conn->prepare($snewexistMount);
           $quersy->execute();
           $this->newexistMount = $quersy->fetch();
           $snewsoldMount  = "SELECT `soldMount` FROM `items` WHERE `id` = $this->itemId";
           $queray = $this->db->conn->prepare($snewsoldMount);
           $queray->execute();
           $this->newsoldMount = $queray->fetch();
            $sql = "INSERT INTO `invoices` (`id`, `itemId`, `unitPrice`, `Mount`, `totalPrice` ,`invoiceDate`)
                    VALUES 
                    ('$aaa','$this->itemId','$aa','$this->amount','$this->totalprice','$this->datee')";
            $this->db->conn->exec($sql);
            $nw = $this->newexistMount[0] - $this->amount;
            $ol  = $this->newsoldMount[0]  + $this->amount;
            $sql1 ="UPDATE `items`
                    SET `existMount` = $nw  , `soldMount` = $ol 
                    WHERE `id`=$this->itemId"; 
            $this->db->conn->exec($sql1);
            //echo '<h1>Done</h1>';
    }
    
    

    function close()
    {
        $this->db->close();
    }
    
}

?>