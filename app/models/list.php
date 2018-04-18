<?php

include_once 'abastractConnect.php';

class Display extends abastractConnect {

    private $tablename;
    private $recData = array();

    public function __construct($tablename) {
        $this->tablename = $tablename;
        $this->connectToDb();
    }

    function getAllData() {
        $sql = "SELECT * FROM `$this->tablename` ORDER BY `id` ASC";
        $query = $this->db->conn->prepare($sql);
        $query->execute();
        $data = $query->fetchAll();
        
        return @$data;
    }

    function getLastRecordDESC() {

        $sql = "SELECT * FROM `$this->tablename` ORDER BY `id` DESC LIMIT 1";
        $query = $this->db->conn->prepare($sql);
        $query->execute();
        $data = $query->fetch();

        return $data;
    }
    function getLastUNEEDDESC($num) {
        $sql = "SELECT * FROM `$this->tablename` ORDER BY `id` DESC LIMIT 1";
        $query = $this->db->conn->prepare($sql);
        $query->execute();
        $data = $query->fetch();
        $l=($data['id'])-1;
        while ($num>0){
             $sql = "SELECT * FROM `$this->tablename` WHERE `id` = $l";
             $query = $this->db->conn->prepare($sql);
             $query->execute();
             $dataa= $query->fetch();
             $l--;
            $num--;
        }
        return $dataa;
        
    }

    function getRecordByID($id,$tablenam,$col,$foriegn) {
        $id = intval($id);
        $sql = "SELECT `$col` FROM `$tablenam` WHERE `$foriegn`= $id";
        $query = $this->db->conn->prepare($sql);
        $query->execute();
        $rc = $query->fetch();
        return $rc[0];
    }
     function getRecordByyID($id,$tablenam,$col,$foriegn) {
        $id = intval($id);
        if($col=="*"){
        $sql = "SELECT $col FROM `$tablenam` WHERE `$foriegn`= $id";
        }
        else {
            $sql = "SELECT `$col` FROM `$tablenam` WHERE `$foriegn`= $id";
        }
        $query = $this->db->conn->prepare($sql);
        $query->execute();
        $rc = $query->fetch();
        return $rc;
    }
     function getRecordByIdd($id,$tablenam,$foriegn) {
        $id = intval($id);
        $sql = "SELECT * FROM `$tablenam` WHERE `$foriegn`= $id";
        $query = $this->db->conn->prepare($sql);
        $query->execute();
        $rc = $query->fetch();
        return $rc[0];
    }
 function getRecordByusername($username,$tablenam,$col,$foriegn) {
        if($col=="*"){
            $sql = "SELECT $col FROM `$tablenam` WHERE `$foriegn`= '$username'";
        }
        else{
            $sql = "SELECT `$col` FROM `$tablenam` WHERE `$foriegn`= '$username'";
        }
        $query = $this->db->conn->prepare($sql);
        $query->execute();
        $rc = $query->fetch();
        return $rc;
    }    
    function getAllDataByID($id, $column = "id") {  // (5 , "sectionID")
        $id = intval($id);

        $sql = "SELECT * FROM `$this->tablename` WHERE `$column`= $id ORDER By `id` ASC";
        $query = $this->db->conn->prepare($sql);
        $query->execute();
        $data = $query->fetchAll();
       
        return $data;
    }

    function getAllDataByStatusType($type) {
        $sql = "SELECT * FROM `$this->tablename` WHERE `status`= 1 AND `type` = '$type' ORDER By `id` DESC";
        $query = $this->db->conn->prepare($sql);
        $query->execute();
        $data = $query->fetchAll();
       
        return $data;
    }

}

?>
