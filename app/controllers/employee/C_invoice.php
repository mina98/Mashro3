<?php
  //include "../../includes/init.php";
  //include "../../includes/autoloader.php";
  //include "../models/list.php";
 @session_start(); 
if ($_POST) {
     include "../../models/Addinvoice.php";
    if (isset($_POST["SUBMIT"]) AND $_POST["SUBMIT"] == "submit") {

        try {
               if($_SESSION['num']!=0){
                   $data["itemName"]=$_POST["itemNAME"];
                   $data["amount"]=$_POST["Amount"];
                    new addd($data);
               for($i=0;$i<$_SESSION['num'];$i++){
                   $dataa["itemName"]=$_POST["itemName"][$i];
                   $dataa["amount"]=$_POST["amount"][$i];
                  // printf($dataa["amount"]);
                  // printf($dataa["itemId"]);
                   new addd($dataa);
                }          
               }
               else{
           $data["itemName"]=$_POST["itemNAME"];
           $data["amount"]=$_POST["Amount"];
           new addd($data);
               }
        } catch (Exception $exc) {
          echo $exc->getMessage();
        }
    }
    if (isset($_POST["ADD"]) AND $_POST["ADD"] == "AddAnother") {
     $_SESSION['nameee'][0]=$_POST["itemNAME"];
     $_SESSION['amount'][0]=$_POST["Amount"];
      for($i=0;$i<$_SESSION['num'];$i++){
               $_SESSION['nameee'][$i+1]=$_POST["itemName"][$i];
               $_SESSION['amount'][$i+1]=$_POST["amount"][$i];
      }  
    $_SESSION['num']++;     
    header("Location:../../views/employee/index.php?page=addInvoice"); 
}
if (isset($_POST["DEL"]) AND $_POST["DEL"] == "Delete") {

    if($_SESSION['num']>0){  
    $_SESSION['num']--;}     

    header("Location:../../views/employee/index.php?page=addInvoice"); 
}
      include '../../views/employee/GeneretePdf.php';
      unset($_POST);
      //die();
}
else {
    // display exist invices  
    include '../../models/list.php';
    $tablename = "invoices";
    $displaybanner = new Display($tablename);
    $BannerDataDisplay = $displaybanner->getAllData();
    $tablenamee = "items";
    $displaybanneer = new Display($tablenamee);
    $BannerDataDisplaay = $displaybanneer->getAllData();
}
?>
