<?php

/*
  add&deleteoffercontroler
 */
// id 	itemId 	unitPrice 	description 	vendorId 
//$check=0;
//$idcheck;
//$globalll;
//$_SESSION['CHECK'];

if ($_POST) {



    if (isset($_POST["SUBMIT"]) AND $_POST["SUBMIT"] == "add") {
        include "../../models/Add.php";

        try {

            @session_start();
            $_SESSION['username'] = 1;
            //  $dataa["vendorId"]= $_SESSION['username']; 
            $dataa["vendorId"] = $_SESSION['username'];
            $dataa["itemId"] = $_POST["itemId"];
            $dataa["unitPrice"] = $_POST["unitPrice"];
            $dataa["description"] = $_POST["description"];

            $kiro = new Add($dataa, "offers");
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }


        // header("location:../../views/employee/index.php?page=listInvoice");
        //die();
        if ($kiro)
            header("location:../../views/vendor/index.php?page=listOffer");

        else {
            echo 'bayza';
        }
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
        die();
    }

    if (isset($_POST["submit"]) AND $_POST["submit"] == "update") {
        // header("location:../../views/vendor/index.php?page=updateoffer");  
        //   $_SESSION['CHECK']=1;
        //     $globalll=$GLOBALS['CHECK'];
        // $idcheck = $_POST["rmid"];
        //@header("location:../../views/vendor/index.php?page=updateoffer");
        // echo 'iuuuuuuuuuuuuuu' ;

        include '../../models/list.php';
        try {
           


            $id = $_POST["rmid"];

            $updateobject = new Display("offers");
            $dataforup = $updateobject->getAllDataByID($id);
            // print_r($dataforup);
            //  array(4) { ["dataforup"]=> array(1) { [0]=> array(10) { ["id"]=> string(1) "0" [0]=> string(1) "0" ["itemId"]=> string(1) "1" [1]=> string(1) "1" ["unitPrice"]=> string(8) "10000000" [2]=> string(8) "10000000" ["description"]=> string(2) "hi" [3]=> string(2) "hi" ["vendorId"]=> string(1) "1" [4]=> string(1) "1" } } ["CHECK"]=> int(1) ["IDDD"]=> string(1) "3" ["ARRAY"]=> string(1) "1" } 
             @session_start();
            
            $_SESSION['ITEMID'] = $dataforup[0][1];

            $_SESSION['UNITPRICE'] = $dataforup[0][2];

            $_SESSION['DESCREPTION'] = $dataforup[0][3];
            
            $_SESSION['ROW']= $id;
            /*
              print_r( $_SESSION['ITEMID']);
              print_r( $_SESSION['UNITPRICE']);
              print_r( $_SESSION['DESCREPTION']);
             */
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
// print_r($_SESSION['dataforup']);
        //include '../../views/vendor/updateoffer.php';
        header("location:../../views/vendor/index.php?page=update");
    }
    if (isset($_POST["submit"]) AND $_POST["submit"] == "UPDATE") {
        echo "Helloworld";
        include '../../models/Update.php';
        try {
            @session_start();
          
            $data['itemId'] = $_POST["itemId"];
            $data['unitPrice'] = $_POST["unitPrice"];
            $data['description'] = $_POST["description"];
            $mupdateobject = new Update($data, "offers");
            $updtoffer = $mupdateobject->editData($_SESSION['ROW']);
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
        die();
    }
} else {




    include_once "../../models/list.php";
    $tablename = "offers";
    $listobject = new Display($tablename);
    $list = $listobject->getAllData();
}
?>