<?php
  //include "../../includes/init.php";
  //include "../../includes/autoloader.php";
  //include "../models/list.php";
 
if ($_POST) {
     include "../../models/Addinvoice.php";
    if (isset($_POST["SUBMIT"]) AND $_POST["SUBMIT"] == "submit") {

        try {            
           $data["itemId"]=$_POST["itemID"];
           $data["amount"]=$_POST["Amount"];
           @new addd($data); 
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }
    if (isset($_POST["ADD"]) AND $_POST["ADD"] == "add") {

        try {            
           $data["itemId"]=$_POST["itemID"];
           $data["amount"]=$_POST["Amount"];
           @new addd($data);
            
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }
    header("location:../../views/employee/index.php?page=listInvoice");
    die();
    
} 
else {
    // display exist invices  
    include '../../models/list.php';
    $tablename = "invoices";
    $displaybanner = new Display($tablename);
    $BannerDataDisplay = $displaybanner->getAllData();
}
?>
