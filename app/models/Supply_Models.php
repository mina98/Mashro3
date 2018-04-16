<?php

include "abastractConnect.php";
/**
 * Description of Supply_Models
 *
 * @author mina
 */
class Supply_Models extends abastractConnect {
    //put your code here
    private $data;
    private $tablename;
     
    public function __construct($tablename) {
        /*if (is_array($data)) {
            $this->data = $data;
            $this->tablename = $tablename;
        } else {
            throw new Exception("Error: the data must be in an array.");
        }*/
$this->tablename=$tablename;
        $this->connectToDb();

        // isert the data into the table
      
    }

    // isert the data into the table
   public function AddData($data){
        foreach ($data as $key => $value) {
            $keys[] = $key;
            $values[] = $value;
        }
        
        $tblKeys = implode($keys, ",");        
        $keyss = ':' . implode($keys, ",:");
        
;        $sql = "INSERT INTO $this->tablename ($tblKeys) VALUES ($keyss)";
        $query = $this->db->conn->prepare($sql);
        foreach ($keys as $key) {
            $query->bindParam(":$key", $data[$key]);
        }
   
        
          if($query->execute())
          {
          return TRUE;
          }
          else
          {
       
              throw new Exception("Error: Can not excute the query.");
          return FALSE;
          } 
    }
      public  function getAllData() {
        $sql = "SELECT * FROM `$this->tablename` ORDER BY `id` ASC";
        $query = $this->db->conn->prepare($sql);
        $query->execute();
        $data = $query->fetchAll();
        
        return @$data;
    }

public function getRecordByID($id) {
        $id = intval($id);

        $sql = "SELECT * FROM `$this->tablename` WHERE `id`= $id";
        $query = $this->db->conn->prepare($sql);
        
        $query->execute();
        
        $this->recData = $query->fetch();
        return $this->recData;
    }
function getAllDataBy($choose) {  
        
        if ($choose=='1'){
$sql = "SELECT * FROM `$this->tablename` WHERE `vendorConfirm`= 'T' AND `adminConfirm`='F' ORDER By `id` ASC";}
        else if($choose=='2')
        { $sql = "SELECT I.name AS itemId ,U.name AS vendor ,MIN(O.unitPrice) As low FROM `$this->tablename` AS O INNER JOIN `items` AS I,`users` AS U Where O.vendorId=U.id AND U.type='4' AND O.itemId=I.id Group by (O.itemId)";}  
        else{$sql="select name ,existMount  from `items` order by `existMount` DESC  ";}
        
        $query = $this->db->conn->prepare($sql);
     //   print_r($query);
        $query->execute();
        $data = $query->fetchAll();
       
        return $data;
    }
    
     function deletRecordByID($id)
    {
        $id = intval($id);
        $sql = "DELETE FROM `$this->tablename` WHERE `id` = '$id' ";
        $query = $this->db->conn->prepare($sql);
        
        if(!$query->execute())
        {
            throw new Exception("Error: not deleted.");
        }
        else
        {
            return TRUE;
        }
    }
     function editData($data,$id) {
        $id = intval($id);
        
        $sql = "UPDATE $this->tablename SET ";
        foreach ($data as $key => $value) {
            
            $sql .= "`" . $key . "` = :" . $key . ", ";
        }
        $pat = "+-0*/";
        $sql .= $pat;
        $sql = str_replace(", " . $pat, " ", $sql);
        $sql .= " WHERE `id` = $id";
        
        $query = $this->db->conn->prepare($sql);

        foreach ($data as $key => $value) {
            $query->bindParam(":$key", $data[$key]);            
        }
        print_r($query) ;
        if ($query->execute()) {
            return TRUE;
        } else {
            throw new Exception("Error: Can not excute the query.");
            return FALSE;
        }
    }
}


