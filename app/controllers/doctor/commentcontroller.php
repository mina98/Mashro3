<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
@session_start();
  if ($_POST){
    include '../../models/Add.php';
     $data['name'] = $_SESSION['username'];
     $data['comment'] = $_POST['comment'];
    try {
        $tablename = "commentt";
        $Secadd = new Add($data, $tablename);
       // $addSec = $Secadd->AddData($data);
          if($Secadd)
            {
                echo '<script type="text/javascript"> alert("The Section was commented !"); history.back();</script>';
            }  
    } catch (Exception $exc) {
        echo $exc->getMessage();
    }
}

include '../../models/list.php';
$tablename= "commentt" ;
$addSecDis=   new Display($tablename);
$find_comment =$addSecDis->getAllData();

//include_once  '../../views/doctor/index.php';    