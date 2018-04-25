<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (@isset($_POST['SUBMIT']) && $_POST['SUBMIT']=="notify")

{
     include '../../models/Add.php';
    try{
    @session_start();
if($_POST['userType']=='Employee')
    {
        $data['usertype']=2;
    }
     if($_POST['userType']=='Doctor') 
     {
        $data['usertype']=3; 
     }
      if($_POST['userType']=='Vendor') 
     {
        $data['usertype']=4; 
     }
     $_SESSION['USERTYPE']=$data['usertype'];
     $data['message']=$_POST['message'];
    $data['see']='f';
    @new Add($data, "notificatin");
    header("location:../../views/admin/index.php");
    }
          catch (Exception $exc) {
            echo $exc->getMessage();
        }
     }




?>