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
                   $data["itemId"]=$_POST["itemID"];
                   $data["amount"]=$_POST["Amount"];
                    new addd($data);
               for($i=0;$i<$_SESSION['num'];$i++){
                   $dataa["itemId"]=$_POST["itemId"][$i];
                   $dataa["amount"]=$_POST["amount"][$i];
                  // printf($dataa["amount"]);
                  // printf($dataa["itemId"]);
                   new addd($dataa);
                }          
               }
               else{
           $data["itemId"]=$_POST["itemID"];
           $data["amount"]=$_POST["Amount"];
           new addd($data);
               }
        } catch (Exception $exc) {
          echo $exc->getMessage();
        }
    }
    if (isset($_POST["ADD"]) AND $_POST["ADD"] == "AddAnother") {
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
}
?>
