<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */ 

$tablename="notification";
include_once  '../../models/list.php';
if( $_SESSION['type'] == "vendor")
{
    $usertype=4;
}
elseif( $_SESSION['type'] == "doctor")
{
    $usertype=3;
}
else
{
    $usertype=2;
}
$obj=new Display($tablename);
$len=0;
$datanot=$obj->getAllDataByusertype($usertype, $tablename);
 for ($i = 0; $i < count($datanot); $i++) {
     if($datanot[$i]['see']=='f' ){
     $len++;}
 }
$obj->close();
?>