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

    function getRecordByID($id,$tablenam,$col,$foriegn) {
        $id = intval($id);
        $sql = "SELECT `$col` FROM `$tablenam` WHERE `$foriegn`= $id";
        $query = $this->db->conn->prepare($sql);
        $query->execute();
        $rc = $query->fetch();
        return $rc[0];
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
