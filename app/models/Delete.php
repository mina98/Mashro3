<?php


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
    
}

?>
