<?php

include_once "abastractConnect.php";
class Add extends abastractConnect {

    private $data;
    private $tablename;
 
    //private $cxn; 

    public function __construct($data, $tablename) {
        if (is_array($data)) {
            $this->data = $data;
            $this->tablename = $tablename;
        } else {
            throw new Exception("Error: the data must be in an array.");
        }

        $this->connectToDb();

        // isert the data into the table
        $this->AddData($this->data);

        $this->close();
    }

    // isert the data into the table
    function AddData($data) {
        
        foreach ($data as $key => $value) {
            $keys[] = $key;
            $values[] = $value;
        }

        $tblKeys = implode($keys, ",");        
        $keyss = ':' . implode($keys, ",:");

        $sql = "INSERT INTO $this->tablename ($tblKeys) VALUES ($keyss)";
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

}

?>
