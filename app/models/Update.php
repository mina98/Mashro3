<?php


class Update extends abastractConnect {

    private $tablename;
    private $data;

    public function __construct($data, $tablename) {
        if (is_array($data)) {
            $this->data = $data;
        }
        $this->tablename = $tablename;
        $this->connectToDb();
    }

    function editData($id) {
        $id = intval($id);
        
        $sql = "UPDATE $this->tablename SET ";
        foreach ($this->data as $key => $value) {
            $sql .= "`" . $key . "` = :" . $key . ", ";
        }
        $pat = "+-0*/";
        $sql .= $pat;
        $sql = str_replace(", " . $pat, " ", $sql);
        $sql .= " WHERE `id` = $id";
        
        $query = $this->db->conn->prepare($sql);

        foreach ($this->data as $key => $value) {
            $query->bindParam(":$key", $this->data[$key]);            
        }

        if ($query->execute()) {
            return TRUE;
        } else {
            throw new Exception("Error: Can not excute the query.");
            return FALSE;
        }
    }

}

?>
