<?php

/* 
 add&deleteoffercontroler
 */

	// id 	itemId 	unitPrice 	description 	vendorId 
if ($_POST) {
    
     echo 'post';
        
    if (isset($_POST["SUBMIT"]) AND $_POST["SUBMIT"] == "ADD") {
        include "../../models/Addinvoice.php";
        try {      
           $data["itemId"]=$_POST["itemId"]; 
           $data["unitprice"]=$_POST["unitprice"];
           $data["decription"]=$_POST["description"];
           @new addoffer($data); 
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
        echo 'arrived' ;
    
   // header("location:../../views/employee/index.php?page=listInvoice");
    //die();
         header("location:../../views/vendor/index.php?page=listOffer");
    }
    
    
        if (isset($_POST["submit"]) AND $_POST["submit"] == "delete") {
         include '../../models/Delete.php';
        try {
            $tablename = "offers";
            $id = $_POST['rmid'];

            $deoffer = new Delete($tablename);
            $deoffer->deletRecordByID($id);
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
         header("location:../../views/vendor/index.php?page=listOffer");
    }
    
 if (isset($_POST["submit"]) AND $_POST["submit"] == "confirm") {
     include "../../models/Delete.php";
     $updatess = new Delete('order_supply');
     $updates = $updatess->updateRecordByID($_POST['id'], 'vendorConfirm', 'T', 'id');
     header("location:../../views/vendor/index.php?page=requested");
    }
}
 else {
 echo "no post"   ;
 }
/*else{
    include "../../models/list.php";
$tablename = "offers";

    $listoffer = new Display($tablename);
    $listoffers = $listoffer->getAllData();
}*/
?>
