<?php

include 'abastractConnect.php';
class Delete extends abastractConnect {
    
    private $tablename;
    
    public function __construct($tablename) {
        $this->tablename = $tablename;
        $this->connectToDb();
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
    function updateRecordByID($id,$colom,$newvar,$wherecond)
    {
        $id = intval($id);
        $sql = "UPDATE `$this->tablename`
                SET  `$colom` = '$newvar'
               WHERE  `$wherecond` = $id";
        $query = $this->db->conn->prepare($sql);
        if(!$query->execute())
        {
            throw new Exception("Error: not UPDATE.");
        }
        else
        {
            return TRUE;
        }
    
}
}
?>
