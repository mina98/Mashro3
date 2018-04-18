<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(@$_POST){
    if(@isset($_POST['pay']) && $_POST['pay']=="pay"){
        include_once '../../models/abastractConnect.php';
        include_once '../../models/Add.php';
        include_once '../../models/list.php';
        include_once '../../models/Addinvoice.php';
        
        
        @$data['itemId']=$_POST['id'];
        @$data['amount']=$_POST['amount'];
        $inv = new addd($data);
        $inv->close();
        $liInvoiced = new Display('invoices');
        $lastinvoice = $liInvoiced->getLastRecordDESC();
        $orderData['invoiceId'] =$lastinvoice['id'];
        $liInvoiced->close();
        
        $getid = new Display('users');
        
        $arr = $getid->getIDByUsername($_SESSION['username']);
        $orderData['patientId'] = $arr[0]['id'];
        
        $addIntoOrder = new Add($orderData, 'order_patient');
        include_once '../../views/patient/addOrder.php';
    }
}
 else {
    include_once '../../views/patient/addOrder.php';
}