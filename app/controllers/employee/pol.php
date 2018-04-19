<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../../models/list.php';
$tablename = "invoices";
$displaybanner = new Display($tablename);
$data=$displaybanner->getLastRecordDESC();
$dataname=$displaybanner->getRecordByID($data['itemId'],'items','name','id');
$l=($data['id'])-1;
//print_r($datas);
if($_SESSION['num']!=0)
{
//$datas=$displaybanner->getLastUNEEDDESC(7);
//printf(gettype($datas));
for($i=0;$i<$_SESSION['num'];$i++){
    $_SESSION['data'][$i]=$displaybanner->getRecordByyID($l, 'invoices',"*", 'id');
    $_SESSION['dataname'][$i]=$displaybanner->getRecordByID($_SESSION['data'][$i]['itemId'],'items','name','id');
    $l--;
}
//print_r($datas);
}
else{
$data=$displaybanner->getLastRecordDESC();
$dataname=$displaybanner->getRecordByID($data['itemId'],'items','name','id');
}
//$displaybanner->close();
?>