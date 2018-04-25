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
//<<<<<<< HEAD
//        include_once  "../../models/Add.php";
//
//        try {
//            include_once  '../../models/list.php';
//=======
        include_once "../../models/Add.php";
        
       // $valid = new validator();

        try {
            include_once '../../models/validator.php';
            $valid = new validator();
            include '../../models/list.php';
//>>>>>>> e9da5c425eecccb83ce02ab223e3ae93a9dd125b
            @session_start();
            $_SESSION['username'] = 1;
            //  $dataa["vendorId"]= $_SESSION['username']; 
            $dataa["vendorId"] = $_SESSION['username'];
            $data["itemName"] = $_POST["itemNAME"];
            $listobjectee = new Display('items');
            $l=$listobjectee->getRecordByusername($data['itemName'], 'items', 'id', 'name');
            $dataa["itemId"]=$l[0];
            $listobjecteee = new Display('offers');
            $dataa["id"]=$listobjecteee->getbigestID()+1;
            $dataa["unitPrice"] = $_POST["unitPrice"];
            
             if ($valid->checkStings($_POST["description"],'description') == TRUE)
            {
                  $dataa["description"] = $_POST["description"];
            }else{
                echo '<script type="text/javascript"> alert("must be string !"); history.back();</script>';
            }
           
           
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
        include_once  '../../models/Delete.php';
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

        include_once  '../../models/list.php';
        try {
           


            $id = $_POST["rmid"];

            $updateobject = new Display("offers");
            $dataforup = $updateobject->getAllDataByID($id);
            $updateobjecct = new Display("items");
            $dataforupp = $updateobjecct->getAllDataByID($dataforup[0][1]);
            // print_r($dataforup);
            //  array(4) { ["dataforup"]=> array(1) { [0]=> array(10) { ["id"]=> string(1) "0" [0]=> string(1) "0" ["itemId"]=> string(1) "1" [1]=> string(1) "1" ["unitPrice"]=> string(8) "10000000" [2]=> string(8) "10000000" ["description"]=> string(2) "hi" [3]=> string(2) "hi" ["vendorId"]=> string(1) "1" [4]=> string(1) "1" } } ["CHECK"]=> int(1) ["IDDD"]=> string(1) "3" ["ARRAY"]=> string(1) "1" } 
             @session_start();
            $_SESSION['ITEMID'] =$dataforup[0][1];
            
            $_SESSION['ITEMNAME'] = $dataforupp[0][1];

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
          
            $data['itemId'] =$_SESSION['ITEMID'];
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
        include_once  "../../models/Delete.php";
        $updatess = new Delete('order_supply');
        $updates = $updatess->updateRecordByID($_POST['Andrew'], 'vendorConfirm', 'T', 'id');
        header("location:../../views/vendor/index.php?page=requested");
        die();
    }
     if (isset($_POST['submit']) AND $_POST['submit'] == "unconfirm")
              {         include '../../models/Supply_Models.php';
                    $delete=new Supply_Models('order_supply');
                    $delete->deletRecordByID($_POST['Andrew']);
                    @header("location:../../views/vendor/index.php?page=requested");}
} else {
    include_once "../../models/list.php";
    $tablename = "offers";
    $listobject = new Display($tablename);
    $list = $listobject->getAllData();
    $tablenamee = "items";
    $listobjecte = new Display($tablenamee);
    $liste = $listobjecte->getAllData();
}
?>
