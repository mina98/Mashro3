<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../../models/list.php';
$tablename = "invoices";
$displaybannerd = new Display($tablename);
$datad=$displaybannerd->getLastRecordDESC();
$datanamed=$displaybannerd->getRecordByID($datad['itemId'],'items','name','id');
//$l=($data['id'])-1;
//print_r($datas);
$displaybannerd->close();
?>