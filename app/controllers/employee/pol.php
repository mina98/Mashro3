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
$displaybanner->close();
?>